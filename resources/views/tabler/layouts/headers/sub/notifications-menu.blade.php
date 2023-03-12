<div class="nav-item dropdown d-none d-md-flex me-3">
  <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
    @include('tabler::icons.svg.bell')
    <span class="badge bg-red"></span>
  </a>
  <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ __('Last updates') }}</h3>
      </div>
      <div class="list-group list-group-flush list-group-hoverable">
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
            <div class="col text-truncate">
              <a href="#" class="text-body d-block">{{ __('Example') }} 1</a>
              <div class="d-block text-muted text-truncate mt-n1">
                {{ __('Example Line Of Notification String Example') }} #1 (#29604)
              </div>
            </div>
            <div class="col-auto">
              <a href="#" class="list-group-item-actions">
                @include('tabler::icons.svg.star')
              </a>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto"><span class="status-dot d-block"></span></div>
            <div class="col text-truncate">
              <a href="#" class="text-body d-block">{{ __('Example') }} 2</a>
              <div class="d-block text-muted text-truncate mt-n1">
                {{ __('Example Line Of Notification String Example') }} #2 (#29734)
              </div>
            </div>
            <div class="col-auto">
              <a href="#" class="list-group-item-actions show">
                @include('tabler::icons.svg.star')
              </a>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto"><span class="status-dot d-block"></span></div>
            <div class="col text-truncate">
              <a href="#" class="text-body d-block">{{ __('Example') }} 3</a>
              <div class="d-block text-muted text-truncate mt-n1">
                {{ __('Example Line Of Notification String Example') }} #3 (#29736)
              </div>
            </div>
            <div class="col-auto">
              <a href="#" class="list-group-item-actions">
                @include('tabler::icons.svg.star')
              </a>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
            <div class="col text-truncate">
              <a href="#" class="text-body d-block">{{ __('Example') }} 4</a>
              <div class="d-block text-muted text-truncate mt-n1">
                {{ __('Example Line Of Notification String Example') }} #4 (#29730)
              </div>
            </div>
            <div class="col-auto">
              <a href="#" class="list-group-item-actions">
                @include('tabler::icons.svg.star')
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
