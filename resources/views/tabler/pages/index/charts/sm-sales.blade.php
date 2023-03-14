<div class="card">
  <div class="card-body">
    <div class="d-flex align-items-center">
      <div class="subheader">{{ __('Sales') }}</div>
      <div class="ms-auto lh-1">
        <div class="dropdown">
          <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Last') }} 7 {{ __('days') }}</a>
          <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item active" href="#">{{ __('Last') }} 7 {{ __('days') }}</a>
            <a class="dropdown-item" href="#">{{ __('Last') }} 30 {{ __('days') }}</a>
            <a class="dropdown-item" href="#">{{ __('Last') }} 3 {{ __('months') }}</a>
          </div>
        </div>
      </div>
    </div>
    <div class="h1 mb-3">75%</div>
    <div class="d-flex mb-2">
      <div>{{ __('Conversion rate') }}</div>
      <div class="ms-auto">
        <span class="text-green d-inline-flex align-items-center lh-1">
          7% @include('tabler::icons.svg.trending-up')
        </span>
      </div>
    </div>
    <div class="progress progress-sm">
      <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
        <span class="visually-hidden">75% {{ __('Complete') }}</span>
      </div>
    </div>
  </div>
</div>

@push('scripts')

@endpush