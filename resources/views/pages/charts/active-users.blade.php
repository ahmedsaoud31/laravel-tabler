<div class="card">
  <div class="card-body">
    <div class="d-flex">
      <h3 class="card-title">Active users</h3>
      <div class="ms-auto">
        <div class="dropdown">
          <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
          <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item active" href="#">Last 7 days</a>
            <a class="dropdown-item" href="#">Last 30 days</a>
            <a class="dropdown-item" href="#">Last 3 months</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div id="chart-active-users-2"></div>
      </div>
      <div class="col-md-auto">
        <div class="divide-y divide-y-fill">
          <div class="px-3">
            <div class="text-muted">
              <span class="status-dot bg-primary"></span> Mobile
            </div>
            <div class="h2">11,425</div>
          </div>
          <div class="px-3">
            <div class="text-muted">
              <span class="status-dot bg-azure"></span> Desktop
            </div>
            <div class="h2">6,458</div>
          </div>
          <div class="px-3">
            <div class="text-muted">
              <span class="status-dot bg-green"></span> Tablet
            </div>
            <div class="h2">3,985</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users-2'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 288,
        parentHeightOffset: 0,
        toolbar: {
          show: false,
        },
        animations: {
          enabled: false
        },
      },
      fill: {
        opacity: 1,
      },
      stroke: {
        width: 2,
        lineCap: "round",
        curve: "smooth",
      },
      series: [{
        name: "Mobile",
        data: [4164, 4652, 4817, 4841, 4920, 5439, 5486, 5498, 5512, 5538, 5841, 5877, 6086, 6146, 6199, 6431, 6704, 7939, 8127, 8296, 8322, 8389, 8411, 8502, 8868, 8977, 9273, 9325, 9345, 9430]
      },{
        name: "Desktop",
        data: [2164, 2292, 2386, 2430, 2528, 3045, 3255, 3295, 3481, 3604, 3688, 3840, 3932, 3949, 4003, 4298, 4424, 4869, 4922, 4973, 5155, 5267, 5566, 5689, 5692, 5758, 5773, 5799, 5960, 6000]
      },{
        name: "Tablet",
        data: [1069, 1089, 1125, 1141, 1162, 1179, 1185, 1216, 1274, 1322, 1346, 1395, 1439, 1564, 1581, 1590, 1656, 1815, 1868, 2010, 2133, 2179, 2264, 2265, 2278, 2343, 2354, 2456, 2472, 2480]
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
        type: 'datetime',
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      labels: [
        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      ],
      colors: ["#206bc4", "#45aaf2", "#5eba00"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
@endpush