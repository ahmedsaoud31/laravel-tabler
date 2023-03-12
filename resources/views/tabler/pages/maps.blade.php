@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Maps
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
              <div class="card-title">Simple map</div>
              <div class="ratio ratio-16x9">
                <div>
                  <div id="map-simple" class="w-100 h-100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title">Light map style</div>
              <div class="ratio ratio-16x9">
                <div>
                  <div id="map-light" class="w-100 h-100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="ratio ratio-21x9">
              <div>
                <div id="map-markers" class="w-100 h-100 rounded"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="ratio ratio-21x9">
              <div>
                <div id="map-card" class="w-100 h-100 rounded"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')
<script src="https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.js" defer></script>
@endpush

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function() {
    mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZWNhbG0iLCJhIjoiSzRiOVJvQSJ9.BUVkTT6IYs83xSUs4H7bjQ';
    var map = new mapboxgl.Map({
      container: 'map-simple',
      style: 'mapbox://styles/mapbox/streets-v11',
      zoom: 13,
      center: [13.404900, 52.518827],
    });
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function() {
    mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZWNhbG0iLCJhIjoiSzRiOVJvQSJ9.BUVkTT6IYs83xSUs4H7bjQ';
    var map = new mapboxgl.Map({
      container: 'map-light',
      style: 'mapbox://styles/mapbox/light-v10',
      zoom: 11,
      center: [-0.2416782, 51.5285582],
    });
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function() {
    mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZWNhbG0iLCJhIjoiSzRiOVJvQSJ9.BUVkTT6IYs83xSUs4H7bjQ';
    var map = new mapboxgl.Map({
      container: 'map-markers',
      style: 'mapbox://styles/mapbox/light-v10',
      zoom: 1,
      center: [0, 0],
    });
    new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([-58.666667, -34.58333333]).addTo(map);
    new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([16.366667, 48.2]).addTo(map);
    new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([116.383333, 39.91666667]).addTo(map);
    new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([149.133333, -35.26666667]).addTo(map);
    new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([58.583333, 23.61666667]).addTo(map);
    new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([-77, 38.883333]).addTo(map);
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function() {
    mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZWNhbG0iLCJhIjoiSzRiOVJvQSJ9.BUVkTT6IYs83xSUs4H7bjQ';
    var map = new mapboxgl.Map({
      container: 'map-card',
      style: 'mapbox://styles/mapbox/satellite-v9',
      zoom: 1,
      center: [0, 0],
    });
  });
  // @formatter:on
</script>
@endpush