@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
  </div>
  <div class="page-body">
    <div class="container-xl d-flex flex-column justify-content-center">
      <div class="empty">
        <div class="empty-img"><img src="{{ asset('/') }}tabler/static/illustrations/undraw_printing_invoices_5r4r.svg" height="128"  alt="">
        </div>
        <p class="empty-title">No results found</p>
        <p class="empty-subtitle text-muted">
          Try adjusting your search or filter to find what you're looking for.
        </p>
        <div class="empty-action">
          <a href="./." class="btn btn-primary">
            @include('tabler::icons.svg.plus')
            Add your first client
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection