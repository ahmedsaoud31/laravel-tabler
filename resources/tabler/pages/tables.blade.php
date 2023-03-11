@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Tables
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="table-responsive">
              <table class="table table-vcenter card-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="w-1"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td >Paweł Kuna</td>
                    <td class="text-muted" >
                      UI Designer, Training
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
                    <td class="text-muted" >
                      User
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >Jeffie Lewzey</td>
                    <td class="text-muted" >
                      Chemical Engineer, Support
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                    <td class="text-muted" >
                      Admin
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >Mallory Hulme</td>
                    <td class="text-muted" >
                      Geologist IV, Support
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
                    <td class="text-muted" >
                      User
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >Dunn Slane</td>
                    <td class="text-muted" >
                      Research Nurse, Sales
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                    <td class="text-muted" >
                      Owner
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >Emmy Levet</td>
                    <td class="text-muted" >
                      VP Product Management, Accounting
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                    <td class="text-muted" >
                      Admin
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="table-responsive">
              <table class="table table-vcenter card-table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="w-1"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td >Maryjo Lebarree</td>
                    <td class="text-muted" >
                      Civil Engineer, Product Management
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                    <td class="text-muted" >
                      User
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >Egan Poetz</td>
                    <td class="text-muted" >
                      Research Nurse, Engineering
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                    <td class="text-muted" >
                      Admin
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >Kellie Skingley</td>
                    <td class="text-muted" >
                      Teacher, Services
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                    <td class="text-muted" >
                      User
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >Christabel Charlwood</td>
                    <td class="text-muted" >
                      Tax Accountant, Engineering
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">ccharlwood8@nifty.com</a></td>
                    <td class="text-muted" >
                      Owner
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >Haskel Shelper</td>
                    <td class="text-muted" >
                      Staff Scientist, Legal
                    </td>
                    <td class="text-muted" ><a href="#" class="text-reset">hshelper9@woothemes.com</a></td>
                    <td class="text-muted" >
                      Admin
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="table-responsive">
              <table class="table table-vcenter card-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Role</th>
                    <th class="w-1"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)"></span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Lorry Mion</div>
                          <div class="text-muted"><a href="#" class="text-reset">lmiona@livejournal.com</a></div>
                        </div>
                      </div>
                    </td>
                    <td >
                      <div>Automation Specialist IV</div>
                      <div class="text-muted">Accounting</div>
                    </td>
                    <td class="text-muted" >
                      User
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/004f.jpg)"></span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Leesa Beaty</div>
                          <div class="text-muted"><a href="#" class="text-reset">lbeatyb@alibaba.com</a></div>
                        </div>
                      </div>
                    </td>
                    <td >
                      <div>Editor</div>
                      <div class="text-muted">Services</div>
                    </td>
                    <td class="text-muted" >
                      Admin
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/007m.jpg)"></span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Perren Keemar</div>
                          <div class="text-muted"><a href="#" class="text-reset">pkeemarc@yahoo.com</a></div>
                        </div>
                      </div>
                    </td>
                    <td >
                      <div>Analog Circuit Design manager</div>
                      <div class="text-muted">Services</div>
                    </td>
                    <td class="text-muted" >
                      User
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2">SA</span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Sunny Airey</div>
                          <div class="text-muted"><a href="#" class="text-reset">saireyd@prlog.org</a></div>
                        </div>
                      </div>
                    </td>
                    <td >
                      <div>Nuclear Power Engineer</div>
                      <div class="text-muted">Engineering</div>
                    </td>
                    <td class="text-muted" >
                      Owner
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/009m.jpg)"></span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Geoffry Flaunders</div>
                          <div class="text-muted"><a href="#" class="text-reset">gflaunderse@loc.gov</a></div>
                        </div>
                      </div>
                    </td>
                    <td >
                      <div>Software Test Engineer II</div>
                      <div class="text-muted">Accounting</div>
                    </td>
                    <td class="text-muted" >
                      Admin
                    </td>
                    <td>
                      <a href="#">Edit</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="table-responsive">
              <table class="table table-vcenter table-mobile-md card-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Role</th>
                    <th class="w-1"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Name" >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/010m.jpg)"></span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Thatcher Keel</div>
                          <div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a></div>
                        </div>
                      </div>
                    </td>
                    <td data-label="Title" >
                      <div>VP Sales</div>
                      <div class="text-muted">Business Development</div>
                    </td>
                    <td class="text-muted" data-label="Role" >
                      User
                    </td>
                    <td>
                      <div class="btn-list flex-nowrap">
                        <a href="#" class="btn">
                          Edit
                        </a>
                        <div class="dropdown">
                          <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                            Actions
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              Action
                            </a>
                            <a class="dropdown-item" href="#">
                              Another action
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="Name" >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/005f.jpg)"></span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Dyann Escala</div>
                          <div class="text-muted"><a href="#" class="text-reset">descalag@usatoday.com</a></div>
                        </div>
                      </div>
                    </td>
                    <td data-label="Title" >
                      <div>Mechanical Systems Engineer</div>
                      <div class="text-muted">Sales</div>
                    </td>
                    <td class="text-muted" data-label="Role" >
                      Admin
                    </td>
                    <td>
                      <div class="btn-list flex-nowrap">
                        <a href="#" class="btn">
                          Edit
                        </a>
                        <div class="dropdown">
                          <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                            Actions
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              Action
                            </a>
                            <a class="dropdown-item" href="#">
                              Another action
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="Name" >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/006f.jpg)"></span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Avivah Mugleston</div>
                          <div class="text-muted"><a href="#" class="text-reset">amuglestonh@intel.com</a></div>
                        </div>
                      </div>
                    </td>
                    <td data-label="Title" >
                      <div>Actuary</div>
                      <div class="text-muted">Sales</div>
                    </td>
                    <td class="text-muted" data-label="Role" >
                      User
                    </td>
                    <td>
                      <div class="btn-list flex-nowrap">
                        <a href="#" class="btn">
                          Edit
                        </a>
                        <div class="dropdown">
                          <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                            Actions
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              Action
                            </a>
                            <a class="dropdown-item" href="#">
                              Another action
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="Name" >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2">AA</span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Arlie Armstead</div>
                          <div class="text-muted"><a href="#" class="text-reset">aarmsteadi@yellowpages.com</a></div>
                        </div>
                      </div>
                    </td>
                    <td data-label="Title" >
                      <div>VP Quality Control</div>
                      <div class="text-muted">Accounting</div>
                    </td>
                    <td class="text-muted" data-label="Role" >
                      Owner
                    </td>
                    <td>
                      <div class="btn-list flex-nowrap">
                        <a href="#" class="btn">
                          Edit
                        </a>
                        <div class="dropdown">
                          <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                            Actions
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              Action
                            </a>
                            <a class="dropdown-item" href="#">
                              Another action
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="Name" >
                      <div class="d-flex py-1 align-items-center">
                        <span class="avatar me-2" style="background-image: url({{ asset('/') }}tabler/static/avatars/008f.jpg)"></span>
                        <div class="flex-fill">
                          <div class="font-weight-medium">Tessie Curzon</div>
                          <div class="text-muted"><a href="#" class="text-reset">tcurzonj@hp.com</a></div>
                        </div>
                      </div>
                    </td>
                    <td data-label="Title" >
                      <div>Research Nurse</div>
                      <div class="text-muted">Product Management</div>
                    </td>
                    <td class="text-muted" data-label="Role" >
                      Admin
                    </td>
                    <td>
                      <div class="btn-list flex-nowrap">
                        <a href="#" class="btn">
                          Edit
                        </a>
                        <div class="dropdown">
                          <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                            Actions
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              Action
                            </a>
                            <a class="dropdown-item" href="#">
                              Another action
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Invoices</h3>
            </div>
            <div class="card-body border-bottom py-3">
              <div class="d-flex">
                <div class="text-muted">
                  Show
                  <div class="mx-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                  </div>
                  entries
                </div>
                <div class="ms-auto text-muted">
                  Search:
                  <div class="ms-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                  <tr>
                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                    <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
                    </th>
                    <th>Invoice Subject</th>
                    <th>Client</th>
                    <th>VAT No.</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001401</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                    <td>
                      <span class="flag flag-country-us"></span>
                      Carlson Limited
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      15 Dec 2017
                    </td>
                    <td>
                      <span class="badge bg-success me-1"></span> Paid
                    </td>
                    <td>$887</td>
                    <td class="text-end">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001402</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                    <td>
                      <span class="flag flag-country-gb"></span>
                      Adobe
                    </td>
                    <td>
                      87956421
                    </td>
                    <td>
                      12 Apr 2017
                    </td>
                    <td>
                      <span class="badge bg-warning me-1"></span> Pending
                    </td>
                    <td>$1200</td>
                    <td class="text-end">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001403</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                    <td>
                      <span class="flag flag-country-de"></span>
                      Bluewolf
                    </td>
                    <td>
                      87952621
                    </td>
                    <td>
                      23 Oct 2017
                    </td>
                    <td>
                      <span class="badge bg-warning me-1"></span> Pending
                    </td>
                    <td>$534</td>
                    <td class="text-end">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001404</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                    <td>
                      <span class="flag flag-country-br"></span>
                      Salesforce
                    </td>
                    <td>
                      87953421
                    </td>
                    <td>
                      2 Sep 2017
                    </td>
                    <td>
                      <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                    </td>
                    <td>$1500</td>
                    <td class="text-end">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001405</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                    <td>
                      <span class="flag flag-country-pl"></span>
                      Printic
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      29 Jan 2018
                    </td>
                    <td>
                      <span class="badge bg-danger me-1"></span> Paid Today
                    </td>
                    <td>$648</td>
                    <td class="text-end">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001406</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                    <td>
                      <span class="flag flag-country-br"></span>
                      Tabdaq
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      4 Feb 2018
                    </td>
                    <td>
                      <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                    </td>
                    <td>$300</td>
                    <td class="text-end">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001407</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo & Print</a></td>
                    <td>
                      <span class="flag flag-country-us"></span>
                      Apple
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      22 Mar 2018
                    </td>
                    <td>
                      <span class="badge bg-success me-1"></span> Paid Today
                    </td>
                    <td>$2500</td>
                    <td class="text-end">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001408</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                    <td>
                      <span class="flag flag-country-pl"></span>
                      Tookapic
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      13 May 2018
                    </td>
                    <td>
                      <span class="badge bg-success me-1"></span> Paid Today
                    </td>
                    <td>$940</td>
                    <td class="text-end">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer d-flex align-items-center">
              <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
              <ul class="pagination m-0 ms-auto">
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
      </div>
    </div>
  </div>
@endsection