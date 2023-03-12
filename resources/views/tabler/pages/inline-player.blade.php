@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Inline Player
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Youtube Player</h3>
              <div id="player-youtube" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Vimeo Player</h3>
              <div id="player-charlotte" data-plyr-provider="vimeo" data-plyr-embed-id="707012696"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')
  <script src="{{ asset('tabler/libs/plyr/dist/plyr.min.js') }}" defer></script>
@endpush

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.Plyr && (new Plyr('#player-youtube'));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.Plyr && (new Plyr('#player-charlotte'));
  });
  // @formatter:on
</script>
@endpush

@push('css_libs_before')
<link href="{{ asset('tabler') }}/libs/plyr/dist/plyr.css" rel="stylesheet"/>
@endpush