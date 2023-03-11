@extends('tabler.layouts.app')

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
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                      </span>
                      <span class="nav-link-title">
                        First
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./#" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Second
                      </span>
                      <span class="badge badge-sm bg-red">2</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                      <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                      Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor
                    </a>
                  </div>
                </div>
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                          <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
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
                      <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                      Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn btn-dark" target="_blank" rel="noreferrer">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor
                    </a>
                  </div>
                </div>
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                          First
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./#" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                          Second
                        </span>
                        <span class="badge badge-sm bg-red">2</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
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
                          <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
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