@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Buttons
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Standard Buttons</h3>
            </div>
            <div class="card-body">
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-primary w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-secondary w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-success w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-warning w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-danger w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-info w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-dark w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-light w-100">
                    Light
                  </a>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-primary active w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-secondary active w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-success active w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-warning active w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-danger active w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-info active w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-dark active w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-light active w-100">
                    Light
                  </a>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-primary disabled w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-secondary disabled w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-success disabled w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-warning disabled w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-danger disabled w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-info disabled w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-dark disabled w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-light disabled w-100">
                    Light
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Outline Buttons</h3>
            </div>
            <div class="card-body">
              <p>Use <code>.btn-outline-*</code> class for outline buttons.
              </p>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-primary w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-secondary w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-success w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-warning w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-danger w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-info w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-dark w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-outline-light w-100">
                    Light
                  </a>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-primary active w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-secondary active w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-success active w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-warning active w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-danger active w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-info active w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-dark active w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-outline-light active w-100">
                    Light
                  </a>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-primary disabled w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-secondary disabled w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-success disabled w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-warning disabled w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-danger disabled w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-info disabled w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-outline-dark disabled w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-outline-light disabled w-100">
                    Light
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ghost Buttons</h3>
            </div>
            <div class="card-body">
              <p>Use <code>.btn-ghost-*</code> class for ghost buttons.
              </p>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-primary w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-secondary w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-success w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-warning w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-danger w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-info w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-dark w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-ghost-light w-100">
                    Light
                  </a>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-primary active w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-secondary active w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-success active w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-warning active w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-danger active w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-info active w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-dark active w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-ghost-light active w-100">
                    Light
                  </a>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-primary disabled w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-secondary disabled w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-success disabled w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-warning disabled w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-danger disabled w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-info disabled w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-ghost-dark disabled w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-ghost-light disabled w-100">
                    Light
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Square Buttons</h3>
            </div>
            <div class="card-body">
              <p>Use <code>.btn-square</code> class for square buttons.
              </p>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-primary btn-square w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-secondary btn-square w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-success btn-square w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-warning btn-square w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-danger btn-square w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-info btn-square w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-dark btn-square w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-light btn-square w-100">
                    Light
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pill Buttons</h3>
            </div>
            <div class="card-body">
              <p>Use <code>.btn-pill</code> class for pill buttons.
              </p>
              <div class="row g-2 align-items-center">
                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-primary btn-pill w-100">
                    Primary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-secondary btn-pill w-100">
                    Secondary
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-success btn-pill w-100">
                    Success
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-warning btn-pill w-100">
                    Warning
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-danger btn-pill w-100">
                    Danger
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-info btn-pill w-100">
                    Info
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                  <a href="#" class="btn btn-dark btn-pill w-100">
                    Dark
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                  <a href="#" class="btn btn-light btn-pill w-100">
                    Light
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Extra colors</h3>
            </div>
            <div class="card-body">
              <div class="row g-2 align-items-center">
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-blue w-100">
                    Blue
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-azure w-100">
                    Azure
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-indigo w-100">
                    Indigo
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-purple w-100">
                    Purple
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-pink w-100">
                    Pink
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-red w-100">
                    Red
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-orange w-100">
                    Orange
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-yellow w-100">
                    Yellow
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-lime w-100">
                    Lime
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-green w-100">
                    Green
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-teal w-100">
                    Teal
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-cyan w-100">
                    Cyan
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Icon buttons</h3>
            </div>
            <div class="card-body">
              <div class="row g-2 align-items-center">
                @foreach([
                            'brand-facebook' => 'Facebook',
                            'brand-twitter' => 'Twitter',
                            'brand-google' => 'Google',
                            'brand-youtube' => 'Youtube',
                            'brand-vimeo' => 'Vimeo',
                            'brand-dribbble' => 'Dribbble',
                            'brand-github' => 'Github',
                            'brand-instagram' => 'Instagram',
                            'brand-pinterest' => 'Pinterest',
                            'brand-vk' => 'VK',
                            'rss' => 'RSS',
                            'brand-flickr' => 'Flickr',
                            'brand-bitbucket' => 'Bitbucket',
                            'rand-tabler' => 'Tabler',
                          ] as $key => $value)
                  <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                    <a href="#" class="btn btn-facebook w-100 btn-icon" aria-label="{{ $value }}">
                      @include('tabler::icons.svg.' . $key)
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Social colors</h3>
            </div>
            <div class="card-body">
              <div class="row g-2 align-items-center">
                @foreach([
                            'brand-facebook' => 'Facebook',
                            'brand-twitter' => 'Twitter',
                            'brand-google' => 'Google',
                            'brand-youtube' => 'Youtube',
                            'brand-vimeo' => 'Vimeo',
                            'brand-dribbble' => 'Dribbble',
                            'brand-github' => 'Github',
                            'brand-instagram' => 'Instagram',
                            'brand-pinterest' => 'Pinterest',
                            'brand-vk' => 'VK',
                            'rss' => 'RSS',
                            'brand-flickr' => 'Flickr',
                            'brand-bitbucket' => 'Bitbucket',
                            'rand-tabler' => 'Tabler',
                          ] as $key => $value)
                  <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                    <a href="#" class="btn btn-facebook w-100">
                      @include('tabler::icons.svg.' . $key)
                      {{ $value }}
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection