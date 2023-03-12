@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Dropdowns
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="dropdown-menu dropdown-menu-demo">
            <h6 class="dropdown-header">Dropdown header</h6>
            <a href="#" class="dropdown-item">
              @include('tabler::icons.svg.activity')
              Item 1</a>
            <a href="#" class="dropdown-item">
              @include('tabler::icons.svg.edit')
              Item 2</a>
            <div class="dropdown-item">
              <a href="#" class="text-reset">My profile</a>
              <label class="form-check m-0 ms-auto">
                <input type="checkbox" class="form-check-input">
                Public
              </label>
            </div>
            <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="radio"> Radio input</label>
            <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="checkbox"> Checkbox input</label>
            <label class="dropdown-item form-switch"><input class="form-check-input m-0 me-2" type="checkbox"> Checkbox input</label>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Dropdown item 1</a>
            <a href="#" class="dropdown-item">Dropdown item 2</a>
            <a href="#" class="dropdown-item disabled">Dropdown disabled</a>
            <a href="#" class="dropdown-item active">Dropdown active</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item"><span class="avatar avatar-xs rounded me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
              Paweł Kuna</a>
            <a href="#" class="dropdown-item"><span class="avatar avatar-xs rounded me-2">JL</span>
              Jeffie Lewzey</a>
            <a href="#" class="dropdown-item"><span class="avatar avatar-xs rounded me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
              Mallory Hulme</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              @include('tabler::icons.svg.logout')
              Logout</a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
            <a class="dropdown-item active" href="#">Active action</a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
            <a class="dropdown-item disabled" href="#">Disabled action</a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <span class="dropdown-header">Dropdown header</span>
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <span class="dropdown-header">Dropdown header</span>
            <a class="dropdown-item" href="#">
              @include('tabler::icons.svg.settings')
              Action
            </a>
            <a class="dropdown-item" href="#">
              @include('tabler::icons.svg.edit')
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo dropdown-menu-arrow">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
            <a class="dropdown-item active" href="#">Active action</a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
            <a class="dropdown-item disabled" href="#">Disabled action</a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <span class="dropdown-header">Dropdown header</span>
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              @include('tabler::icons.svg.settings')
              Action
            </a>
            <a class="dropdown-item" href="#">
              @include('tabler::icons.svg.edit')
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a class="dropdown-item" href="#">
              Action
              <span class="badge bg-primary ms-auto">12</span>
            </a>
            <a class="dropdown-item" href="#">
              Another action
              <span class="badge bg-green ms-auto"></span>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="dropdown-menu dropdown-menu-demo bg-dark text-white">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo bg-dark text-white">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-demo dropdown-menu-arrow bg-dark text-white">
            <a class="dropdown-item" href="#">
              Action
            </a>
            <a class="dropdown-item" href="#">
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-demo dropdown-menu-arrow bg-dark text-white">
            <a class="dropdown-item" href="#">
              @include('tabler::icons.svg.settings')
              Action
            </a>
            <a class="dropdown-item" href="#">
              @include('tabler::icons.svg.edit')
              Another action
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="checkbox"> Option 1</label>
            <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="checkbox"> Option 2</label>
            <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="checkbox"> Option 3</label>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="radio"> Option 1</label>
            <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="radio"> Option 2</label>
            <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="radio"> Option 3</label>
          </div>
          <div class="dropdown-menu dropdown-menu-demo">
            <a href="#" class="dropdown-item"><span class="avatar avatar-xs rounded me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
              Paweł Kuna</a>
            <a href="#" class="dropdown-item"><span class="avatar avatar-xs rounded me-2">JL</span>
              Jeffie Lewzey</a>
            <a href="#" class="dropdown-item"><span class="avatar avatar-xs rounded me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
              Mallory Hulme</a>
            <a href="#" class="dropdown-item"><span class="avatar avatar-xs rounded me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
              Dunn Slane</a>
            <a href="#" class="dropdown-item"><span class="avatar avatar-xs rounded me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
              Emmy Levet</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection