<div class="page">
  <div class="sticky-top">
    <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="{{ config('tabler.dashboard_name') }}">
            <img src="{{ asset('/') }}tabler/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item d-none d-md-flex me-3">
            @include('tabler::layouts.headers.sub.sponsor-links')
          </div>
          <div class="d-none d-md-flex">
            @include('tabler::layouts.headers.sub.mode')
            @include('tabler::layouts.headers.sub.notifications-menu')
          </div>
          @include('tabler::layouts.headers.sub.profile-menu')
        </div>
      </div>
    </header>
    <div class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
          <div class="container-xl">
            <ul class="navbar-nav">
              @include('tabler::layouts.navbars.navbar')
            </ul>
            @include('tabler::layouts.headers.sub.search')
          </div>
        </div>
      </div>
    </div>
  </div>