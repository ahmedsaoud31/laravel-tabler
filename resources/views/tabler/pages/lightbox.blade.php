@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Lightbox
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cols-6 g-3">
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/1b73704b282a8ec6.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/1b73704b282a8ec6.jpg" alt="Breakfast served with tea, bread and eggs" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/3d2998219313cd37.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/3d2998219313cd37.jpg" alt="Book, fairy lights" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/6ab3200b14549f8a.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/6ab3200b14549f8a.jpg" alt="Healthy Dinner" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/6d35d9a2bd6c63c2.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/6d35d9a2bd6c63c2.jpg" alt="Aperol Spritz is a cocktail consisting of prosecco, aperitif and soda water" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/8a26974ee6444acd.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/8a26974ee6444acd.jpg" alt="Beautiful blonde woman on a wooden pier by the lake" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/8c13ad59f739558c.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/8c13ad59f739558c.jpg" alt="Still life of mandarin oranges with leaves" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/8fdeb4785d2b82ef.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/8fdeb4785d2b82ef.jpg" alt="Blonde woman having a healthy snack at the wooden pier" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/9f36332564ca271d.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/9f36332564ca271d.jpg" alt="Woman working on a laptop while enjoying a breakfast coffee and chocolate in bed" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/35b88fc04a518c1b.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/35b88fc04a518c1b.jpg" alt="Overhead view of macarons on a marble slab" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/36e273986ed577b8.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/36e273986ed577b8.jpg" alt="Palm trees in Spain" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/75b555b99d5b38c4.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/75b555b99d5b38c4.jpg" alt="Macbook, an iPhone, a coffee, a chocolate and a notebook in a bed" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/546fd146c83f428c.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/546fd146c83f428c.jpg" alt="Man and Woman Holding Ice Creams" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/802a16cdf5ce3551.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/802a16cdf5ce3551.jpg" alt="Female hands typing on the remote wireless computer keyboard" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/0986f97be719fb9a.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/0986f97be719fb9a.jpg" alt="Blonde woman in a black jacket and ripped jeans by a green handrail" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/1194d63fe36a8670.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/1194d63fe36a8670.jpg" alt="Stylish workspace with Macbook Pro" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/1366fdc9b9b277e4.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/1366fdc9b9b277e4.jpg" alt="Restaurants in old town of Nessebar, Bulgaria" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/5358d787242861c4.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/5358d787242861c4.jpg" alt="Small dogs on the grass" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/5614ec7eb9034d04.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/5614ec7eb9034d04.jpg" alt="Fresh lemons" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/56614e12b2a7bd68.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/56614e12b2a7bd68.jpg" alt="Reading book at lake" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/77586f6ffa9fbc5e.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/77586f6ffa9fbc5e.jpg" alt="Sunset over the sea" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/552683cc4e5f0e11.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/552683cc4e5f0e11.jpg" alt="Variety of Pumpkins" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/3664593f945f0d8d.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/3664593f945f0d8d.jpg" alt="Fresh Cherries on a simple plate" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/529078594c496ec5.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/529078594c496ec5.jpg" alt="Closeup of lemon and mint with water" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/a74c41b6fb7fdf34.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/a74c41b6fb7fdf34.jpg" alt="Portraits of white sad cat" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/a159fb2bff29fda4.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/a159fb2bff29fda4.jpg" alt="Summer Campfire" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/a12804818c417ea3.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/a12804818c417ea3.jpg" alt="Dinner at reastaurant: Fish and Roasted Potatoes with Fresh Greek Salad" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/abb0721ac43820f9.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/abb0721ac43820f9.jpg" alt="Green smoke bomb" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/d366fc3df37fe65b.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/d366fc3df37fe65b.jpg" alt="Woman holding a smartphone" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/da6119936bd7f566.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/da6119936bd7f566.jpg" alt="Woman with legs on the coffee table, wearing converse sneakers and working on her laptop" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/e8f47263360d96af.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/e8f47263360d96af.jpg" alt="Early spring garden" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/ecfed9fbf8a58836.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/ecfed9fbf8a58836.jpg" alt="Morning coffee" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/f7f04e6a834b1959.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/f7f04e6a834b1959.jpg" alt="Blurred city lights reflected in the water at night" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/f61b5f865012f200.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/f61b5f865012f200.jpg" alt="A Trip to Venice, Italy" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/f746d9f7fa60be79.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/f746d9f7fa60be79.jpg" alt="Umbrellas and lounge chairs on Sunny Beach, Bulgaria" class="rounded">
          </a>
        </div>
        <div class="col">
          <a data-fslightbox="gallery" href="{{ asset('/') }}tabler/static/photos/ff54b43b56632883.jpg">
            <img src="{{ asset('/') }}tabler/static/photos/ff54b43b56632883.jpg" alt="Seagull on a car roof" class="rounded">
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')
  <script src="{{ asset('tabler/libs/fslightbox/index.js') }}" defer></script>
@endpush

@push('scripts')

@endpush