@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Search results
          </h2>
          <div class="text-muted mt-1">About 2,410 result (0.19 seconds)</div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row g-4">
        <div class="col-3">
          <form action="" method="get">
            <div class="subheader mb-2">Category</div>
            <div class="list-group list-group-transparent mb-3">
              <a class="list-group-item list-group-item-action d-flex align-items-center active" href="#">
                Games
                <small class="text-muted ms-auto">24</small>
              </a>
              <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                Clothing
                <small class="text-muted ms-auto">149</small>
              </a>
              <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                Jewelery
                <small class="text-muted ms-auto">88</small>
              </a>
              <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                Toys
                <small class="text-muted ms-auto">54</small>
              </a>
            </div>
            <div class="subheader mb-2">Rating</div>
            <div class="mb-3">
              <label class="form-check mb-1">
                <input type="radio" class="form-check-input" name="form-stars" value="5 stars" checked>
                <span class="form-check-label">5 stars</span>
              </label>
              <label class="form-check mb-1">
                <input type="radio" class="form-check-input" name="form-stars" value="4 stars">
                <span class="form-check-label">4 stars</span>
              </label>
              <label class="form-check mb-1">
                <input type="radio" class="form-check-input" name="form-stars" value="3 stars">
                <span class="form-check-label">3 stars</span>
              </label>
              <label class="form-check mb-1">
                <input type="radio" class="form-check-input" name="form-stars" value="2 and less stars">
                <span class="form-check-label">2 and less stars</span>
              </label>
            </div>
            <div class="subheader mb-2">Tags</div>
            <div class="mb-3">
              <label class="form-check mb-1">
                <input type="checkbox" class="form-check-input" name="form-tags[]" value="business" checked>
                <span class="form-check-label">business</span>
              </label>
              <label class="form-check mb-1">
                <input type="checkbox" class="form-check-input" name="form-tags[]" value="evening">
                <span class="form-check-label">evening</span>
              </label>
              <label class="form-check mb-1">
                <input type="checkbox" class="form-check-input" name="form-tags[]" value="leisure">
                <span class="form-check-label">leisure</span>
              </label>
              <label class="form-check mb-1">
                <input type="checkbox" class="form-check-input" name="form-tags[]" value="party">
                <span class="form-check-label">party</span>
              </label>
            </div>
            <div class="subheader mb-2">Price</div>
            <div class="row g-2 align-items-center mb-3">
              <div class="col">
                <div class="input-group">
                  <span class="input-group-text">
                    $
                  </span>
                  <input type="text" class="form-control"  placeholder="from"  value="3" autocomplete="off">
                </div>
              </div>
              <div class="col-auto">—</div>
              <div class="col">
                <div class="input-group">
                  <span class="input-group-text">
                    $
                  </span>
                  <input type="text" class="form-control"  placeholder="to"  autocomplete="off">
                </div>
              </div>
            </div>
            <div class="subheader mb-2">Shipping</div>
            <div>
              <select name="" class="form-select">
                <option>United Kingdom</option>
                <option>USA</option>
                <option>Germany</option>
                <option>Poland</option>
                <option>Other…</option>
              </select>
            </div>
            <div class="mt-5">
              <button class="btn btn-primary w-100">
                Confirm changes
              </button>
              <a href="#" class="btn btn-link w-100">
                Reset to defaults
              </a>
            </div>
          </form>
        </div>
        <div class="col-9">
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
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/802a16cdf5ce3551.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/007m.jpg)"></span>
                    <div>
                      <div>Perren Keemar</div>
                      <div class="text-muted">4 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/0986f97be719fb9a.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded">SA</span>
                    <div>
                      <div>Sunny Airey</div>
                      <div class="text-muted">5 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/1194d63fe36a8670.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/009m.jpg)"></span>
                    <div>
                      <div>Geoffry Flaunders</div>
                      <div class="text-muted">1 week ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/1366fdc9b9b277e4.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/010m.jpg)"></span>
                    <div>
                      <div>Thatcher Keel</div>
                      <div class="text-muted">1 week and 2 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/5358d787242861c4.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/005f.jpg)"></span>
                    <div>
                      <div>Dyann Escala</div>
                      <div class="text-muted">4 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/5614ec7eb9034d04.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/006f.jpg)"></span>
                    <div>
                      <div>Avivah Mugleston</div>
                      <div class="text-muted">6 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/56614e12b2a7bd68.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded">AA</span>
                    <div>
                      <div>Arlie Armstead</div>
                      <div class="text-muted">1 week and 1 day ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/77586f6ffa9fbc5e.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/008f.jpg)"></span>
                    <div>
                      <div>Tessie Curzon</div>
                      <div class="text-muted">3 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/552683cc4e5f0e11.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/009f.jpg)"></span>
                    <div>
                      <div>Flossi Uttley</div>
                      <div class="text-muted">4 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/3664593f945f0d8d.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/010f.jpg)"></span>
                    <div>
                      <div>Cesya Spritt</div>
                      <div class="text-muted">1 week ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/529078594c496ec5.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/011m.jpg)"></span>
                    <div>
                      <div>Johnnie Gilby</div>
                      <div class="text-muted">1 week and 1 day ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/a74c41b6fb7fdf34.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/012m.jpg)"></span>
                    <div>
                      <div>Ban Rzehor</div>
                      <div class="text-muted">1 week and 1 day ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/a159fb2bff29fda4.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/011f.jpg)"></span>
                    <div>
                      <div>Carroll Erat</div>
                      <div class="text-muted">6 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/a12804818c417ea3.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/012f.jpg)"></span>
                    <div>
                      <div>Marsha Labat</div>
                      <div class="text-muted">today</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/abb0721ac43820f9.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/013m.jpg)"></span>
                    <div>
                      <div>Elston Muffett</div>
                      <div class="text-muted">1 week and 3 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/d366fc3df37fe65b.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/013f.jpg)"></span>
                    <div>
                      <div>Leigha Gorce</div>
                      <div class="text-muted">1 week and 1 day ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/da6119936bd7f566.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded">TB</span>
                    <div>
                      <div>Tallie Bettis</div>
                      <div class="text-muted">3 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/e8f47263360d96af.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/015f.jpg)"></span>
                    <div>
                      <div>Merrily Garforth</div>
                      <div class="text-muted">3 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/ecfed9fbf8a58836.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded">EB</span>
                    <div>
                      <div>Errol Blackley</div>
                      <div class="text-muted">2 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/f7f04e6a834b1959.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/016f.jpg)"></span>
                    <div>
                      <div>Ninon Don</div>
                      <div class="text-muted">1 week and 1 day ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/f61b5f865012f200.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/015m.jpg)"></span>
                    <div>
                      <div>Delaney Cairney</div>
                      <div class="text-muted">1 week and 3 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/f746d9f7fa60be79.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/017f.jpg)"></span>
                    <div>
                      <div>Gratia Gooley</div>
                      <div class="text-muted">6 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <a href="#" class="d-block"><img src="{{ asset('/') }}tabler/static/photos/ff54b43b56632883.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <span class="avatar me-3 rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/018f.jpg)"></span>
                    <div>
                      <div>Odelinda McCosh</div>
                      <div class="text-muted">1 week and 3 days ago</div>
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