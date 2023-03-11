@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Vector Maps
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">World map</h3>
              <div class="ratio ratio-4x3">
                <div>
                  <div id="map-world-merc" class="w-100 h-100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Map with markers</h3>
              <div class="ratio ratio-4x3">
                <div>
                  <div id="map-world-markers" class="w-100 h-100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Map with markers and lines</h3>
              <div class="ratio ratio-4x3">
                <div>
                  <div id="map-world-lines" class="w-100 h-100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL-BY8-sq12m0S9H-S_yMqDmcun3A9znw" defer></script>
<script src="{{ asset('tabler/libs/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
<script src="{{ asset('tabler/libs/jsvectormap/dist/maps/world.js') }}" defer></script>
<script src="{{ asset('tabler/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
@endpush

@push('scripts')
<script>
  // @formatter:on
  document.addEventListener("DOMContentLoaded", function() {
    const map = new jsVectorMap({
      selector: '#map-world-merc',
      map: 'world_merc',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#F8FAFC',
          stroke: 'rgba(98, 105, 118, .16)',
          strokeWidth: 1,
        }
      },
      zoomOnScroll: false,
      zoomButtons: false,
      // -------- Series --------
      visualizeData: {
        scale: ['#F8FAFC', '#206bc4'],
        values: { "AF": 16, "AL": 11, "DZ": 158, "AO": 85, "AG": 1, "AR": 351, "AM": 8, "AU": 1219, "AT": 366, "AZ": 52, "BS": 7, "BH": 21, "BD": 105, "BB": 3, "BY": 52, "BE": 461, "BZ": 1, "BJ": 6, "BT": 1, "BO": 19, "BA": 16, "BW": 12, "BR": 2023, "BN": 11, "BG": 44, "BF": 8, "BI": 1, "KH": 11, "CM": 21, "CA": 1563, "CV": 1, "CF": 2, "TD": 7, "CL": 199, "CN": 5745, "CO": 283, "KM": 0, "CD": 12, "CG": 11, "CR": 35, "CI": 22, "HR": 59, "CY": 22, "CZ": 195, "DK": 304, "DJ": 1, "DM": 0, "DO": 50, "EC": 61, "EG": 216, "SV": 21, "GQ": 14, "ER": 2, "EE": 19, "ET": 30, "FJ": 3, "FI": 231, "FR": 2555, "GA": 12, "GM": 1, "GE": 11, "DE": 3305, "GH": 18, "GR": 305, "GD": 0, "GT": 40, "GN": 4, "GW": 0, "GY": 2, "HT": 6, "HN": 15, "HK": 226, "HU": 132, "IS": 12, "IN": 1430, "ID": 695, "IR": 337, "IQ": 84, "IE": 204, "IL": 201, "IT": 2036, "JM": 13, "JP": 5390, "JO": 27, "KZ": 129, "KE": 32, "KI": 0, "KR": 986, "KW": 117, "KG": 4, "LA": 6, "LV": 23, "LB": 39, "LS": 1, "LR": 0, "LY": 77, "LT": 35, "LU": 52, "MK": 9, "MG": 8, "MW": 5, "MY": 218, "MV": 1, "ML": 9, "MT": 7, "MR": 3, "MU": 9, "MX": 1004, "MD": 5, "MN": 5, "ME": 3, "MA": 91, "MZ": 10, "MM": 35, "NA": 11, "NP": 15, "NL": 770, "NZ": 138, "NI": 6, "NE": 5, "NG": 206, "NO": 413, "OM": 53, "PK": 174, "PA": 27, "PG": 8, "PY": 17, "PE": 153, "PH": 189, "PL": 438, "PT": 223, "QA": 126, "RO": 158, "RU": 1476, "RW": 5, "WS": 0, "ST": 0, "SA": 434, "SN": 12, "RS": 38, "SC": 0, "SL": 1, "SG": 217, "SK": 86, "SI": 46, "SB": 0, "ZA": 354, "ES": 1374, "LK": 48, "KN": 0, "LC": 1, "VC": 0, "SD": 65, "SR": 3, "SZ": 3, "SE": 444, "CH": 522, "SY": 59, "TW": 426, "TJ": 5, "TZ": 22, "TH": 312, "TL": 0, "TG": 3, "TO": 0, "TT": 21, "TN": 43, "TR": 729, "TM": 0, "UG": 17, "UA": 136, "AE": 239, "GB": 2258, "US": 4624, "UY": 40, "UZ": 37, "VU": 0, "VE": 285, "VN": 101, "YE": 30, "ZM": 15, "ZW": 5 },
      },
    });
    window.addEventListener("resize", () => {
      map.updateSize();
    });
  });
  // @formatter:off
</script>
<script>
  // @formatter:on
  document.addEventListener("DOMContentLoaded", function() {
    const map = new jsVectorMap({
      selector: '#map-world-markers',
      map: 'world_merc',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#F8FAFC',
          stroke: 'rgba(98, 105, 118, .16)',
          strokeWidth: 1,
        }
      },
      zoomOnScroll: false,
      zoomButtons: false,
      markers: [
        {
          coords: [61.524, 105.3188],
          name: "Russia",
        },
        {
          coords: [56.1304, -106.3468],
          name: "Canada",
        },
        {
          coords: [71.7069, -42.6043],
          name: "Greenland",
        },
        {
          coords: [26.8206, 30.8025],
          name: "Egypt",
        },
        {
          coords: [-14.235, -51.9253],
          name: "Brazil",
        },
        {
          coords: [35.8617, 104.1954],
          name: "China",
        },
        {
          coords: [37.0902, -95.7129],
          name: "United States",
        },
        {
          coords: [60.472024, 8.468946],
          name: "Norway",
        },
        {
          coords: [48.379433, 31.16558],
          name: "Ukraine",
        },
      ],
      markerStyle: {
        initial: {
          r: 4,
          stroke: '#fff',
          opacity: 1,
          strokeWidth: 3,
          stokeOpacity: .5,
          fill: '#cd201f'
        },
        hover: {
          fill: '#cd201f',
          stroke: '#cd201f'
        }
      },
      markerLabelStyle: {
        initial: {
          fontSize: 10
        },
      },
      labels: {
        markers: {
          render: function(marker) {
            return marker.name
          },
        },
      },
    });
    window.addEventListener("resize", () => {
      map.updateSize();
    });
  });
  // @formatter:off
</script>
<script>
  // @formatter:on
  document.addEventListener("DOMContentLoaded", function() {
    const map = new jsVectorMap({
      selector: '#map-world-lines',
      map: 'world_merc',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#F8FAFC',
          stroke: 'rgba(98, 105, 118, .16)',
          strokeWidth: 1,
        }
      },
      zoomOnScroll: false,
      zoomButtons: false,
      markers: [
        {
          coords: [61.524, 105.3188],
          name: "Russia",
        },
        {
          coords: [56.1304, -106.3468],
          name: "Canada",
        },
        {
          coords: [71.7069, -42.6043],
          name: "Greenland",
        },
        {
          coords: [26.8206, 30.8025],
          name: "Egypt",
        },
        {
          coords: [-14.235, -51.9253],
          name: "Brazil",
        },
        {
          coords: [35.8617, 104.1954],
          name: "China",
        },
        {
          coords: [37.0902, -95.7129],
          name: "United States",
        },
        {
          coords: [60.472024, 8.468946],
          name: "Norway",
        },
        {
          coords: [48.379433, 31.16558],
          name: "Ukraine",
        },
      ],
      markerStyle: {
        initial: {
          r: 4,
          stroke: '#fff',
          opacity: 1,
          strokeWidth: 3,
          stokeOpacity: .5,
          fill: '#206bc4'
        },
        hover: {
          fill: '#206bc4',
          stroke: '#206bc4'
        }
      },
      markerLabelStyle: {
        initial: {
          fontSize: 10
        },
      },
      labels: {
        markers: {
          render: function(marker) {
            return marker.name
          },
        },
      },
      lines: [
        {
          from: "Russia",
          to: "Greenland"
        },
        {
          from: "Russia",
          to: "United States"
        },
        {
          from: "Russia",
          to: "Canada"
        },
        {
          from: "Brazil",
          to: "Norway"
        },
        {
          from: "Brazil",
          to: "Ukraine"
        },
        {
          from: "Brazil",
          to: "Egypt"
        },
        {
          from: "Brazil",
          to: "China"
        },
      ],
      lineStyle: {
        strokeDasharray:"4 4",
        animation: true,
        stroke: "rgba(98, 105, 118, .75)",
        strokeWidth: .5,
      },
    });
    window.addEventListener("resize", () => {
      map.updateSize();
    });
  });
  // @formatter:off
</script>
@endpush