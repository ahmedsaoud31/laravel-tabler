@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <div class="page-header d-print-none">
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <span class="status-indicator status-green status-indicator-animated">
            <span class="status-indicator-circle"></span>
            <span class="status-indicator-circle"></span>
            <span class="status-indicator-circle"></span>
          </span>
        </div>
        <div class="col">
          <h2 class="page-title">
            tabler-icons.io
          </h2>
          <div class="text-muted">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item"><span class="text-green">Up</span></li>
              <li class="list-inline-item">Checked every 3 minutes</li>
            </ul>
          </div>
        </div>
        <div class="col-md-auto ms-auto d-print-none">
          <div class="btn-list">
            <a href="#" class="btn">
              <!-- Download SVG icon from http://tabler-icons.io/i/settings -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
              Configure
            </a>
            <a href="#" class="btn btn-primary">
              <!-- Download SVG icon from http://tabler-icons.io/i/player-pause -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="6" y="5" width="4" height="14" rx="1" /><rect x="14" y="5" width="4" height="14" rx="1" /></svg>
              Pause this monitor
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="subheader">Currently up for</div>
              <div class="h3 m-0">14 days 2 hours 54 mins 34 seconds</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="subheader">Last checked at</div>
              <div class="h3 m-0">27 seconds ago</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="subheader">Incidents</div>
              <div class="h3 m-0">3</div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Response times across regions in the last day</h3>
              <div id="chart-uptime"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Uptime incidents per day</h3>
              <div id="chart-uptime-incidents"></div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-table table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Time period</th>
                    <th>Availability</th>
                    <th>Downtime</th>
                    <th>Incidents</th>
                    <th>Longest incident</th>
                    <th>Avg. incident</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Today</td>
                    <td>98.9533%</td>
                    <td>1 minute</td>
                    <td>1</td>
                    <td>1 minute</td>
                    <td>1 minute</td>
                  </tr>
                  <tr>
                    <td>Last 7 days</td>
                    <td>98.9533%</td>
                    <td>1 minute</td>
                    <td>1</td>
                    <td>1 minute</td>
                    <td>1 minute</td>
                  </tr>
                  <tr>
                    <td>Last 30 days</td>
                    <td>98.9533%</td>
                    <td>1 minute</td>
                    <td>1</td>
                    <td>1 minute</td>
                    <td>1 minute</td>
                  </tr>
                  <tr>
                    <td>Last 365 days</td>
                    <td>98.9533%</td>
                    <td>1 minute</td>
                    <td>1</td>
                    <td>1 minute</td>
                    <td>1 minute</td>
                  </tr>
                  <tr>
                    <td>All time</td>
                    <td>98.9533%</td>
                    <td>1 minute</td>
                    <td>1</td>
                    <td>1 minute</td>
                    <td>1 minute</td>
                  </tr>
                </tbody>
              </table>
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
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-uptime'), {
      chart: {
        type: "area",
        fontFamily: 'inherit',
        height: 240,
        parentHeightOffset: 0,
        toolbar: {
          show: false,
        },
        animations: {
          enabled: false
        },
      },
      dataLabels: {
        enabled: false,
      },
      fill: {
        opacity: .16,
        type: 'solid'
      },
      stroke: {
        width: 2,
        lineCap: "round",
        curve: "smooth",
      },
      series: [{
        name: "Uptime",
        data: [150, 160, 170, 161, 167, 162, 161, 152, 141, 144, 154, 166, 176, 187, 198, 210, 196, 207, 200, 187, 192, 204, 193, 204, 208, 196, 193, 178, 191, 204, 218, 211, 218, 216, 201, 197, 190, 179, 172, 158, 159, 147, 152, 152, 144, 137, 136, 123, 112, 99, 100, 95, 105, 116, 125, 124, 133, 129, 116, 119, 109, 114, 115, 111, 96, 104, 104, 102, 116, 126, 117, 130, 124, 126, 131, 143, 130, 116, 118, 122, 132, 126, 136, 123, 112, 116, 113, 113, 109, 99, 100, 95, 83, 79, 64, 79, 81, 94, 99, 97, 83, 71, 75, 69, 71, 75, 84, 90, 100, 96, 108, 102, 116, 112, 112, 102, 115, 120, 118, 118]
      }],
      grid: {
        padding: {
          top: -20,
          right: 0,
          left: -4,
          bottom: -4
        },
        strokeDashArray: 4,
      },
      xaxis: {
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false,
        },
        type: 'datetime',
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      labels: [
        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26', '2020-07-27', '2020-07-28', '2020-07-29', '2020-07-30', '2020-07-31', '2020-08-01', '2020-08-02', '2020-08-03', '2020-08-04', '2020-08-05', '2020-08-06', '2020-08-07', '2020-08-08', '2020-08-09', '2020-08-10', '2020-08-11', '2020-08-12', '2020-08-13', '2020-08-14', '2020-08-15', '2020-08-16', '2020-08-17', '2020-08-18', '2020-08-19', '2020-08-20', '2020-08-21', '2020-08-22', '2020-08-23', '2020-08-24', '2020-08-25', '2020-08-26', '2020-08-27', '2020-08-28', '2020-08-29', '2020-08-30', '2020-08-31', '2020-09-01', '2020-09-02', '2020-09-03', '2020-09-04', '2020-09-05', '2020-09-06', '2020-09-07', '2020-09-08', '2020-09-09', '2020-09-10', '2020-09-11', '2020-09-12', '2020-09-13', '2020-09-14', '2020-09-15', '2020-09-16', '2020-09-17', '2020-09-18', '2020-09-19', '2020-09-20', '2020-09-21', '2020-09-22', '2020-09-23', '2020-09-24', '2020-09-25', '2020-09-26', '2020-09-27', '2020-09-28', '2020-09-29', '2020-09-30', '2020-10-01', '2020-10-02', '2020-10-03', '2020-10-04', '2020-10-05', '2020-10-06', '2020-10-07', '2020-10-08', '2020-10-09', '2020-10-10', '2020-10-11', '2020-10-12', '2020-10-13', '2020-10-14', '2020-10-15', '2020-10-16', '2020-10-17'
      ],
      colors: ["#206bc4"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-uptime-incidents'), {
      chart: {
        type: "bar",
        fontFamily: 'inherit',
        height: 240,
        parentHeightOffset: 0,
        toolbar: {
          show: false,
        },
        animations: {
          enabled: false
        },
      },
      plotOptions: {
        bar: {
          columnWidth: '50%',
        }
      },
      dataLabels: {
        enabled: false,
      },
      fill: {
        opacity: 1,
      },
      series: [{
        name: "Uptime incidents",
        data: [1, 2, 6, 3, 1, 1, 2, 5, 2, 5, 6, 2, 4, 3, 4, 5, 4, 3, 2, 1, 2, 0, 2, 1, 1]
      }],
      grid: {
        padding: {
          top: -20,
          right: 0,
          left: -4,
          bottom: -4
        },
        strokeDashArray: 4,
      },
      xaxis: {
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false,
        },
        type: 'datetime',
      },
      yaxis: {
        labels: {
          padding: 4
        },
        max: 20,
      },
      labels: [
        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14'
      ],
      colors: ["#cd201f"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
@endpush