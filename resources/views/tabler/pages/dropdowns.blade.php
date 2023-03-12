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
            <a href="#" class="dropdown-item"><!-- Download SVG icon from http://tabler-icons.io/i/activity -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h4l3 8l4 -16l3 8h4" /></svg>
              Item 1</a>
            <a href="#" class="dropdown-item"><!-- Download SVG icon from http://tabler-icons.io/i/edit -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
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
            <a href="#" class="dropdown-item"><!-- Download SVG icon from http://tabler-icons.io/i/logout -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M7 12h14l-3 -3m0 6l3 -3" /></svg>
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
              <!-- Download SVG icon from http://tabler-icons.io/i/settings -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
              Action
            </a>
            <a class="dropdown-item" href="#">
              <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
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
              <!-- Download SVG icon from http://tabler-icons.io/i/settings -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
              Action
            </a>
            <a class="dropdown-item" href="#">
              <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
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
              <!-- Download SVG icon from http://tabler-icons.io/i/settings -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
              Action
            </a>
            <a class="dropdown-item" href="#">
              <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
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