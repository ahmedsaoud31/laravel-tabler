@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Navigation
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="box">
        <div class="mb-3">
          <header class="navbar navbar-expand-md navbar-transparent d-print-none">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href=".">
                  <img src="{{ asset('/') }}tabler/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
              </h1>
              <div class="navbar-nav flex-row order-md-last">
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.moon')
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.sun')
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      @include('tabler::icons.svg.bell')
                      <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 1</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Change deprecated html tags to text decoration classes (#29604)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 2</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  justify-content:between ⇒ justify-content:space-between (#29734)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions show">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 3</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Update change-version.js (#29736)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 4</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Regenerate package-lock.json (#29730)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                      <div>Mallory Hulme</div>
                      <div class="mt-1 small text-muted">Geologist IV</div>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Set status</a>
                    <a href="#" class="dropdown-item">Profile & account</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Third
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./#">
                          First
                        </a>
                        <a class="dropdown-item" href="./#">
                          Second
                        </a>
                        <a class="dropdown-item" href="./#">
                          Third
                        </a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Disabled
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </header>
        </div>
        <div class="mb-3">
          <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href=".">
                  <img src="{{ asset('/') }}tabler/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
              </h1>
              <div class="navbar-nav flex-row order-md-last">
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.moon')
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.sun')
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      @include('tabler::icons.svg.bell')
                      <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 1</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Change deprecated html tags to text decoration classes (#29604)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 2</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  justify-content:between ⇒ justify-content:space-between (#29734)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions show">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 3</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Update change-version.js (#29736)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 4</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Regenerate package-lock.json (#29730)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                      <div>Dunn Slane</div>
                      <div class="mt-1 small text-muted">Research Nurse</div>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Set status</a>
                    <a href="#" class="dropdown-item">Profile & account</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Third
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./#">
                          First
                        </a>
                        <a class="dropdown-item" href="./#">
                          Second
                        </a>
                        <a class="dropdown-item" href="./#">
                          Third
                        </a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Disabled
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </header>
        </div>
        <div class="mb-3">
          <header class="navbar navbar-expand-md navbar-dark d-print-none">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href=".">
                  Dashboard
                </a>
              </h1>
              <div class="navbar-nav flex-row order-md-last">
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.moon')
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.sun')
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      @include('tabler::icons.svg.bell')
                      <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 1</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Change deprecated html tags to text decoration classes (#29604)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 2</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  justify-content:between ⇒ justify-content:space-between (#29734)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions show">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 3</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Update change-version.js (#29736)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 4</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Regenerate package-lock.json (#29730)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Set status</a>
                    <a href="#" class="dropdown-item">Profile & account</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-title">
                          Third
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./#">
                          First
                        </a>
                        <a class="dropdown-item" href="./#">
                          Second
                        </a>
                        <a class="dropdown-item" href="./#">
                          Third
                        </a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="./#" >
                        <span class="nav-link-title">
                          Disabled
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </header>
        </div>
        <div class="mb-3">
          <header class="navbar navbar-expand-md navbar-dark d-print-none" style="background: #7952b3">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href=".">
                  <img src="{{ asset('/') }}tabler/static/logo-small-white.svg" width="32" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
              </h1>
              <div class="navbar-nav flex-row order-md-last">
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.moon')
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      @include('tabler::icons.svg.bell')
                      <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 1</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Change deprecated html tags to text decoration classes (#29604)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 2</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  justify-content:between ⇒ justify-content:space-between (#29734)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions show">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 3</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Update change-version.js (#29736)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 4</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Regenerate package-lock.json (#29730)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset('/') }}tabler/static/avatars/001f.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                      <div>Maryjo Lebarree</div>
                      <div class="mt-1 small text-muted">Civil Engineer</div>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Set status</a>
                    <a href="#" class="dropdown-item">Profile & account</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="./#" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        @include('tabler::icons.svg.star')
                      </span>
                      <span class="nav-link-title">
                        First
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./#" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        @include('tabler::icons.svg.star')
                      </span>
                      <span class="nav-link-title">
                        Second
                      </span>
                      <span class="badge badge-sm bg-red">2</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        @include('tabler::icons.svg.star')
                      </span>
                      <span class="nav-link-title">
                        Third
                      </span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="./#">
                        First
                      </a>
                      <a class="dropdown-item" href="./#">
                        Second
                      </a>
                      <a class="dropdown-item" href="./#">
                        Third
                      </a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="./#" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        @include('tabler::icons.svg.star')
                      </span>
                      <span class="nav-link-title">
                        Disabled
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </header>
        </div>
        <div class="mb-3">
          <header class="navbar navbar-expand-md navbar-dark bg-primary d-print-none">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-nav flex-row order-md-last">
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.moon')
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.sun')
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      @include('tabler::icons.svg.bell')
                      <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 1</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Change deprecated html tags to text decoration classes (#29604)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 2</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  justify-content:between ⇒ justify-content:space-between (#29734)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions show">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 3</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Update change-version.js (#29736)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 4</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Regenerate package-lock.json (#29730)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm">EP</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Set status</a>
                    <a href="#" class="dropdown-item">Profile & account</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-title">
                          Third
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./#">
                          First
                        </a>
                        <a class="dropdown-item" href="./#">
                          Second
                        </a>
                        <a class="dropdown-item" href="./#">
                          Third
                        </a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="./#" >
                        <span class="nav-link-title">
                          Disabled
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </header>
        </div>
        <div class="mb-3">
          <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href=".">
                  <img src="{{ asset('/') }}tabler/static/logo-small.svg" width="32" height="32" alt="Tabler" class="navbar-brand-image me-3">
                  Dashboard
                </a>
              </h1>
              <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item d-none d-md-flex me-3">
                  <div class="btn-list">
                    <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                      @include('tabler::icons.svg.brand-github')
                      Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                      @include('tabler::icons.svg.heart')
                      Sponsor
                    </a>
                  </div>
                </div>
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.moon')
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.sun')
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      @include('tabler::icons.svg.bell')
                      <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 1</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Change deprecated html tags to text decoration classes (#29604)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 2</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  justify-content:between ⇒ justify-content:space-between (#29734)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions show">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 3</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Update change-version.js (#29736)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 4</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Regenerate package-lock.json (#29730)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                      <div>Kellie Skingley</div>
                      <div class="mt-1 small text-muted">Teacher</div>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Set status</a>
                    <a href="#" class="dropdown-item">Profile & account</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
              <div class="navbar navbar-light">
                <div class="container-xl">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Third
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./#">
                          First
                        </a>
                        <a class="dropdown-item" href="./#">
                          Second
                        </a>
                        <a class="dropdown-item" href="./#">
                          Third
                        </a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Disabled
                        </span>
                      </a>
                    </li>
                  </ul>
                  <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="." method="get">
                      <div class="input-icon">
                        <span class="input-icon-addon">
                          @include('tabler::icons.svg.search')
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <header class="navbar navbar-expand-md navbar-dark d-print-none">
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
                <div class="nav-item d-none d-md-flex me-3">
                  <div class="btn-list">
                    <a href="https://github.com/tabler/tabler" class="btn btn-dark" target="_blank" rel="noreferrer">
                      @include('tabler::icons.svg.brand-github')
                      Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn btn-dark" target="_blank" rel="noreferrer">
                      @include('tabler::icons.svg.heart')
                      Sponsor
                    </a>
                  </div>
                </div>
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.moon')
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    @include('tabler::icons.svg.sun')
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      @include('tabler::icons.svg.bell')
                      <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 1</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Change deprecated html tags to text decoration classes (#29604)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 2</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  justify-content:between ⇒ justify-content:space-between (#29734)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions show">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 3</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Update change-version.js (#29736)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 4</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                  Regenerate package-lock.json (#29730)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  @include('tabler::icons.svg.star')
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                      <div>Christabel Charlwood</div>
                      <div class="mt-1 small text-muted">Tax Accountant</div>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Set status</a>
                    <a href="#" class="dropdown-item">Profile & account</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
              <div class="navbar navbar-light">
                <div class="container-xl">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Third
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./#">
                          First
                        </a>
                        <a class="dropdown-item" href="./#">
                          Second
                        </a>
                        <a class="dropdown-item" href="./#">
                          Third
                        </a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          @include('tabler::icons.svg.star')
                        </span>
                        <span class="nav-link-title">
                          Disabled
                        </span>
                      </a>
                    </li>
                  </ul>
                  <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="." method="get">
                      <div class="input-icon">
                        <span class="input-icon-addon">
                          @include('tabler::icons.svg.search')
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                      </div>
                    </form>
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