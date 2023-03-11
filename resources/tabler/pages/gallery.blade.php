@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Gallery
          </h2>
          <div class="text-muted mt-1">1-12 of 241 photos</div>
        </div>
        <!-- Page title actions -->
        <div class="col-12 col-md-auto ms-auto d-print-none">
          <div class="d-flex">
            <div class="me-3">
              <div class="input-icon">
                <input type="text" value="" class="form-control" placeholder="Search…">
                <span class="input-icon-addon">
                  <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                </span>
              </div>
            </div>
            <a href="#" class="btn btn-primary">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
              Add event
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/1b73704b282a8ec6.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                <div>
                  <div>Paweł Kuna</div>
                  <div class="text-muted">3 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    467
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    67
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/3d2998219313cd37.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded">JL</span>
                <div>
                  <div>Jeffie Lewzey</div>
                  <div class="text-muted">5 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    335
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    80
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/6ab3200b14549f8a.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                <div>
                  <div>Mallory Hulme</div>
                  <div class="text-muted">yesterday</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    369
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    32
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/6d35d9a2bd6c63c2.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                <div>
                  <div>Dunn Slane</div>
                  <div class="text-muted">1 week and 3 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    479
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    71
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/8a26974ee6444acd.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                <div>
                  <div>Emmy Levet</div>
                  <div class="text-muted">5 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    481
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    57
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/8c13ad59f739558c.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/001f.jpg)"></span>
                <div>
                  <div>Maryjo Lebarree</div>
                  <div class="text-muted">3 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    405
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    23
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/8fdeb4785d2b82ef.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded">EP</span>
                <div>
                  <div>Egan Poetz</div>
                  <div class="text-muted">6 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    332
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    51
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/9f36332564ca271d.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
                <div>
                  <div>Kellie Skingley</div>
                  <div class="text-muted">1 week and 2 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    369
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    70
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/35b88fc04a518c1b.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)"></span>
                <div>
                  <div>Christabel Charlwood</div>
                  <div class="text-muted">today</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    555
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    73
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/36e273986ed577b8.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded">HS</span>
                <div>
                  <div>Haskel Shelper</div>
                  <div class="text-muted">2 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    383
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    37
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/75b555b99d5b38c4.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)"></span>
                <div>
                  <div>Lorry Mion</div>
                  <div class="text-muted">5 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    424
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    45
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/546fd146c83f428c.jpg" class="card-img-top"></a>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/004f.jpg)"></span>
                <div>
                  <div>Leesa Beaty</div>
                  <div class="text-muted">6 days ago</div>
                </div>
                <div class="ms-auto">
                  <a href="#" class="text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    496
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    64
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex">
        <ul class="pagination ms-auto">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
              <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
              prev
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#">
              next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection