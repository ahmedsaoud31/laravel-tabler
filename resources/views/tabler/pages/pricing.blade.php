@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Pricing cards
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-sm-6 col-lg-3">
          <div class="card card-md">
            <div class="card-body text-center">
              <div class="text-uppercase text-muted font-weight-medium">Free</div>
              <div class="display-5 fw-bold my-3">$0</div>
              <ul class="list-unstyled lh-lg">
                <li><strong>3</strong> Users</li>
                <li>
                  @include('tabler::icons.svg.check')
                  Sharing Tools
                </li>
                <li>
                  @include('tabler::icons.svg.x')
                  Design Tools
                </li>
                <li>
                  @include('tabler::icons.svg.x')
                  Private Messages
                </li>
                <li>
                  @include('tabler::icons.svg.x')
                  Twitter API
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn w-100">Choose plan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card card-md">
            <div class="ribbon ribbon-top ribbon-bookmark bg-green">
              @include('tabler::icons.svg.star')
            </div>
            <div class="card-body text-center">
              <div class="text-uppercase text-muted font-weight-medium">Premium</div>
              <div class="display-5 fw-bold my-3">$49</div>
              <ul class="list-unstyled lh-lg">
                <li><strong>10</strong> Users</li>
                <li>
                  @include('tabler::icons.svg.check')
                  Sharing Tools
                </li>
                <li>
                  @include('tabler::icons.svg.check')
                  Design Tools
                </li>
                <li>
                  @include('tabler::icons.svg.x')
                  Private Messages
                </li>
                <li>
                  @include('tabler::icons.svg.x')
                  Twitter API
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn btn-green w-100">Choose plan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card card-md">
            <div class="card-body text-center">
              <div class="text-uppercase text-muted font-weight-medium">Enterprise</div>
              <div class="display-5 fw-bold my-3">$99</div>
              <ul class="list-unstyled lh-lg">
                <li><strong>100</strong> Users</li>
                <li>
                  @include('tabler::icons.svg.check')
                  Sharing Tools
                </li>
                <li>
                  @include('tabler::icons.svg.check')
                  Design Tools
                </li>
                <li>
                  @include('tabler::icons.svg.check')
                  Private Messages
                </li>
                <li>
                  @include('tabler::icons.svg.x')
                  Twitter API
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn w-100">Choose plan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card card-md">
            <div class="card-body text-center">
              <div class="text-uppercase text-muted font-weight-medium">Unlimited</div>
              <div class="display-5 fw-bold my-3">$139</div>
              <ul class="list-unstyled lh-lg">
                <li><strong>Unlimited</strong> Users</li>
                <li>
                  @include('tabler::icons.svg.check')
                  Sharing Tools
                </li>
                <li>
                  @include('tabler::icons.svg.check')
                  Design Tools
                </li>
                <li>
                  @include('tabler::icons.svg.check')
                  Private Messages
                </li>
                <li>
                  @include('tabler::icons.svg.check')
                  Twitter API
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn w-100">Choose plan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card card-md">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="h3">Enterprise-ready. Reach out for a custom quote.</h2>
                  <p class="m-0 text-muted">Tabler is designed to work great for large enterprises. Take a look at our feature comparison.</p>
                </div>
                <div class="col-auto">
                  <a href="#" class="btn">
                    Book a demo
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection