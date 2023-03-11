@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Charts
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-lg-6">
          @include('tabler.pages.charts.active-users')
        </div>
        <div class="col-4">
        </div>
        <div class="col-12">
          @include('tabler.pages.charts.social-referrals')
        </div>
        <div class="col-12">
          @include('tabler.pages.charts.tasks-overview')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.demo-pie')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-2')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-3')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-4')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-5')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-6')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-7')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-8')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-9')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-10')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.completion-tasks-11')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.tasks')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.line-stroke')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.stepline')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.temperature')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.area')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.area-spline')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.area-spline-stacked')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.spline')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.scatter')
        </div>
        <div class="col-lg-6 col-xl-4">
          @include('tabler.pages.charts.combination')
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')
<script src="{{ asset('tabler/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
@endpush