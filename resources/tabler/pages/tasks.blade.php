@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Tabler Inc. Tasks
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-12 col-md-auto ms-auto d-print-none">
          <a href="#" class="btn btn-primary">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Add board
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <ul class="nav nav-bordered mb-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">View all</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Marketing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Development</a>
        </li>
      </ul>
      <div class="row">
        <div class="col-12 col-md-6 col-lg">
          <h2 class="mb-3">To Do</h2>
          <div class="mb-4">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-body">
                    <h3 class="card-title">Enable analytics tracking</h3>
                    <div class="ratio ratio-16x9">
                      <img src="{{ asset('/') }}tabler/static/projects/dashboard-1.png" class="rounded object-cover" alt="Enable analytics tracking">
                    </div>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded">EP</span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)"></span>
                            <span class="avatar avatar-xs avatar-rounded">HS</span>
                          </div>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          7
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                            2</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-body">
                    <h3 class="card-title">User should receive a daily digest email</h3>
                    <div class="text-muted">Dedicated form for a category of users that will perform actions.</div>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-warning">
                            <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                            10 Sep
                          </a>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          6
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-status-top bg-yellow"></div>
                  <div class="card-body">
                    <h3 class="card-title">Change license and remove references to products</h3>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale active" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          34
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                            4</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg">
          <h2 class="mb-3">In Progress</h2>
          <div class="mb-4">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-status-top bg-green"></div>
                  <div class="card-body">
                    <h3 class="card-title">Write a release note for Admin v1.0</h3>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h4l3 8l4 -16l3 8h4" /></svg>
                            1/3
                          </a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                            11</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="divide-y-2 mt-4">
                      <div>
                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                        <span class="text-muted text-decoration-line-through">Implement new designs</span>
                      </div>
                      <div>
                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                        Usability testing
                      </div>
                      <div>
                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                        Design navigation changes
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="ribbon ribbon-top ribbon-bookmark bg-yellow">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Product Update - Q4 2021</h3>
                    <div class="text-muted">Dedicated form for a category of users that will perform actions.</div>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)"></span>
                          </div>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          11
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                            6</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-body">
                    <h3 class="card-title">Code HTML email template for welcome email</h3>
                    <div class="ratio ratio-16x9">
                      <img src="{{ asset('/') }}tabler/static/projects/dashboard-3.png" class="rounded object-cover" alt="Code HTML email template for welcome email">
                    </div>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                            11</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg">
          <h2 class="mb-3">Test</h2>
          <div class="mb-4">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-status-top bg-red"></div>
                  <div class="card-body">
                    <h3 class="card-title">Design new diagrams</h3>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded">HS</span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)"></span>
                          </div>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          6
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                            9</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-body">
                    <h3 class="card-title">Improve animation loader</h3>
                    <div class="ratio ratio-16x9">
                      <img src="{{ asset('/') }}tabler/static/projects/dashboard-2.png" class="rounded object-cover" alt="Improve animation loader">
                    </div>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/004f.jpg)"></span>
                          </div>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale active" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          5
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                            6</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-body">
                    <h3 class="card-title">iOS App home page</h3>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                          </div>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-status-top bg-blue"></div>
                  <div class="card-body">
                    <h3 class="card-title">Changelog 1.7</h3>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-warning">
                            <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                            10 Jan
                          </a>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                            6</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg">
          <h2 class="mb-3">Completed</h2>
          <div class="mb-4">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-body">
                    <h3 class="card-title">Enable analytics tracking</h3>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
                          </div>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          1
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-body">
                    <h3 class="card-title">Coordinate with business development</h3>
                    <div class="text-muted">This content is a little bit longer.</div>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                            <span class="avatar avatar-xs avatar-rounded">JL</span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                          </div>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale active" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          7
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h4l3 8l4 -16l3 8h4" /></svg>
                            1/3
                          </a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="divide-y-2 mt-4">
                      <div>
                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                        <span class="text-muted text-decoration-line-through">Find out the old contract documents</span>
                      </div>
                      <div>
                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                        Organize meeting sales associates to understand need in detail
                      </div>
                      <div>
                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                        Make sure to cover every small details
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="card-body">
                    <h3 class="card-title">Managing teams</h3>
                    <div class="text-muted">Publishing industries for previewing layouts and visual <a href="#">#family</a> 🔥</div>
                    <div class="mt-4">
                      <div class="row">
                        <div class="col">
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)"></span>
                            <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/004f.jpg)"></span>
                          </div>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            </span>
                          </button>
                          4
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="12" r="3" /><circle cx="18" cy="6" r="3" /><circle cx="18" cy="18" r="3" /><line x1="8.7" y1="10.7" x2="15.3" y2="7.3" /><line x1="8.7" y1="13.3" x2="15.3" y2="16.7" /></svg>
                          </a>
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
  </div>
@endsection