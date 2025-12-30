<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Real Bali Driver')</title>
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  />

<link
rel="stylesheet"
href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""
/>

<script
  src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
  integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
  crossorigin="">
</script>


  <style>
    .navbar-sticky{
      position: sticky;
      top: 0;
      z-index: 1030;
    }
.navbar{
      padding-right: 20px;
      padding-left: 20px;
    }
    .navbar-brand{
      gap: 10px;
    }
    .navbar-brand img{
      height: 86px;
      width: auto;
    }
    .navbar-brand .brand-text{
      font-size: 1.4rem;
    }
    .navbar-nav .nav-link{
      font-size: 1.1rem;
    }

  .container {
  max-width: 95%; /* default bootstrap cuma 1140–1200 */
  width: 100%;
  }

  .nav-link:hover{
    color: rgb(160, 152, 152);
  }
  .nav-link.active{
    color: rgb(160, 152, 152);
  }

    .hero-card{
  position: relative;
  border-radius: 28px;
  overflow: hidden;
  min-height: 760px;
  box-shadow: 0 20px 50px rgba(0,0,0,.12);
  background: #111;
}

.hero-bg{
  position: absolute;
  inset: 0;
  width: 100%;
  height: 120%;
  object-fit: cover;
  transform: scale(1.03);
}

.hero-overlay{
  position: absolute;
  inset: 0;
  background:
    radial-gradient(900px 420px at 30% 35%, rgba(0,0,0,.10), rgba(0,0,0,.35)),
    linear-gradient(to top, rgba(0,0,0,.40), rgba(0,0,0,.08));
}

.hero-content{
  margin-top: 5%;
  position: relative;
  z-index: 2;
  padding: 64px;
  color: #fff;
  max-width: 980px;
}

.hero-pill{
  display: inline-flex;
  align-items: center;
  padding: 10px 14px;
  border-radius: 999px;
  background: rgba(255,255,255,.16);
  border: 1px solid rgba(255,255,255,.22);
  backdrop-filter: blur(10px);
  font-size: 18px;
}

.hero-title{
  margin-top: 18px;
  margin-bottom: 10px;
  font-weight: 650;
  line-height: 1.05;
  font-size: clamp(38px, 5.2vw, 74px);
}

.hero-strong{
  font-weight: 800;
  color: rgba(255,255,255,.95);
}

.hero-sub{
  color: rgba(255,255,255,.85);
  max-width: 620px;
  font-size: 20px;
  margin: 0;
}

.btn-pill{
  border-radius: 30px;
  padding: 8px 14px;
  font-weight: 600;
  font-size: 18px;
}

.hero-features{
  margin-bottom: -30%;
  position: absolute;
  left: 64px;
  right: 64px;
  bottom: 26px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
}

.feature-chip{
  display: flex;
  gap: 12px;
  align-items: center;
  padding: 14px 16px;
  border-radius: 999px;
  background: rgba(0,0,0,.35);
  border: 1px solid rgba(255,255,255,.18);
  backdrop-filter: blur(10px);
}

.feature-icon{
  width: 38px;
  height: 38px;
  border-radius: 999px;
  display: grid;
  place-items: center;
  background: rgba(255,255,255,.12);
  border: 1px solid rgba(255,255,255,.18);
  font-weight: 700;
}

.feature-text{
  font-size: 13px;
  color: rgba(255,255,255,.85);
  line-height: 1.25;
}

.dest-wrap{
  max-width: 1800px;   /* kamu bisa ubah 1200/1300/1500 */
  margin: 0 auto;      /* biar ke tengah */
}

.dest-tiles{
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 18px;
  margin-top: 24px;
  padding: 6px;
}

.dest-tile{
  background: #fff;
  border: 1px solid rgba(15,23,42,.08);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 14px 30px rgba(2,6,23,.08);
  padding: 12px;
  margin: 4px;
  margin-bottom: 50px;
}

.dest-tile-media{
  position: relative;
  aspect-ratio: 16 / 9;
  background: #f8fafc;
  border-radius: 14px;
  overflow: hidden;
}

.dest-tile-media img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transform: scale(1.02);
  transition: opacity 600ms ease, transform 600ms ease;
}

.dest-tile-body{
  padding: 12px 6px 4px;
}

.dest-tile-title{
  font-weight: 800;
  font-size: 16px;
  color: #0f172a;
  margin-bottom: 4px;
}

.dest-tile-meta{
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 10px;
  font-size: 13px;
}

.dest-tile-location{
  color: rgba(100,116,139,1);
}

@media (min-width: 1200px){
  .dest-tile-media{ aspect-ratio: 16 / 9; }
  .dest-tile-title{ font-size: 18px; }
  .dest-tile-meta{ font-size: 14px; }
}

@media (max-width: 768px){
  .dest-tiles{ grid-template-columns: 1fr; }
  .dest-tile-media{ aspect-ratio: 16 / 9; }
}

@media (max-width: 992px){
  .dest-tiles{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
}

.pkg-scroll{
  display: grid;                            /* aktifkan CSS grid */
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 18px;                                /* samakan jarak dengan destinations */
  margin-top: 24px;
  padding: 6px;
}

.pkg-card{
  width: 100%;                 /* ikut penuh lebar kolom */
  height: 100%;                /* biar bisa ikut tinggi konten */
  background: #fff;
  border: 1px solid rgba(15,23,42,.08);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 14px 30px rgba(2,6,23,.08);
  padding: 12px;
  margin: 4px;
  margin-bottom: 50px;
  padding-bottom: calc(12px + 5px); /* +5px lebih tinggi dari destinations */
}

.pkg-media{
  position: relative;
  aspect-ratio: 16 / 9;
  background: #0b1220;
  border-radius: 14px;
  overflow: hidden;
}
.pkg-media img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.pkg-body{ padding: 16px 16px 18px; }
.pkg-meta{
  color: rgba(100,116,139,1);
  font-size: 13px;
  margin-bottom: 6px;
}
.pkg-title{
  font-weight: 800;
  font-size: 18px;
  line-height: 1.25;
  margin-bottom: 6px;
  color: #0f172a;
}
.pkg-sub{
  color: rgba(100,116,139,1);
  font-size: 13px;
  line-height: 1.35;
  min-height: 34px;
}

.pkg-bottom{
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  margin-top: 12px;
}

.pkg-price{
  font-weight: 900;
  color: #0f172a;
  font-size: 16px;
}

.pkg-actions{
  display: flex;
  gap: 10px;
  margin-top: 14px;
  flex-wrap: wrap;
}
.pkg-note{
  margin-top: 10px;
  font-size: 12px;
  color: rgba(100,116,139,1);
}

@media (max-width: 768px){
  .pkg-media{ aspect-ratio: 16 / 9; }
}

@media (max-width: 768px){
  .hero-content{ padding: 28px; }
  .hero-card{ min-height: 520px; }
  .hero-features{
    left: 18px; right: 18px; bottom: 18px;
    grid-template-columns: 1fr;
  }
}
/* Tablet: jadi 2 kolom */
@media (max-width: 992px){
  .pkg-scroll{
    grid-template-columns: repeat(2, 1fr);
  }
}

/* HP: jadi 1 kolom full */
@media (max-width: 768px){
  .pkg-scroll{
    grid-template-columns: 1fr;
  }
}

.pkg-wrap{
  max-width: 1800px;
  margin: 0 auto;
  padding: 0 24px;
}

@media (max-width: 768px){
  .pkg-wrap{
    padding: 0 12px;
  }
}


.t-card{
  background: rgba(255,255,255,1);
  border: 1px solid rgba(15,23,42,.08);
  border-radius: 18px;
  padding: 18px;
  box-shadow: 0 14px 30px rgba(2,6,23,.08);
  min-width: 0; 
}

.t-avatar{
  width: 44px;
  height: 44px;
  border-radius: 14px;
  display:grid;
  place-items:center;
  font-weight: 900;
  color: #14532d;
  background: rgba(34,197,94,.14);
  border: 1px solid rgba(34,197,94,.18);
}

.t-name{
  font-weight: 800;
  color:#0f172a;
  line-height:1.1;
  font-size: calc(1rem + 3px);
}

.t-meta{
  font-size: 15px;
  color: rgba(100,116,139,1);
  margin-top: 2px;
}

.t-rating{
  display:flex;
  flex-direction:column;
  align-items:flex-end;
  gap:4px;
}

.t-stars{
  font-size: 17px;
  letter-spacing: 1px;
  color: rgba(148,163,184,1);
}
.t-stars .on{ color:#f59e0b; }

.t-score{
  font-size: 15px;
  color: rgba(100,116,139,1);
  font-weight: 700;
}

/* teks testimoni supaya tidak lari ke samping */
.t-msg{
  margin-top: 12px;
  color: rgba(51,65,85,1);
  line-height: 1.6;
  font-size: calc(1rem + 3px);
  white-space: normal;          /* boleh turun baris */
  overflow-wrap: anywhere;      /* kata panjang dipotong */
  word-break: break-word;       /* fallback pemotongan kata */
}


.t-empty{
  padding: 18px;
  border-radius: 18px;
  border: 1px dashed rgba(15,23,42,.18);
  background: rgba(15,23,42,.02);
  color: rgba(51,65,85,1);
}

.t-form{
  background: #14532d;
  border: 1px solid rgba(15,23,42,.08);
  border-radius: 18px;
  padding: 18px;
  box-shadow: 0 14px 30px rgba(2,6,23,.08);
  color: #fff;
}

.t-form h5{
  font-size: calc(1.25rem + 3px);
}

.t-form .form-label{
  color: #fff;
  font-size: calc(1rem + 3px);
}

.t-form .text-secondary{
  color: rgba(255,255,255,.85) !important;
  font-size: calc(1rem + 3px);
}

.t-hint{
  font-size: 21px;
  color: rgba(255,255,255,.85);
}

.t-input{
  border-radius: 14px;
  border-color: rgba(15,23,42,.10);
  padding: 12px 14px;
  background: #fff;
  color: #0f172a;
}

.t-form .btn{
  background: #fff;
  color: #0f172a;
  border-color: rgba(15,23,42,.18);
  font-size: calc(1rem + 3px);
}

.t-form .btn:hover{
  background: #f8fafc;
  color: #0f172a;
}
.t-input:focus{
  box-shadow: 0 0 0 .25rem rgba(34,197,94,.15);
  border-color: rgba(34,197,94,.35);
}

.t-grid{
  display: grid;
  grid-template-columns: 1.2fr .8fr; /* kiri lebih lebar dari kanan */
  gap: 18px;                          /* ini yang bikin gak mepet tapi gak longgar */
  align-items: start;
}

.t-left{
  margin-left: 10%;
  position: relative;
  max-height: 600px;       /* tinggi area scroll */
  overflow-y: auto;        /* INI KUNCINYA */
  overflow-x: hidden;
  border-radius: 18px;
  background: rgba(15,23,42,.02);
  border: 1px solid rgba(15,23,42,.08);
  padding: 16px;
}


.t-right{
  margin-right: 15%;
  max-height: 600px;
}

.t-track{
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.t-left::-webkit-scrollbar{
  width: 8px;
}

.t-left::-webkit-scrollbar-thumb{
  background: rgba(15,23,42,.18);
  border-radius: 999px;
}

.t-left::-webkit-scrollbar-track{
  background: transparent;
}


.t-item{
  min-width: 360px; /* ukuran card slider */
}

/* tombol panah */
.t-nav{
  position: absolute;
  right: 14px;
  bottom: 14px;
  display: flex;
  gap: 8px;
}
.t-navbtn{
  width: 40px;
  height: 40px;
  border-radius: 999px;
  border: 1px solid rgba(15,23,42,.12);
  background: rgba(255,255,255,.85);
  backdrop-filter: blur(10px);
  display: grid;
  place-items: center;
  font-size: 18px;
}
.t-navbtn:hover{
  background: #fff;
}

/* kanan: form dibuat agak “nempel” saat scroll */
.t-right{
  position: relative;
}

.t-alert{
  margin-left:6% ;
  margin-right:6% ;
  display: flex;
  align-items: center;
  gap: 12px;
  background: rgba(34,197,94,.10);        /* hijau lembut */
  border: 1px solid rgba(34,197,94,.22);  /* garis halus */
  color: rgba(20,83,45,1);                /* teks hijau tua */
  border-radius: 18px;
  padding: 14px 16px;
  box-shadow: 0 14px 30px rgba(2,6,23,.06); /* shadow halus */
  margin-bottom: 14px;  /* jarak ke section bawah */
}

.t-alert-icon{
  width: 38px;
  height: 38px;
  border-radius: 14px;
  display: grid;
  place-items: center;
  background: rgba(34,197,94,.16);
  border: 1px solid rgba(34,197,94,.18);
  font-weight: 900;
}

.t-alert-title{
  font-weight: 800;
  margin: 0;
  line-height: 1.2;
}

.t-alert-sub{
  margin: 0;
  font-size: 13px;
  color: rgba(20,83,45,.85);
}
@media (min-width: 992px){
  .t-form{
    position: sticky;
    top: 18px; /* saat scroll form tetap kelihatan, enak buat user */
  }
}

/* responsive: di HP jadi 1 kolom, biar tidak sempit */
@media (max-width: 992px){
  .t-grid{ grid-template-columns: 1fr; }
  .t-item{ min-width: 85vw; }
  .t-left,
  .t-right{
    margin-left: 0;
    margin-right: 0;
    max-height: none;
  }
  .t-left{
    max-height: 420px;
  }
  .t-right{
    order: 1;
  }
  .t-left{
    order: 2;
  }
}
/* ========== INDONESIAN TOURISM (mosaic) ========== */
.tour-wrap{
  margin-top:2% ;
  margin-left: 6%;
  margin-right: 6%;
  margin-bottom: 5%;
}

.tour-head{
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: baseline;      /* ini bikin sejajar secara “garis teks” */
  gap: 22px;
  margin-bottom: 18px;
}

.tour-kicker{
  font-size: 22px;            /* dari 12 -> 14 (lebih kebaca) */
  font-weight: 600; 
  color: rgba(100,116,139,1);
  margin-bottom: 6px;
}

.tour-title{
  font-size: clamp(26px, 3.2vw, 44px);
  font-weight: 900;
  color: #0f172a;
  margin: 0;
  letter-spacing: -0.02em;
}

.tour-right{
  margin: 0;
  color: rgba(100,116,139,1);
  font-size: 22px;            /* dari 14 -> 16 */
  line-height: 1.7;
  max-width: 620px;           /* biar area teks kanan lebih “seimbang” */
  justify-self: end;
}

.tour-grid{
  display: grid;
  gap: 16px;
}

.tour-row{
  display: grid;
  gap: 16px;
}

.tour-row-top{
  grid-template-columns: 1.35fr .85fr;
  grid-template-rows: 460px;
}

.tour-row-bottom{
  grid-template-columns: .85fr 1.35fr;
  grid-template-rows: 460px;
}

.tour-card{
  height: 100%;
  position: relative;
  overflow: hidden;
  border-radius: 18px;
  background: #0b1220;
  box-shadow: 0 14px 30px rgba(2,6,23,.08);
  border: 1px solid rgba(15,23,42,.06);
  display: block;
  text-decoration: none;
}

.tour-card img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transform: scale(1.02);
  transition: transform .45s ease;
}

.tour-card:hover img{
  transform: scale(1.06);
}

.tour-overlay{
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg,
    rgba(0,0,0,.05) 0%,
    rgba(0,0,0,.35) 55%,
    rgba(0,0,0,.70) 100%
  );
}

.tour-text{
  position: absolute;
  left: 16px;
  bottom: 14px;
  right: 16px;
  color: #fff;
}

.tour-place{
  font-size: 18px;
  color: rgba(255,255,255,.80);
  margin-bottom: 2px;
}

.tour-name{
  font-size: 20px;
  font-weight: 800;
  line-height: 1.2;
}

/* bikin card "lg" terasa lebih lebar dengan radius sama */
.tour-lg{ border-radius: 18px; }
.tour-sm{ border-radius: 18px; }

/* Responsive biar rapi di HP */
@media (max-width: 992px){
  .tour-head{
    grid-template-columns: 1fr;
  }
  .tour-right{
    justify-self: start;
    max-width: 100%;
  }
  .tour-row{
    grid-template-columns: 1fr;
    grid-template-rows: 260px 260px;
  }
}
/* ========== END TOURISM ========== */

.footer-clean .footer-links a{
  color: rgba(100,116,139,1);
  text-decoration: none;
  font-size: calc(1rem + 3px);
}
.footer-clean .footer-links a:hover{
  color: rgba(15,23,42,1);
  text-decoration: none;
}
.footer-section-title{
  font-size: calc(1rem + 3px);
}
.footer-booking-text{
  font-size: calc(1rem + 3px);
}
.footer-booking-btn{
  font-size: 0.95rem;
  padding: 10px 18px;
  min-width: 170px;
  text-align: center;
  white-space: nowrap;
}
.footer-booking-note{
  font-size: calc(.875rem + 3px);
}
.imgfooter{
  width: 120px;
  height: 120px;
}
.footer-brand-title{
  font-size: calc(1.1rem + 6px);
}
.footer-tagline{
  font-size: calc(1rem + 2px);
}
.footer-social{
  display: flex;
  gap: 10px;
  justify-content: flex-end;
}
.footer-social a{
  width: 55px;
  height: 55px;
  border-radius: 999px;
  border: 1px solid rgba(15,23,42,.18);
  background: #fff;
  color: #0f172a;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
.footer-social a:hover{
  background: #f8fafc;
  color: #0f172a;
}

@media (max-width: 992px){
  .footer-social{
    justify-content: flex-start;
  }
}

@media (max-width: 992px){
  .navbar{
    padding-left: 12px;
    padding-right: 12px;
  }
  .navbar-brand img{
    height: 64px;
  }
  .navbar-brand .brand-text{
    font-size: 1.1rem;
  }
  .navbar-nav{
    padding-top: 10px;
    padding-bottom: 10px;
  }
}

@media (max-width: 992px){
  .dest-wrap,
  .pkg-wrap,
  .tour-wrap{
    margin-left: 0;
    margin-right: 0;
    padding-left: 16px;
    padding-right: 16px;
  }
}

/* ==== MAP DESTINATIONS ==== */
.dest-map{
  width: 90%;
  height: 680px;          /* tinggi map di desktop */
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(15,23,42,.15);
  border: 1px solid rgba(15,23,42,.08);
  margin: 0 auto;
}

@media (max-width: 768px){
  .dest-map{
    height: 320px;        /* di HP lebih pendek */
  }
}

/* biar popup Leaflet lebih rapi dikombinasi Bootstrap */
.leaflet-popup-content{
  margin: 8px 10px;
}
.leaflet-popup-content-wrapper{
  border-radius: 14px;
}


  </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom navbar-sticky" id="home">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
      <img
        src="{{ asset('assets/logos/logotravel.png') }}"
        alt="Real Bali Driver Logo"
      >
      <span class="fw-bold text-success brand-text">Real Bali Driver</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <div class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __("navbar-home") }}</a>
        <a class="nav-link {{ request()->routeIs('destinations') ? 'active' : '' }}" href="{{ route('destinations') }}">{{ __("navbar-destinations") }}</a>
        <a class="nav-link {{ request()->routeIs('packages') ? 'active' : '' }}" href="{{ route('packages') }}">{{ __("navbar-packages") }}</a>
        {{-- Language Switcher --}}
        @php
            $locale = app()->getLocale();
            $label = match($locale) {
                'zh' => 'ZH',
                default => 'EN',
            };
        @endphp

        <div class="dropdown mt-2 mt-lg-0">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:16px;">
            {{ $label }}
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item {{ $locale === 'en' ? 'active' : '' }}" href="{{ route('lang.switch', ['locale' => 'en']) }}">English</a></li>
            <li><a class="dropdown-item {{ $locale === 'zh' ? 'active' : '' }}" href="{{ route('lang.switch', ['locale' => 'zh']) }}">Chinese</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<main class="py-4">
  @yield('content')
</main>

<footer class="footer-clean border-top bg-white">
  <div class="container py-4">
    <div class="row g-4 align-items-start">
      
      <!-- 1) Brand -->
      <div class="col-12 col-lg-4">
        <div class="d-flex align-items-center gap-2 mb-2">
          <img src="{{ asset('assets/logos/logotravel.png') }}" alt="Real Bali Driver" class="imgfooter">
          <div class="fw-bold text-success footer-brand-title">{{ __("Title") }}</div>
        </div>
        <p class="text-secondary mb-3 footer-tagline" style="max-width:340px">
          {{ __("Brand-text") }}
        </p>

      </div>

      <!-- 2) Quick Links -->
      <div class="col-6 col-lg-3">
        <div class="fw-semibold mb-2 footer-section-title">{{ __("Quick Links") }}</div>
        <ul class="list-unstyled footer-links">
          <li><a href="{{ route('home') }}">{{ __("Home") }}</a></li>
          <li><a href="{{ route('destinations') }}">{{ __("Destinations") }}</a></li>
          <li><a href="{{ route('packages') }}">{{ __("Packages") }}</a></li>
        </ul>
      </div>

      <!-- 3) WhatsApp CTA -->
      <div class="col-6 col-lg-3">
        <div class="fw-semibold mb-2 footer-section-title">{{ __("Booking")}}</div>
        <p class="text-secondary mb-3 footer-booking-text">
          {{ __("Booking-text") }}
        </p>

        <a href="{{ route('contact') }}" class="btn btn-success rounded-pill px-4 footer-booking-btn">
        {{ __("BTN-booking") }}  
        </a>

        <a href="{{ route('contact') }}" class="btn btn-success rounded-pill px-4 footer-booking-btn">
        {{ __("BTN-booking2") }}  
        
        </a>
      </div>

      <!-- 4) Social -->
      <div class="col-12 col-lg-2">
        <div class="footer-social">
          <a href="https://instagram.com/USERNAME_KAMU" target="_blank" aria-label="Instagram">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.5"/>
              <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5"/>
              <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"/>
            </svg>
          </a>
          <a href="https://tiktok.com/@USERNAME_KAMU" target="_blank" aria-label="TikTok">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M14 4c.4 2.1 1.8 3.6 4 4v3.1c-1.7-.1-3.1-.8-4.1-1.7v5.3c0 3-2.3 5.3-5.2 5.3-2.9 0-5.2-2.3-5.2-5.3 0-2.9 2.3-5.2 5.2-5.2.5 0 1 .1 1.4.2v3.2c-.4-.2-.9-.4-1.4-.4-1.1 0-2 .9-2 2s.9 2.1 2 2.1 2-.9 2-2.1V4h3.1z" fill="currentColor"/>
            </svg>
          </a>
        </div>
      </div>

    </div>

    <hr class="my-4">

    <div class="d-flex flex-wrap justify-content-between gap-2 text-secondary medium">
      <div>© {{ date('Y') }} {{ __("date") }}</div>
    </div>
  </div>
</footer>


<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous">
</script>

</body>
</html>
