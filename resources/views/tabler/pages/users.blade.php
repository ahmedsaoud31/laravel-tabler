@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Users
          </h2>
          <div class="text-muted mt-1">1-18 of 413 people</div>
        </div>
        <!-- Page title actions -->
        <div class="col-12 col-md-auto ms-auto d-print-none">
          <div class="d-flex">
            <input type="search" class="form-control d-inline-block w-9 me-3" placeholder="Search user…"/>
            <a href="#" class="btn btn-primary">
              @include('tabler::icons.svg.plus')
              New user
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Paweł Kuna</a></h3>
              <div class="text-muted">UI Designer</div>
              <div class="mt-3">
                <span class="badge bg-purple-lt">Owner</span>
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded">JL</span>
              <h3 class="m-0 mb-1"><a href="#">Jeffie Lewzey</a></h3>
              <div class="text-muted">Chemical Engineer</div>
              <div class="mt-3">
                <span class="badge bg-green-lt">Admin</span>
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Mallory Hulme</a></h3>
              <div class="text-muted">Geologist IV</div>
              <div class="mt-3">
                <span class="badge bg-green-lt">Admin</span>
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Dunn Slane</a></h3>
              <div class="text-muted">Research Nurse</div>
              <div class="mt-3">
                <span class="badge bg-green-lt">Admin</span>
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Emmy Levet</a></h3>
              <div class="text-muted">VP Product Management</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/001f.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Maryjo Lebarree</a></h3>
              <div class="text-muted">Civil Engineer</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded">EP</span>
              <h3 class="m-0 mb-1"><a href="#">Egan Poetz</a></h3>
              <div class="text-muted">Research Nurse</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn"><
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Kellie Skingley</a></h3>
              <div class="text-muted">Teacher</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Christabel Charlwood</a></h3>
              <div class="text-muted">Tax Accountant</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded">HS</span>
              <h3 class="m-0 mb-1"><a href="#">Haskel Shelper</a></h3>
              <div class="text-muted">Staff Scientist</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Lorry Mion</a></h3>
              <div class="text-muted">Automation Specialist IV</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/004f.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Leesa Beaty</a></h3>
              <div class="text-muted">Editor</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/007m.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Perren Keemar</a></h3>
              <div class="text-muted">Analog Circuit Design manager</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded">SA</span>
              <h3 class="m-0 mb-1"><a href="#">Sunny Airey</a></h3>
              <div class="text-muted">Nuclear Power Engineer</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn"><
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/009m.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Geoffry Flaunders</a></h3>
              <div class="text-muted">Software Test Engineer II</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/010m.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Thatcher Keel</a></h3>
              <div class="text-muted">VP Sales</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/005f.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Dyann Escala</a></h3>
              <div class="text-muted">Mechanical Systems Engineer</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body p-4 text-center">
              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/006f.jpg)"></span>
              <h3 class="m-0 mb-1"><a href="#">Avivah Mugleston</a></h3>
              <div class="text-muted">Actuary</div>
              <div class="mt-3">
              </div>
            </div>
            <div class="d-flex">
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.mail')
                Email</a>
              <a href="#" class="card-btn">
                @include('tabler::icons.svg.phone')
                Call</a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex mt-4">
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
              @include('tabler::icons.svg.chevron-right')
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection