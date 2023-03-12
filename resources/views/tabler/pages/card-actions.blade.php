@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Card actions
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Sample card</h3>
            </div>
            <div class="card-body p-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" stroke="var(--tblr-border-color, #b8cef1)">
                <!--  <rect x=".5" y=".5" width="399" height="199" fill="#fff" rx="2"></rect>-->
                <line x1="0" y1="0" x2="400" y2="200"></line>
                <line x1="0" y1="200" x2="400" y2="0"></line>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Card with action</h3>
              <div class="card-actions">
                <a href="#" class="btn btn-primary">
                  @include('tabler::icons.svg.plus')
                  Add new
                </a>
              </div>
            </div>
            <div class="card-body p-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" stroke="var(--tblr-border-color, #b8cef1)">
                <!--  <rect x=".5" y=".5" width="399" height="199" fill="#fff" rx="2"></rect>-->
                <line x1="0" y1="0" x2="400" y2="200"></line>
                <line x1="0" y1="200" x2="400" y2="0"></line>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Cart title</h3>
              <div class="card-actions">
                <a href="#" class="btn">
                  @include('tabler::icons.svg.phone')
                  Phone
                </a>
                <a href="#" class="btn">
                  @include('tabler::icons.svg.mail')
                  Email
                </a>
              </div>
            </div>
            <div class="card-body p-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" stroke="var(--tblr-border-color, #b8cef1)">
                <!--  <rect x=".5" y=".5" width="399" height="199" fill="#fff" rx="2"></rect>-->
                <line x1="0" y1="0" x2="400" y2="200"></line>
                <line x1="0" y1="200" x2="400" y2="0"></line>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <div>
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="card-title">Paweł Kuna</div>
                    <div class="card-subtitle">UI Designer</div>
                  </div>
                </div>
              </div>
              <div class="card-actions">
                <a href="#" class="btn">
                  @include('tabler::icons.svg.phone')
                  Phone
                </a>
                <a href="#" class="btn">
                  @include('tabler::icons.svg.mail')
                  Email
                </a>
              </div>
            </div>
            <div class="card-body p-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" stroke="var(--tblr-border-color, #b8cef1)">
                <!--  <rect x=".5" y=".5" width="399" height="199" fill="#fff" rx="2"></rect>-->
                <line x1="0" y1="0" x2="400" y2="200"></line>
                <line x1="0" y1="200" x2="400" y2="0"></line>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <div>
                <h3 class="card-title">
                  With description
                </h3>
                <p class="card-subtitle">
                  Lorem ipsum dolor sit amet consectetur adipisicing.
                </p>
              </div>
            </div>
            <div class="card-body p-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" stroke="var(--tblr-border-color, #b8cef1)">
                <!--  <rect x=".5" y=".5" width="399" height="199" fill="#fff" rx="2"></rect>-->
                <line x1="0" y1="0" x2="400" y2="200"></line>
                <line x1="0" y1="200" x2="400" y2="0"></line>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <div>
                <h3 class="card-title">
                  With description and action
                </h3>
                <p class="card-subtitle">
                  Lorem ipsum dolor sit amet consectetur adipisicing.
                </p>
              </div>
              <div class="card-actions">
                <a href="#" class="btn btn-primary">
                  Create new job
                </a>
              </div>
            </div>
            <div class="card-body p-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" stroke="var(--tblr-border-color, #b8cef1)">
                <!--  <rect x=".5" y=".5" width="399" height="199" fill="#fff" rx="2"></rect>-->
                <line x1="0" y1="0" x2="400" y2="200"></line>
                <line x1="0" y1="200" x2="400" y2="0"></line>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <div>
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="card-title">Dunn Slane</div>
                    <div class="card-subtitle">Research Nurse</div>
                  </div>
                </div>
              </div>
              <div class="card-actions">
                <div class="dropdown">
                  <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @include('tabler::icons.svg.dots-vertical')
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Edit user</a>
                    <a class="dropdown-item" href="#">Change permissions</a>
                    <a class="dropdown-item text-danger" href="#">Delete user</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" stroke="var(--tblr-border-color, #b8cef1)">
                <!--  <rect x=".5" y=".5" width="399" height="199" fill="#fff" rx="2"></rect>-->
                <line x1="0" y1="0" x2="400" y2="200"></line>
                <line x1="0" y1="200" x2="400" y2="0"></line>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Card actions</h3>
              <div class="card-actions btn-actions">
                <a href="#" class="btn-action" >
                  @include('tabler::icons.svg.refresh')
                </a>
                <a href="#" class="btn-action" >
                  @include('tabler::icons.svg.chevron-up')
                </a>
                <a href="#" class="btn-action" >
                  @include('tabler::icons.svg.dots-vertical')
                </a>
                <a href="#" class="btn-action" >
                  @include('tabler::icons.svg.x')
                </a>
              </div>
            </div>
            <div class="card-body p-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" stroke="var(--tblr-border-color, #b8cef1)">
                <!--  <rect x=".5" y=".5" width="399" height="199" fill="#fff" rx="2"></rect>-->
                <line x1="0" y1="0" x2="400" y2="200"></line>
                <line x1="0" y1="200" x2="400" y2="0"></line>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection