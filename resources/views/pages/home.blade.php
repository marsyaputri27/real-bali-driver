@extends('layouts.app')
@section('title','Home | Real Bali Driver')

@section('body-class', 'page-compact')

{{-- Menambahkan CSS untuk Animasi AOS di bagian paling atas --}}
@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
<style>
  .bg-gradient-dark {
    background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%);
  }
  .slide-up-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .slide-up-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
  }
  .accordion-button:not(.collapsed) {
    background-color: #f8f9fa;
    color: #000;
    box-shadow: none;
  }
  .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0,0,0,.125);
  }
  /* Custom Hero Responsive */
  .hero-container {
    margin-top: 100px; /* Disesuaikan untuk mobile agar tidak terlalu jauh */
  }
  @media (min-width: 768px) {
    .hero-container { margin-top: 130px; }
  }

  .hero-section {
    min-height: 500px; /* Lebih pendek di mobile */
    display: flex;
    align-items: center;
    position: relative;
    padding: 60px 0; /* Memberi ruang agar konten tidak mentok */
  }
  @media (min-width: 992px) {
    .hero-section { min-height: 650px; }
  }

  /* Search Bar Responsive */
  .search-container {
    background: #fff;
    border-radius: 50px;
    padding: 8px;
    max-width: 950px;
    margin: 0 auto;
  }
  @media (max-width: 767px) {
    .search-container {
      border-radius: 20px; /* Lebih kotak di mobile agar pas */
      padding: 15px;
    }
  }

  /* CTA Section Responsive */
  .cta-card {
    min-height: auto; /* Biar flexibel */
    padding: 60px 20px;
  }
  @media (min-width: 992px) {
    .cta-card { min-height: 450px; padding: 0; }
  }

  /* Container Pencarian */
.search-wrapper {
    background: #fff;
    border-radius: 50px; /* Lonjong di desktop */
    padding: 8px;
    transition: all 0.3s ease;
}

@media (max-width: 767.98px) {
    .search-wrapper {
        border-radius: 20px; /* Lebih kotak di HP agar konten tidak terpotong */
        padding: 15px;
        margin: 0 10px;
    }
    
    .search-wrapper .form-select {
        text-align: center;
        border-bottom: 1px solid #eee !important; /* Beri pemisah di mobile */
        border-radius: 0;
        margin-bottom: 10px;
    }
}

/* Efek Focus */
.search-wrapper:focus-within {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    transform: translateY(-2px);
}

/* Mengecilkan ukuran Modal di layar HP */
@media (max-width: 576px) {
    .modal-dialog {
        max-width: 80% !important; /* Modal tidak selebar layar */
        margin: 1.75rem auto;
    }

    .modal-content {
        padding: 1rem !important; /* Padding lebih kecil agar tidak panjang */
    }

    .modal-content h5 {
        font-size: 1.1rem; /* Ukuran judul modal disesuaikan */
    }

    .modal-content img {
        max-width: 180px; /* Mengecilkan QR Code agar tidak terlalu panjang */
        margin: 0 auto;
    }
}

/* Clean Home About Styles */
.stat-card-custom {
  background: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-radius: 1rem;
  padding: 1.5rem 1rem;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.015);
  transition: all 0.3s ease;
}
.stat-card-custom:hover {
  transform: translateY(-4px);
  border-color: rgba(25, 135, 84, 0.25);
  box-shadow: 0 12px 28px rgba(25, 135, 84, 0.08);
}
.stat-card-custom .stat-num {
  font-size: 2rem;
  font-weight: 800;
  color: #198754;
  line-height: 1;
}
.home-about-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 1.5rem;
  aspect-ratio: 4 / 3;
}
</style>

@php
  $waNumber = '628170661422';
  $waText = urlencode("Hello Real Bali driver, I got your information through the website");
  $waLink = "https://wa.me/{$waNumber}?text={$waText}";

  $wechatId = 'Wayanp655';
  $wechatLink = "weixin://dl/chat?{$wechatId}";
@endphp

<div class="container px-2 px-md-3" style="margin-top: 110px; margin-bottom: 30px;">
  <div class="hero rounded-5 overflow-hidden shadow-sm" 
       style="height: 550px; position: relative; display: flex; align-items: center;" 
       data-aos="fade-up" 
       data-aos-duration="1000">
    
    <img src="{{ asset('assets/home/besakihtample (2).webp') }}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" style="object-position: center 35%; z-index: 1;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.7) 100%); z-index: 2;"></div>

    <div class="container position-relative text-center px-3" style="z-index: 3; margin-top: -50px;">
      
      <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
        <h1 class="hero-title fw-bold text-white mb-4 mx-auto" 
            style="font-size: clamp(1.5rem, 3vw, 2.6rem); text-shadow: 2px 2px 10px rgba(0,0,0,0.5); max-width: 850px; line-height: 1.3; white-space: nowrap;">
          {{ __('home.hero.title_1') }} <br class="d-none d-md-block">
          <span class="fw-normal" style="color: rgba(255,255,255,0.9); white-space: normal;">{{ __('home.hero.title_2') }}</span>
        </h1>
      </div>

      <div class="search-wrapper shadow-lg mx-auto" 
           style="max-width: 850px; border-radius: 50px; background: white; padding: 8px;"
           data-aos="fade-up" 
           data-aos-delay="400" 
           data-aos-duration="1000">
        <form action="{{ route('packages') }}" method="GET">
          <div class="row g-0 align-items-center">
            <div class="col-md">
              <div class="d-flex align-items-center px-md-3">
                <i class="bi bi-geo-alt text-success d-none d-md-block fs-5"></i>
                <select name="search" class="form-select border-0 py-3 bg-transparent shadow-none fw-medium text-dark w-100" style="cursor: pointer; font-size: 1.05rem;">
                  <option value="" selected disabled>{{ __('home.search.placeholder') }}</option>
                  <option value="Ubud">Ubud</option>
                  <option value="Kuta">Kuta</option>
                  <option value="Nusa Penida">Nusa Penida</option>
                  <option value="Bedugul">Bedugul</option>
                  <option value="Amed">Amed</option>
                  <option value="Nusa Dua">Nusa Dua</option>
                  <option value="Tanah Lot">Tanah Lot</option>
                  <option value="Benoa">Benoa</option>
                  <option value="Tegalalang">Tegalalang</option>
                </select>
              </div>
            </div>
            
            <div class="col-md-auto">
              <button type="submit" class="btn btn-success text-white rounded-pill px-5 py-3 fw-bold w-100 shadow-sm">
                {{ __('home.search.button') }}
              </button>
            </div>
          </div>
        </form>
      </div>

      <div class="mt-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
        <div class="d-inline-flex flex-wrap justify-content-center align-items-center px-4 py-2 rounded-pill" style="background: rgba(0,0,0,0.4); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2);">
          <span class="text-white text-uppercase fw-bold" style="letter-spacing: 1.5px; font-size: 0.75rem;">{{ __('home.hero.feature_1') }}</span>
          <span class="mx-3 text-white-50">|</span>
          <span class="text-white text-uppercase fw-bold" style="letter-spacing: 1.5px; font-size: 0.75rem;">{{ __('home.hero.feature_2') }}</span>
          <span class="mx-3 text-white-50">|</span>
          <span class="text-white text-uppercase fw-bold" style="letter-spacing: 1.5px; font-size: 0.75rem;">{{ __('home.hero.feature_3') }}</span>
        </div>
      </div>

    </div>
  </div>
</div>

<section class="py-5 bg-white" id="about">
  <div class="container py-5 my-4">
    <div class="row align-items-center gy-5 justify-content-between">
      
      <!-- Right side: Copywriting and Stats Cards -->
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
        <!-- Accent Badged Kicker -->
        <h6 class="text-success fw-bold mb-3 text-uppercase" style="letter-spacing: 1.5px; font-size: 0.95rem;">
          // {{ str_replace('//', '', __('home.about.kicker')) }}
        </h6>
        
        <h2 class="display-6 fw-bold text-dark mb-4" style="line-height: 1.25;">
          {{ __('home.about.title') }}
        </h2>
        
        <p class="text-secondary mb-5 fs-6" style="line-height: 1.7;">
          {{ __('home.about.subtitle') }}
        </p>

        <!-- Stats Cards -->
        <div class="row g-3">
          <div class="col-sm-4">
            <div class="stat-card-custom text-center">
              <span class="stat-num mb-2 d-block">100+</span>
              <span class="text-secondary text-uppercase fw-bold" style="letter-spacing: 0.5px; font-size: 0.75rem;">{{ __('home.about.stats_1') }}</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="stat-card-custom text-center">
              <span class="stat-num mb-2 d-block">10+</span>
              <span class="text-secondary text-uppercase fw-bold" style="letter-spacing: 0.5px; font-size: 0.75rem;">{{ __('home.about.stats_2') }}</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="stat-card-custom text-center">
              <span class="stat-num mb-2 d-block">10+</span>
              <span class="text-secondary text-uppercase fw-bold" style="letter-spacing: 0.5px; font-size: 0.75rem;">{{ __('home.about.stats_3') }}</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Left side: Base image -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
         <img loading="lazy" src="{{ asset('assets/destinations/tegalalang.webp') }}" class="home-about-img shadow-lg" alt="Real Bali Driver">
      </div>

    </div>
  </div>
</section>

<section class="py-5 bg-light" id="services">
  <div class="container py-5 my-3">
    <div class="row mb-5 align-items-end">
      <div class="col-md-7" data-aos="fade-up">
        <h6 class="text-info fw-bold mb-3 text-uppercase" style="letter-spacing: 1.5px; font-size: 0.9rem;">{{ __('home.services.kicker') }}</h6>
        <h2 class="display-5 fw-bold mb-0 text-dark">{{ __('home.services.title') }}</h2>
      </div>
      <div class="col-md-5 text-md-end mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
        <p class="text-secondary mb-0 fs-5 pb-2">{{ __('home.services.subtitle') }}</p>
      </div>
    </div>
    
    {{-- CSS Grid untuk simetri sempurna --}}
    <style>
      .services-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 1.5rem;
        min-height: 520px;
      }
      .services-grid .card-big {
        grid-row: 1 / 3;
      }
      @media (max-width: 991.98px) {
        .services-grid {
          grid-template-columns: 1fr;
          grid-template-rows: auto auto auto;
          min-height: unset;
        }
        .services-grid .card-big {
          grid-row: auto;
          min-height: 320px;
        }
      }
    </style>

    <div class="services-grid" data-aos="fade-up" data-aos-duration="800">
      {{-- Foto Besar Kiri --}}
      <div class="card-big card bg-dark text-white border-0 rounded-4 overflow-hidden slide-up-hover position-relative">
        <img loading="lazy" src="{{ asset('assets/destinations/nusapenida.webp') }}" class="w-100 h-100 object-fit-cover opacity-75 position-absolute top-0 start-0" style="object-fit:cover;" alt="Travel Support">
        <div class="card-img-overlay d-flex flex-column justify-content-end p-5 bg-gradient-dark">
          <h3 class="card-title fw-bold mb-2">{{ __('home.services.card_1_title') }}</h3>
          <p class="card-text text-light fs-5 opacity-75 mb-0">{{ __('home.services.card_1_text') }}</p>
        </div>
      </div>

      {{-- Foto Kecil Kanan Atas --}}
      <div class="card bg-dark text-white border-0 rounded-4 overflow-hidden slide-up-hover position-relative" style="min-height: 200px;">
        <img loading="lazy" src="{{ asset('assets/destinations/tegalalang.webp') }}" class="w-100 h-100 object-fit-cover opacity-75 position-absolute top-0 start-0" alt="Expert Tour">
        <div class="card-img-overlay d-flex flex-column justify-content-end p-4 bg-gradient-dark">
          <h4 class="card-title fw-bold mb-1">{{ __('home.services.card_2_title') }}</h4>
          <p class="card-text text-light mb-0">{{ __('home.services.card_2_text') }}</p>
        </div>
      </div>

      {{-- Foto Kecil Kanan Bawah --}}
      <div class="card bg-dark text-white border-0 rounded-4 overflow-hidden slide-up-hover position-relative" style="min-height: 200px;">
        <img loading="lazy" src="{{ asset('assets/destinations/lempuyang.webp') }}" class="w-100 h-100 object-fit-cover opacity-75 position-absolute top-0 start-0" alt="Around Globe">
        <div class="card-img-overlay d-flex flex-column justify-content-end p-4 bg-gradient-dark">
          <h4 class="card-title fw-bold mb-1">{{ __('home.services.card_3_title') }}</h4>
          <p class="card-text text-light mb-0">{{ __('home.services.card_3_text') }}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light" id="destinations">
  <div class="container py-5 my-3">
    <div class="text-center mb-5 pb-3" data-aos="fade-up">
      <h6 class="text-info fw-bold mb-3 text-uppercase" style="letter-spacing: 1.5px; font-size: 0.9rem;">{{ __('home.destinations.kicker') }}</h6>
      <h2 class="display-5 fw-bold mx-auto mb-0 text-dark" style="max-width: 850px; line-height: 1.2;">{{ __('home.destinations.title') }}</h2>
    </div>
    
    @php
      $tourCards = [
        [
          'place' => __('Uluwatu, Badung Regency'),
          'title' => __('Uluwatu Temple'),
          'img'   => asset('assets/destinations/tegalalang.webp'),
          'label' => __('home.destinations.label_popular')
        ],
        [
          'place' => __('Pecatu Village'),
          'title' => __('Kecak Dance'),
          'img'   => asset('assets/destinations/kecak.webp'),
          'label' => __('home.destinations.label_cultural')
        ],
        [
          'place' => __('Nusa Penida'),
          'title' => __('Kelingking Beach'),
          'img'   => asset('assets/destinations/nusapenida.webp'),
          'label' => __('home.destinations.label_trending')
        ],
      ];
    @endphp

    <div class="row g-4">
      @foreach($tourCards as $index => $card)
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
        <a href="{{ route('destinations') }}" class="card bg-dark text-white border-0 rounded-4 overflow-hidden h-100 text-decoration-none slide-up-hover" style="min-height: 480px;">
          <img loading="lazy" src="{{ $card['img'] }}" class="card-img w-100 h-100 object-fit-cover opacity-75 position-absolute top-0 start-0" alt="{{ $card['title'] }}">
          <div class="card-img-overlay d-flex flex-column justify-content-between p-4 bg-gradient-dark">
            <div class="align-self-start bg-white text-dark rounded-pill px-4 py-2 fw-bold" style="font-size: 0.85rem; letter-spacing: 0.5px;">
              {{ $card['label'] }}
            </div>
            <div class="pt-5">
              <h3 class="card-title fw-bold mb-2">{{ $card['title'] }}</h3>
              <p class="card-text text-light opacity-75 mb-0" style="font-size: 1.1rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="me-1 mb-1" aria-hidden="true">
                  <path d="M12 21C16 16.8 19 12.8 19 9C19 5.13401 15.866 2 12 2C8.13401 2 5 5.13401 5 9C5 12.8 8 16.8 12 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ $card['place'] }}
              </p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-5 bg-white" id="faq" style="overflow: hidden;">
  <div class="container py-5 my-4">
    <div class="row">
      <div class="col-lg-5 mb-5 mb-lg-0 pe-lg-5" data-aos="fade-right">
        <h6 class="text-info fw-bold mb-3 text-uppercase" style="letter-spacing: 1.5px; font-size: 0.9rem;">{{ __('home.faq.kicker') }}</h6>
        <h2 class="display-5 fw-bold mb-4 text-dark" style="line-height: 1.2;">{{ __('home.faq.title') }}</h2>
        <p class="text-secondary mb-5 fs-5">{{ __('home.faq.subtitle') }}</p>
      </div>
      <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
        <div class="accordion accordion-flush" id="faqAccordion">
          
          <div class="accordion-item border-0 mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button fw-bold fs-5 bg-light rounded-3 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                {{ __('home.faq.q1') }}
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-secondary fs-6 py-4 lh-lg">
                {{ __('home.faq.a1') }}
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-bold fs-5 bg-light rounded-3 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                {{ __('home.faq.q2') }}
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-secondary fs-6 py-4 lh-lg">
                {{ __('home.faq.a2') }}
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-bold fs-5 bg-light rounded-3 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">
                {{ __('home.faq.q3') }}
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-secondary fs-6 py-4 lh-lg">
                {{ __('home.faq.a3') }}
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light border-top" id="testimonials">
  <div class="container py-5 my-3">
    <div class="text-center mb-5 pb-3" data-aos="fade-up">
      <h6 class="text-info fw-bold mb-3 text-uppercase" style="letter-spacing: 1.5px; font-size: 0.9rem;">{{ __('home.reviews.kicker') }}</h6>
      <h2 class="display-5 fw-bold mx-auto mb-0 text-dark">{{ __('home.reviews.title') }}</h2>
    </div>

    @if(session('ok'))
      <div class="alert alert-success border-0 bg-success text-white rounded-pill px-4 text-center fw-medium mx-auto mb-5" style="max-width: 600px;" data-aos="zoom-in">
        <i class="bi bi-check-circle me-2"></i> {{ session('ok') }}
      </div>
    @endif

    <style>
      .testimonials-wrapper::-webkit-scrollbar {
        display: none;
      }
      .testi-nav-btn {
        width: 45px; height: 45px; z-index: 10;
        transition: all 0.3s ease;
      }
      .testi-nav-btn:hover {
        background-color: #f8f9fa !important;
        transform: translateY(-50%) scale(1.1) !important;
      }
    </style>
    
    <div class="position-relative px-0 px-md-4" data-aos="fade-up" data-aos-delay="200">
      <button onclick="document.getElementById('testimonialsWrapper').scrollBy({left: -340, behavior: 'smooth'})" class="btn btn-white border shadow rounded-circle position-absolute top-50 start-0 translate-middle-y testi-nav-btn d-none d-md-flex justify-content-center align-items-center bg-white text-dark" aria-label="Previous">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="me-1"><path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>

      <div id="testimonialsWrapper" class="testimonials-wrapper pb-4 px-2" style="
        display: grid; 
        grid-template-rows: repeat(2, 1fr); 
        grid-auto-flow: column; 
        grid-auto-columns: minmax(360px, 400px); 
        gap: 1.25rem; 
        overflow-x: auto; 
        scrollbar-width: none; 
        -ms-overflow-style: none; 
        scroll-snap-type: x mandatory; 
        scroll-behavior: smooth;">
        
        <style>
          @media (max-width: 768px) {
            #testimonialsWrapper {
              grid-template-rows: 1fr !important;
              grid-auto-columns: 85vw !important;
              gap: 1rem !important;
            }
          }
        </style>

        @if(isset($testimonials) && $testimonials->count())
          @foreach($testimonials as $t)
            <div style="scroll-snap-align: start;">
              <div class="card h-100 p-4 bg-white slide-up-hover" style="border: 1px solid #e9ecef; border-radius: 1.25rem; box-shadow: none;">
                <div class="d-flex align-items-center mb-3">
                  <div class="rounded-circle d-flex justify-content-center align-items-center text-secondary me-3" style="width: 48px; height: 48px; background-color: #f1f3f5; font-weight: 500; font-size: 1.1rem; overflow: hidden;">
                    @if(isset($t->image))
                      <img src="{{ asset($t->image) }}" class="w-100 h-100 object-fit-cover" alt="profile">
                    @else
                      {{ strtoupper(substr($t->name, 0, 1)) }}
                    @endif
                  </div>
                  <div>
                    <h6 class="mb-0 text-dark fw-medium" style="font-size: 1.05rem; letter-spacing: -0.2px;">{{ $t->name }}</h6>
                  </div>
                </div>
                <p class="mb-0 fs-6" style="line-height: 1.5; color: #6b7280; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                  {{ $t->message }}
                </p>
              </div>
            </div>
          @endforeach
        @else
          <div class="w-100" style="grid-column: 1 / -1;">
            <div class="bg-white p-5 rounded-4 shadow-sm text-center border">
              <h5 class="text-secondary mb-0">{{ __('home.reviews.empty') }}</h5>
            </div>
          </div>
        @endif
      </div>

      <button onclick="document.getElementById('testimonialsWrapper').scrollBy({left: 340, behavior: 'smooth'})" class="btn btn-white border shadow rounded-circle position-absolute top-50 end-0 translate-middle-y testi-nav-btn d-none d-md-flex justify-content-center align-items-center bg-white text-dark" aria-label="Next">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="ms-1"><path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
    </div>

    <div class="mt-5 pt-3" data-aos="zoom-in" data-aos-delay="100">
      <div class="p-4 bg-white rounded-4 shadow-sm border mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold mb-4 text-center fs-4">{{ __('home.reviews.form_title') }}</h5>
        <form method="POST" action="{{ route('testimonials.store') }}" class="row g-3">
          @csrf
          <div class="col-md-6">
            <label class="form-label fw-bold text-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">{{ __("Name") }}</label>
            <input name="name" class="form-control rounded-3 py-2 bg-light border-0" required value="{{ old('name') }}" placeholder="John Doe">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-bold text-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">{{ __("Country") }}</label>
            <input name="country" class="form-control rounded-3 py-2 bg-light border-0" value="{{ old('country') }}" placeholder="Australia">
          </div>
          <div class="col-md-12">
            <label class="form-label fw-bold text-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">{{ __("Rating") }}</label>
            <select name="rating" class="form-select rounded-3 py-2 bg-light border-0 fw-medium" required>
              @for($i=5;$i>=1;$i--)
                <option value="{{ $i }}" @selected(old('rating',5)==$i)>{{ $i }} {{ __('home.reviews.stars') }}</option>
              @endfor
            </select>
          </div>
          <div class="col-12">
            <label class="form-label fw-bold text-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">{{ __("Message") }}</label>
            <textarea name="message" class="form-control rounded-3 py-2 bg-light border-0" rows="3" required placeholder="Tell us about your trip...">{{ old('message') }}</textarea>
          </div>
          <div class="col-12 text-center mt-4">
            <button class="btn btn-success text-white rounded-pill px-4 py-2 fw-bold w-100" style="max-width: 250px;">{{ __('home.reviews.submit') }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-white" style="margin-bottom: -1px;">
  <div class="container py-4" data-aos="zoom-in" data-aos-duration="1000">
    <div class="card border-0 overflow-hidden rounded-5 position-relative shadow" style="min-height: 380px; height: auto;">
      <img loading="lazy" src="{{ asset('assets/destinations/lempuyang.webp') }}" class="card-img w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Adventure">
      
      <div class="card-img-overlay d-flex flex-column justify-content-center p-4 p-md-5 bg-dark bg-opacity-50">
        
        <h1 class="fw-bold text-white mb-1 ms-md-4" style="font-size: clamp(1.7rem, 5vw, 3.5rem); max-width: 800px; text-shadow: 0 4px 15px rgba(0,0,0,0.4); line-height: 1.2;">
          {{ __('home.cta.title') }}
        </h1>

        @php
          $waNum = '628170661422';
          $helloText = urlencode("Hello Real Bali driver, I got your information through the website");
          $btnWaUrl = "https://wa.me/{$waNum}?text={$helloText}";
        @endphp

        <div class="d-flex flex-column flex-sm-row flex-wrap mt-2 ms-md-4" style="max-width: 550px; width: 100%; gap: 12px;">
          <a href="{{ $btnWaUrl }}" target="_blank" class="btn btn-success text-white rounded-pill px-4 py-3 fw-bold flex-grow-1 text-center" style="font-size: 1rem;">{{ __('home.cta.whatsapp') }}</a>
          <button data-bs-toggle="modal" data-bs-target="#wechatModal" class="btn btn-success text-white rounded-pill px-4 py-3 fw-bold flex-grow-1 text-center">
            {{ __('home.cta.wechat') }}
          </button>
          <button data-bs-toggle="modal" data-bs-target="#lineModal" class="btn btn-success text-white rounded-pill px-4 py-3 fw-bold flex-grow-1 text-center">
            {{ __('home.cta.line') }}
          </button>
        </div>
      </div>
    </div>
  </div>


</section>

@endsection

{{-- Menambahkan Javascript untuk memanggil animasinya di paling bawah --}}
@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  // Inisialisasi AOS Animation
  AOS.init({
    once: true,        // KUNCI: true berarti animasi hanya berjalan sekali (saat scroll turun). Saat scroll naik konten TETAP terlihat.
    offset: 100,       // Jarak scroll ke bawah sebelum animasi aktif
    duration: 800,     // Kecepatan animasi
    easing: 'ease-out-cubic', // Efek animasi halus
  });
</script>
@endpush