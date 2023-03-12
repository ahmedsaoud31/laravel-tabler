@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper page-wrapper-full">
  <div class="container-xl">
  </div>
  <div class="page-body">
    <div class="map flex-fill" id="map-google"></div>
  </div>
@endsection

@push('libs')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL-BY8-sq12m0S9H-S_yMqDmcun3A9znw" defer></script>
@endpush

@push('scripts')
<script>
  // @formatter:off
  let map;
  document.addEventListener("DOMContentLoaded", function() {
    map = new google.maps.Map(document.getElementById("map-google"), {
      center: { lat: -34.397, lng: 150.644 },
      zoom: 8,
    });
  });
  // @formatter:on
</script>
@endpush