<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#1e2b78">
  <meta name="description" content="Temukan kost yang nyaman dan terpercaya bersama CekKos. Cari, bandingkan, lalu jadwalkan survey dengan mudah.">
  <title>CekKos. — Temukan Kost Nyaman Tanpa Ribet</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            navy: '#1e2b78',
            'navy-dark': '#17215f',
            mist: '#f8fafc'
          },
          fontFamily: {
            sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
          }
        }
      }
    };
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root { --navy: #1e2b78; --ink: #172033; --muted: #687386; }
    html { scroll-behavior: smooth; scroll-padding-top: 90px; }
    body { font-family: 'DM Sans', sans-serif; color: var(--ink); }
    h1, h2, h3, .font-display { font-family: 'Manrope', sans-serif; }
    .hero-cover {
      background-image: linear-gradient(90deg, rgba(12, 22, 59, .76) 0%, rgba(18, 34, 83, .42) 48%, rgba(17, 28, 66, .12) 100%), url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=2200&q=90');
      background-position: center 52%;
      background-size: cover;
    }
    .soft-shadow { box-shadow: 0 18px 55px rgba(25, 39, 94, .09); }
    .card-shadow { box-shadow: 0 8px 28px rgba(22, 34, 75, .07); }
    .modal-scroll::-webkit-scrollbar { width: 7px; }
    .modal-scroll::-webkit-scrollbar-thumb { background: #cbd2e2; border-radius: 20px; }
    .filter-chip.active { color: white; border-color: var(--navy); background: var(--navy); }
    .gallery-thumb.active { outline: 3px solid var(--navy); outline-offset: 2px; }
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; transition-duration: .01ms !important; }
    }
  </style>
</head>
<body class="bg-white antialiased">
  <header class="sticky top-0 z-40 border-b border-slate-100 bg-white/95 backdrop-blur-md">
    <div class="mx-auto flex h-[76px] max-w-7xl items-center justify-between px-5 sm:px-8 lg:px-10">
      <a href="#beranda" class="flex shrink-0 items-center gap-2.5" aria-label="CekKos, kembali ke beranda">
        <img src="LOGO.png" alt="CekKos." class="h-11 w-auto object-contain" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden')">
        <span class="hidden items-center gap-2 text-xl font-extrabold tracking-tight text-navy">
          <svg viewBox="0 0 32 32" class="h-8 w-8" fill="none" aria-hidden="true"><path d="M5 27V14.5L16 4l11 10.5" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
          CekKos.
        </span>
      </a>
      <nav class="hidden items-center gap-8 md:flex" aria-label="Navigasi utama">
        <a href="#beranda" class="text-sm font-semibold text-slate-600 transition hover:text-navy">Beranda</a>
        <a href="#keunggulan" class="text-sm font-semibold text-slate-600 transition hover:text-navy">Keunggulan</a>
        <a href="#tentang" class="text-sm font-semibold text-slate-600 transition hover:text-navy">Tentang</a>
        <a href="#katalog" class="text-sm font-semibold text-slate-600 transition hover:text-navy">Katalog</a>
      </nav>
      <a href="https://wa.me/6281234567890?text=Halo%20CekKos%2C%20saya%20ingin%20bertanya%20tentang%20kost." target="_blank" rel="noopener noreferrer" class="hidden items-center gap-2 rounded-full bg-navy px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-navy-dark sm:inline-flex">
        <svg viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.6 0 .3 5.3.3 11.8c0 2.1.6 4.1 1.6 5.9L0 24l6.5-1.7a11.8 11.8 0 0 0 5.6 1.4h.1c6.5 0 11.8-5.3 11.8-11.8 0-3.2-1.2-6.1-3.5-8.4ZM12.1 21.7a9.8 9.8 0 0 1-5-1.4l-.4-.2-3.8 1 1-3.7-.3-.4a9.8 9.8 0 1 1 8.5 4.7Zm5.4-7.3c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-1 1.2-.2.2-.4.2-.7.1-.3-.2-1.3-.5-2.5-1.6-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.5-.6.3-.5c.1-.2 0-.4 0-.6 0-.2-.7-1.7-1-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.9.4-.3.3-1.1 1.1-1.1 2.6s1.1 3 1.2 3.2c.2.2 2.2 3.4 5.3 4.7.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2.1-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.5Z"/></svg>
        Kontak / Bantuan
      </a>
      <button id="mobile-menu-button" type="button" aria-expanded="false" aria-controls="mobile-menu" class="rounded-lg p-2 text-slate-700 hover:bg-slate-100 md:hidden" aria-label="Buka menu navigasi">
        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
    <div id="mobile-menu" class="hidden border-t border-slate-100 bg-white px-5 py-4 md:hidden">
      <nav class="mx-auto flex max-w-7xl flex-col gap-1" aria-label="Navigasi mobile">
        <a href="#beranda" class="rounded-lg px-3 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50">Beranda</a>
        <a href="#keunggulan" class="rounded-lg px-3 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50">Keunggulan</a>
        <a href="#tentang" class="rounded-lg px-3 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50">Tentang</a>
        <a href="#katalog" class="rounded-lg px-3 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50">Katalog kost</a>
        <a href="https://wa.me/6281234567890?text=Halo%20CekKos%2C%20saya%20ingin%20bertanya%20tentang%20kost." target="_blank" rel="noopener noreferrer" class="mt-2 rounded-lg bg-navy px-3 py-3 text-center text-sm font-bold text-white">Kontak / Bantuan</a>
      </nav>
    </div>
  </header>

  <main>
    <section id="beranda" class="mx-auto max-w-7xl px-4 pt-5 sm:px-8 sm:pt-8 lg:px-10">
      <div class="hero-cover relative flex min-h-[570px] items-center overflow-hidden rounded-[28px] px-6 py-14 sm:min-h-[610px] sm:px-12 lg:aspect-[16/8] lg:min-h-[590px] lg:px-20">
        <div class="relative z-10 max-w-2xl pb-28 sm:pb-32">
          <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[.16em] text-white backdrop-blur-sm">
            <span class="h-2 w-2 rounded-full bg-emerald-300"></span> Temukan tempat pulangmu
          </span>
          <h1 class="max-w-xl text-4xl font-extrabold leading-[1.13] tracking-tight text-white sm:text-5xl lg:text-[58px]">Cari &amp; Temukan Kost Impianmu <span class="text-blue-200">Tanpa Ribet.</span></h1>
          <p class="mt-5 max-w-lg text-base leading-7 text-white/85 sm:text-lg">Pilihan kost nyaman dan terverifikasi, dekat dengan aktivitasmu. Mulai pencarianmu hari ini.</p>
        </div>
        <div class="absolute inset-x-5 bottom-5 z-20 rounded-2xl bg-white p-3 shadow-2xl sm:inset-x-10 sm:bottom-8 sm:p-4 lg:inset-x-20">
          <form id="search-form" class="grid gap-3 sm:grid-cols-[1fr_1fr_auto] sm:items-center">
            <label class="flex min-w-0 items-center gap-3 rounded-xl border border-slate-200 px-4 py-3.5 focus-within:border-navy">
              <svg viewBox="0 0 24 24" class="h-5 w-5 shrink-0 text-navy" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
              <span class="min-w-0 flex-1"><span class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Lokasi</span><input id="location-input" type="search" placeholder="Kota, area, atau kampus" class="mt-0.5 w-full border-0 bg-transparent p-0 text-sm font-semibold text-slate-800 outline-none placeholder:font-normal placeholder:text-slate-400 focus:ring-0" aria-label="Cari berdasarkan lokasi"></span>
            </label>
            <label class="flex min-w-0 items-center gap-3 rounded-xl border border-slate-200 px-4 py-3.5 focus-within:border-navy">
              <svg viewBox="0 0 24 24" class="h-5 w-5 shrink-0 text-navy" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 10h.01M15 10h.01M9 14h.01M15 14h.01M10 21v-3h4v3"/></svg>
              <span class="min-w-0 flex-1"><span class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Tipe kost</span><select id="type-input" class="mt-0.5 w-full border-0 bg-transparent p-0 text-sm font-semibold text-slate-800 outline-none focus:ring-0" aria-label="Pilih tipe kost"><option value="">Semua tipe</option><option value="Putra">Kost putra</option><option value="Putri">Kost putri</option><option value="Eksklusif">Kost eksklusif</option><option value="Campur">Kost campur</option></select></span>
            </label>
            <button type="submit" class="flex items-center justify-center gap-2 rounded-xl bg-navy px-7 py-4 text-sm font-bold text-white transition hover:bg-navy-dark focus:outline-none focus:ring-4 focus:ring-blue-200">
              <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="10.8" cy="10.8" r="6.8"/><path d="m16 16 5 5"/></svg> Cari Kost
            </button>
          </form>
        </div>
      </div>
      <div class="mt-7 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-sm font-bold text-slate-700">Jelajahi berdasarkan kategori</p>
        <div class="flex flex-wrap gap-2.5" aria-label="Filter kategori kost">
          <button class="category-chip filter-chip active rounded-full border border-slate-200 px-4 py-2.5 text-sm font-semibold transition hover:border-navy" data-category="Semua">Semua kost</button>
          <button class="category-chip filter-chip rounded-full border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:border-navy" data-category="Putra">Kost putra</button>
          <button class="category-chip filter-chip rounded-full border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:border-navy" data-category="Putri">Kost putri</button>
          <button class="category-chip filter-chip rounded-full border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:border-navy" data-category="Eksklusif">Eksklusif</button>
          <button class="category-chip filter-chip rounded-full border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:border-navy" data-category="Campur">Campur</button>
        </div>
      </div>
    </section>

    <section id="keunggulan" class="mx-auto max-w-7xl px-5 py-20 sm:px-8 sm:py-28 lg:px-10">
      <div class="grid gap-10 lg:grid-cols-[.8fr_1.2fr] lg:items-end">
        <div>
          <span class="text-xs font-extrabold uppercase tracking-[.2em] text-navy">Kenapa CekKos?</span>
          <h2 class="mt-4 max-w-lg text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl">Lebih dari sekadar tempat untuk tinggal.</h2>
        </div>
        <p class="max-w-2xl text-base leading-7 text-slate-500 lg:justify-self-end">Kami membantu kamu menemukan kost yang pas dengan kebutuhan dan gaya hidupmu. Pilihan jelas, informasi transparan, dan proses survey lebih mudah.</p>
      </div>
      <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-4">
        <article class="card-shadow rounded-2xl border border-slate-100 bg-white p-6 sm:p-7"><div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-navy"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V10Z"/><path d="M9 21v-7h6v7"/></svg></div><p class="text-3xl font-extrabold tracking-tight text-slate-900">30<span class="text-navy">+</span></p><p class="mt-2 text-sm font-medium text-slate-500">Kost terverifikasi</p></article>
        <article class="card-shadow rounded-2xl border border-slate-100 bg-white p-6 sm:p-7"><div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-navy"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM20 8v6M23 11h-6"/></svg></div><p class="text-3xl font-extrabold tracking-tight text-slate-900">5k<span class="text-navy">+</span></p><p class="mt-2 text-sm font-medium text-slate-500">Penghuni puas</p></article>
        <article class="card-shadow rounded-2xl border border-slate-100 bg-white p-6 sm:p-7"><div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-navy"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2M8 2h8"/></svg></div><p class="text-3xl font-extrabold tracking-tight text-slate-900">07<span class="text-navy">+</span></p><p class="mt-2 text-sm font-medium text-slate-500">Tahun pengalaman</p></article>
        <article class="card-shadow rounded-2xl border border-slate-100 bg-white p-6 sm:p-7"><div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-navy"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 10h.01M15 10h.01M9 14h.01M15 14h.01"/></svg></div><p class="text-3xl font-extrabold tracking-tight text-slate-900">33<span class="text-navy">+</span></p><p class="mt-2 text-sm font-medium text-slate-500">Partner properti</p></article>
      </div>
    </section>

    <section id="tentang" class="bg-mist">
      <div class="mx-auto grid max-w-7xl gap-12 px-5 py-20 sm:px-8 sm:py-28 lg:grid-cols-2 lg:items-center lg:gap-20 lg:px-10">
        <div>
          <span class="text-xs font-extrabold uppercase tracking-[.2em] text-navy">Tentang CekKos.</span>
          <h2 class="mt-4 text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl">Tempat nyaman dimulai dari pilihan yang tepat.</h2>
          <p class="mt-6 leading-7 text-slate-600">CekKos hadir untuk membuat pengalaman mencari kost terasa lebih mudah dan meyakinkan. Kami menghubungkan pencari kost dengan pilihan hunian yang sesuai—mulai dari lokasi, fasilitas, hingga anggaran.</p>
          <p class="mt-4 leading-7 text-slate-600">Setiap informasi kami susun agar kamu bisa membandingkan pilihan dengan tenang. Temukan tempat yang bukan hanya nyaman untuk beristirahat, tapi juga mendukung aktivitas sehari-hari.</p>
          <a href="#katalog" class="mt-8 inline-flex items-center gap-2 font-bold text-navy transition hover:gap-3">Jelajahi pilihan kost <span aria-hidden="true">→</span></a>
        </div>
        <div class="relative grid grid-cols-2 gap-3 sm:gap-4">
          <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=85" alt="Interior hunian yang nyaman" class="h-52 w-full rounded-2xl object-cover sm:h-64">
          <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=800&q=85" alt="Kamar modern dengan pencahayaan alami" class="mt-8 h-52 w-full rounded-2xl object-cover sm:mt-12 sm:h-64">
          <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=800&q=85" alt="Ruang tinggal minimalis" class="h-40 w-full rounded-2xl object-cover sm:h-52">
          <div class="flex h-40 items-center justify-center rounded-2xl bg-navy p-5 text-center text-white sm:h-52">
            <div><p class="text-3xl font-extrabold">Nyaman</p><p class="mt-2 text-sm text-blue-100">Dimulai dari CekKos.</p></div>
          </div>
          <span class="absolute left-1/2 top-1/2 flex h-14 w-14 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full border-4 border-white bg-navy text-white shadow-lg" aria-hidden="true">
            <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 10 12 3l9 7v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V10Z"/><path d="M9 21v-7h6v7"/></svg>
          </span>
        </div>
      </div>
    </section>

    <section id="katalog" class="mx-auto max-w-7xl px-5 py-20 sm:px-8 sm:py-28 lg:px-10">
      <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
        <div><span class="text-xs font-extrabold uppercase tracking-[.2em] text-navy">Katalog pilihan</span><h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Kost pilihan untukmu</h2><p class="mt-3 text-slate-500">Cari tempat tinggal yang pas, mulai dari sini.</p></div>
        <p id="result-count" class="text-sm font-semibold text-slate-500" aria-live="polite"></p>
      </div>
      <div id="kost-grid" class="mt-9 grid gap-5 sm:grid-cols-2 lg:grid-cols-3"></div>
      <div id="empty-state" class="hidden rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-6 py-14 text-center">
        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-blue-50 text-navy"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="10.8" cy="10.8" r="6.8"/><path d="m16 16 5 5"/></svg></div>
        <h3 class="mt-4 text-lg font-bold text-slate-800">Kost belum ditemukan</h3><p class="mt-2 text-sm text-slate-500">Coba kata kunci atau kategori yang berbeda.</p>
        <button id="reset-search" class="mt-5 rounded-full bg-navy px-5 py-2.5 text-sm font-bold text-white hover:bg-navy-dark">Tampilkan semua kost</button>
      </div>
    </section>

    <section class="mx-5 mb-16 rounded-[28px] bg-navy px-6 py-12 text-center text-white sm:mx-8 sm:px-12 sm:py-14 lg:mx-auto lg:max-w-7xl">
      <p class="text-xs font-extrabold uppercase tracking-[.2em] text-blue-200">Siap menemukan kost?</p>
      <h2 class="mx-auto mt-3 max-w-2xl text-3xl font-extrabold tracking-tight sm:text-4xl">Tempat baru yang nyaman mungkin tinggal satu klik lagi.</h2>
      <a href="#katalog" class="mt-7 inline-flex rounded-full bg-white px-6 py-3.5 text-sm font-extrabold text-navy transition hover:bg-blue-50">Lihat katalog kost</a>
    </section>
  </main>

  <footer class="border-t border-slate-100 bg-white">
    <div class="mx-auto flex max-w-7xl flex-col gap-5 px-5 py-8 sm:px-8 md:flex-row md:items-center md:justify-between lg:px-10">
      <div class="flex items-center gap-3"><img src="LOGO.png" alt="CekKos." class="h-9 w-auto object-contain" onerror="this.style.display='none'"><span class="text-sm text-slate-500">Temukan tempat pulangmu.</span></div>
      <p class="text-sm text-slate-400">© <span id="current-year"></span> CekKos. Semua hak dilindungi.</p>
      <a href="https://wa.me/6281234567890?text=Halo%20CekKos%2C%20saya%20ingin%20bertanya." target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-navy hover:text-navy-dark">Hubungi kami</a>
    </div>
  </footer>

  <div id="kost-modal" class="fixed inset-0 z-50 hidden items-end justify-center bg-slate-950/60 p-0 backdrop-blur-sm sm:items-center sm:p-5" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    <div class="modal-scroll relative max-h-[94vh] w-full max-w-4xl overflow-y-auto rounded-t-[24px] bg-white shadow-2xl sm:rounded-[24px]">
      <button id="close-modal" type="button" class="absolute right-4 top-4 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-white/95 text-slate-700 shadow-md transition hover:bg-white" aria-label="Tutup detail kost">
        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
      </button>
      <div class="p-4 sm:p-7">
        <div class="grid gap-3 md:grid-cols-[1.65fr_1fr]">
          <img id="modal-main-image" src="" alt="" class="h-60 w-full rounded-2xl object-cover sm:h-[350px]">
          <div id="modal-thumbnails" class="grid grid-cols-3 gap-2 md:grid-cols-1"></div>
        </div>
        <div class="grid gap-8 py-7 lg:grid-cols-[1.4fr_.8fr]">
          <div>
            <span id="modal-tag" class="inline-flex rounded-full bg-blue-50 px-3 py-1.5 text-xs font-bold text-navy"></span>
            <h2 id="modal-title" class="mt-3 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl"></h2>
            <p id="modal-location" class="mt-2 flex items-center gap-2 text-sm text-slate-500"></p>
            <div class="mt-6"><h3 class="text-lg font-extrabold text-slate-900">Fasilitas</h3><div id="modal-facilities" class="mt-4 grid grid-cols-2 gap-3"></div></div>
            <div class="mt-7"><h3 class="text-lg font-extrabold text-slate-900">Tentang kost</h3><p id="modal-description" class="mt-3 text-sm leading-7 text-slate-600"></p></div>
          </div>
          <aside class="h-fit rounded-2xl border border-slate-200 p-5 sm:p-6">
            <p class="text-sm text-slate-500">Harga mulai dari</p>
            <p id="modal-price" class="mt-1 text-2xl font-extrabold text-navy"></p>
            <p class="mt-1 text-xs text-slate-400">per bulan</p>
            <div class="mt-5 grid gap-3">
              <a id="maps-link" href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 px-4 py-3.5 text-sm font-bold text-slate-700 transition hover:border-navy hover:text-navy">
                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg> Lihat Lokasi (G. Maps)
              </a>
              <a id="survey-link" href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 rounded-xl bg-navy px-4 py-3.5 text-sm font-bold text-white transition hover:bg-navy-dark">
                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.6 0 .3 5.3.3 11.8c0 2.1.6 4.1 1.6 5.9L0 24l6.5-1.7a11.8 11.8 0 0 0 5.6 1.4h.1c6.5 0 11.8-5.3 11.8-11.8 0-3.2-1.2-6.1-3.5-8.4ZM12.1 21.7a9.8 9.8 0 0 1-5-1.4l-.4-.2-3.8 1 1-3.7-.3-.4a9.8 9.8 0 1 1 8.5 4.7Zm5.4-7.3c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-1 1.2-.2.2-.4.2-.7.1-.3-.2-1.3-.5-2.5-1.6-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.5-.6.3-.5c.1-.2 0-.4 0-.6 0-.2-.7-1.7-1-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.9.4-.3.3-1.1 1.1-1.1 2.6s1.1 3 1.2 3.2c.2.2 2.2 3.4 5.3 4.7.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2.1-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.5Z"/></svg> Jasa Survey (WhatsApp)
              </a>
            </div>
            <p class="mt-4 text-center text-xs leading-5 text-slate-400">Atur waktu survey langsung dengan tim CekKos.</p>
          </aside>
        </div>
      </div>
    </div>
  </div>

  <script>
    const WHATSAPP_NUMBER = '6281234567890';
    const fallbackImage = 'https://via.placeholder.com/400x250?text=Foto+Kost';
    const kostData = [
      {
        id: 1, name: 'Kost Arunika Residence', type: 'Putri', location: 'Seturan, dekat Universitas Atma Jaya', city: 'Yogyakarta', price: 1250000,
        images: ['https://via.placeholder.com/800x500?text=Kost+Arunika+1', 'https://via.placeholder.com/800x500?text=Kost+Arunika+2', 'https://via.placeholder.com/800x500?text=Kost+Arunika+3'],
        facilities: ['Wi-Fi cepat', 'AC', 'Kamar mandi dalam', 'Kasur springbed', 'Parkir luas', 'CCTV 24 jam'],
        description: 'Kost putri yang tenang, bersih, dan nyaman untuk mahasiswa maupun pekerja. Setiap kamar dilengkapi kamar mandi dalam dan furnitur utama. Lingkungan kost aman dengan akses CCTV 24 jam dan area komunal yang terawat. Berjarak sekitar 7 menit ke Universitas Atma Jaya, dekat minimarket, tempat makan, dan transportasi umum. Tamu wajib melapor kepada pengelola dan penghuni mengikuti jam tenang pukul 22.00–06.00.'
      },
      {
        id: 2, name: 'Kost Nawasena Living', type: 'Eksklusif', location: 'Gejayan, dekat pusat kuliner', city: 'Yogyakarta', price: 2100000,
        images: ['https://via.placeholder.com/800x500?text=Nawasena+1', 'https://via.placeholder.com/800x500?text=Nawasena+2', 'https://via.placeholder.com/800x500?text=Nawasena+3'],
        facilities: ['Wi-Fi cepat', 'AC', 'Kamar mandi dalam', 'Lemari pakaian', 'Dapur bersama', 'CCTV 24 jam'],
        description: 'Hunian eksklusif dengan interior modern dan fasilitas yang dirancang untuk mendukung produktivitas. Area bersama yang nyaman, dapur komunal, serta akses keamanan membuat aktivitas harian terasa praktis. Lokasi strategis di Gejayan, hanya beberapa menit dari kampus, pusat kuliner, dan pusat kota. Pengunjung mengikuti aturan bertamu dan area bersama dijaga tetap bersih.'
      },
      {
        id: 3, name: 'Kost Griya Mahasiswa', type: 'Putra', location: 'Babarsari, dekat kampus UPN', city: 'Yogyakarta', price: 950000,
        images: ['https://via.placeholder.com/800x500?text=Griya+Mahasiswa+1', 'https://via.placeholder.com/800x500?text=Griya+Mahasiswa+2', 'https://via.placeholder.com/800x500?text=Griya+Mahasiswa+3'],
        facilities: ['Wi-Fi', 'Kamar mandi luar', 'Kasur dan meja', 'Parkir motor', 'Dapur bersama', 'Akses 24 jam'],
        description: 'Pilihan kost putra dengan harga bersahabat di area Babarsari. Kamar sudah memiliki kasur, meja belajar, dan lemari. Lokasinya dekat dengan UPN, beberapa pilihan warung makan, serta akses transportasi. Area kost memiliki dapur bersama dan parkir motor. Penghuni diminta menjaga ketertiban dan kebersihan fasilitas bersama.'
      },
      {
        id: 4, name: 'Kost Taman Sari', type: 'Putri', location: 'Condongcatur, dekat Hartono Mall', city: 'Yogyakarta', price: 1450000,
        images: ['https://via.placeholder.com/800x500?text=Taman+Sari+1', 'https://via.placeholder.com/800x500?text=Taman+Sari+2', 'https://via.placeholder.com/800x500?text=Taman+Sari+3'],
        facilities: ['Wi-Fi cepat', 'AC', 'Kamar mandi dalam', 'Area jemur', 'Parkir luas', 'CCTV 24 jam'],
        description: 'Kost putri dengan suasana asri dan fasilitas lengkap untuk tinggal jangka panjang. Area jemur dan parkir luas tersedia bagi penghuni. Berlokasi di Condongcatur, dekat pusat belanja, kampus, dan pilihan transportasi. Pengelola menerapkan jam berkunjung yang tertib dan memastikan lingkungan bersama tetap nyaman.'
      },
      {
        id: 5, name: 'Kost Urban Nest', type: 'Campur', location: 'Kaliurang, dekat UGM', city: 'Yogyakarta', price: 1750000,
        images: ['https://via.placeholder.com/800x500?text=Urban+Nest+1', 'https://via.placeholder.com/800x500?text=Urban+Nest+2', 'https://via.placeholder.com/800x500?text=Urban+Nest+3'],
        facilities: ['Wi-Fi cepat', 'AC', 'Kamar mandi dalam', 'Ruang komunal', 'Parkir motor', 'CCTV 24 jam'],
        description: 'Hunian campur yang nyaman dengan area komunal untuk bekerja atau bersantai. Kamar dilengkapi fasilitas dasar dan akses internet cepat. Dari sini, UGM dapat dijangkau dalam beberapa menit, sementara kafe dan kebutuhan harian berada di sekitar kost. Setiap lantai memiliki area bersama yang dikelola dengan aturan kebersihan dan ketenangan.'
      },
      {
        id: 6, name: 'Kost Omah Senja', type: 'Eksklusif', location: 'Timoho, dekat pusat kota', city: 'Yogyakarta', price: 2350000,
        images: ['https://via.placeholder.com/800x500?text=Omah+Senja+1', 'https://via.placeholder.com/800x500?text=Omah+Senja+2', 'https://via.placeholder.com/800x500?text=Omah+Senja+3'],
        facilities: ['Wi-Fi cepat', 'AC', 'Kamar mandi dalam', 'Kasur springbed', 'Pantry bersama', 'CCTV 24 jam'],
        description: 'Kost eksklusif bernuansa hangat di kawasan Timoho yang strategis. Kamar berperabot dengan kamar mandi dalam, sementara pantry bersama tersedia untuk kebutuhan harian. Akses menuju kampus dan pusat kota mudah, dengan minimarket dan tempat makan di dekat properti. Penghuni mengikuti ketentuan pengelola mengenai tamu dan penggunaan area bersama.'
      }
    ];

    const iconMap = {
      'Wi-Fi cepat': '<path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0M12 20h.01"/>',
      'Wi-Fi': '<path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0M12 20h.01"/>',
      'AC': '<path d="M3 8h18M5 8V4h14v4M7 12v2m5-2v2m5-2v2M6 20l2-3m10 3-2-3"/>',
      'Kamar mandi dalam': '<path d="M3 12h18v2a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5v-2ZM7 12V5a2 2 0 0 1 4 0v1M6 21l2-2m10 2-2-2"/>',
      'Kasur springbed': '<path d="M3 18V8m18 10V8M3 14h18M5 11h5a2 2 0 0 1 2 2v1H5v-2Zm7 2a2 2 0 0 1 2-2h5v3h-7v-1Z"/>',
      'Lemari pakaian': '<path d="M5 3h14v18H5zM12 3v18M9 10h.01M15 10h.01"/>',
      'Parkir luas': '<path d="M5 21V4h8a5 5 0 0 1 0 10H5M9 10h4"/>',
      'Parkir motor': '<path d="M5 17h14l-1-6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2l-1 6Zm0 0a2 2 0 1 0 4 0m6 0a2 2 0 1 0 4 0M9 9l1-3h4l1 3"/>',
      'CCTV 24 jam': '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/>',
      'Dapur bersama': '<path d="M3 11h18M5 11v9h14v-9M8 11V5m4 6V3m4 8V5"/>',
      'Akses 24 jam': '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
      'Area jemur': '<circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/>',
      'Ruang komunal': '<path d="M3 20h18M5 20v-8h14v8M7 12V8h10v4M9 8V5h6v3"/>',
      'Pantry bersama': '<path d="M4 21V5h16v16M8 9h2m4 0h2M8 13h2m4 0h2M9 21v-4h6v4"/>',
      'Kasur dan meja': '<path d="M3 18V8m18 10V8M3 14h18M5 11h5a2 2 0 0 1 2 2v1H5v-2Z"/>'
    };

    const grid = document.getElementById('kost-grid');
    const emptyState = document.getElementById('empty-state');
    const locationInput = document.getElementById('location-input');
    const typeInput = document.getElementById('type-input');
    let activeCategory = 'Semua';
    let lastFocusedElement = null;

    function formatPrice(price) {
      return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(price);
    }

    function renderKost() {
      const locationQuery = locationInput.value.trim().toLocaleLowerCase('id-ID');
      const selectedType = typeInput.value;
      const visibleKost = kostData.filter((kost) => {
        const matchesLocation = !locationQuery || `${kost.name} ${kost.location} ${kost.city}`.toLocaleLowerCase('id-ID').includes(locationQuery);
        const matchesType = !selectedType || kost.type === selectedType;
        const matchesCategory = activeCategory === 'Semua' || kost.type === activeCategory;
        return matchesLocation && matchesType && matchesCategory;
      });

      grid.innerHTML = visibleKost.map((kost) => `
        <article class="group overflow-hidden rounded-2xl border border-slate-100 bg-white card-shadow transition duration-300 hover:-translate-y-1 hover:shadow-xl">
          <div class="relative overflow-hidden">
            <img src="${kost.images[0].replace('800x500', '400x250')}" alt="Foto ${kost.name}" class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" onerror="this.onerror=null;this.src='${fallbackImage}'">
            <span class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1.5 text-xs font-bold text-navy shadow-sm">${kost.type}</span>
            <span class="absolute right-4 top-4 flex items-center gap-1 rounded-full bg-white/95 px-2.5 py-1.5 text-xs font-bold text-slate-700 shadow-sm"><svg viewBox="0 0 24 24" class="h-3.5 w-3.5 text-amber-400" fill="currentColor" aria-hidden="true"><path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8-6.2-3.3-6.2 3.3L7 14.2 2 9.3l6.9-1L12 2Z"/></svg> 4.9</span>
          </div>
          <div class="p-5">
            <h3 class="truncate text-lg font-extrabold text-slate-900">${kost.name}</h3>
            <p class="mt-2 flex items-center gap-1.5 text-sm text-slate-500"><svg viewBox="0 0 24 24" class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg><span class="truncate">${kost.location}</span></p>
            <div class="mt-5 flex items-end justify-between border-t border-slate-100 pt-4">
              <p><span class="text-lg font-extrabold text-navy">${formatPrice(kost.price)}</span><span class="text-xs text-slate-400"> / bulan</span></p>
              <button type="button" data-kost-id="${kost.id}" class="detail-button rounded-full border border-navy px-4 py-2 text-xs font-bold text-navy transition hover:bg-navy hover:text-white">Lihat Detail</button>
            </div>
          </div>
        </article>`).join('');

      document.getElementById('result-count').textContent = `Menampilkan ${visibleKost.length} dari ${kostData.length} kost`;
      emptyState.classList.toggle('hidden', visibleKost.length > 0);
      grid.classList.toggle('hidden', visibleKost.length === 0);
      grid.querySelectorAll('.detail-button').forEach((button) => {
        button.addEventListener('click', () => openDetail(Number(button.dataset.kostId)));
      });
    }

    function openDetail(id) {
      const kost = kostData.find((item) => item.id === id);
      if (!kost) return;
      lastFocusedElement = document.activeElement;
      document.getElementById('modal-tag').textContent = `Kost ${kost.type}`;
      document.getElementById('modal-title').textContent = kost.name;
      document.getElementById('modal-location').innerHTML = `<svg viewBox="0 0 24 24" class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>${kost.location}, ${kost.city}`;
      document.getElementById('modal-price').textContent = formatPrice(kost.price);
      document.getElementById('modal-description').textContent = kost.description;
      document.getElementById('modal-main-image').src = kost.images[0];
      document.getElementById('modal-main-image').alt = `Foto ${kost.name}`;
      document.getElementById('modal-main-image').onerror = function () { this.onerror = null; this.src = fallbackImage; };
      document.getElementById('modal-thumbnails').innerHTML = kost.images.map((image, index) => `
        <button type="button" class="gallery-thumb ${index === 0 ? 'active' : ''} overflow-hidden rounded-xl focus:outline-none" data-image="${image}" aria-label="Lihat foto ${index + 1} ${kost.name}">
          <img src="${image}" alt="" class="h-20 w-full object-cover md:h-full md:min-h-[108px]" onerror="this.onerror=null;this.src='${fallbackImage}'">
        </button>`).join('');
      document.getElementById('modal-thumbnails').querySelectorAll('.gallery-thumb').forEach((button) => {
        button.addEventListener('click', () => {
          const mainImage = document.getElementById('modal-main-image');
          mainImage.src = button.dataset.image;
          mainImage.onerror = function () { this.onerror = null; this.src = fallbackImage; };
          document.querySelectorAll('.gallery-thumb').forEach((thumb) => thumb.classList.remove('active'));
          button.classList.add('active');
        });
      });
      document.getElementById('modal-facilities').innerHTML = kost.facilities.map((facility) => `
        <div class="flex items-center gap-2.5 text-sm text-slate-600"><span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-navy"><svg viewBox="0 0 24 24" class="h-[18px] w-[18px]" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">${iconMap[facility] || '<path d="m5 12 4 4L19 6"/>'}</svg></span><span>${facility}</span></div>`).join('');
      document.getElementById('maps-link').href = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(`${kost.name}, ${kost.location}, ${kost.city}`)}`;
      const message = `Halo CekKos, saya ingin bertanya dan memesan jasa survey untuk ${kost.name}`;
      document.getElementById('survey-link').href = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
      const modal = document.getElementById('kost-modal');
      modal.classList.remove('hidden');
      modal.classList.add('flex');
      document.body.classList.add('overflow-hidden');
      document.getElementById('close-modal').focus();
    }

    function closeDetail() {
      const modal = document.getElementById('kost-modal');
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.classList.remove('overflow-hidden');
      if (lastFocusedElement) lastFocusedElement.focus();
    }

    document.getElementById('search-form').addEventListener('submit', (event) => {
      event.preventDefault();
      activeCategory = 'Semua';
      document.querySelectorAll('.category-chip').forEach((chip) => {
        const active = chip.dataset.category === 'Semua';
        chip.classList.toggle('active', active);
        chip.classList.toggle('text-slate-600', !active);
      });
      renderKost();
      document.getElementById('katalog').scrollIntoView({ behavior: 'smooth' });
    });
    document.querySelectorAll('.category-chip').forEach((chip) => {
      chip.addEventListener('click', () => {
        activeCategory = chip.dataset.category;
        document.querySelectorAll('.category-chip').forEach((item) => {
          const active = item === chip;
          item.classList.toggle('active', active);
          item.classList.toggle('text-slate-600', !active);
        });
        renderKost();
      });
    });
    document.getElementById('reset-search').addEventListener('click', () => {
      locationInput.value = '';
      typeInput.value = '';
      activeCategory = 'Semua';
      document.querySelectorAll('.category-chip').forEach((chip) => {
        const active = chip.dataset.category === 'Semua';
        chip.classList.toggle('active', active);
        chip.classList.toggle('text-slate-600', !active);
      });
      renderKost();
    });
    document.getElementById('close-modal').addEventListener('click', closeDetail);
    document.getElementById('kost-modal').addEventListener('click', (event) => {
      if (event.target.id === 'kost-modal') closeDetail();
    });
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape' && !document.getElementById('kost-modal').classList.contains('hidden')) closeDetail();
    });
    document.getElementById('mobile-menu-button').addEventListener('click', (event) => {
      const button = event.currentTarget;
      const menu = document.getElementById('mobile-menu');
      const isOpen = button.getAttribute('aria-expanded') === 'true';
      button.setAttribute('aria-expanded', String(!isOpen));
      menu.classList.toggle('hidden', isOpen);
    });
    document.querySelectorAll('#mobile-menu a').forEach((link) => {
      link.addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.add('hidden');
        document.getElementById('mobile-menu-button').setAttribute('aria-expanded', 'false');
      });
    });
    document.getElementById('current-year').textContent = new Date().getFullYear();
    renderKost();
  </script>
</body>
</html>
