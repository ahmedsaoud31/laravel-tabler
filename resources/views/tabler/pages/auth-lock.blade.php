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
            <!-- Download SVG icon from http://tabler-icons.io/i/lock-open -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="5" y="11" width="14" height="10" rx="2" /><circle cx="12" cy="16" r="1" /><path d="M8 11v-5a4 4 0 0 1 8 0" /></svg>
            Unlock
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection