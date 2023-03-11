@extends('tabler.layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="page-header mb-3">
        <div class="row align-items-center mw-100">
          <div class="col">
            <div class="mb-1">
              <ol class="breadcrumb" aria-label="breadcrumbs">
                <li class="breadcrumb-item"><a href="#">Administration</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Settings</a></li>
              </ol>
            </div>
            <h2 class="page-title">
              <span class="text-truncate">Settings</span>
            </h2>
          </div>
          <div class="col-auto">
            <div class="btn-list">
              <a href="#" class="btn btn-primary">
                Save Settings
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 px-4">
          <div class="list-group list-group-transparent mb-3 ml-3">
            <a class="list-group-item list-group-item-action d-flex align-items-center active" href="#">
              Account
              <small class="text-muted ms-auto">24</small>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
              Preferences
              <small class="text-muted ms-auto">149</small>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
              Privacy Settings
              <small class="text-muted ms-auto">88</small>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
              Theme
              <small class="text-muted ms-auto">54</small>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
              Audience and visibility
              <small class="text-muted ms-auto">106</small>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
              App Development
              <small class="text-muted ms-auto">40</small>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-8">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Account</h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group mb-3 row">
                      <label class="col-3 col-form-label required">Email address</label>
                      <div class="col">
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                        <small class="form-hint">We'll never share your email with anyone else.</small>
                      </div>
                    </div>
                    <div class="form-group mb-3 row">
                      <label class="col-3 col-form-label required">Password</label>
                      <div class="col">
                        <input type="password" class="form-control" placeholder="Password">
                        <small class="form-hint">
                          Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                          spaces, special characters, or emoji.
                        </small>
                      </div>
                    </div>
                    <div class="form-group mb-3 row">
                      <label class="col-3 col-form-label">Select</label>
                      <div class="col">
                        <select class="form-select">
                          <option>Option 1</option>
                          <optgroup label="Optgroup 1">
                            <option>Option 1</option>
                            <option>Option 2</option>
                          </optgroup>
                          <option>Option 2</option>
                          <optgroup label="Optgroup 2">
                            <option>Option 1</option>
                            <option>Option 2</option>
                          </optgroup>
                          <optgroup label="Optgroup 3">
                            <option>Option 1</option>
                            <option>Option 2</option>
                          </optgroup>
                          <option>Option 3</option>
                          <option>Option 4</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-form-label pt-0">Checkboxes</label>
                      <div class="col">
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" checked="">
                          <span class="form-check-label">Option 1</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-label">Option 2</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" disabled="">
                          <span class="form-check-label">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection