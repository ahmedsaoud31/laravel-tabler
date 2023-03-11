@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Carousel
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
              <h3 class="card-title">Carousel</h3>
            </div>
            <div class="card-body">
              <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/1b73704b282a8ec6.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/3d2998219313cd37.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/6ab3200b14549f8a.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/6d35d9a2bd6c63c2.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/8a26974ee6444acd.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class=" active"></button>
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="3" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="4" class=""></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/8c13ad59f739558c.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/8fdeb4785d2b82ef.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/9f36332564ca271d.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/35b88fc04a518c1b.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/36e273986ed577b8.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with controls</h3>
            </div>
            <div class="card-body">
              <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/75b555b99d5b38c4.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/546fd146c83f428c.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/802a16cdf5ce3551.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/0986f97be719fb9a.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/1194d63fe36a8670.jpg">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with captions</h3>
            </div>
            <div class="card-body">
              <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/1366fdc9b9b277e4.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/5358d787242861c4.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/5614ec7eb9034d04.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/56614e12b2a7bd68.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/77586f6ffa9fbc5e.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-captions" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-captions" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with dot indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators-dot" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators carousel-indicators-dot">
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="0" class=" active"></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="1" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="2" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="3" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="4" class=""></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/552683cc4e5f0e11.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/3664593f945f0d8d.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/529078594c496ec5.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/a74c41b6fb7fdf34.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/a159fb2bff29fda4.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with thumbnail indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators-thumb" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators carousel-indicators-thumb">
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="0" class=" ratio ratio-4x3 active" style="background-image: url({{ asset('/') }}tabler/static/photos/a12804818c417ea3.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="1" class=" ratio ratio-4x3" style="background-image: url({{ asset('/') }}tabler/static/photos/abb0721ac43820f9.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="2" class=" ratio ratio-4x3" style="background-image: url({{ asset('/') }}tabler/static/photos/d366fc3df37fe65b.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="3" class=" ratio ratio-4x3" style="background-image: url({{ asset('/') }}tabler/static/photos/da6119936bd7f566.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="4" class=" ratio ratio-4x3" style="background-image: url({{ asset('/') }}tabler/static/photos/e8f47263360d96af.jpg)"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/a12804818c417ea3.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/abb0721ac43820f9.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/d366fc3df37fe65b.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/da6119936bd7f566.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/e8f47263360d96af.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with vertical dot indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators-dot-vertical" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators carousel-indicators-vertical carousel-indicators-dot">
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="0" class=" active"></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="1" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="2" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="3" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="4" class=""></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/ecfed9fbf8a58836.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/f7f04e6a834b1959.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/f61b5f865012f200.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/f746d9f7fa60be79.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/ff54b43b56632883.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with thumbnail indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators-thumb-vertical" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators carousel-indicators-vertical carousel-indicators-thumb">
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="0" class=" ratio ratio-4x3 active" style="background-image: url({{ asset('/') }}tabler/static/photos/529078594c496ec5.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="1" class=" ratio ratio-4x3" style="background-image: url({{ asset('/') }}tabler/static/photos/a74c41b6fb7fdf34.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="2" class=" ratio ratio-4x3" style="background-image: url({{ asset('/') }}tabler/static/photos/a159fb2bff29fda4.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="3" class=" ratio ratio-4x3" style="background-image: url({{ asset('/') }}tabler/static/photos/a12804818c417ea3.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="4" class=" ratio ratio-4x3" style="background-image: url({{ asset('/') }}tabler/static/photos/abb0721ac43820f9.jpg)"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/529078594c496ec5.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/a74c41b6fb7fdf34.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/a159fb2bff29fda4.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/a12804818c417ea3.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="{{ asset('/') }}tabler/static/photos/abb0721ac43820f9.jpg">
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