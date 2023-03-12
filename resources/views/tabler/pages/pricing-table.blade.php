@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Pricing table
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="table-responsive">
          <table class="table table-vcenter table-bordered table-nowrap card-table">
            <thead>
              <tr>
                <td class="w-50">
                  <h2>Pricing plans for teams of all sizes</h2>
                  <div class="text-muted text-wrap">
                    Choose an affordable plan that comes with the best features to engage your audience, create customer loyalty and increase sales.
                  </div>
                </td>
                <td class="text-center">
                  <div class="text-uppercase text-muted font-weight-medium">Starter</div>
                  <div class="display-6 fw-bold my-3">$0</div>
                  <a href="#" class="btn w-100">Choose plan</a>
                </td>
                <td class="text-center">
                  <div class="text-uppercase text-muted font-weight-medium">Professional</div>
                  <div class="display-6 fw-bold my-3">$9</div>
                  <a href="#" class="btn btn-green w-100">Choose plan</a>
                </td>
                <td class="text-center">
                  <div class="text-uppercase text-muted font-weight-medium">Business</div>
                  <div class="display-6 fw-bold my-3">$16</div>
                  <a href="#" class="btn w-100">Choose plan</a>
                </td>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-light">
                <th colspan="4">Features</th>
              </tr>
              <tr>
                <td>Some info about feature</td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
              </tr>
              <tr>
                <td>Online payment gateway</td>
                <td class="text-center">
                  @include('tabler::icons.svg.x')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
              </tr>
              <tr>
                <td>Unlimited products can be sold</td>
                <td class="text-center">
                  @include('tabler::icons.svg.x')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.x')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
              </tr>
              <tr class="bg-light">
                <th colspan="4">Reporting</th>
              </tr>
              <tr>
                <td>Free hosting and domain name</td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
              </tr>
              <tr>
                <td>Admin dashboard to control items</td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
              </tr>
              <tr class="bg-light">
                <th colspan="4">Support</th>
              </tr>
              <tr>
                <td>Email marketing and service</td>
                <td class="text-center">
                  @include('tabler::icons.svg.x')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.x')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
              </tr>
              <tr>
                <td>24/7 customer support online</td>
                <td class="text-center">
                  @include('tabler::icons.svg.x')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
                <td class="text-center">
                  @include('tabler::icons.svg.check')
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td></td>
                <td>
                  <a href="#" class="btn w-100">Choose plan</a>
                </td>
                <td>
                  <a href="#" class="btn btn-green w-100">Choose plan</a>
                </td>
                <td>
                  <a href="#" class="btn w-100">Choose plan</a>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection