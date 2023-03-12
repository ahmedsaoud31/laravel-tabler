@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Modals
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="card-body">
          <div class="btn-list">
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-simple">
              Simple modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-large">
              Large modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-small">
              Small modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-full-width">
              Full width modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-scrollable">
              Scrollable modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-report">
              Modal with form
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-success">
              Success modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-danger">
              Danger modal
            </a>
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-team">
              Modal with simple form
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('models')
  @include('tabler::pages.models.simple')
  @include('tabler::pages.models.large')
  @include('tabler::pages.models.small')
  @include('tabler::pages.models.full-width')
  @include('tabler::pages.models.scrollable')
  @include('tabler::pages.models.report')
  @include('tabler::pages.models.success')
  @include('tabler::pages.models.danger')
  @include('tabler::pages.models.team')
@endpush