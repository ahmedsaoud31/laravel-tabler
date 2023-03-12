@extends('tabler::layouts.app')

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
                  @include('tabler::icons.svg.search')
                </span>
              </div>
            </div>
            <a href="#" class="btn btn-primary">
              @include('tabler::icons.svg.plus')
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
                    @include('tabler::icons.svg.eye')
                    467
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    335
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    369
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    479
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    481
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    405
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    332
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    369
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    555
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    383
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    424
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
                    @include('tabler::icons.svg.eye')
                    496
                  </a>
                  <a href="#" class="ms-3 text-muted">
                    @include('tabler::icons.svg.heart')
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
              @include('tabler::icons.svg.chevron-left')
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
              next
              @include('tabler::icons.svg.chevron-right')
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection