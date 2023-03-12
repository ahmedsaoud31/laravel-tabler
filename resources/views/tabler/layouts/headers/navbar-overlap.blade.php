<div class="page">
  <header class="navbar navbar-expand-md navbar-dark navbar-overlap d-print-none">
    <div class="container-xl">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
        <a href=".">
          <img src="{{ asset('/') }}tabler/static/logo-white.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </h1>
      <div class="navbar-nav flex-row order-md-last">
        <div class="d-none d-md-flex">
          @include('tabler::layouts.headers.sub.mode')
          @include('tabler::layouts.headers.sub.notifications-menu')
        </div>
        @include('tabler::layouts.headers.sub.profile-menu')
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
          <ul class="navbar-nav">
            @include('tabler::layouts.navbars.navbar')
          </ul>
        </div>
      </div>
    </div>
  </header>