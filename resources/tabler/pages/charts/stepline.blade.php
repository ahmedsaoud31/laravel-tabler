<div class="card">
  <div class="card-body">
    <div id="chart-stepline"></div>
  </div>
</div>

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-stepline'), {
      chart: {
        type: "line",
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
      fill: {
        opacity: 1,
      },
      stroke: {
        width: 2,
        lineCap: "round",
        curve: "stepline",
      },
      series: [{
        name: "Development",
        data: [34, 44, 54, 21, 12, 43, 33, 23, 66, 66, 58]
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
      yaxis: {
        labels: {
          padding: 4
        },
      },
      colors: ["#ff922b"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
@endpush