@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Widgets
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3">
                  <img src="https://cdn.dribbble.com/users/844826/screenshots/14553706/media/2be9a4847b939e02702648d058cf2df8.png" alt="Food Deliver UI dashboards" class="rounded">
                </div>
                <div class="col">
                  <h3 class="card-title mb-1">
                    <a href="#" class="text-reset">Food Deliver UI dashboards</a>
                  </h3>
                  <div class="text-muted">
                    Updated 2 hours ago
                  </div>
                  <div class="mt-3">
                    <div class="row g-2 align-items-center">
                      <div class="col-auto">
                        25%
                      </div>
                      <div class="col">
                        <div class="progress progress-sm">
                          <div class="progress-bar" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="25% Complete">
                            <span class="visually-hidden">25% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="dropdown">
                    <a href="#" class="btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                      <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="19" r="1" /><circle cx="12" cy="5" r="1" /></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="#" class="dropdown-item">Import</a>
                      <a href="#" class="dropdown-item">Export</a>
                      <a href="#" class="dropdown-item">Download</a>
                      <a href="#" class="dropdown-item text-danger">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3">
                  <img src="https://cdn.dribbble.com/users/844826/screenshots/14547977/media/e7749bd1b09d9415b8dc265a7dbe81f6.png" alt="Projects Dashboards" class="rounded">
                </div>
                <div class="col">
                  <h3 class="card-title mb-1">
                    <a href="#" class="text-reset">Projects Dashboards</a>
                  </h3>
                  <div class="text-muted">
                    Updated 2 hours ago
                  </div>
                  <div class="mt-3">
                    <div class="row g-2 align-items-center">
                      <div class="col-auto">
                        76%
                      </div>
                      <div class="col">
                        <div class="progress progress-sm">
                          <div class="progress-bar" style="width: 76%" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" aria-label="76% Complete">
                            <span class="visually-hidden">76% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="dropdown">
                    <a href="#" class="btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                      <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="19" r="1" /><circle cx="12" cy="5" r="1" /></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="#" class="dropdown-item">Import</a>
                      <a href="#" class="dropdown-item">Export</a>
                      <a href="#" class="dropdown-item">Download</a>
                      <a href="#" class="dropdown-item text-danger">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <a class="card card-link" href="#">
            <div class="card-body">
              <div class="row">
                <div class="col-auto">
                  <span class="avatar rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/001f.jpg)"></span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Maryjo Lebarree</div>
                  <div class="text-muted">Civil Engineer</div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-xl-3">
          <a class="card card-link" href="#">
            <div class="card-body">
              <div class="row">
                <div class="col-auto">
                  <span class="avatar rounded">EP</span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Egan Poetz</div>
                  <div class="text-muted">Research Nurse</div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-xl-3">
          <a class="card card-link" href="#">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="font-weight-medium">Kellie Skingley</div>
                  <div class="text-muted">Teacher</div>
                </div>
                <div class="col-auto">
                  <span class="avatar rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)"></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-xl-3">
          <a class="card card-link" href="#">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="font-weight-medium">Christabel Charlwood</div>
                  <div class="text-muted">Tax Accountant</div>
                </div>
                <div class="col-auto">
                  <span class="avatar rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)"></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-3">
                <span class="avatar avatar-xl avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/010m.jpg)"></span>
              </div>
              <div class="card-title mb-1">Thatcher Keel</div>
              <div class="text-muted">VP Sales</div>
            </div>
            <a href="#" class="card-btn">View full profile</a>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-3">
                <span class="avatar avatar-xl avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/005f.jpg)"></span>
              </div>
              <div class="card-title mb-1">Dyann Escala</div>
              <div class="text-muted">Mechanical Systems Engineer</div>
            </div>
            <a href="#" class="card-btn">View full profile</a>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-3">
                <span class="avatar avatar-xl avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/006f.jpg)"></span>
              </div>
              <div class="card-title mb-1">Avivah Mugleston</div>
              <div class="text-muted">Actuary</div>
            </div>
            <a href="#" class="card-btn">View full profile</a>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-3">
                <span class="avatar avatar-xl avatar-rounded">AA</span>
              </div>
              <div class="card-title mb-1">Arlie Armstead</div>
              <div class="text-muted">VP Quality Control</div>
            </div>
            <a href="#" class="card-btn">View full profile</a>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <a class="card card-link" href="#">
            <div class="card-cover card-cover-blurred text-center" style="background-image: url({{ asset('/') }}tabler/static/photos/2854fd67ddbd6217.jpg
)">
              <span class="avatar avatar-xl avatar-thumb avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/012f.jpg)"></span>
            </div>
            <div class="card-body text-center">
              <div class="card-title mb-1">Marsha Labat</div>
              <div class="text-muted">Research Associate</div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-xl-3">
          <a class="card card-link" href="#">
            <div class="card-cover card-cover-blurred text-center" style="background-image: url({{ asset('/') }}tabler/static/photos/5358d787242861c4.jpg
)">
              <span class="avatar avatar-xl avatar-thumb avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/013m.jpg)"></span>
            </div>
            <div class="card-body text-center">
              <div class="card-title mb-1">Elston Muffett</div>
              <div class="text-muted">Account Coordinator</div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-xl-3">
          <a class="card card-link" href="#">
            <div class="card-cover card-cover-blurred text-center card-cover-blurred" style="background-image: url({{ asset('/') }}tabler/static/photos/5614ec7eb9034d04.jpg
)">
              <span class="avatar avatar-xl avatar-thumb avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/013f.jpg)"></span>
            </div>
            <div class="card-body text-center">
              <div class="card-title mb-1">Leigha Gorce</div>
              <div class="text-muted">Geologist II</div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-xl-3">
          <a class="card card-link" href="#">
            <div class="card-cover card-cover-blurred text-center card-cover-blurred" style="background-image: url({{ asset('/') }}tabler/static/photos/5749e5c54a61a45e.jpg
)">
              <span class="avatar avatar-xl avatar-thumb avatar-rounded">TB</span>
            </div>
            <div class="card-body text-center">
              <div class="card-title mb-1">Tallie Bettis</div>
              <div class="text-muted">Director of Sales</div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <span class="avatar avatar-lg" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                </div>
                <div class="col">
                  <h4 class="card-title m-0">
                    <a href="#">Paweł Kuna</a>
                  </h4>
                  <div class="text-muted">
                    Working in Tabler
                  </div>
                  <div class="small mt-1">
                    <span class="badge bg-green"></span> Online
                  </div>
                </div>
                <div class="col-auto">
                  <a href="#" class="btn">
                    Subscribe
                  </a>
                </div>
                <div class="col-auto">
                  <div class="dropdown">
                    <a href="#" class="btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                      <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="19" r="1" /><circle cx="12" cy="5" r="1" /></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="#" class="dropdown-item">Import</a>
                      <a href="#" class="dropdown-item">Export</a>
                      <a href="#" class="dropdown-item">Download</a>
                      <a href="#" class="dropdown-item text-danger">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <span class="avatar avatar-lg" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                </div>
                <div class="col">
                  <h4 class="card-title m-0">
                    <a href="#">Mallory Hulme</a>
                  </h4>
                  <div class="text-muted">
                    Working in Kare
                  </div>
                  <div class="small mt-1">
                    <span class="badge bg-green"></span> Online
                  </div>
                </div>
                <div class="col-auto">
                  <a href="#" class="btn">
                    Subscribe
                  </a>
                </div>
                <div class="col-auto">
                  <div class="dropdown">
                    <a href="#" class="btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                      <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="19" r="1" /><circle cx="12" cy="5" r="1" /></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="#" class="dropdown-item">Import</a>
                      <a href="#" class="dropdown-item">Export</a>
                      <a href="#" class="dropdown-item">Download</a>
                      <a href="#" class="dropdown-item text-danger">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-blue text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    132 Sales
                  </div>
                  <div class="text-muted">
                    12 waiting payments
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="19" r="2" /><circle cx="17" cy="19" r="2" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    78 Orders
                  </div>
                  <div class="text-muted">
                    32 shipped
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-red text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    1352 Members
                  </div>
                  <div class="text-muted">
                    163 registered today
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-yellow text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/message -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    132 Comments
                  </div>
                  <div class="text-muted">
                    16 waitings
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <div class="chart-sparkline chart-sparkline-square" id="sparkline-sales"></div>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    132 Sales
                  </div>
                  <div class="text-muted">
                    12 waiting payments
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <div class="chart-sparkline chart-sparkline-square" id="sparkline-orders"></div>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    78 Orders
                  </div>
                  <div class="text-muted">
                    32 shipped
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <div class="chart-sparkline chart-sparkline-square" id="sparkline-members"></div>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    1352 Members
                  </div>
                  <div class="text-muted">
                    163 registered today
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <div class="chart-sparkline chart-sparkline-square" id="sparkline-comments"></div>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    132 Comments
                  </div>
                  <div class="text-muted">
                    16 waitings
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-green-lt avatar"><!-- Download SVG icon from http://tabler-icons.io/i/arrow-up -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="18" y1="11" x2="12" y2="5" /><line x1="6" y1="11" x2="12" y2="5" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    $5,256.99
                    <span class="float-right font-weight-medium text-green">+4%</span>
                  </div>
                  <div class="text-muted">
                    Revenue last 30 days
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-red-lt avatar"><!-- Download SVG icon from http://tabler-icons.io/i/arrow-down -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="18" y1="13" x2="12" y2="19" /><line x1="6" y1="13" x2="12" y2="19" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    342
                    <span class="float-right font-weight-medium text-red">-4.3%</span>
                  </div>
                  <div class="text-muted">
                    Sales last 30 days
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-green-lt avatar"><!-- Download SVG icon from http://tabler-icons.io/i/arrow-up -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="18" y1="11" x2="12" y2="5" /><line x1="6" y1="11" x2="12" y2="5" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    132
                    <span class="float-right font-weight-medium text-green">+6.8%</span>
                  </div>
                  <div class="text-muted">
                    Customers last 30 days
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-red-lt avatar"><!-- Download SVG icon from http://tabler-icons.io/i/arrow-down -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="18" y1="13" x2="12" y2="19" /><line x1="6" y1="13" x2="12" y2="19" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    78
                    <span class="float-right font-weight-medium text-red">-2%</span>
                  </div>
                  <div class="text-muted">
                    Members registered today
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <div class="font-weight-medium">
                        1700
                      </div>
                      <div class="text-muted">
                        Users
                      </div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-red text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        1700
                      </div>
                      <div class="text-muted">
                        Users
                      </div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        1700
                      </div>
                      <div class="text-muted">
                        Users
                      </div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="avatar">HS</span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        1700
                      </div>
                      <div class="text-muted">
                        Users
                      </div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)"></span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        1700
                      </div>
                      <div class="text-muted">
                        Users
                      </div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        1700
                      </div>
                      <div class="text-muted">
                        Users
                      </div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        1700
                      </div>
                      <div class="text-muted">
                        Users
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="avatar" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                    </div>
                    <div class="col">
                      <div class="font-weight-medium">
                        1700
                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-down -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm ms-1 text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 7 9 13 13 9 21 17" /><polyline points="21 10 21 17 14 17" /></svg>
                      </div>
                      <div class="text-muted">
                        Users
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Card with code</h3>
                </div>
                <div class="card-code">
                  <figure class="highlight">
                    <pre><code class="language-scss" data-lang="scss"><span class="nc">.card-footer</span> <span class="p">{</span>
<span class="nl">background</span><span class="p">:</span> <span class="nb">transparent</span><span class="p">;</span>

<span class="k">&amp;</span><span class="nd">:last-child</span> <span class="p">{</span>
<span class="nl">border-radius</span><span class="p">:</span> <span class="m">0</span> <span class="m">0</span> <span class="m">1</span> <span class="m">2</span><span class="p">;</span>
<span class="p">}</span>
<span class="p">}</span></code></pre>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card">
                <div class="card-body p-4 py-5 text-center">
                  <span class="avatar avatar-xl mb-4 avatar-rounded">W</span>
                  <h3 class="mb-0">New website</h3>
                  <p class="text-muted">Due to: 28 Aug 2019</p>
                  <p class="mb-3">
                    <span class="badge bg-red-lt">Waiting</span>
                  </p>
                  <div>
                    <div class="avatar-list avatar-list-stacked">
                      <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                      <span class="avatar avatar-sm avatar-rounded">JL</span>
                      <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                      <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                      <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                    </div>
                  </div>
                </div>
                <div class="progress card-progress">
                  <div class="progress-bar" style="width: 38%" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" aria-label="38% Complete">
                    <span class="visually-hidden">38% Complete</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card">
                <div class="progress card-progress">
                  <div class="progress-bar bg-red" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" aria-label="20% Complete">
                    <span class="visually-hidden">20% Complete</span>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-title">
                    <a href="#">Tabler UI</a>
                    <span class="badge ms-2">v1.0</span>
                  </h3>
                  <div class="avatar-list avatar-list-stacked mb-3">
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                    <span class="avatar avatar-sm avatar-rounded">JL</span>
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                  </div>
                  <div class="card-meta d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                      <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                      <span>5/10</span>
                    </div>
                    <span>Due 72 days</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="progress card-progress">
                  <div class="progress-bar bg-green" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" aria-label="20% Complete">
                    <span class="visually-hidden">20% Complete</span>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-title">
                    <a href="#">Tabler React</a>
                  </h3>
                  <div class="avatar-list avatar-list-stacked mb-3">
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/009f.jpg)"></span>
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/010f.jpg)"></span>
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/011m.jpg)"></span>
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/012m.jpg)"></span>
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/011f.jpg)"></span>
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/012f.jpg)"></span>
                    <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/013m.jpg)"></span>
                  </div>
                  <div class="card-meta d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                      <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                      <span>5/10</span>
                    </div>
                    <span>Due 2 days</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">Basic info</div>
                  <div class="mb-2">
                    <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><line x1="3" y1="6" x2="3" y2="19" /><line x1="12" y1="6" x2="12" y2="19" /><line x1="21" y1="6" x2="21" y2="19" /></svg>
                    Went to: <strong>University of Ljubljana</strong>
                  </div>
                  <div class="mb-2">
                    <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="7" width="18" height="13" rx="2" /><path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" /><line x1="12" y1="12" x2="12" y2="12.01" /><path d="M3 13a20 20 0 0 0 18 0" /></svg>
                    Worked at: <strong>Devpulse</strong>
                  </div>
                  <div class="mb-2">
                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    Lives in: <strong>Šentilj v Slov. Goricah, Slovenia</strong>
                  </div>
                  <div class="mb-2">
                    <!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="11" r="3" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                    From: <strong><span class="flag flag-country-si"></span>
                      Slovenia</strong>
                  </div>
                  <div class="mb-2">
                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                    Birth date: <strong>13/01/1985</strong>
                  </div>
                  <div>
                    <!-- Download SVG icon from http://tabler-icons.io/i/clock -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><polyline points="12 7 12 12 15 15" /></svg>
                    Time zone: <strong>Europe/Ljubljana</strong>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    Configuration
                  </h3>
                  <div class="card-actions">
                    <a href="#">
                      Edit configuration<!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <dl class="row">
                    <dt class="col-5">Date:</dt>
                    <dd class="col-7">2020-01-05 16:42:29 UTC</dd>
                    <dt class="col-5">Account:</dt>
                    <dd class="col-7">tabler</dd>
                    <dt class="col-5">Location:</dt>
                    <dd class="col-7"><span class="flag flag-country-pl"></span>
                      Poland</dd>
                    <dt class="col-5">IP Address:</dt>
                    <dd class="col-7">46.113.11.3</dd>
                    <dt class="col-5">Operating system:</dt>
                    <dd class="col-7">OS X 10.15.2 64-bit</dd>
                    <dt class="col-5">Browser:</dt>
                    <dd class="col-7">Chrome</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')
<script src="{{ asset('tabler/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
@endpush

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-sales'), {
      chart: {
        type: "radialBar",
        fontFamily: 'inherit',
        height: 40,
        width: 40,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      plotOptions: {
        radialBar: {
          hollow: {
            margin: 0,
            size: '75%'
          },
          track: {
            margin: 0
          },
          dataLabels: {
            show: false
          }
        }
      },
      colors: ["#206bc4"],
      series: [56],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-orders'), {
      chart: {
        type: "radialBar",
        fontFamily: 'inherit',
        height: 40,
        width: 40,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      plotOptions: {
        radialBar: {
          hollow: {
            margin: 0,
            size: '75%'
          },
          track: {
            margin: 0
          },
          dataLabels: {
            show: false
          }
        }
      },
      colors: ["#5eba00"],
      series: [56],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-members'), {
      chart: {
        type: "radialBar",
        fontFamily: 'inherit',
        height: 40,
        width: 40,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      plotOptions: {
        radialBar: {
          hollow: {
            margin: 0,
            size: '75%'
          },
          track: {
            margin: 0
          },
          dataLabels: {
            show: false
          }
        }
      },
      colors: ["#cd201f"],
      series: [56],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-comments'), {
      chart: {
        type: "radialBar",
        fontFamily: 'inherit',
        height: 40,
        width: 40,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      plotOptions: {
        radialBar: {
          hollow: {
            margin: 0,
            size: '75%'
          },
          track: {
            margin: 0
          },
          dataLabels: {
            show: false
          }
        }
      },
      colors: ["#fab005"],
      series: [56],
    })).render();
  });
  // @formatter:on
</script>
@endpush