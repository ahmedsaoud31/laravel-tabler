<div class="card">
  <div class="card-body">
    <div id="chart-scatter"></div>
  </div>
</div>

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-scatter'), {
      chart: {
        type: "scatter",
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
      series: [{
        name: "Maximum",
        data: [11, 8, 15, 18, 19, 17]
      },{
        name: "Minimum",
        data: [7, 7, 5, 7, 9, 12]
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
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      colors: ["#206bc4", "#f66d9b"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
@endpush