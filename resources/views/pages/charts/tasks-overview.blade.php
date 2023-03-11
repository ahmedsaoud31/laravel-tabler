<div class="card">
  <div class="card-body">
    <div id="chart-tasks-overview"></div>
  </div>
</div>

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-tasks-overview'), {
      chart: {
        type: "bar",
        fontFamily: 'inherit',
        height: 320,
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
        name: "A",
        data: [44, 32, 48, 72, 60, 16, 44, 32, 78, 50, 68, 34, 26, 48, 72, 60, 84, 64, 74, 52, 62, 50, 32, 22]
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
        categories: ['Sprint 1', 'Sprint 2', 'Sprint 3', 'Sprint 4', 'Sprint 5', 'Sprint 6', 'Sprint 7', 'Sprint 8', 'Sprint 9', 'Sprint 10', 'Sprint 11', 'Sprint 12', 'Sprint 13', 'Sprint 14', 'Sprint 15', 'Sprint 16', 'Sprint 17', 'Sprint 18', 'Sprint 19', 'Sprint 20', 'Sprint 21', 'Sprint 22', 'Sprint 23', 'Sprint 24'],
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      colors: ["#206bc4"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
@endpush