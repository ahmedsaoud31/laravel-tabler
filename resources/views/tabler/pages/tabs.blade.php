@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Tabs
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-7" class="nav-link active" data-bs-toggle="tab">Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-7" class="nav-link" data-bs-toggle="tab">Profile</a>
              </li>
              <li class="nav-item ms-auto">
                <a href="#tabs-settings-7" class="nav-link" title="Settings" data-bs-toggle="tab">
                  @include('tabler::icons.svg.settings')
                </a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-7">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-7">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane" id="tabs-settings-7">
                  <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs flex-row-reverse" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-8" class="nav-link active" data-bs-toggle="tab">Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-8" class="nav-link" data-bs-toggle="tab">Profile</a>
              </li>
              <li class="nav-item me-auto">
                <a href="#tabs-settings-8" class="nav-link" title="Settings" data-bs-toggle="tab">
                  @include('tabler::icons.svg.settings')
                </a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-8">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-8">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane" id="tabs-settings-8">
                  <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-9" class="nav-link active" data-bs-toggle="tab">
                  @include('tabler::icons.svg.home')
                  Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-9" class="nav-link" data-bs-toggle="tab">
                  @include('tabler::icons.svg.user')
                  Profile</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-9">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-9">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs nav-tabs-alt" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-10" class="nav-link active" data-bs-toggle="tab">Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-10" class="nav-link" data-bs-toggle="tab">Profile</a>
              </li>
              <li class="nav-item ms-auto">
                <a href="#tabs-settings-10" class="nav-link" title="Settings" data-bs-toggle="tab">
                  @include('tabler::icons.svg.settings')
                </a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-10">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-10">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane" id="tabs-settings-10">
                  <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs nav-tabs-alt flex-row-reverse" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-11" class="nav-link active" data-bs-toggle="tab">Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-11" class="nav-link" data-bs-toggle="tab">Profile</a>
              </li>
              <li class="nav-item me-auto">
                <a href="#tabs-settings-11" class="nav-link" title="Settings" data-bs-toggle="tab">
                  @include('tabler::icons.svg.settings')
                </a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-11">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-11">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane" id="tabs-settings-11">
                  <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs nav-tabs-alt" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-12" class="nav-link active" data-bs-toggle="tab">
                  @include('tabler::icons.svg.home')
                  Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-12" class="nav-link" data-bs-toggle="tab">
                  @include('tabler::icons.svg.user')
                  Profile</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-12">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-12">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-13" class="nav-link active" data-bs-toggle="tab">Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-13" class="nav-link" data-bs-toggle="tab">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    Action
                  </a>
                  <a class="dropdown-item" href="#">
                    Another action
                  </a>
                </div>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-13">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-13">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs nav-fill" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-14" class="nav-link active" data-bs-toggle="tab">Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-14" class="nav-link" data-bs-toggle="tab">Profile</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-activity-14" class="nav-link" data-bs-toggle="tab">Activity</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-14">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-14">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane" id="tabs-activity-14">
                  <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs nav-fill" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-15" class="nav-link active" data-bs-toggle="tab">Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-15" class="nav-link" data-bs-toggle="tab">Profile</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-activity-15" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-15">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-15">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs nav-fill" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-16" class="nav-link active" data-bs-toggle="tab">
                  @include('tabler::icons.svg.home')
                  Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-16" class="nav-link" data-bs-toggle="tab">
                  @include('tabler::icons.svg.user')
                  Profile</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-activity-16" class="nav-link" data-bs-toggle="tab">
                  @include('tabler::icons.svg.activity')
                  Activity</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-16">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-16">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane" id="tabs-activity-16">
                  <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">Home</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-17" class="nav-link" data-bs-toggle="tab">Profile</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-activity-17" class="nav-link" data-bs-toggle="tab">Activity</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane fade active show" id="tabs-home-17">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane fade" id="tabs-profile-17">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane fade" id="tabs-activity-17">
                  <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection