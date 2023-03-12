<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ __('New report') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">{{ __('Name') }}</label>
          <input type="text" class="form-control" name="example-text-input" placeholder="{{ __('Your report name') }}">
        </div>
        <label class="form-label">{{ __('Report type') }}</label>
        <div class="form-selectgroup-boxes row mb-3">
          <div class="col-lg-6">
            <label class="form-selectgroup-item">
              <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
              <span class="form-selectgroup-label d-flex align-items-center p-3">
                <span class="me-3">
                  <span class="form-selectgroup-check"></span>
                </span>
                <span class="form-selectgroup-label-content">
                  <span class="form-selectgroup-title strong mb-1">{{ __('Simple') }}</span>
                  <span class="d-block text-muted">{{ __('Provide only basic data needed for the report') }}</span>
                </span>
              </span>
            </label>
          </div>
          <div class="col-lg-6">
            <label class="form-selectgroup-item">
              <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
              <span class="form-selectgroup-label d-flex align-items-center p-3">
                <span class="me-3">
                  <span class="form-selectgroup-check"></span>
                </span>
                <span class="form-selectgroup-label-content">
                  <span class="form-selectgroup-title strong mb-1">{{ __('Advanced') }}</span>
                  <span class="d-block text-muted">{{ __('Insert charts and additional advanced analyses to be inserted in the report') }}</span>
                </span>
              </span>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-3">
              <label class="form-label">{{ __('Report url') }}</label>
              <div class="input-group input-group-flat">
                <span class="input-group-text">
                  https://tabler.io/reports/
                </span>
                <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label class="form-label">{{ __('Visibility') }}</label>
              <select class="form-select">
                <option value="1" selected>{{ __('Private') }}</option>
                <option value="2">{{ __('Public') }}</option>
                <option value="3">{{ __('Hidden') }}</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label class="form-label">{{ __('Client name') }}</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label class="form-label">{{ __('Reporting period') }}</label>
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="col-lg-12">
            <div>
              <label class="form-label">{{ __('Additional information') }}</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
          {{ __('Cancel') }}
        </a>
        <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
          @include('tabler::icons.svg.plus')
          {{ __('Create new report') }}
        </a>
      </div>
    </div>
  </div>
</div>