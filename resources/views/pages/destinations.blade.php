@extends('layouts.app')
@section('title','Home | Real Bali Driver')

@section('content')
<div class="dest-wrap">
      <section class="mb-4">
    <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
      <div>
        <p class="text-uppercase text-secondary mb-1" style="letter-spacing:.12em;font-size:12px;">
          {{ __("Bali destination map") }}
        </p>
        <h2 class="fw-bold mb-0">{{ __("Explore Bali by map") }}</h2>
      </div>
      <p class="text-secondary mb-0" style="max-width:440px;font-size:14px;">
        {{ __("text-secondary") }}
      </p>
    </div>
  </section>
<div class="dest-tiles" id="destinations">
  @php
    $destCards = [
  [
    'title' => __('Nature'),
    'subtitle' => __('Rice Terraces • Village Views'),
    'images' => [
      asset('assets/destinations/tegallalang.jpg'),
      asset('assets/destinations/tegalalang.jpg'),
      asset('assets/destinations/penglipuran.jpg'),
    ],
  ],
  [
    'title' => __('Beach Club'),
    'subtitle' => __('Sunset • Chill • Music'),
    'badge' => __('Lifestyle'),
    'images' => [
      asset('assets/destinations/beachclub1 (1).jpg'),
      asset('assets/destinations/beachclub1 (2).jpg'),
      asset('assets/destinations/beachclub1 (3).jpg'),
    ],
  ],
  [
    'title' => __('Beach'),
    'subtitle' => __('White Sand • Blue Ocean'),
    'badge' => __('Beach'),
    'images' => [
      asset('assets/destinations/uluwatu.jpg'),
      asset('assets/destinations/nusapenida.jpg'),
      asset('assets/destinations/nusapenida (2).jpg'),
    ],
  ],
  [
    'title' => __('Relax'),
    'subtitle' => __('Relax • Healing • Massage'),
    'badge' => __('Relax'),
    'images' => [
      asset('assets/destinations/tirtaempul.jpg'),
      asset('assets/destinations/ubudyoga.jpg'),
      asset('assets/destinations/spa.jpg'),
    ],
  ],
  [
    'title' => __('Adventure'),
    'subtitle' => __('ATV • Rafting • Hiking'),
    'badge' => __('Action'),
    'images' => [
      asset('assets/destinations/atv.jpeg'),
      asset('assets/destinations/rafting.jpg'),
      asset('assets/destinations/baturjeep.jpg'),
      asset('assets/destinations/watersport.jpg'),
      asset('assets/destinations/swing.png'),
    ],
  ],
  [
    'title' => __('Scenic'),
    'subtitle' => __('Waterfall • Lake • Forest'),
    'badge' => __('Scenic'),
    'images' => [
      asset('assets/destinations/forest.jpg'),
      asset('assets/destinations/lake.jpg'),
      asset('assets/destinations/airterjun.jpg'),
    ],
  ],
  [
    'title' => __('Temple'),
    'subtitle' => __('Temple • Culture • Heritage'),
    'badge' => __('Culture'),
    'images' => [
      asset('assets/destinations/besakih.jpg'),
      asset('assets/destinations/lempuyang.jpg'),
      asset('assets/destinations/tanahlot.jpg'),
    ],
  ],
  [
    'title' => __('Shopping'),
    'subtitle' => __('Souvenir • Market • Mall'),
    'badge' => __('City'),
    'images' => [
      asset('assets/destinations/ubudmarket.jpg'),
      asset('assets/destinations/ubudmarket1.jpg'),
    ],
  ],
  [
    'title' => __('Atraksi'),
    'subtitle' => __('Show • Park • Experience'),
    'badge' => __('Fun'),
    'images' => [
      asset('assets/destinations/kecak.jpg'),
      asset('assets/destinations/barongdance.jpg'),
      asset('assets/destinations/balisafari.jpg'),
    ],
  ],
  [
  'title' => __('Restoran'),
  'subtitle' => __('Local Food • Seafood • Fine Dining'),
  'badge' => __('Food'),
  'images' => [
    asset('assets/destinations/restaurant (1).jpg'),
    asset('assets/destinations/restaurant (2).jpg'),
    asset('assets/destinations/restaurant (3).jpg'),
  ],
],

];

$mapSpotsBase = [
    ['key' => 'uluwatu',              'lat' => -8.8289, 'lng' => 115.0840],
    ['key' => 'kelingking',           'lat' => -8.7485, 'lng' => 115.4940],
    ['key' => 'tegallalang',          'lat' => -8.4357, 'lng' => 115.2790],
    ['key' => 'lempuyang',            'lat' => -8.4148, 'lng' => 115.6196],
    ['key' => 'seminyak_canggu',      'lat' => -8.6766, 'lng' => 115.1302],

    ['key' => 'atv_ubud',             'lat' => -8.5085, 'lng' => 115.2620],
    ['key' => 'bali_swing',           'lat' => -8.4745, 'lng' => 115.2630],
    ['key' => 'monkey_forest',        'lat' => -8.5190, 'lng' => 115.2580],
    ['key' => 'lovina_dolphin',       'lat' => -8.1610, 'lng' => 115.0270],
    ['key' => 'kecak_uluwatu',        'lat' => -8.8280, 'lng' => 115.0865],
    ['key' => 'beratan_ulun_danu',    'lat' => -8.2750, 'lng' => 115.1668],
    ['key' => 'mount_batur_view',     'lat' => -8.2390, 'lng' => 115.3770],
    ['key' => 'batur_jeep',           'lat' => -8.2405, 'lng' => 115.3795],
    ['key' => 'amed_diving',          'lat' => -8.3370, 'lng' => 115.6830],
    ['key' => 'tanjung_benoa',        'lat' => -8.7705, 'lng' => 115.2205],

    ['key' => 'gitgit',               'lat' => -8.1706, 'lng' => 115.1343],
    ['key' => 'banyumala',            'lat' => -8.2216, 'lng' => 115.0917],
    ['key' => 'nungnung',             'lat' => -8.3261, 'lng' => 115.2330],
    ['key' => 'tukad_cepung',         'lat' => -8.4318, 'lng' => 115.3727],

    ['key' => 'jimbaran',             'lat' => -8.7832, 'lng' => 115.1592],
    ['key' => 'melasti',              'lat' => -8.8488, 'lng' => 115.1708],

    ['key' => 'goa_lawah',            'lat' => -8.5467, 'lng' => 115.4548],
    ['key' => 'taman_ayun',           'lat' => -8.5408, 'lng' => 115.1755],
    ['key' => 'goa_gajah',            'lat' => -8.5211, 'lng' => 115.2906],
    ['key' => 'tenganan',             'lat' => -8.4372, 'lng' => 115.5721],

    ['key' => 'ubud_market',          'lat' => -8.5065, 'lng' => 115.2632],
    ['key' => 'bali_safari',          'lat' => -8.5778, 'lng' => 115.3456],
    ['key' => 'bali_bird_park',       'lat' => -8.5968, 'lng' => 115.2822],
    ['key' => 'bali_zoo',             'lat' => -8.5932, 'lng' => 115.2854],
    ['key' => 'gwk',                  'lat' => -8.8079, 'lng' => 115.1683],

    ['key' => 'nusa_lembongan',       'lat' => -8.6824, 'lng' => 115.4524],
    ['key' => 'nusa_ceningan',        'lat' => -8.7040, 'lng' => 115.4526],

    ['key' => 'penglipuran',          'lat' => -8.4451, 'lng' => 115.2834],
    ['key' => 'gilimanuk',            'lat' => -8.1654, 'lng' => 114.4299],
    ['key' => 'sanur',                'lat' => -8.6925, 'lng' => 115.2627],

    ['key' => 'bebek_tepi_sawah',     'lat' => -8.4927, 'lng' => 115.2793],
    ['key' => 'bebek_bengil',         'lat' => -8.5166, 'lng' => 115.2633],
    ['key' => 'la_plancha',           'lat' => -8.6964, 'lng' => 115.1673],
    ['key' => 'mamasan',              'lat' => -8.6846, 'lng' => 115.1737],

    ['key' => 'ayana',                'lat' => -8.7720, 'lng' => 115.1645],
    ['key' => 'the_edge',             'lat' => -8.8406, 'lng' => 115.1052],
    ['key' => 'kayon_resort',         'lat' => -8.4611, 'lng' => 115.2908],
    ['key' => 'hanging_gardens',      'lat' => -8.4440, 'lng' => 115.2444],
    ['key' => 'alila_uluwatu',        'lat' => -8.8419, 'lng' => 115.1198],

    ['key' => 'puri_pupuan',          'lat' => -8.4170, 'lng' => 115.1700],
    ['key' => 'pupuan_boutique',      'lat' => -8.4178, 'lng' => 115.1755],
    ['key' => 'jatiluwih_green',      'lat' => -8.3698, 'lng' => 115.1352],
];

// Gabungkan koordinat + teks hasil translate
$mapSpots = [];
foreach ($mapSpotsBase as $spot) {
    $key = $spot['key'];
    $mapSpots[] = [
        'name'     => __("dest.map.$key.name"),
        'lat'      => $spot['lat'],
        'lng'      => $spot['lng'],
    ];
}
  @endphp

  @foreach($destCards as $i => $card)
    <div class="dest-tile">
      <div class="dest-tile-media">
        <img
          src="{{ $card['images'][0] }}"
          alt="{{ $card['title'] }}"
          data-rotator="dest"
          data-interval="5000"
          data-images='@json($card["images"])'
        />
      </div>
      <div class="dest-tile-body">
        <div class="dest-tile-title">{{ $card['title'] }}</div>
        <div class="dest-tile-meta">
          <span class="dest-tile-location">{{ $card['subtitle'] }}</span>
        </div>
      </div>
    </div>
  @endforeach
</div>
    <section class="mb-4">
      {{-- div inilah yang akan diisi Leaflet --}}
      <div id="baliMap" class="dest-map"></div>
    </section>
</div>

 <script>
  (function () {
    const nodes = document.querySelectorAll('img[data-rotator="dest"]');

    nodes.forEach((img, cardIndex) => {
      let images = [];
      try {
        images = JSON.parse(img.getAttribute('data-images') || '[]');
      } catch (e) {
        images = [];
      }

      // Kalau gambarnya kurang dari 2, gak usah di-rotasi
      if (!images.length || images.length < 2) return;

      const interval = parseInt(img.getAttribute('data-interval') || '5000', 10);
      let idx = 0;

      // PRELOAD gambar biar pas ganti gak kedip / telat load
      images.forEach(src => {
        const pic = new Image();
        pic.src = src;
      });

      // Set gambar awal (untuk jaga-jaga kalau src sekarang bukan index 0)
      img.src = images[0];
      img.style.opacity = '1';
      img.style.transform = 'scale(1.02)';

      // Biar tiap kartu gak ganti barengan persis -> kasih delay kecil per card
      const startDelay = cardIndex * 400; // 0ms, 400ms, 800ms, dst.

      setTimeout(() => {
        setInterval(() => {
          idx = (idx + 1) % images.length;

          // 1) fade out halus + sedikit zoom
          img.style.opacity = '0';
          img.style.transform = 'scale(1.04)';

          // 2) setelah setengah durasi, ganti src
          setTimeout(() => {
            img.src = images[idx];
          }, 300); // setengah dari 600ms

          // 3) lalu fade in lagi + balik ke scale normal
          setTimeout(() => {
            img.style.opacity = '1';
            img.style.transform = 'scale(1.02)';
          }, 310);

        }, interval);
      }, startDelay);
    });
  })();

   (function () {
    const mapElement = document.getElementById('baliMap');
    if (!mapElement || typeof L === 'undefined') return;

    // pusat Bali
    const map = L.map('baliMap', {
      scrollWheelZoom: false
    }).setView([-8.4095, 115.1889], 9);

    // tile dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const contactUrl = "{{ route('contact') }}";

    // data spot dari PHP -> JS
    const spots = @json($mapSpots);

    spots.forEach(s => {
      const marker = L.marker([s.lat, s.lng]).addTo(map);

      const html = `
        <div style="min-width:180px">
          <strong>${s.name}</strong><br>
        </div>
      `;

      marker.bindPopup(html);
    });
  })();
</script>
@endsection
