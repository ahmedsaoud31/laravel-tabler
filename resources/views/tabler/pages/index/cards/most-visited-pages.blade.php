<div class="card">
  <div class="card-header">
    <h3 class="card-title">Most Visited Pages</h3>
  </div>
  <div class="card-table table-responsive">
    <table class="table table-vcenter">
      <thead>
        <tr>
          <th>Page name</th>
          <th>Visitors</th>
          <th>Unique</th>
          <th colspan="2">Bounce rate</th>
        </tr>
      </thead>
      <tr>
        <td>
          /about.html
          <a href="#" class="ms-1" aria-label="Open website">
            @include('tabler::icons.svg.link')
          </a>
        </td>
        <td class="text-muted">4,896</td>
        <td class="text-muted">3,654</td>
        <td class="text-muted">82.54%</td>
        <td class="text-end w-1">
          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-1"></div>
        </td>
      </tr>
      <tr>
        <td>
          /special-promo.html
          <a href="#" class="ms-1" aria-label="Open website">
            @include('tabler::icons.svg.link')
          </a>
        </td>
        <td class="text-muted">3,652</td>
        <td class="text-muted">3,215</td>
        <td class="text-muted">76.29%</td>
        <td class="text-end w-1">
          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-2"></div>
        </td>
      </tr>
      <tr>
        <td>
          /news/1,new-ui-kit.html
          <a href="#" class="ms-1" aria-label="Open website">
            @include('tabler::icons.svg.link')
          </a>
        </td>
        <td class="text-muted">3,256</td>
        <td class="text-muted">2,865</td>
        <td class="text-muted">72.65%</td>
        <td class="text-end w-1">
          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-3"></div>
        </td>
      </tr>
      <tr>
        <td>
          /lorem-ipsum-dolor-sit-amet-very-long-url.html
          <a href="#" class="ms-1" aria-label="Open website">
            @include('tabler::icons.svg.link')
          </a>
        </td>
        <td class="text-muted">986</td>
        <td class="text-muted">865</td>
        <td class="text-muted">44.89%</td>
        <td class="text-end w-1">
          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-4"></div>
        </td>
      </tr>
      <tr>
        <td>
          /colors.html
          <a href="#" class="ms-1" aria-label="Open website">
            @include('tabler::icons.svg.link')
          </a>
        </td>
        <td class="text-muted">912</td>
        <td class="text-muted">822</td>
        <td class="text-muted">41.12%</td>
        <td class="text-end w-1">
          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-5"></div>
        </td>
      </tr>
      <tr>
        <td>
          /docs/index.html
          <a href="#" class="ms-1" aria-label="Open website">
            @include('tabler::icons.svg.link')
          </a>
        </td>
        <td class="text-muted">855</td>
        <td class="text-muted">798</td>
        <td class="text-muted">32.65%</td>
        <td class="text-end w-1">
          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-6"></div>
        </td>
      </tr>
    </table>
  </div>
</div>

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
        chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 24,
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
        stroke: {
            width: 2,
            lineCap: "round",
        },
        series: [{
            color: "#206bc4",
            data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
        }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
        chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 24,
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
        stroke: {
            width: 2,
            lineCap: "round",
        },
        series: [{
            color: "#206bc4",
            data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
        }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
        chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 24,
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
        stroke: {
            width: 2,
            lineCap: "round",
        },
        series: [{
            color: "#206bc4",
            data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
        }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
        chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 24,
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
        stroke: {
            width: 2,
            lineCap: "round",
        },
        series: [{
            color: "#206bc4",
            data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
        }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
        chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 24,
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
        stroke: {
            width: 2,
            lineCap: "round",
        },
        series: [{
            color: "#206bc4",
            data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
        }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
        chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 24,
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
        stroke: {
            width: 2,
            lineCap: "round",
        },
        series: [{
            color: "#206bc4",
            data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
        }],
    })).render();
  });
  // @formatter:on
</script>
@endpush