@extends('layouts.app')
@section('title','Home | Real Bali Driver')

@section('content')
<section class="py-4" id="packages">
  <div class="pkg-wrap">
    <div class="d-flex flex-wrap justify-content-between align-items-end gap-2 mb-3">
      <div>
        <h2 class="fw-bold mb-1">{{ __("packages.title") }}</h2>
        <p class="text-secondary mb-0">{{ __("packages.subtitle") }}</p>
      </div>
  
      <a href="{{ route('contact') }}" class="btn btn-outline-success rounded-pill px-3">
        {{ __("packages.custom_request") }}
      </a>
    </div>
  
    @php
     $packages = [

      [
        'area'     => __('pkg.ubud.area'),
        'title'    => __('pkg.ubud.title'),
        'subtitle' => __('pkg.ubud.subtitle'),
        'badge'    => __('pkg.ubud.badge'),
        'duration' => __('pkg.ubud.duration'),
        'image'    => asset('assets/destinations/tegalalang.jpg'),
        'price'    => __('pkg.ubud.price'),
        'wa_text'  => __('pkg.ubud.wa'),
      ],
      [
        'area'     => __('pkg.ubud_kintamani.area'),
        'title'    => __('pkg.ubud_kintamani.title'),
        'subtitle' => __('pkg.ubud_kintamani.subtitle'),
        'badge'    => __('pkg.ubud_kintamani.badge'),
        'duration' => __('pkg.ubud_kintamani.duration'),
        'image'    => asset('assets/destinations/atv.jpeg'),
        'price'    => __('pkg.ubud_kintamani.price'),
        'wa_text'  => __('pkg.ubud_kintamani.wa'),
      ],
      [
        'area'     => __('pkg.batur.area'),
        'title'    => __('pkg.batur.title'),
        'subtitle' => __('pkg.batur.subtitle'),
        'badge'    => __('pkg.batur.badge'),
        'duration' => __('pkg.batur.duration'),
        'image'    => asset('assets/destinations/baturjeep.jpg'),
        'price'    => __('pkg.batur.price'),
        'wa_text'  => __('pkg.batur.wa'),
      ],
      [
        'area'     => __('pkg.south_bali.area'),
        'title'    => __('pkg.south_bali.title'),
        'subtitle' => __('pkg.south_bali.subtitle'),
        'badge'    => __('pkg.south_bali.badge'),
        'duration' => __('pkg.south_bali.duration'),
        'image'    => asset('assets/destinations/uluwatu.jpg'),
        'price'    => __('pkg.south_bali.price'),
        'wa_text'  => __('pkg.south_bali.wa'),
      ],
      [
        'area'     => __('pkg.seminyak_canggu.area'),
        'title'    => __('pkg.seminyak_canggu.title'),
        'subtitle' => __('pkg.seminyak_canggu.subtitle'),
        'badge'    => __('pkg.seminyak_canggu.badge'),
        'duration' => __('pkg.seminyak_canggu.duration'),
        'image'    => asset('assets/destinations/kuta.jpg'),
        'price'    => __('pkg.seminyak_canggu.price'),
        'wa_text'  => __('pkg.seminyak_canggu.wa'),
      ],
      [
        'area'     => __('pkg.east_bali.area'),
        'title'    => __('pkg.east_bali.title'),
        'subtitle' => __('pkg.east_bali.subtitle'),
        'badge'    => __('pkg.east_bali.badge'),
        'duration' => __('pkg.east_bali.duration'),
        'image'    => asset('assets/destinations/lempuyang.jpg'),
        'price'    => __('pkg.east_bali.price'),
        'wa_text'  => __('pkg.east_bali.wa'),
      ],
      [
        'area'     => __('pkg.amed.area'),
        'title'    => __('pkg.amed.title'),
        'subtitle' => __('pkg.amed.subtitle'),
        'badge'    => __('pkg.amed.badge'),
        'duration' => __('pkg.amed.duration'),
        'image'    => asset('assets/destinations/skorkling.jpg'),
        'price'    => __('pkg.amed.price'),
        'wa_text'  => __('pkg.amed.wa'),
      ],
      [
        'area'     => __('pkg.north_bali.area'),
        'title'    => __('pkg.north_bali.title'),
        'subtitle' => __('pkg.north_bali.subtitle'),
        'badge'    => __('pkg.north_bali.badge'),
        'duration' => __('pkg.north_bali.duration'),
        'image'    => asset('assets/destinations/bedugul.jpg'),
        'price'    => __('pkg.north_bali.price'),
        'wa_text'  => __('pkg.north_bali.wa'),
      ],
      [
        'area'     => __('pkg.lovina.area'),
        'title'    => __('pkg.lovina.title'),
        'subtitle' => __('pkg.lovina.subtitle'),
        'badge'    => __('pkg.lovina.badge'),
        'duration' => __('pkg.lovina.duration'),
        'image'    => asset('assets/destinations/lovina.jpg'),
        'price'    => __('pkg.lovina.price'),
        'wa_text'  => __('pkg.lovina.wa'),
      ],
      [
        'area'     => __('pkg.penida_west.area'),
        'title'    => __('pkg.penida_west.title'),
        'subtitle' => __('pkg.penida_west.subtitle'),
        'badge'    => __('pkg.penida_west.badge'),
        'duration' => __('pkg.penida_west.duration'),
        'image'    => asset('assets/destinations/nusapenida.jpg'),
        'price'    => __('pkg.penida_west.price'),
        'wa_text'  => __('pkg.penida_west.wa'),
      ],
      [
        'area'     => __('pkg.penida_east.area'),
        'title'    => __('pkg.penida_east.title'),
        'subtitle' => __('pkg.penida_east.subtitle'),
        'badge'    => __('pkg.penida_east.badge'),
        'duration' => __('pkg.penida_east.duration'),
        'image'    => asset('assets/destinations/nusapenida (2).jpg'),
        'price'    => __('pkg.penida_east.price'),
        'wa_text'  => __('pkg.penida_east.wa'),
      ],
      [
        'area'     => __('pkg.lembongan.area'),
        'title'    => __('pkg.lembongan.title'),
        'subtitle' => __('pkg.lembongan.subtitle'),
        'badge'    => __('pkg.lembongan.badge'),
        'duration' => __('pkg.lembongan.duration'),
        'image'    => asset('assets/destinations/nusallembongan.jpg'),
        'price'    => __('pkg.lembongan.price'),
        'wa_text'  => __('pkg.lembongan.wa'),
      ],

    ];

    // Nomor WA kamu (format internasional tanpa +, contoh Indonesia: 62812xxxxxxx)
    $waNumber = '6281234567890';
    @endphp
  
    <div class="pkg-scroll">
      @foreach($packages as $p)
        @php
          $waLink = "https://wa.me/{$waNumber}?text=" . urlencode($p['wa_text']);
        @endphp
  
        <div class="pkg-card">
          <div class="pkg-media">
            <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}">
          </div>
  
          <div class="pkg-body">
            <div class="pkg-meta">{{ $p['area'] }} • {{ $p['duration'] }}</div>
            <div class="pkg-title">{{ $p['title'] }}</div>
            <div class="pkg-sub">{{ $p['subtitle'] }}</div>
  
            <div class="pkg-bottom">
              <div class="pkg-price">{{ $p['price'] }}</div>
            </div>
  
            <div class="pkg-actions">
              <a class="btn btn-success rounded-pill px-3" href="{{ $waLink }}" target="_blank" rel="noopener">
                {{ __("packages.btn.whatsapp") }}
              </a>
              <a class="btn btn-success rounded-pill px-3" href="{{ $waLink }}" target="_blank" rel="noopener">
                {{ __("packages.btn.wechat") }}
              </a>
            </div>
  
            <div class="pkg-note">
              {{ __("packages.note.price") }}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
