@extends('tabler::layouts.general')

@section('content')
<div class="page page-center">
  <div class="container-tight py-4">
    <div class="empty">
      <div class="empty-header">500</div>
      <p class="empty-title">Oops… You just found an error page</p>
      <p class="empty-subtitle text-muted">
        We are sorry but our server encountered an internal error
      </p>
      <div class="empty-action">
        <a href="./." class="btn btn-primary">
          @include('tabler::icons.svg.arrow-left')
          Take me home
        </a>
      </div>
    </div>
  </div>
</div>
@endsection