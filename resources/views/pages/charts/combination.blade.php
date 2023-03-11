<div class="card">
  <div class="card-body">
    <div id="chart-combination"></div>
  </div>
</div>

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-combination'), {
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
        name: "Development",
        data: [30, 20, 50, 40, 60, 50]
      },{
        name: "Marketing",
        data: [200, 130, 90, 240, 130, 220]
      },{
        name: "Sales",
        data: [300, 200, 160, 400, 250, 250]
      },{
        name: "Sales",
        data: [200, 130, 90, 240, 130, 220]
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
        categories: ['2013', '2014', '2015', '2016', '2017', '2018'],
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      colors: ["#5eba00", "#f66d9b", "#5eba00", "#206bc4"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
@endpush