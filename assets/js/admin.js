(() => {
  'use strict';

  const ADMIN_USERNAME = 'admin';
  const ADMIN_PASSWORD = 'admin123';
  const SESSION_KEY = 'cekkos_admin_session_v1';
  const STORAGE_KEY = 'cekkos_kos_data_v1';
  const DATA_URL = 'data/kos.json';
  const DEFAULT_IMAGE = 'assets/images/kos-1.jpg';
  const escapeHtml = (value) => String(value ?? '').replace(/[&<>"']/g, (character) => ({
    '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
  })[character]);

  const formatPrice = (price) => new Intl.NumberFormat('id-ID', {
    style: 'currency', currency: 'IDR', maximumFractionDigits: 0
  }).format(Number(price) || 0);

  function normalizeListing(item) {
    const mainImage = String(item.gambar_utama || DEFAULT_IMAGE);
    return {
      id: String(item.id ?? ''),
      nama_kos: String(item.nama_kos || ''),
      tipe: String(item.tipe || 'Campur'),
      harga: Number(item.harga) || 0,
      lokasi_singkat: String(item.lokasi_singkat || ''),
      gambar_utama: mainImage,
      galeri_foto: Array.isArray(item.galeri_foto) && item.galeri_foto.length
        ? item.galeri_foto.map(String)
        : [mainImage],
      fasilitas: Array.isArray(item.fasilitas) ? item.fasilitas.map(String) : [],
      deskripsi: String(item.deskripsi || ''),
      gmaps_url: String(item.gmaps_url || ''),
      wa_number: String(item.wa_number || '')
    };
  }

  function showNotice(message, kind) {
    const notice = document.getElementById('admin-notice');
    if (!notice) return;
    notice.textContent = message;
    notice.className = `admin-notice is-${kind || 'info'}`;
    notice.hidden = false;
    notice.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  async function readInitialData() {
    const savedData = localStorage.getItem(STORAGE_KEY);
    if (savedData !== null) {
      const parsed = JSON.parse(savedData);
      if (!Array.isArray(parsed)) throw new Error('Data kost di localStorage bukan array JSON.');
      return { listings: parsed.map(normalizeListing), source: 'Perubahan browser (localStorage)' };
    }

    const response = await fetch(DATA_URL, { cache: 'no-store' });
    if (!response.ok) throw new Error(`Tidak dapat membaca ${DATA_URL} (HTTP ${response.status}).`);
    const parsed = await response.json();
    if (!Array.isArray(parsed)) throw new Error('Format data/kos.json harus berupa array JSON.');
    return { listings: parsed.map(normalizeListing), source: 'Database awal (data/kos.json)' };
  }

  function setupLogin() {
    const form = document.getElementById('admin-login-form');
    if (!form) return;

    try {
      if (localStorage.getItem(SESSION_KEY)) {
        window.location.replace('admin-dashboard.html');
        return;
      }
    } catch (error) {
      console.error('Tidak dapat memeriksa sesi admin:', error);
    }

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      const formData = new FormData(form);
      const username = String(formData.get('username') || '').trim();
      const password = String(formData.get('password') || '');
      const message = document.getElementById('login-message');

      if (username !== ADMIN_USERNAME || password !== ADMIN_PASSWORD) {
        message.textContent = 'Username atau password salah. Silakan coba lagi.';
        message.className = 'form-message is-error';
        window.alert('Login gagal. Username atau password salah.');
        return;
      }

      try {
        const token = window.crypto && window.crypto.randomUUID
          ? window.crypto.randomUUID()
          : `${Date.now()}-${Math.random().toString(36).slice(2)}`;
        localStorage.setItem(SESSION_KEY, JSON.stringify({ token, createdAt: Date.now() }));
        window.location.assign('admin-dashboard.html');
      } catch (error) {
        console.error('Gagal menyimpan sesi admin:', error);
        message.textContent = 'Sesi tidak dapat disimpan. Pastikan penyimpanan browser diaktifkan.';
        message.className = 'form-message is-error';
      }
    });
  }

  function setupDashboard() {
    const dashboard = document.querySelector('[data-admin-dashboard]');
    if (!dashboard) return;

    let hasSession = false;
    try {
      hasSession = Boolean(localStorage.getItem(SESSION_KEY));
    } catch (error) {
      console.error('Tidak dapat memeriksa sesi admin:', error);
    }
    if (!hasSession) {
      window.location.replace('admin-login.html');
      return;
    }

    const form = document.getElementById('kost-form');
    const list = document.getElementById('admin-kost-list');
    const editor = document.getElementById('kost-editor');
    const editorTitle = document.getElementById('editor-title');
    const sourceLabel = document.getElementById('admin-data-source');
    const emptyState = document.getElementById('admin-empty');
    const cancelEdit = document.getElementById('cancel-edit');
    const cancelForm = document.getElementById('cancel-form');
    let listings = [];
    let currentSource = '';

    function renderListings() {
      list.innerHTML = listings.map((item) => `
        <tr>
          <td><div class="admin-kost-name"><img src="${escapeHtml(item.gambar_utama)}" alt="" loading="lazy"><span><strong>${escapeHtml(item.nama_kos)}</strong><small>${escapeHtml(item.lokasi_singkat)}</small></span></div></td>
          <td>${formatPrice(item.harga)}</td>
          <td><span class="kost-tag">${escapeHtml(item.tipe)}</span></td>
          <td><div class="row-actions"><button class="row-action" type="button" data-action="edit" data-id="${escapeHtml(item.id)}">Edit</button><button class="row-action is-delete" type="button" data-action="delete" data-id="${escapeHtml(item.id)}">Hapus</button></div></td>
        </tr>`).join('');
      document.getElementById('total-listings').textContent = String(listings.length);
      emptyState.hidden = listings.length > 0;
      list.closest('table').hidden = listings.length === 0;
    }

    function clearForm() {
      form.reset();
      form.elements.id.value = '';
      editorTitle.textContent = 'Tambah kost baru';
      document.getElementById('save-kost').textContent = 'Simpan kost';
    }

    function beginEdit(id) {
      const item = listings.find((listing) => listing.id === id);
      if (!item) {
        showNotice('Data kost yang akan diedit tidak ditemukan.', 'error');
        return;
      }
      clearForm();
      form.elements.id.value = item.id;
      form.elements.nama_kos.value = item.nama_kos;
      form.elements.tipe.value = item.tipe;
      form.elements.harga.value = item.harga;
      form.elements.lokasi_singkat.value = item.lokasi_singkat;
      form.elements.gambar_utama.value = item.gambar_utama;
      form.elements.galeri_foto.value = item.galeri_foto.join(', ');
      form.elements.deskripsi.value = item.deskripsi;
      form.elements.gmaps_url.value = item.gmaps_url;
      form.elements.wa_number.value = item.wa_number;

      const known = [];
      form.querySelectorAll('input[name="fasilitas"]').forEach((checkbox) => {
        checkbox.checked = item.fasilitas.includes(checkbox.value);
        if (checkbox.checked) known.push(checkbox.value);
      });
      form.elements.fasilitas_tambahan.value = item.fasilitas.filter((facility) => !known.includes(facility)).join(', ');
      editorTitle.textContent = 'Edit data kost';
      document.getElementById('save-kost').textContent = 'Simpan perubahan';
      editor.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function saveToBrowser() {
      try {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(listings));
        currentSource = 'Perubahan browser (localStorage)';
        sourceLabel.textContent = `Sumber aktif: ${currentSource}. Ekspor JSON untuk mengunduh perubahan.`;
        renderListings();
        return true;
      } catch (error) {
        console.error('Gagal menyimpan data kost ke localStorage:', error);
        showNotice('Data tidak tersimpan. Penyimpanan browser mungkin penuh; coba gunakan gambar berukuran lebih kecil.', 'error');
        return false;
      }
    }

    document.getElementById('admin-logout').addEventListener('click', () => {
      try {
        localStorage.removeItem(SESSION_KEY);
      } catch (error) {
        console.error('Gagal menghapus sesi admin:', error);
      }
      window.location.assign('admin-login.html');
    });

    document.getElementById('new-kost').addEventListener('click', () => {
      clearForm();
      editor.scrollIntoView({ behavior: 'smooth', block: 'start' });
      form.elements.nama_kos.focus();
    });
    cancelEdit.addEventListener('click', clearForm);
    cancelForm.addEventListener('click', clearForm);

    list.addEventListener('click', (event) => {
      const button = event.target.closest('button[data-action]');
      if (!button) return;
      if (button.dataset.action === 'edit') {
        beginEdit(button.dataset.id);
        return;
      }
      const item = listings.find((listing) => listing.id === button.dataset.id);
      if (!item) {
        showNotice('Data kost yang akan dihapus tidak ditemukan.', 'error');
        return;
      }
      if (!window.confirm(`Hapus "${item.nama_kos}" dari katalog?`)) return;
      const previousListings = listings;
      listings = listings.filter((listing) => listing.id !== item.id);
      if (!saveToBrowser()) listings = previousListings;
      else showNotice(`${item.nama_kos} berhasil dihapus dari data browser.`, 'success');
    });

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      if (!form.reportValidity()) return;
      const formData = new FormData(form);
      const existingId = String(formData.get('id') || '');
      const name = String(formData.get('nama_kos') || '').trim();
      const image = String(formData.get('gambar_utama') || '').trim();
      const galleryText = String(formData.get('galeri_foto') || '').trim();
      const description = String(formData.get('deskripsi') || '').trim();
      const mapUrl = String(formData.get('gmaps_url') || '').trim();
      const phone = String(formData.get('wa_number') || '').replace(/\D/g, '');
      const imageAllowed = /^(?:https?:\/\/|\/|\.\/|assets\/images\/|data:image\/(?:png|jpe?g|gif|webp);base64,)[^\s"'<>]*$/i.test(image);

      if (!imageAllowed) {
        showNotice('Path gambar utama harus berupa path lokal, URL http(s), atau data URL gambar.', 'error');
        form.elements.gambar_utama.focus();
        return;
      }
      let parsedMap;
      try {
        parsedMap = new URL(mapUrl);
      } catch {
        showNotice('Link Google Maps harus berupa URL yang valid.', 'error');
        form.elements.gmaps_url.focus();
        return;
      }
      if (!['http:', 'https:'].includes(parsedMap.protocol)) {
        showNotice('Link Google Maps harus menggunakan HTTP atau HTTPS.', 'error');
        form.elements.gmaps_url.focus();
        return;
      }

      const facilities = [
        ...formData.getAll('fasilitas').map(String),
        ...String(formData.get('fasilitas_tambahan') || '').split(',')
          .map((facility) => facility.trim()).filter(Boolean)
      ].filter((facility, index, items) => items.indexOf(facility) === index);
      const gallery = galleryText
        ? galleryText.split(',').map((path) => path.trim()).filter(Boolean)
        : [image];
      if (!gallery.includes(image)) gallery.unshift(image);

      const listing = {
        id: existingId || createId(),
        nama_kos: name,
        tipe: String(formData.get('tipe') || 'Campur'),
        harga: Number(formData.get('harga')),
        lokasi_singkat: String(formData.get('lokasi_singkat') || '').trim(),
        gambar_utama: image,
        galeri_foto: gallery,
        fasilitas: facilities,
        deskripsi: description,
        gmaps_url: parsedMap.href,
        wa_number: phone
      };
      const duplicateName = listings.some((item) => item.id !== existingId && item.nama_kos.toLocaleLowerCase('id-ID') === name.toLocaleLowerCase('id-ID'));
      if (duplicateName) {
        showNotice('Nama kost tersebut sudah terdaftar. Gunakan nama yang berbeda.', 'error');
        form.elements.nama_kos.focus();
        return;
      }
      const previousListings = listings;
      if (existingId) {
        listings = listings.map((item) => item.id === existingId ? listing : item);
      } else {
        listings = [listing, ...listings];
      }

      if (!saveToBrowser()) {
        listings = previousListings;
        return;
      }
      clearForm();
      showNotice(existingId ? 'Perubahan data kost berhasil disimpan di browser.' : 'Kost baru berhasil ditambahkan ke browser.', 'success');
    });

    document.getElementById('export-json').addEventListener('click', () => {
      try {
        const json = `${JSON.stringify(listings, null, 2)}\n`;
        const blob = new Blob([json], { type: 'application/json;charset=utf-8' });
        const url = URL.createObjectURL(blob);
        const download = document.createElement('a');
        download.href = url;
        download.download = 'kos.json';
        document.body.appendChild(download);
        download.click();
        download.remove();
        window.setTimeout(() => URL.revokeObjectURL(url), 1000);
        showNotice('File kos.json berhasil diekspor. Ganti data/kos.json dengan file unduhan untuk memperbarui database awal.', 'success');
      } catch (error) {
        console.error('Gagal mengekspor data kost:', error);
        showNotice('Ekspor JSON gagal. Silakan coba kembali.', 'error');
      }
    });

    function createId() {
      const numericIds = listings.map((item) => Number(item.id)).filter(Number.isFinite);
      return String(Math.max(0, ...numericIds) + 1);
    }

    readInitialData().then((data) => {
      listings = data.listings;
      currentSource = data.source;
      sourceLabel.textContent = `Sumber aktif: ${currentSource}.`;
      renderListings();
    }).catch((error) => {
      console.error('Gagal memuat data kost admin:', error);
      sourceLabel.textContent = 'Data gagal dimuat.';
      emptyState.hidden = false;
      list.closest('table').hidden = true;
      showNotice('Data awal gagal dibaca. Jalankan situs melalui server lokal (contoh: Laragon) dan pastikan data/kos.json tersedia. Detail: ' + error.message, 'error');
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    setupLogin();
    setupDashboard();
  });
})();
