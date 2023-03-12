@extends('tabler::layouts.general')

@section('content')
<div class="page page-center">
  <div class="container-tight py-4">
    <div class="empty">
      <div class="empty-img"><img src="{{ asset('/') }}tabler/static/illustrations/undraw_quitting_time_dm8t.svg" height="128"  alt="">
      </div>
      <p class="empty-title">Temporarily down for maintenance</p>
      <p class="empty-subtitle text-muted">
        Sorry for the inconvenience but we’re performing some maintenance at the moment. We’ll be back online shortly!
      </p>
      <div class="empty-action">
        <a href="./." class="btn btn-primary">
          @include('tabler::icons.svg.arrow-left')
          Take me home
        </a>
      </div>
    </div>
  </div>
</div>
@endsection