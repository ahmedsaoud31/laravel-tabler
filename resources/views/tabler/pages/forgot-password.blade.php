@extends('tabler::layouts.general')

@section('content')
<div class="page page-center">
  <div class="container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
    </div>
    <form class="card card-md" action="." method="get">
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Forgot password</h2>
        <p class="text-muted mb-4">Enter your email address and your password will be reset and emailed to you.</p>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-footer">
          <a href="#" class="btn btn-primary w-100">
            @include('tabler::icons.svg.mail')
            Send me new password
          </a>
        </div>
      </div>
    </form>
    <div class="text-center text-muted mt-3">
      Forget it, <a href="./sign-in.html">send me back</a> to the sign in screen.
    </div>
  </div>
</div>
@endsection