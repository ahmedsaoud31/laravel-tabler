@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Lists
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-md-6">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Top users</h3>
                </div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)">
                            <span class="badge bg-red"></span></span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Paweł Kuna</a>
                          <div class="text-muted text-truncate mt-n1">2 days ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar">
                            <span class="badge bg-x"></span>JL</span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Jeffie Lewzey</a>
                          <div class="text-muted text-truncate mt-n1">3 days ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Mallory Hulme</a>
                          <div class="text-muted text-truncate mt-n1">today</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)">
                            <span class="badge bg-green"></span></span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Dunn Slane</a>
                          <div class="text-muted text-truncate mt-n1">6 days ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)">
                            <span class="badge bg-red"></span></span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Emmy Levet</a>
                          <div class="text-muted text-truncate mt-n1">3 days ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/001f.jpg)">
                            <span class="badge bg-yellow"></span></span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Maryjo Lebarree</a>
                          <div class="text-muted text-truncate mt-n1">2 days ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar">
                            <span class="badge bg-x"></span>EP</span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Egan Poetz</a>
                          <div class="text-muted text-truncate mt-n1">4 days ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)">
                            <span class="badge bg-yellow"></span></span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Kellie Skingley</a>
                          <div class="text-muted text-truncate mt-n1">6 days ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)">
                            <span class="badge bg-x"></span></span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Christabel Charlwood</a>
                          <div class="text-muted text-truncate mt-n1">today</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                          <span class="avatar">
                            <span class="badge bg-x"></span>HS</span>
                        </a>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block text-truncate">Haskel Shelper</a>
                          <div class="text-muted text-truncate mt-n1">yesterday</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Contacts</h3>
                </div>
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><input type="checkbox" class="form-check-input"></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Christabel Charlwood</a>
                        <div class="d-block text-muted text-truncate mt-n1">Compressed Sass output support (#29702)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item active">
                    <div class="row align-items-center">
                      <div class="col-auto"><input type="checkbox" class="form-check-input" checked></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">HS</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Haskel Shelper</a>
                        <div class="d-block text-muted text-truncate mt-n1">Set vertical-align on .form-check-input (#29521)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><input type="checkbox" class="form-check-input"></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Lorry Mion</a>
                        <div class="d-block text-muted text-truncate mt-n1">Keep themed appearance for print (#29714)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><input type="checkbox" class="form-check-input"></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/004f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Leesa Beaty</a>
                        <div class="d-block text-muted text-truncate mt-n1">Use double quotes in `.stylelintrc` (#29709)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item active">
                    <div class="row align-items-center">
                      <div class="col-auto"><input type="checkbox" class="form-check-input" checked></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/007m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Perren Keemar</a>
                        <div class="d-block text-muted text-truncate mt-n1">Regenerate package-lock.json (#29695)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><input type="checkbox" class="form-check-input"></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">SA</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Sunny Airey</a>
                        <div class="d-block text-muted text-truncate mt-n1">Switch to the Coveralls Action (#29478)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><input type="checkbox" class="form-check-input"></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/009m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Geoffry Flaunders</a>
                        <div class="d-block text-muted text-truncate mt-n1">Fix npm audit vulnerability (#29677)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item active">
                    <div class="row align-items-center">
                      <div class="col-auto"><input type="checkbox" class="form-check-input" checked></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/010m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Thatcher Keel</a>
                        <div class="d-block text-muted text-truncate mt-n1">config.yml: update popper.js to v1.16.0 (#29624)</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Links and buttons</h3>
                </div>
                <div class="list-group list-group-flush">
                  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    The current link item
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                  <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Last commits</h3>
                </div>
                <div class="list-group list-group-flush list-group-hoverable">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="badge bg-red"></span></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Paweł Kuna</a>
                        <div class="d-block text-muted text-truncate mt-n1">Change deprecated html tags to text decoration classes (#29604)</div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          @include('tabler::icons.svg.star')
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="badge"></span></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">JL</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Jeffie Lewzey</a>
                        <div class="d-block text-muted text-truncate mt-n1">justify-content:between ⇒ justify-content:space-between (#29734)</div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          @include('tabler::icons.svg.star')
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="badge bg-"></span></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Mallory Hulme</a>
                        <div class="d-block text-muted text-truncate mt-n1">Update change-version.js (#29736)</div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          @include('tabler::icons.svg.star')
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="badge bg-green"></span></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Dunn Slane</a>
                        <div class="d-block text-muted text-truncate mt-n1">Regenerate package-lock.json (#29730)</div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          @include('tabler::icons.svg.star')
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="badge bg-red"></span></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Emmy Levet</a>
                        <div class="d-block text-muted text-truncate mt-n1">Some minor text tweaks</div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          @include('tabler::icons.svg.star')
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="badge bg-yellow"></span></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/001f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Maryjo Lebarree</a>
                        <div class="d-block text-muted text-truncate mt-n1">Link to versioned docs</div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          @include('tabler::icons.svg.star')
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="badge"></span></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">EP</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Egan Poetz</a>
                        <div class="d-block text-muted text-truncate mt-n1">Copywriting edits</div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          @include('tabler::icons.svg.star')
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="badge bg-yellow"></span></div>
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-reset d-block">Kellie Skingley</a>
                        <div class="d-block text-muted text-truncate mt-n1">Enable RFS for font resizing</div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          @include('tabler::icons.svg.star')
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">People</h3>
                </div>
                <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
                  <div class="list-group-header sticky-top">A</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/023f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Eva Acres</a>
                        <div class="text-muted text-truncate mt-n1">Change deprecated html tags to text decoration classes (#29604)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">SA</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Sunny Airey</a>
                        <div class="text-muted text-truncate mt-n1">justify-content:between ⇒ justify-content:space-between (#29734)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/049m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Northrop Alforde</a>
                        <div class="text-muted text-truncate mt-n1">Update change-version.js (#29736)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/039m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Virgil Archbutt</a>
                        <div class="text-muted text-truncate mt-n1">Regenerate package-lock.json (#29730)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/033m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Guthry Arlott</a>
                        <div class="text-muted text-truncate mt-n1">Some minor text tweaks</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">AA</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Arlie Armstead</a>
                        <div class="text-muted text-truncate mt-n1">Link to versioned docs</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/062m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Ashton Arndell</a>
                        <div class="text-muted text-truncate mt-n1">Copywriting edits</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/062f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Kass Aspinal</a>
                        <div class="text-muted text-truncate mt-n1">Enable RFS for font resizing</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/043m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Rabi Attle</a>
                        <div class="text-muted text-truncate mt-n1">Compressed Sass output support (#29702)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">B</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/024m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Cary Baleine</a>
                        <div class="text-muted text-truncate mt-n1">Set vertical-align on .form-check-input (#29521)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/046m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Borden Barkworth</a>
                        <div class="text-muted text-truncate mt-n1">Keep themed appearance for print (#29714)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/066m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Regan Baser</a>
                        <div class="text-muted text-truncate mt-n1">Use double quotes in `.stylelintrc` (#29709)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/004f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Leesa Beaty</a>
                        <div class="text-muted text-truncate mt-n1">Regenerate package-lock.json (#29695)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/041f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Guendolen Belliss</a>
                        <div class="text-muted text-truncate mt-n1">Switch to the Coveralls Action (#29478)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">TB</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Tallie Bettis</a>
                        <div class="text-muted text-truncate mt-n1">Fix npm audit vulnerability (#29677)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/029m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Donnie Biggin</a>
                        <div class="text-muted text-truncate mt-n1">config.yml: update popper.js to v1.16.0 (#29624)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/056m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Mel Bilovus</a>
                        <div class="text-muted text-truncate mt-n1">Update anchor.js to v4.2.1 (#29662)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">EB</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Errol Blackley</a>
                        <div class="text-muted text-truncate mt-n1">Dist (#29638)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/027m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Jermaine Booley</a>
                        <div class="text-muted text-truncate mt-n1">Make check label cursor customizable (#29654)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/055m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Cleavland Bratchell</a>
                        <div class="text-muted text-truncate mt-n1">Fixed input-height-sm and input-height-lg calculations (#29653)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/057m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Luca Brayn</a>
                        <div class="text-muted text-truncate mt-n1">package.json: Add funding property (#29646)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/051f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Tonye Brikner</a>
                        <div class="text-muted text-truncate mt-n1">Remove shx. (#29636)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/038m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Granger Brockton</a>
                        <div class="text-muted text-truncate mt-n1">dashboard/index.html: update tabler-icons to v4.24.1 (#29651)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/032m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Arin Broxup</a>
                        <div class="text-muted text-truncate mt-n1">Regenerate package-lock.json.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/056f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Gwennie Bryce</a>
                        <div class="text-muted text-truncate mt-n1">site/assets/js/search.js: ignore the LGTM alert (#29634)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/030m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Kerwinn Burkart</a>
                        <div class="text-muted text-truncate mt-n1">Tighten regex a bit. If we need to make this more robust in the future, we can revert this as needed.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/043f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Tamqrah Busher</a>
                        <div class="text-muted text-truncate mt-n1">example.html: use double quotes</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">C</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/015m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Delaney Cairney</a>
                        <div class="text-muted text-truncate mt-n1">Example shortcode: use a regex and simplify logic.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/019m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Rooney Cassy</a>
                        <div class="text-muted text-truncate mt-n1">Move docs JS one folder up. (#29632)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/051m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Howard Catteroll</a>
                        <div class="text-muted text-truncate mt-n1">progress: Fix IE overflow (#29629)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Christabel Charlwood</a>
                        <div class="text-muted text-truncate mt-n1">removing last occurences of _fixTitle in our docs (#29631)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/017m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Portie Christou</a>
                        <div class="text-muted text-truncate mt-n1">Update modal.md (#29621) Fix typo</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/041m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Trefor Cocksedge</a>
                        <div class="text-muted text-truncate mt-n1">Update stylelint-config-twbs-bootstrap to 0.9.0 (#29612)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/021m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Mata Codlin</a>
                        <div class="text-muted text-truncate mt-n1">Remove calc function from docs</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/019f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Julietta Coke</a>
                        <div class="text-muted text-truncate mt-n1">Add calc() to function blacklist</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/037f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Tonia Colqueran</a>
                        <div class="text-muted text-truncate mt-n1">Doc tweaks.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/008f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Tessie Curzon</a>
                        <div class="text-muted text-truncate mt-n1">Revert complex calculation</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">D</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/064m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Creighton Deluze</a>
                        <div class="text-muted text-truncate mt-n1">Add add and subtract function</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/032f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Otha Denial</a>
                        <div class="text-muted text-truncate mt-n1">Update normalizeDataKey to match the spec (#29609)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/053m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Verne Diment</a>
                        <div class="text-muted text-truncate mt-n1">Remove redundant "Navbar divider" from "Contents" (#29601)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/033f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Stafani Ding</a>
                        <div class="text-muted text-truncate mt-n1">Update .form-check to properly support gradients when enabled (#29338)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/035f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Georgeanna Do Rosario</a>
                        <div class="text-muted text-truncate mt-n1">v5: Simplify navbars by requiring containers (#29339)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/016f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Ninon Don</a>
                        <div class="text-muted text-truncate mt-n1">Remove unneeded ESLint suppression and regenerate lock file (#29593)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/018m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Emmott Dowsett</a>
                        <div class="text-muted text-truncate mt-n1">remove superflous transition parameter (#29595)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">E</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/011f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Carroll Erat</a>
                        <div class="text-muted text-truncate mt-n1">Added animation when modal backdrop is static (#29516)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/022f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Peria Errichiello</a>
                        <div class="text-muted text-truncate mt-n1">Add configurable button text wrapping (#29554)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/005f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Dyann Escala</a>
                        <div class="text-muted text-truncate mt-n1">Enable eslint no-console rule except for build directory (#29585)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/047m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Chalmers Ewington</a>
                        <div class="text-muted text-truncate mt-n1">Regenerate package-lock.json (#29571)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">F</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/054m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Jarred Farthin</a>
                        <div class="text-muted text-truncate mt-n1">Fix one dev npm vulnerability. (#29568)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/009m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Geoffry Flaunders</a>
                        <div class="text-muted text-truncate mt-n1">Update hugo-bin to v0.47.0 (Hugo 0.59.0) (#29562)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">G</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/015f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Merrily Garforth</a>
                        <div class="text-muted text-truncate mt-n1">Rename close icon to close button (#29387)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/011m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Johnnie Gilby</a>
                        <div class="text-muted text-truncate mt-n1">Get rid of unneeded `div`s. (#29563)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/063m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Byrom Gillson</a>
                        <div class="text-muted text-truncate mt-n1">Update popper.js to v1.16.0. (#29537)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/017f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Gratia Gooley</a>
                        <div class="text-muted text-truncate mt-n1">v5: Icons docs cleanup (#29450)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/013f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Leigha Gorce</a>
                        <div class="text-muted text-truncate mt-n1">v5: Update colors to add shades and tints (#29348)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/058f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Jennilee Graves</a>
                        <div class="text-muted text-truncate mt-n1">Add link to Icons site in our docs (#29544)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/049f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Lianne Greenroa</a>
                        <div class="text-muted text-truncate mt-n1">Skip hidden dropdowns while focusing (#29523)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/053f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Barbara Grenkov</a>
                        <div class="text-muted text-truncate mt-n1">Add make-col-auto mixin (#29367)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/050f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Fifi Gumm</a>
                        <div class="text-muted text-truncate mt-n1">Update dependabot config (#29536)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">H</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/037m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Neale Havock</a>
                        <div class="text-muted text-truncate mt-n1">Add dependabot config (#29526)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/020m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Haze Hubbert</a>
                        <div class="text-muted text-truncate mt-n1">Update devDependencies. (#29508)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Mallory Hulme</a>
                        <div class="text-muted text-truncate mt-n1">Fix top level ampersand (#29518)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/036m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Karlis Hundell</a>
                        <div class="text-muted text-truncate mt-n1">Carousel variables (#29493)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">I</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/044m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Timotheus Iacomo</a>
                        <div class="text-muted text-truncate mt-n1">Group line-height variables (#29466)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/061m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Sean Ilyasov</a>
                        <div class="text-muted text-truncate mt-n1">Add color argument to button mixins (#29444)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/025m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Reynold Indgs</a>
                        <div class="text-muted text-truncate mt-n1">Add new .bg-body utility class (#29511)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/060m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Hillard Ivic</a>
                        <div class="text-muted text-truncate mt-n1">Drop support for Node.js 8. (#29496)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">J</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/063f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Sam Jarlmann</a>
                        <div class="text-muted text-truncate mt-n1">Rename "js/tests/units" to "js/tests/unit". (#29503)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">K</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/010m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Thatcher Keel</a>
                        <div class="text-muted text-truncate mt-n1">Dist (#29484)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/007m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Perren Keemar</a>
                        <div class="text-muted text-truncate mt-n1">CI: move `CI` env variable to the root of the workflow. (#29499)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/048m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Bernarr Kellett</a>
                        <div class="text-muted text-truncate mt-n1">Update devDependencies. (#29447)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/058m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Maddy Kenneway</a>
                        <div class="text-muted text-truncate mt-n1">Add variable for `$breadcrumb-font-size` (#29467)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/021f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Sandi Keys</a>
                        <div class="text-muted text-truncate mt-n1">add modularity integration test</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/045m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Arlan Kilrow</a>
                        <div class="text-muted text-truncate mt-n1">return to the original file structure to avoid breaking modularity</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Paweł Kuna</a>
                        <div class="text-muted text-truncate mt-n1">Fix border for single card in accordion (#29453)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">L</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/012f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Marsha Labat</a>
                        <div class="text-muted text-truncate mt-n1">Variable card height (#29462)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/027f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Beatrix Ladewig</a>
                        <div class="text-muted text-truncate mt-n1">Better radio input (#29441)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/054f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Zitella Lawes</a>
                        <div class="text-muted text-truncate mt-n1">Trim trailing whitespace from markdown files (#29460)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/001f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Maryjo Lebarree</a>
                        <div class="text-muted text-truncate mt-n1">Remove appearance from textarea (#29455)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/028m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Price Letixier</a>
                        <div class="text-muted text-truncate mt-n1">v5: .form-check layout changes (#29322)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Emmy Levet</a>
                        <div class="text-muted text-truncate mt-n1">Remove "extra" section from composer.json (#29420)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">JL</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Jeffie Lewzey</a>
                        <div class="text-muted text-truncate mt-n1">coveralls: Add `COVERALLS_GIT_BRANCH` (#29458)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/036f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Leandra Liddicoat</a>
                        <div class="text-muted text-truncate mt-n1">workflows/test.yml: specify `CI=true` (#29440)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/047f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Rivy Lochet</a>
                        <div class="text-muted text-truncate mt-n1">README.md: link to the Actions page for Tests (#29480)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">M</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/038f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Claudelle MacKilroe</a>
                        <div class="text-muted text-truncate mt-n1">Variable carousel indicator opacity (#29468)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/042f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Bettina Matuszyk</a>
                        <div class="text-muted text-truncate mt-n1">Remove outline from select box in FF (#29445)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/018f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Odelinda McCosh</a>
                        <div class="text-muted text-truncate mt-n1">Remove duplicated td selector (#29454)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/028f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Harriot McGeady</a>
                        <div class="text-muted text-truncate mt-n1">Change blue and pink colors to be accessible. (#29198)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/048f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Netti McGreay</a>
                        <div class="text-muted text-truncate mt-n1">Sass: remove redundant stylelint inline suppressions. (#29427)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/045f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Shana Meryett</a>
                        <div class="text-muted text-truncate mt-n1">`update-deps`: remove moot `cross-env` call. (#29419)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/039f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Marchelle Millam</a>
                        <div class="text-muted text-truncate mt-n1">Grid card example tweaks (#29409)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/020f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Riane Milward</a>
                        <div class="text-muted text-truncate mt-n1">.eslintrc.json: Remove a couple of default rules.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/046f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Crystie Mingaud</a>
                        <div class="text-muted text-truncate mt-n1">GH Actions updates. (#29429)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Lorry Mion</a>
                        <div class="text-muted text-truncate mt-n1">Use Hugo for our docs Sass and JS. (#29280)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/026m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Parke Moneypenny</a>
                        <div class="text-muted text-truncate mt-n1">examples: darken gray a little bit.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/059f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Brinn Moses</a>
                        <div class="text-muted text-truncate mt-n1">card.md: use `text-dark` for warning card.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/013m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Elston Muffett</a>
                        <div class="text-muted text-truncate mt-n1">badge.md: use `text-dark` for warning.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/006f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Avivah Mugleston</a>
                        <div class="text-muted text-truncate mt-n1">Darken footer color.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">N</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/060f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Linnet Newborn</a>
                        <div class="text-muted text-truncate mt-n1">Tweak syntax highlighting colors to be WCAG2AA valid.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/067m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Andros Newcome</a>
                        <div class="text-muted text-truncate mt-n1">workflows/test.yml: switch to `setup-node@v1`. (#29410)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/024f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Juanita Nobles</a>
                        <div class="text-muted text-truncate mt-n1">Fix incorrect aspect ratio on IE11</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/040f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Jaymee Noni</a>
                        <div class="text-muted text-truncate mt-n1">Remove redundant properties</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">O</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/061f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Roseline OIlier</a>
                        <div class="text-muted text-truncate mt-n1">Responsive sticky top (#29158)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/022m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Parker Oaten</a>
                        <div class="text-muted text-truncate mt-n1">Update devDependencies. (#29381)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">P</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/023m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Johannes Paternoster</a>
                        <div class="text-muted text-truncate mt-n1">Typo fix (#29382)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/034f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Stephie Petrolli</a>
                        <div class="text-muted text-truncate mt-n1">Remove unnecessary z-index</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">EP</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Egan Poetz</a>
                        <div class="text-muted text-truncate mt-n1">Make sure the content doesn't cover the navbar dropdown</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/055f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Mavra Portail</a>
                        <div class="text-muted text-truncate mt-n1">about/brand.md: Remove unused class.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/065f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Danette Pountney</a>
                        <div class="text-muted text-truncate mt-n1">Use the `$white` variable.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/029f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Desirae Prahm</a>
                        <div class="text-muted text-truncate mt-n1">Docs tweaks</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">Q</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/057f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Gayel Quesne</a>
                        <div class="text-muted text-truncate mt-n1">Move shortcodes used only once where they are needed.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">R</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/040m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Clayton Rosentholer</a>
                        <div class="text-muted text-truncate mt-n1">getting-started/theming.md: throw an error if the regex doesn't succeed.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/012m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Ban Rzehor</a>
                        <div class="text-muted text-truncate mt-n1">Break a couple of long lines.</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">S</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/031f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Madeleine Salle</a>
                        <div class="text-muted text-truncate mt-n1">homepage: remove redundant class (#29357)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/064f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Annie Scarisbrick</a>
                        <div class="text-muted text-truncate mt-n1">Update subnav to remove breadcrumb and just keep versions and search (#29368)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/035m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Yvor Sheldon</a>
                        <div class="text-muted text-truncate mt-n1">Update devDependencies. (#29349)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar">HS</span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Haskel Shelper</a>
                        <div class="text-muted text-truncate mt-n1">Tweak form validation snippet. (#29359)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/069m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Guthry Shimman</a>
                        <div class="text-muted text-truncate mt-n1">Examples: use our utilities more. (#29358)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/016m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Wilburt Siegertsz</a>
                        <div class="text-muted text-truncate mt-n1">Use the example shortcode in more places. (#29346)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Kellie Skingley</a>
                        <div class="text-muted text-truncate mt-n1">ESLint: specify `--report-unused-disable-directives` (#29350)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/068m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Sawyere Skipsea</a>
                        <div class="text-muted text-truncate mt-n1">Docs: simplify a few Hugo `range`s. (#29333)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/052f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Kathryn Skypp</a>
                        <div class="text-muted text-truncate mt-n1">Fix a few redirected links. (#29352)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Dunn Slane</a>
                        <div class="text-muted text-truncate mt-n1">Fix shortcodes/example.html class bug. (#29344)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/065m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Freedman Smith</a>
                        <div class="text-muted text-truncate mt-n1">Add responsive example</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/034m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Harris Speer</a>
                        <div class="text-muted text-truncate mt-n1">Allow override default col width</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/010f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Cesya Spritt</a>
                        <div class="text-muted text-truncate mt-n1">Cleanup</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/031m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Emlen Stairmand</a>
                        <div class="text-muted text-truncate mt-n1">Move margins, and equal height via utility example</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/026f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Mela Sydes</a>
                        <div class="text-muted text-truncate mt-n1">First pass at .row-cols classes</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">T</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/042m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Neville Trobridge</a>
                        <div class="text-muted text-truncate mt-n1">card.md remove empty `class` placeholder argument (#29345)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/050m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Onfre Tull</a>
                        <div class="text-muted text-truncate mt-n1">carousel.md: Remove duplicate bd-example div. (#29341)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/059m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Hewie Tweddle</a>
                        <div class="text-muted text-truncate mt-n1">Merge lint scripts (#29329)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">U</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/009f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Flossi Uttley</a>
                        <div class="text-muted text-truncate mt-n1">Clean up line heights & add line height utilities (#29271)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">V</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/030f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Netti Vondrasek</a>
                        <div class="text-muted text-truncate mt-n1">docs-sidebar.html: reindent. (#29337)</div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-header sticky-top">W</div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/044f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Gerti Washington</a>
                        <div class="text-muted text-truncate mt-n1"></div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/052m.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Bord Wheatcroft</a>
                        <div class="text-muted text-truncate mt-n1"></div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <a href="#">
                          <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/025f.jpg)"></span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Nanni Wooler</a>
                        <div class="text-muted text-truncate mt-n1"></div>
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