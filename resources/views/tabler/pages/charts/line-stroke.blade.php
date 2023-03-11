<div class="card">
  <div class="card-body">
    <div id="chart-line-stroke"></div>
  </div>
</div>

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-line-stroke'), {
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
        curve: "straight",
      },
      series: [{
        name: "Development",
        data: [8, 10, 11, 12, 20, 27, 30]
      },{
        name: "Marketing",
        data: [3, 16, 17, 19, 20, 30, 30]
      },{
        name: "Sales",
        data: [7, 10, 11, 18, 18, 18, 24]
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
        categories: ['2013', '2014', '2015', '2016', '2017', '2018', '2019'],
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      colors: ["#ff922b", "#206bc4", "#5eba00"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
@endpush