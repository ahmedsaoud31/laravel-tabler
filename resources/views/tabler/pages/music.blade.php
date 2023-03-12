@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Music components
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="list-group card-list-group">
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    1
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/a4fb1d293bd8d3fd38352418c50fcf1369a7a87d.jpg" class="rounded" alt="Górą ty" width="40" height="40">
                  </div>
                  <div class="col">
                    Górą ty
                    <div class="text-muted">
                      GOLEC UORKIESTRA,
                      Gromee,
                      Bedoes
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    03:41
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    2
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/f04bb6fba32e89475d9981007aff21e13745dec2.jpg" class="rounded" alt="High Life" width="40" height="40">
                  </div>
                  <div class="col">
                    High Life
                    <div class="text-muted">
                      Daft Punk
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    03:21
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    3
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/c3f13b4f7a674abda9aa36fd72fa341e918c0f26.jpg" class="rounded" alt="Houdini" width="40" height="40">
                  </div>
                  <div class="col">
                    Houdini
                    <div class="text-muted">
                      Foster The People
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    03:23
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    4
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/4d4ab714dfca7b9df41d4a02a2c39394ebdeb6b6.jpg" class="rounded" alt="Safe And Sound" width="40" height="40">
                  </div>
                  <div class="col">
                    Safe And Sound
                    <div class="text-muted">
                      Capital Cities
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    03:12
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    5
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/79b2422b467ad20c07576e8f8f5f2f1692ac7142.jpg" class="rounded" alt="Partied Out" width="40" height="40">
                  </div>
                  <div class="col">
                    Partied Out
                    <div class="text-muted">
                      Con Bro Chill
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    03:17
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    6
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/aac97056fc02fe02c7e95f7ff77a07c6e82f7d6e.jpg" class="rounded" alt="Runaway (U &amp; I)" width="40" height="40">
                  </div>
                  <div class="col">
                    Runaway (U & I)
                    <div class="text-muted">
                      Galantis
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    03:47
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    7
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/859337f0eaa49b1ad6ed76719b7c1ae26d6412c8.jpg" class="rounded" alt="Light It Up (feat. Nyla &amp; Fuse ODG) - Remix" width="40" height="40">
                  </div>
                  <div class="col">
                    Light It Up (feat. Nyla & Fuse ODG) - Remix
                    <div class="text-muted">
                      Major Lazer,
                      Nyla,
                      Fuse ODG
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    02:46
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    8
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/2e7357491deb8a6796ee8d9181ca9ea1f407bb5f.jpg" class="rounded" alt="Hangover" width="40" height="40">
                  </div>
                  <div class="col">
                    Hangover
                    <div class="text-muted">
                      Taio Cruz,
                      Flo Rida
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    04:04
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    9
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/c976bfc96d5e44820e553a16a6097cd02a61fd2f.jpg" class="rounded" alt="Shape of You" width="40" height="40">
                  </div>
                  <div class="col">
                    Shape of You
                    <div class="text-muted">
                      Ed Sheeran
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    03:53
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    10
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/c9a8350feee77e9345eec4155cddc96694803d1a.jpg" class="rounded" alt="Alone" width="40" height="40">
                  </div>
                  <div class="col">
                    Alone
                    <div class="text-muted">
                      Alan Walker
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    02:41
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    11
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/fe4ee21d30450829e5b172e806b3c1e14ca1e5f3.jpg" class="rounded" alt="Langrennsfar" width="40" height="40">
                  </div>
                  <div class="col">
                    Langrennsfar
                    <div class="text-muted">
                      Ylvis
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    02:43
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row g-2 align-items-center">
                  <div class="col-auto fs-3">
                    12
                  </div>
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/f4e96086f44c4dff1758b1fc1338cd88c1b5ce9c.jpg" class="rounded" alt="Skibidi - Romantic Edition" width="40" height="40">
                  </div>
                  <div class="col">
                    Skibidi - Romantic Edition
                    <div class="text-muted">
                      Little Big
                    </div>
                  </div>
                  <div class="col-auto text-muted">
                    03:12
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary">
                      <button class="switch-icon" data-bs-toggle="switch-icon">
                        <span class="switch-icon-a text-muted">
                          @include('tabler::icons.svg.heart')
                        </span>
                        <span class="switch-icon-b text-red">
                          @include('tabler::icons.svg.heart')
                        </span>
                      </button>
                    </a>
                  </div>
                  <div class="col-auto lh-1">
                    <div class="dropdown">
                      <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                        @include('tabler::icons.svg.dots')
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <h3 class="mb-3">Top tracks</h3>
          <div class="row row-cards">
            <div class="col-md-6 col-lg-12">
              <div class="card">
                <div class="row row-0">
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/c976bfc96d5e44820e553a16a6097cd02a61fd2f.jpg" class="rounded-start" alt="Shape of You" width="80" height="80">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      Shape of You
                      <div class="text-muted">
                        Ed Sheeran
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-12">
              <div class="card">
                <div class="row row-0">
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/c9a8350feee77e9345eec4155cddc96694803d1a.jpg" class="rounded-start" alt="Alone" width="80" height="80">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      Alone
                      <div class="text-muted">
                        Alan Walker
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-12">
              <div class="card">
                <div class="row row-0">
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/fe4ee21d30450829e5b172e806b3c1e14ca1e5f3.jpg" class="rounded-start" alt="Langrennsfar" width="80" height="80">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      Langrennsfar
                      <div class="text-muted">
                        Ylvis
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-12">
              <div class="card">
                <div class="row row-0">
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/f4e96086f44c4dff1758b1fc1338cd88c1b5ce9c.jpg" class="rounded-start" alt="Skibidi - Romantic Edition" width="80" height="80">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      Skibidi - Romantic Edition
                      <div class="text-muted">
                        Little Big
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-12">
              <div class="card">
                <div class="row row-0">
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/73f4938130140174efb1cc0a82ececb277e40932.jpg" class="rounded-start" alt="Miracle" width="80" height="80">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      Miracle
                      <div class="text-muted">
                        Caravan Palace
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-12">
              <div class="card">
                <div class="row row-0">
                  <div class="col-auto">
                    <img src="{{ asset('/') }}tabler/static/tracks/cfb2a532996512eff95c4b0d566d067384aaa441.jpg" class="rounded-start" alt="Different World (feat. CORSAK)" width="80" height="80">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      Different World (feat. CORSAK)
                      <div class="text-muted">
                        Alan Walker,
                        K-391,
                        Sofia Carson,
                        CORSAK
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection