<div class="page">
  <aside class="navbar navbar-vertical navbar-expand-lg navbar-transparent">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark">
        <a href=".">
          <img src="{{ asset('/') }}tabler/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </h1>
      <div class="navbar-nav flex-row d-lg-none">
        <div class="nav-item d-none d-lg-flex me-3">
          @include('tabler.layouts.headers.sub.sponsor-links')
        </div>
        <div class="d-none d-lg-flex">
          @include('tabler.layouts.headers.sub.mode')
          @include('tabler.layouts.headers.sub.notifications-menu')
        </div>
        @include('tabler.layouts.headers.sub.profile-menu')
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="navbar-nav pt-lg-3">
          @include("tabler.layouts.navbars.navbar")
        </ul>
      </div>
    </div>
  </aside>