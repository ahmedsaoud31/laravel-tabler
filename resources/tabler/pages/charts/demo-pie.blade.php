<div class="card">
  <div class="card-body">
    <div id="chart-demo-pie"></div>
  </div>
</div>

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-demo-pie'), {
      chart: {
        type: "donut",
        fontFamily: 'inherit',
        height: 240,
        sparkline: {
          enabled: true
        },
        animations: {
          enabled: false
        },
      },
      fill: {
        opacity: 1,
      },
      series: [44, 55, 12, 2],
      labels: ["Direct", "Affilliate", "E-mail", "Other"],
      grid: {
        strokeDashArray: 4,
      },
      colors: ["#206bc4", "#79a6dc", "#d2e1f3", "#e9ecf1"],
      legend: {
        show: true,
        position: 'bottom',
        offsetY: 12,
        markers: {
          width: 10,
          height: 10,
          radius: 100,
        },
        itemMargin: {
          horizontal: 8,
          vertical: 8
        },
      },
      tooltip: {
        fillSeriesColor: false
      },
    })).render();
  });
  // @formatter:on
</script>
@endpush