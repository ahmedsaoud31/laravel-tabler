@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Datatables
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="card-body">
          <div id="table-default" class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th><button class="table-sort" data-sort="sort-name">Name</button></th>
                  <th><button class="table-sort" data-sort="sort-city">City</button></th>
                  <th><button class="table-sort" data-sort="sort-type">Type</button></th>
                  <th><button class="table-sort" data-sort="sort-score">Score</button></th>
                  <th><button class="table-sort" data-sort="sort-date">Date</button></th>
                  <th><button class="table-sort" data-sort="sort-quantity">Quantity</button></th>
                  <th><button class="table-sort" data-sort="sort-progress">Progress</button></th>
                </tr>
              </thead>
              <tbody class="table-tbody">
                <tr>
                  <td class="sort-name">Steel Vengeance</td>
                  <td class="sort-city">Cedar Point, United States</td>
                  <td class="sort-type">RMC Hybrid</td>
                  <td class="sort-score">100,0%</td>
                  <td class="sort-date" data-date="1628071164">August 04, 2021</td>
                  <td class="sort-quantity">74</td>
                  <td class="sort-progress" data-progress="30">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">30%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" aria-label="30% Complete">
                            <span class="visually-hidden">30% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Fury 325</td>
                  <td class="sort-city">Carowinds, United States</td>
                  <td class="sort-type">B&M Giga, Hyper, Steel</td>
                  <td class="sort-score">99,3%</td>
                  <td class="sort-date" data-date="1546512137">January 03, 2019</td>
                  <td class="sort-quantity">49</td>
                  <td class="sort-progress" data-progress="48">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">48%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 48%" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" aria-label="48% Complete">
                            <span class="visually-hidden">48% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Wildfire</td>
                  <td class="sort-city">Kolmården  Sweden</td>
                  <td class="sort-type">RMC Twister, Wooden, Terrain</td>
                  <td class="sort-score">99,3%</td>
                  <td class="sort-date" data-date="1546016360">December 28, 2018</td>
                  <td class="sort-quantity">8</td>
                  <td class="sort-progress" data-progress="9">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">9%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 9%" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" aria-label="9% Complete">
                            <span class="visually-hidden">9% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Lightning Rod</td>
                  <td class="sort-city">Dollywood, United States</td>
                  <td class="sort-type">RMC Wooden</td>
                  <td class="sort-score">99,1%</td>
                  <td class="sort-date" data-date="1604704179">November 07, 2020</td>
                  <td class="sort-quantity">104</td>
                  <td class="sort-progress" data-progress="98">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">98%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 98%" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" aria-label="98% Complete">
                            <span class="visually-hidden">98% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Maverick</td>
                  <td class="sort-city">Cedar Point, United States</td>
                  <td class="sort-type">Intamin Rocket, Steel</td>
                  <td class="sort-score">99,1%</td>
                  <td class="sort-date" data-date="1637669424">November 23, 2021</td>
                  <td class="sort-quantity">86</td>
                  <td class="sort-progress" data-progress="46">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">46%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 46%" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" aria-label="46% Complete">
                            <span class="visually-hidden">46% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">El Toro</td>
                  <td class="sort-city">Six Flags Great Adventure, United States</td>
                  <td class="sort-type">Intamin Twister, Wooden</td>
                  <td class="sort-score">99,0%</td>
                  <td class="sort-date" data-date="1610586921">January 14, 2021</td>
                  <td class="sort-quantity">130</td>
                  <td class="sort-progress" data-progress="29">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">29%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 29%" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" aria-label="29% Complete">
                            <span class="visually-hidden">29% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Twisted Colossus</td>
                  <td class="sort-city">Six Flags Magic Mountain, United States</td>
                  <td class="sort-type">RMC Hybrid</td>
                  <td class="sort-score">98,9%</td>
                  <td class="sort-date" data-date="1569399536">September 25, 2019</td>
                  <td class="sort-quantity">30</td>
                  <td class="sort-progress" data-progress="57">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">57%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 57%" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" aria-label="57% Complete">
                            <span class="visually-hidden">57% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Eejanaika new</td>
                  <td class="sort-city">Fuji-Q Highland, Japan</td>
                  <td class="sort-type">S&S Power 4th Dimension, Steel</td>
                  <td class="sort-score">98,6%</td>
                  <td class="sort-date" data-date="1610794724">January 16, 2021</td>
                  <td class="sort-quantity">162</td>
                  <td class="sort-progress" data-progress="91">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">91%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 91%" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" aria-label="91% Complete">
                            <span class="visually-hidden">91% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Wicked Cyclone</td>
                  <td class="sort-city">Six Flags New England, United States</td>
                  <td class="sort-type">RMC Hybrid</td>
                  <td class="sort-score">98,2%</td>
                  <td class="sort-date" data-date="1568819813">September 18, 2019</td>
                  <td class="sort-quantity">174</td>
                  <td class="sort-progress" data-progress="3">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">3%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 3%" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" aria-label="3% Complete">
                            <span class="visually-hidden">3% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Shambhala</td>
                  <td class="sort-city">Port Aventura, Spain</td>
                  <td class="sort-type">B&M Hyper, Steel</td>
                  <td class="sort-score">98,2%</td>
                  <td class="sort-date" data-date="1538221867">September 29, 2018</td>
                  <td class="sort-quantity">111</td>
                  <td class="sort-progress" data-progress="24">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">24%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 24%" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" aria-label="24% Complete">
                            <span class="visually-hidden">24% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Taron</td>
                  <td class="sort-city">Phantasialand, Germany</td>
                  <td class="sort-type">Intamin Sit Down, Steel</td>
                  <td class="sort-score">98,2%</td>
                  <td class="sort-date" data-date="1592858850">June 22, 2020</td>
                  <td class="sort-quantity">130</td>
                  <td class="sort-progress" data-progress="48">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">48%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 48%" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" aria-label="48% Complete">
                            <span class="visually-hidden">48% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Expedition Ge Force</td>
                  <td class="sort-city">Holiday Park, Germany</td>
                  <td class="sort-type">Intamin Megacoaster, Steel</td>
                  <td class="sort-score">98,2%</td>
                  <td class="sort-date" data-date="1565107347">August 06, 2019</td>
                  <td class="sort-quantity">157</td>
                  <td class="sort-progress" data-progress="57">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">57%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 57%" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" aria-label="57% Complete">
                            <span class="visually-hidden">57% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Storm Chaser</td>
                  <td class="sort-city">Kentucky Kingdom, United States</td>
                  <td class="sort-type">RMC Steel</td>
                  <td class="sort-score">97,9%</td>
                  <td class="sort-date" data-date="1564805623">August 03, 2019</td>
                  <td class="sort-quantity">43</td>
                  <td class="sort-progress" data-progress="42">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">42%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 42%" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" aria-label="42% Complete">
                            <span class="visually-hidden">42% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Helix</td>
                  <td class="sort-city">Liseberg, Sweden</td>
                  <td class="sort-type">Mack Looper, Steel, Terrain</td>
                  <td class="sort-score">97,9%</td>
                  <td class="sort-date" data-date="1633500491">October 06, 2021</td>
                  <td class="sort-quantity">151</td>
                  <td class="sort-progress" data-progress="54">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">54%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 54%" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" aria-label="54% Complete">
                            <span class="visually-hidden">54% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="sort-name">Outlaw Run</td>
                  <td class="sort-city">Silver Dollar City, United States</td>
                  <td class="sort-type">RMC Hybrid</td>
                  <td class="sort-score">96,6%</td>
                  <td class="sort-date" data-date="1547084027">January 10, 2019</td>
                  <td class="sort-quantity">131</td>
                  <td class="sort-progress" data-progress="64">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">64%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 64%" role="progressbar" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100" aria-label="64% Complete">
                            <span class="visually-hidden">64% Complete</span>
                          </div>
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
    </div>
  </div>
@endsection

@push('libs')
  <script src="{{ asset('tabler/libs/list.js/dist/list.min.js') }}" defer></script>
@endpush

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
  const list = new List('table-default', {
    sortClass: 'table-sort',
    listClass: 'table-tbody',
    valueNames: [ 'sort-name', 'sort-type', 'sort-city', 'sort-score',
      { attr: 'data-date', name: 'sort-date' },
      { attr: 'data-progress', name: 'sort-progress' },
      'sort-quantity'
    ]
  });
  })
</script>
@endpush
