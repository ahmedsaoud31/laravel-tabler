@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Data grid
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Base info</h3>
        </div>
        <div class="card-body">
          <div class="datagrid">
            <div class="datagrid-item">
              <div class="datagrid-title">Registrar</div>
              <div class="datagrid-content">Third Party</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Nameservers</div>
              <div class="datagrid-content">Third Party</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Port number</div>
              <div class="datagrid-content">3306</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Expiration date</div>
              <div class="datagrid-content">–</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Creator</div>
              <div class="datagrid-content">
                <div class="d-flex align-items-center">
                  <span class="avatar avatar-xs me-2 avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                  Paweł Kuna
                </div>
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Age</div>
              <div class="datagrid-content">15 days</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Edge network</div>
              <div class="datagrid-content">
                <span class="status status-green">
                  Active
                </span>
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Avatars list</div>
              <div class="datagrid-content">
                <div class="avatar-list avatar-list-stacked">
                  <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                  <span class="avatar avatar-xs avatar-rounded">JL</span>
                  <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                  <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                  <span class="avatar avatar-xs avatar-rounded" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                  <span class="avatar avatar-xs avatar-rounded">+3</span>
                </div>
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Checkbox</div>
              <div class="datagrid-content">
                <label class="form-check">
                  <input class="form-check-input" type="checkbox" checked>
                  <span class="form-check-label">Click me</span>
                </label>
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Icon</div>
              <div class="datagrid-content">
                <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                Checked
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Form control</div>
              <div class="datagrid-content">
                <input type="text" class="form-control form-control-flush" placeholder="Input placeholder">
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Longer description</div>
              <div class="datagrid-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection