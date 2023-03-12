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
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-facebook w-100 btn-icon" aria-label="Facebook">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-twitter w-100 btn-icon" aria-label="Twitter">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-google w-100 btn-icon" aria-label="Google">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-google -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-youtube w-100 btn-icon" aria-label="Youtube">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-vimeo w-100 btn-icon" aria-label="Vimeo">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-vimeo -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 8.5l1 1s1.5 -1.102 2 -.5c.509 .609 1.863 7.65 2.5 9c.556 1.184 1.978 2.89 4 1.5c2 -1.5 7.5 -5.5 8.5 -11.5c.444 -2.661 -1 -4 -2.5 -4c-2 0 -4.047 1.202 -4.5 4c2.05 -1.254 2.551 1.003 1.5 3c-1.052 2.005 -2 3 -2.5 3c-.49 0 -.924 -1.165 -1.5 -3.5c-.59 -2.42 -.5 -6.5 -3 -6.5s-5.5 4.5 -5.5 4.5z" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-dribbble w-100 btn-icon" aria-label="Dribbble">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-dribbble -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><path d="M9 3.6c5 6 7 10.5 7.5 16.2" /><path d="M6.4 19c3.5 -3.5 6 -6.5 14.5 -6.4" /><path d="M3.1 10.75c5 0 9.814 -.38 15.314 -5" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-github w-100 btn-icon" aria-label="Github">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-instagram w-100 btn-icon" aria-label="Instagram">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-instagram -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="16" height="16" rx="4" /><circle cx="12" cy="12" r="3" /><line x1="16.5" y1="7.5" x2="16.5" y2="7.501" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-pinterest w-100 btn-icon" aria-label="Pinterest">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-pinterest -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="8" y1="20" x2="12" y2="11" /><path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7" /><circle cx="12" cy="12" r="9" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-vk w-100 btn-icon" aria-label="VK">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 19h-4a8 8 0 0 1 -8 -8v-5h4v5a4 4 0 0 0 4 4h0v-9h4v4.5l.03 -.004a4.531 4.531 0 0 0 3.97 -4.496h4l-.342 1.711a6.858 6.858 0 0 1 -3.658 4.789h0a5.34 5.34 0 0 1 3.566 4.111l.434 2.389h0h-4a4.531 4.531 0 0 0 -3.97 -4.496v4.5z" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-rss w-100 btn-icon" aria-label="RSS">
                    <!-- Download SVG icon from http://tabler-icons.io/i/rss -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="5" cy="19" r="1" /><path d="M4 4a16 16 0 0 1 16 16" /><path d="M4 11a9 9 0 0 1 9 9" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-flickr w-100 btn-icon" aria-label="Flickr">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-flickr -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="7" cy="12" r="3" /><circle cx="17" cy="12" r="3" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-bitbucket w-100 btn-icon" aria-label="Bitbucket">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-bitbucket -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.648 4a0.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a0.644 .644 0 0 0 .642 -.539l3.35 -14.71a0.641 .641 0 0 0 -.64 -.744l-16.704 -.007z" /><path d="M14 15h-4l-1 -6h6z" /></svg>
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-tabler w-100 btn-icon" aria-label="Tabler">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-tabler -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9l3 3l-3 3" /><line x1="13" y1="15" x2="16" y2="15" /><rect x="4" y="4" width="16" height="16" rx="4" /></svg>
                  </a>
                </div>
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
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-facebook w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                    Facebook
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-twitter w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                    Twitter
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-google w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-google -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" /></svg>
                    Google
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-youtube w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
                    Youtube
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-vimeo w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-vimeo -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 8.5l1 1s1.5 -1.102 2 -.5c.509 .609 1.863 7.65 2.5 9c.556 1.184 1.978 2.89 4 1.5c2 -1.5 7.5 -5.5 8.5 -11.5c.444 -2.661 -1 -4 -2.5 -4c-2 0 -4.047 1.202 -4.5 4c2.05 -1.254 2.551 1.003 1.5 3c-1.052 2.005 -2 3 -2.5 3c-.49 0 -.924 -1.165 -1.5 -3.5c-.59 -2.42 -.5 -6.5 -3 -6.5s-5.5 4.5 -5.5 4.5z" /></svg>
                    Vimeo
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-dribbble w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-dribbble -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><path d="M9 3.6c5 6 7 10.5 7.5 16.2" /><path d="M6.4 19c3.5 -3.5 6 -6.5 14.5 -6.4" /><path d="M3.1 10.75c5 0 9.814 -.38 15.314 -5" /></svg>
                    Dribbble
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-github w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                    Github
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-instagram w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-instagram -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="16" height="16" rx="4" /><circle cx="12" cy="12" r="3" /><line x1="16.5" y1="7.5" x2="16.5" y2="7.501" /></svg>
                    Instagram
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-pinterest w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-pinterest -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="8" y1="20" x2="12" y2="11" /><path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7" /><circle cx="12" cy="12" r="9" /></svg>
                    Pinterest
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-vk w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 19h-4a8 8 0 0 1 -8 -8v-5h4v5a4 4 0 0 0 4 4h0v-9h4v4.5l.03 -.004a4.531 4.531 0 0 0 3.97 -4.496h4l-.342 1.711a6.858 6.858 0 0 1 -3.658 4.789h0a5.34 5.34 0 0 1 3.566 4.111l.434 2.389h0h-4a4.531 4.531 0 0 0 -3.97 -4.496v4.5z" /></svg>
                    VK
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-rss w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/rss -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="5" cy="19" r="1" /><path d="M4 4a16 16 0 0 1 16 16" /><path d="M4 11a9 9 0 0 1 9 9" /></svg>
                    RSS
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-flickr w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-flickr -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="7" cy="12" r="3" /><circle cx="17" cy="12" r="3" /></svg>
                    Flickr
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-bitbucket w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-bitbucket -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.648 4a0.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a0.644 .644 0 0 0 .642 -.539l3.35 -14.71a0.641 .641 0 0 0 -.64 -.744l-16.704 -.007z" /><path d="M14 15h-4l-1 -6h6z" /></svg>
                    Bitbucket
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                  <a href="#" class="btn btn-tabler w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-tabler -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9l3 3l-3 3" /><line x1="13" y1="15" x2="16" y2="15" /><rect x="4" y="4" width="16" height="16" rx="4" /></svg>
                    Tabler
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