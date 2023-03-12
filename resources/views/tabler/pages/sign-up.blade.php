@extends('tabler::layouts.general')

@section('content')
<div class="page page-center">
  <div class="container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
    </div>
    <form class="card card-md" action="." method="get">
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Create new account</h2>
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Enter name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group input-group-flat">
            <input type="password" class="form-control"  placeholder="Password"  autocomplete="off">
            <span class="input-group-text">
              <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                @include('tabler::icons.svg.eye')
              </a>
            </span>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-check">
            <input type="checkbox" class="form-check-input"/>
            <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Create new account</button>
        </div>
      </div>
    </form>
    <div class="text-center text-muted mt-3">
      Already have account? <a href="./sign-in.html" tabindex="-1">Sign in</a>
    </div>
  </div>
</div>
@endsection