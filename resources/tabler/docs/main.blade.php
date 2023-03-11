@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Documentation
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row gx-lg-5">
        <div class="d-none d-lg-block col-lg-3">
          <ul class="nav nav-pills nav-vertical">
            @include("tabler.docs.navbars.navbar")
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="card card-lg">
            <div class="card-body">
              <div class="markdown">
                @yield('docs-body')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection