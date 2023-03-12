@extends('tabler::layouts.general')

@section('content')
<div class="page page-center">
  <div class="container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('/') }}tabler/static/logo.svg" height="36" alt=""></a>
    </div>
    <form class="card card-md" action="." method="get" autocomplete="off">
      <div class="card-body text-center">
        <div class="mb-4">
          <h2 class="card-title">Account Locked</h2>
          <p class="text-muted">Please enter your password to unlock your account</p>
        </div>
        <div class="mb-4">
          <span class="avatar avatar-xl mb-3" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
          <h3>Paweł Kuna</h3>
        </div>
        <div class="mb-4">
          <input type="password" class="form-control" placeholder="Password&hellip;">
        </div>
        <div>
          <a href="#" class="btn btn-primary w-100">
            @include('tabler::icons.svg.lock-open')
            Unlock
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection