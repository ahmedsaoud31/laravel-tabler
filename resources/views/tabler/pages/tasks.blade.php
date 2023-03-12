@extends('tabler::layouts.app')

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
            @include('tabler::icons.svg.plus')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          7
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.message')
                            2</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                            @include('tabler::icons.svg.calendar')
                            10 Sep
                          </a>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          6
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          34
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.message')
                            4</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.activity')
                            1/3
                          </a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.message')
                            11</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="divide-y-2 mt-4">
                      <div>
                        @include('tabler::icons.svg.check')
                        <span class="text-muted text-decoration-line-through">Implement new designs</span>
                      </div>
                      <div>
                        @include('tabler::icons.svg.check')
                        Usability testing
                      </div>
                      <div>
                        @include('tabler::icons.svg.check')
                        Design navigation changes
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card card-sm">
                  <div class="ribbon ribbon-top ribbon-bookmark bg-yellow">
                    @include('tabler::icons.svg.star')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          11
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.message')
                            6</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.message')
                            11</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          6
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.message')
                            9</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          5
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.message')
                            6</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                            @include('tabler::icons.svg.calendar')
                            10 Jan
                          </a>
                        </div>
                        <div class="col-auto text-muted">
                          <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.message')
                            6</a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          1
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          7
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.activity')
                            1/3
                          </a>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="divide-y-2 mt-4">
                      <div>
                        @include('tabler::icons.svg.check')
                        <span class="text-muted text-decoration-line-through">Find out the old contract documents</span>
                      </div>
                      <div>
                        @include('tabler::icons.svg.check')
                        Organize meeting sales associates to understand need in detail
                      </div>
                      <div>
                        @include('tabler::icons.svg.check')
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
                              @include('tabler::icons.svg.heart')
                            </span>
                            <span class="switch-icon-b text-red">
                              @include('tabler::icons.svg.heart')
                            </span>
                          </button>
                          4
                        </div>
                        <div class="col-auto">
                          <a href="#" class="link-muted">
                            @include('tabler::icons.svg.share')
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