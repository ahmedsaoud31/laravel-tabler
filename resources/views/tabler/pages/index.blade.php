@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            {{ __('Overview') }}
          </div>
          <h2 class="page-title">
            @if(app()->getLocale() == 'ar')
            {{ __('layout') }} {{ __(config('tabler.layout')) }}
            @else
            {{ __(config('tabler.layout')) }} {{ __('layout') }}
            @endif
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-12 col-md-auto ms-auto d-print-none">
          <div class="btn-list">
            <span class="d-none d-sm-inline">
              <a href="#" class="btn btn-white">
                {{ __('New view') }}
              </a>
            </span>
            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
              @include('tabler::icons.svg.plus')
              {{ __('Create new report') }}
            </a>
            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
              @include('tabler::icons.svg.plus')
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-deck row-cards">
        <div class="col-sm-6 col-lg-3">
          @include('tabler::pages.index.charts.sm-sales')
        </div>
        <div class="col-sm-6 col-lg-3">
          @include('tabler::pages.index.charts.sm-revenue')
        </div>
        <div class="col-sm-6 col-lg-3">
          @include('tabler::pages.index.charts.sm-new-client')
        </div>
        <div class="col-sm-6 col-lg-3">
          @include('tabler::pages.index.charts.sm-active-users')
        </div>
        <div class="col-12">
          <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
              @include('tabler::pages.index.cards.sm-sales')
            </div>
            <div class="col-sm-6 col-lg-3">
              @include('tabler::pages.index.cards.sm-orders')
            </div>
            <div class="col-sm-6 col-lg-3">
              @include('tabler::pages.index.cards.sm-shares')
            </div>
            <div class="col-sm-6 col-lg-3">
              @include('tabler::pages.index.cards.sm-likes')
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          @include('tabler::pages.index.charts.mentions')
        </div>
        <div class="col-lg-6">
          @include('tabler::pages.index.charts.locations')
        </div>
        <div class="col-lg-6">
          <div class="row row-cards">
            <div class="col-12">
              @include('tabler::pages.index.cards.using-storage')
            </div>
            <div class="col-12">
              @include('tabler::pages.index.cards.users-activity')
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          @include('tabler::pages.index.cards.development-activity')
        </div>
        <div class="col-12">
          @include('tabler::pages.index.cards.tabler-icons')
        </div>
        <div class="col-md-12 col-lg-8">
          @include('tabler::pages.index.cards.most-visited-pages')
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="https://github.com/sponsors/codecalm" class="card card-sponsor" target="_blank" rel="noopener" style="background-image: url({{ asset('/') }}tabler/static/sponsor-banner-homepage.svg)" aria-label="Sponsor Tabler!">
            <div class="card-body"></div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          @include('tabler::pages.index.cards.social-media-traffic')
        </div>
        <div class="col-md-12 col-lg-8">
          @include('tabler::pages.index.cards.tasks')
        </div>
        <div class="col-12">
          @include('tabler::pages.index.cards.invoices')
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')
  <script src="{{ asset('tabler/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
  <script src="{{ asset('tabler/libs/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
  <script src="{{ asset('tabler/libs/jsvectormap/dist/maps/world.js') }}" defer></script>
  <script src="{{ asset('tabler/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
@endpush

@push('models')
    @include('tabler::pages.index.models.new-report')
@endpush