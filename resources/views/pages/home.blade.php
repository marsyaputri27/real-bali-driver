@extends('layouts.app')
@section('title','Home | Real Bali Driver')

@section('content')
<div class="container-fluid px-4">
<section class="py-4">
  @php
    // Ganti nomor WA dan ID WeChat kamu di sini (format internasional tanpa +).
    $waNumber = '6281547568424';
    $wechatId = 'your_wechat_id';
    $waLink = "https://wa.me/{$waNumber}";
    $wechatLink = "weixin://dl/chat?{$wechatId}";
  @endphp
  <div class="container container-wide">

    <div class="hero-card">
      <!-- BG Image -->
      <img
        class="hero-bg"
        src="{{ asset('assets/home/besakihtample (2).jpg') }}"
        alt="Besakih Temple"
      />

      <!-- Overlay biar teks kebaca -->
      <div class="hero-overlay"></div>

      <!-- Content nempel di atas gambar -->
      <div class="hero-content">
        <div class="hero-pill">{{ __("Hero pill")}}</div>

        <h1 class="hero-title">
          {{ __("Hero title") }}<br>
          <span class="hero-strong">{{ __("Hero strong") }}</span>
        </h1>

        <p class="hero-sub">
          {{ __("Hero sub") }}
        </p>

        <div class="d-flex gap-2 flex-wrap mt-3">
          <a href="{{ $waLink }}" class="btn btn-success btn-pill" target="_blank" rel="noopener">
            {{ __("BTN-pill") }}
          </a>
          <a href="{{ $wechatLink }}" class="btn btn-success btn-pill" target="_blank" rel="noopener">
            {{ __("BTN-pill2") }}
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- ===== SECTION: INDONESIAN TOURISM (seperti gambar) ===== --}}
<section class="py-4">
  <div class="tour-wrap">
    <div class="tour-head">
      <div class="tour-left">
        <div class="tour-kicker">{{ __("Best location") }}</div>
        <h2 class="tour-title">{{ __("Bali tourism") }}</h2>
      </div>

      <p class="tour-right">
       {{ __("Tour hero text") }}
      </p>
    </div>

@php
  $tourCards = [
    [
      'size'  => 'lg',
      'place' => __('Uluwatu, Badung Regency'),
      'title' => __('Uluwatu Temple'),
      'img'   => asset('assets/destinations/tegalalang.jpg'),
    ],
    [
      'size'  => 'sm',
      'place' => __('Pecatu Village, Badung Regency'),
      'title' => __('Kecak Dance'),
      'img'   => asset('assets/destinations/kecak.jpg'),
    ],
    [
      'size'  => 'sm',
      'place' => __('Nusa Penida, Klungkung Regency'),
      'title' => __('Kelingking Beach'),
      'img'   => asset('assets/destinations/nusapenida.jpg'),
    ],
    [
      'size'  => 'lg',
      'place' => __('Karangasem, Bali'),
      'title' => __('Lempuyang Temple'),
      'img'   => asset('assets/destinations/lempuyang.jpg'),
    ],
  ];
@endphp


    <div class="tour-grid">
      <div class="tour-row tour-row-top">
        {{-- 1: besar kiri atas --}}
        <a href="#" class="tour-card tour-lg" onclick="event.preventDefault();">
          <img src="{{ $tourCards[0]['img'] }}" alt="{{ $tourCards[0]['title'] }}">
          <div class="tour-overlay"></div>
          <div class="tour-text">
            <div class="tour-place">{{ $tourCards[0]['place'] }}</div>
            <div class="tour-name">{{ $tourCards[0]['title'] }}</div>
          </div>
        </a>

        {{-- 2: kecil kanan atas --}}
        <a href="#" class="tour-card tour-sm" onclick="event.preventDefault();">
          <img src="{{ $tourCards[1]['img'] }}" alt="{{ $tourCards[1]['title'] }}">
          <div class="tour-overlay"></div>
          <div class="tour-text">
            <div class="tour-place">{{ $tourCards[1]['place'] }}</div>
            <div class="tour-name">{{ $tourCards[1]['title'] }}</div>
          </div>
        </a>
      </div>

      <div class="tour-row tour-row-bottom">
        {{-- 3: kecil kiri bawah --}}
        <a href="#" class="tour-card tour-sm" onclick="event.preventDefault();">
          <img src="{{ $tourCards[2]['img'] }}" alt="{{ $tourCards[2]['title'] }}">
          <div class="tour-overlay"></div>
          <div class="tour-text">
            <div class="tour-place">{{ $tourCards[2]['place'] }}</div>
            <div class="tour-name">{{ $tourCards[2]['title'] }}</div>
          </div>
        </a>

        {{-- 4: besar kanan bawah --}}
        <a href="#" class="tour-card tour-lg" onclick="event.preventDefault();">
          <img src="{{ $tourCards[3]['img'] }}" alt="{{ $tourCards[3]['title'] }}">
          <div class="tour-overlay"></div>
          <div class="tour-text">
            <div class="tour-place">{{ $tourCards[3]['place'] }}</div>
            <div class="tour-name">{{ $tourCards[3]['title'] }}</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
{{-- ===== END SECTION ===== --}}

 <section class="py-4" id="testimonials">

  @if(session('ok'))
  <div class="t-alert">
    <div class="t-alert-icon">✓</div>
    <div>
      <p class="t-alert-title">{{ __("Successful") }}</p>
      <p class="t-alert-sub">{{ session('ok') }}</p>
    </div>
  </div>
@endif


  {{-- GRID 2 kolom: kiri list testimoni, kanan form --}}
  <div class="t-grid mt-3">
    {{-- KIRI: hasil testimoni + animasi --}}
    <div class="t-left">
      @if($testimonials->count())
        <div class="t-track" id="tTrack">
          @foreach($testimonials as $t)
            <div class="t-item">
              <x-testimonial-card :t="$t" />
            </div>
          @endforeach
        </div>
      @else
      @endif
    </div>

    {{-- KANAN: form --}}
    <div class="t-right">
      <div class="t-form">
        <div class="d-flex align-items-start justify-content-between flex-wrap gap-2 mb-2">
          <div>
            <h5 class="fw-semibold mb-1">{{ __("Testimonial") }}</h5>
          </div>
        </div>

        <form method="POST" action="{{ route('testimonials.store') }}" class="row g-3">
          @csrf

          <div class="col-12">
            <label class="form-label">{{ __("Name") }}</label>
            <input name="name" class="form-control t-input" required value="{{ old('name') }}">
            @error('name')<small class="text-danger">{{ $message }}</small>@enderror
          </div>

          <div class="col-12">
            <label class="form-label">{{ __("Country") }}</label>
            <input name="country" class="form-control t-input" value="{{ old('country') }}">
            @error('country')<small class="text-danger">{{ $message }}</small>@enderror
          </div>

          <div class="col-12">
            <label class="form-label">{{ __("Rating") }}</label>
            <select name="rating" class="form-select t-input" required>
              @for($i=5;$i>=1;$i--)
                <option value="{{ $i }}" @selected(old('rating',5)==$i)>{{ $i }}</option>
              @endfor
            </select>
            @error('rating')<small class="text-danger">{{ $message }}</small>@enderror
          </div>

          <div class="col-12">
            <label class="form-label">{{ __("Message") }}</label>
            <textarea name="message" class="form-control t-input" rows="4" required>{{ old('message') }}</textarea>
            @error('message')<small class="text-danger">{{ $message }}</small>@enderror
          </div>

          <div class="col-12 d-flex gap-2 flex-wrap">
            <button class="btn btn-success rounded-pill px-4">{{ __("BTN-send") }}</button>
            <a href="{{ route('contact') }}" class="btn btn-outline-secondary rounded-pill px-4">
              {{ __("BTN-skip") }}
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>
 
@endsection

