(() => {
  'use strict';

  const WHATSAPP_NUMBER = '6281234567890';
  const imageRoot = 'assets/images/';
  const listings = [
    {
      id: '1',
      name: 'Kost Arunika Residence',
      type: 'Putri',
      location: 'Seturan, dekat Universitas Atma Jaya',
      city: 'Yogyakarta',
      price: 1250000,
      images: ['kos-1.jpg', 'kos-2.jpg', 'kos-3.jpg'],
      facilities: ['AC', 'Wi-Fi cepat', 'Kamar mandi dalam', 'Kasur springbed', 'Lemari pakaian', 'Parkir luas', 'CCTV 24 jam'],
      description: 'Kost putri yang tenang, bersih, dan nyaman untuk mahasiswa maupun pekerja. Setiap kamar dilengkapi kamar mandi dalam dan furnitur utama. Lingkungan kost aman dengan akses CCTV dan area bersama yang terawat. Berjarak sekitar tujuh menit ke Universitas Atma Jaya, dekat minimarket, tempat makan, dan transportasi umum. Penghuni diharapkan menjaga ketenangan dan kebersihan area bersama.'
    },
    {
      id: '2',
      name: 'Kost Nawasena Living',
      type: 'Eksklusif',
      location: 'Gejayan, dekat pusat kuliner',
      city: 'Yogyakarta',
      price: 2100000,
      images: ['kos-2.jpg', 'kos-3.jpg', 'kos-1.jpg'],
      facilities: ['AC', 'Wi-Fi cepat', 'Kamar mandi dalam', 'Lemari pakaian', 'Dapur bersama', 'Parkir luas', 'CCTV 24 jam'],
      description: 'Hunian eksklusif dengan interior modern dan fasilitas yang dirancang untuk mendukung produktivitas. Area bersama yang nyaman, dapur komunal, serta akses keamanan membuat aktivitas harian terasa praktis. Lokasi strategis di Gejayan, dekat kampus, pusat kuliner, dan pusat kota. Pengunjung mengikuti aturan bertamu dan area bersama dijaga tetap bersih.'
    },
    {
      id: '3',
      name: 'Kost Griya Mahasiswa',
      type: 'Putra',
      location: 'Babarsari, dekat kampus UPN',
      city: 'Yogyakarta',
      price: 950000,
      images: ['kos-3.jpg', 'kos-1.jpg', 'kos-2.jpg'],
      facilities: ['Wi-Fi cepat', 'Kasur', 'Lemari pakaian', 'Parkir luas', 'Dapur bersama', 'Akses 24 jam'],
      description: 'Pilihan kost putra dengan harga bersahabat di area Babarsari. Kamar dilengkapi kasur, lemari, dan area belajar. Lokasinya dekat dengan kampus UPN, pilihan tempat makan, serta akses transportasi. Area kost memiliki dapur bersama dan parkir untuk penghuni. Penghuni diminta menjaga ketertiban dan kebersihan fasilitas bersama.'
    },
    {
      id: '4',
      name: 'Kost Taman Sari',
      type: 'Putri',
      location: 'Condongcatur, dekat Hartono Mall',
      city: 'Yogyakarta',
      price: 1450000,
      images: ['kos-1.jpg', 'kos-3.jpg', 'kos-2.jpg'],
      facilities: ['AC', 'Wi-Fi cepat', 'Kamar mandi dalam', 'Area jemur', 'Parkir luas', 'CCTV 24 jam'],
      description: 'Kost putri dengan suasana asri dan fasilitas lengkap untuk tinggal jangka panjang. Area jemur dan parkir tersedia bagi penghuni. Berlokasi di Condongcatur, dekat pusat belanja, kampus, dan pilihan transportasi. Pengelola menerapkan jam berkunjung yang tertib dan memastikan lingkungan bersama tetap nyaman.'
    },
    {
      id: '5',
      name: 'Kost Urban Nest',
      type: 'Campur',
      location: 'Kaliurang, dekat UGM',
      city: 'Yogyakarta',
      price: 1750000,
      images: ['kos-2.jpg', 'kos-1.jpg', 'kos-3.jpg'],
      facilities: ['AC', 'Wi-Fi cepat', 'Kamar mandi dalam', 'Ruang komunal', 'Parkir luas', 'CCTV 24 jam'],
      description: 'Hunian campur yang nyaman dengan area komunal untuk bekerja atau bersantai. Kamar dilengkapi fasilitas dasar dan akses internet cepat. Dari sini, UGM dapat dijangkau dalam beberapa menit, sementara kafe dan kebutuhan harian berada di sekitar kost. Penghuni mengikuti aturan kebersihan dan ketenangan di area bersama.'
    },
    {
      id: '6',
      name: 'Kost Omah Senja',
      type: 'Eksklusif',
      location: 'Timoho, dekat pusat kota',
      city: 'Yogyakarta',
      price: 2350000,
      images: ['kos-3.jpg', 'kos-2.jpg', 'kos-1.jpg'],
      facilities: ['AC', 'Wi-Fi cepat', 'Kamar mandi dalam', 'Kasur springbed', 'Dapur bersama', 'CCTV 24 jam'],
      description: 'Kost eksklusif bernuansa hangat di kawasan Timoho yang strategis. Kamar berperabot dengan kamar mandi dalam, sementara pantry bersama tersedia untuk kebutuhan harian. Akses menuju kampus dan pusat kota mudah, dengan minimarket dan tempat makan di dekat properti. Penghuni mengikuti ketentuan pengelola mengenai tamu dan penggunaan area bersama.'
    }
  ];

  const facilityIcons = {
    'AC': '❄',
    'Wi-Fi cepat': '⌁',
    'Kamar mandi dalam': '♨',
    'Kasur springbed': '▤',
    'Kasur': '▤',
    'Lemari pakaian': '▥',
    'Parkir luas': '▱',
    'CCTV 24 jam': '◉',
    'Dapur bersama': '⌂',
    'Akses 24 jam': '◷',
    'Area jemur': '☼',
    'Ruang komunal': '▦'
  };

  const escapeHtml = (value) => String(value).replace(/[&<>"']/g, (character) => ({
    '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
  })[character]);

  const formatPrice = (price) => new Intl.NumberFormat('id-ID', {
    style: 'currency', currency: 'IDR', maximumFractionDigits: 0
  }).format(price);

  function setupMenu() {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.site-nav');
    if (!toggle || !nav) return;
    toggle.addEventListener('click', () => {
      const open = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!open));
      nav.classList.toggle('is-open', !open);
    });
    nav.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => {
      toggle.setAttribute('aria-expanded', 'false');
      nav.classList.remove('is-open');
    }));
  }

  function setupCatalog() {
    const grid = document.getElementById('kost-grid');
    if (!grid) return;
    const searchForm = document.getElementById('search-form');
    const locationInput = document.getElementById('location-search');
    const typeInput = document.getElementById('type-search');
    const count = document.getElementById('result-count');
    const emptyState = document.getElementById('empty-state');
    let selectedCategory = 'Semua';

    function render() {
      const location = locationInput.value.trim().toLocaleLowerCase('id-ID');
      const type = typeInput.value;
      const results = listings.filter((item) => {
        const matchesLocation = !location || `${item.name} ${item.location} ${item.city}`.toLocaleLowerCase('id-ID').includes(location);
        return matchesLocation && (!type || item.type === type) && (selectedCategory === 'Semua' || item.type === selectedCategory);
      });
      grid.innerHTML = results.map((item) => `
        <article class="kost-card">
          <a class="kost-card-image" href="detail-kos.html?id=${encodeURIComponent(item.id)}" aria-label="Lihat detail ${escapeHtml(item.name)}">
            <img src="${imageRoot}${escapeHtml(item.images[0])}" alt="Foto ${escapeHtml(item.name)}" loading="lazy">
            <span class="kost-tag">Kost ${escapeHtml(item.type)}</span>
          </a>
          <div class="kost-card-content">
            <h3>${escapeHtml(item.name)}</h3>
            <p class="kost-location"><span aria-hidden="true">⌖</span>${escapeHtml(item.location)}</p>
            <div class="facility-preview">${item.facilities.slice(0, 3).map((facility) => `<span>${escapeHtml(facility)}</span>`).join('')}</div>
            <div class="kost-card-footer">
              <span class="kost-price">${formatPrice(item.price)} <small>/ bulan</small></span>
              <a class="detail-link" href="detail-kos.html?id=${encodeURIComponent(item.id)}">Lihat Detail</a>
            </div>
          </div>
        </article>`).join('');
      count.textContent = `Menampilkan ${results.length} dari ${listings.length} kost`;
      emptyState.hidden = results.length > 0;
      grid.hidden = results.length === 0;
    }

    searchForm.addEventListener('submit', (event) => {
      event.preventDefault();
      selectedCategory = 'Semua';
      document.querySelectorAll('.category-chip').forEach((chip) => chip.classList.toggle('is-active', chip.dataset.category === 'Semua'));
      render();
      document.getElementById('katalog').scrollIntoView({ behavior: 'smooth' });
    });
    document.querySelectorAll('.category-chip').forEach((chip) => chip.addEventListener('click', () => {
      selectedCategory = chip.dataset.category;
      document.querySelectorAll('.category-chip').forEach((button) => button.classList.toggle('is-active', button === chip));
      render();
    }));
    const clearSearch = () => {
      locationInput.value = '';
      typeInput.value = '';
      selectedCategory = 'Semua';
      document.querySelectorAll('.category-chip').forEach((chip) => chip.classList.toggle('is-active', chip.dataset.category === 'Semua'));
      render();
    };
    document.getElementById('reset-search').addEventListener('click', clearSearch);
    document.getElementById('clear-search').addEventListener('click', clearSearch);
    render();
  }

  function setupDetail() {
    const detail = document.getElementById('kost-detail');
    if (!detail) return;
    const id = new URLSearchParams(window.location.search).get('id') || '1';
    const item = listings.find((listing) => listing.id === id);
    const notFound = document.getElementById('detail-not-found');
    if (!item) {
      notFound.hidden = false;
      return;
    }

    detail.hidden = false;
    document.title = `${item.name} — CekKos.`;
    document.getElementById('breadcrumb-name').textContent = item.name;
    document.getElementById('detail-type').textContent = `Kost ${item.type}`;
    document.getElementById('detail-title').textContent = item.name;
    document.getElementById('detail-location').innerHTML = `<span aria-hidden="true">⌖</span>${escapeHtml(item.location)}, ${escapeHtml(item.city)}`;
    document.getElementById('detail-price').textContent = formatPrice(item.price);
    document.getElementById('detail-description').textContent = item.description;

    const mainImage = document.getElementById('gallery-main');
    const thumbnails = document.getElementById('gallery-thumbnails');
    const setImage = (filename, activeButton) => {
      mainImage.src = `${imageRoot}${filename}`;
      mainImage.alt = `Foto ${item.name}`;
      thumbnails.querySelectorAll('.gallery-thumb').forEach((button) => button.classList.toggle('is-active', button === activeButton));
    };
    mainImage.src = `${imageRoot}${item.images[0]}`;
    mainImage.alt = `Foto ${item.name}`;
    thumbnails.innerHTML = item.images.slice(1).map((filename, index) => `
      <button class="gallery-thumb" type="button" aria-label="Lihat foto ${index + 2} ${escapeHtml(item.name)}">
        <img src="${imageRoot}${escapeHtml(filename)}" alt="" loading="lazy">
      </button>`).join('');
    thumbnails.querySelectorAll('.gallery-thumb').forEach((button, index) => {
      button.addEventListener('click', () => setImage(item.images[index + 1], button));
    });

    document.getElementById('facility-list').innerHTML = item.facilities.map((facility) => `
      <div class="facility-item"><span class="facility-item-icon" aria-hidden="true">${facilityIcons[facility] || '✓'}</span><span>${escapeHtml(facility)}</span></div>`).join('');

    const address = `${item.name}, ${item.location}, ${item.city}`;
    document.getElementById('maps-button').href = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(address)}`;
    const message = `Halo CekKos, saya tertarik ingin menggunakan jasa survey untuk kost ini: ${item.name}`;
    document.getElementById('survey-button').href = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
  }

  document.addEventListener('DOMContentLoaded', () => {
    setupMenu();
    setupCatalog();
    setupDetail();
    document.querySelectorAll('#current-year').forEach((element) => { element.textContent = new Date().getFullYear(); });
  });
})();
