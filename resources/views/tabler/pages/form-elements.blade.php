@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Form elements
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <form action="https://httpbin.org/post" method="post" class="card">
            <div class="card-header">
              <h4 class="card-title">Form elements</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-xl-4">
                  <div class="row">
                    <div class="col-md-6 col-xl-12">
                      <div class="mb-3">
                        <label class="form-label">Static</label>
                        <div class="form-control-plaintext">Input value</div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Text</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Input placeholder">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" name="example-password-input" placeholder="Input placeholder">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Disabled</label>
                        <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled..." value="Well, she turned me into a newt." disabled>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Readonly</label>
                        <input type="text" class="form-control" name="example-disabled-input" placeholder="Readonly..." value="Well, how'd you become king, then?" readonly>
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">Required</label>
                        <input type="text" class="form-control" name="example-required-input" placeholder="Required..." >
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Textarea <span class="form-label-description">56/100</span></label>
                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Content..">Oh! Come and see the violence inherent in the system! Help, help, I'm being repressed! We shall say 'Ni' again to you, if you do not appease us. I'm not a witch. I'm not a witch. Camelot!</textarea>
                      </div>
                      <div class="mb-3">
                        <div class="form-label">Select</div>
                        <select class="form-select" >
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <div class="form-label">Select multiple</div>
                        <select class="form-select"  multiple>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Input group</label>
                        <div class="input-group mb-2">
                          <input type="text" class="form-control" placeholder="Search for…">
                          <button class="btn" type="button">Go!</button>
                        </div>
                        <div class="input-group">
                          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              Action
                            </a>
                            <a class="dropdown-item" href="#">
                              Another action
                            </a>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Input group buttons</label>
                        <div class="input-group">
                          <input type="text" class="form-control">
                          <button type="button" class="btn">Action</button>
                          <button data-bs-toggle="dropdown" type="button" class="btn dropdown-toggle dropdown-toggle-split"></button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              Action
                            </a>
                            <a class="dropdown-item" href="#">
                              Another action
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Icon input</label>
                        <div class="input-icon mb-3">
                          <input type="text" value="" class="form-control" placeholder="Search…">
                          <span class="input-icon-addon">
                            @include('tabler::icons.svg.search')
                          </span>
                        </div>
                        <div class="input-icon mb-3">
                          <span class="input-icon-addon">
                            @include('tabler::icons.svg.user')
                          </span>
                          <input type="text" value="" class="form-control" placeholder="Username">
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Loader input</label>
                        <div class="input-icon mb-3">
                          <input type="text" value="" class="form-control" placeholder="Loading…">
                          <span class="input-icon-addon">
                            <div class="spinner-border spinner-border-sm text-muted" role="status"></div>
                          </span>
                        </div>
                        <div class="input-icon mb-3">
                          <span class="input-icon-addon">
                            <div class="spinner-border spinner-border-sm text-muted" role="status"></div>
                          </span>
                          <input type="text" value="" class="form-control" placeholder="Loading…">
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Separated inputs</label>
                        <div class="row g-2">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Search for…">
                          </div>
                          <div class="col-auto">
                            <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                              @include('tabler::icons.svg.search')
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Input with help icon</label>
                        <div class="row g-2">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Search for…">
                          </div>
                          <div class="col-auto align-self-center">
                            <span class="form-help" data-bs-toggle="popover" data-bs-placement="top"
      data-bs-content="<p>ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.</p>
                            <p class='mb-0'><a href='#'>USP ZIP codes lookup tools</a></p>
                            "
                            data-bs-html="true">?</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <label class="form-label">Form control rounded</label>
                      <input type="text" class="form-control form-control-rounded mb-2" name="Form control rounded" placeholder="Text..">
                      <div class="input-icon">
                        <input type="text" value="" class="form-control form-control-rounded" placeholder="Search…">
                        <span class="input-icon-addon">
                          @include('tabler::icons.svg.search')
                        </span>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Form control flush</label>
                      <input type="text" class="form-control form-control-flush" name="Form control flush" placeholder="Text..">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Input group</label>
                      <div class="input-group mb-2">
                        <span class="input-group-text">
                          @
                        </span>
                        <input type="text" class="form-control"  placeholder="username"  autocomplete="off">
                      </div>
                      <div class="input-group mb-2">
                        <input type="text" class="form-control"  placeholder="subdomain"  autocomplete="off">
                        <span class="input-group-text">
                          .tabler.io
                        </span>
                      </div>
                      <div class="input-group">
                        <span class="input-group-text">
                          https://
                        </span>
                        <input type="text" class="form-control"  placeholder="subdomain"  autocomplete="off">
                        <span class="input-group-text">
                          .tabler.io
                        </span>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Input with checkbox or radios</label>
                      <div class="input-group mb-2">
                        <span class="input-group-text">
                          <input class="form-check-input m-0" type="checkbox" checked>
                        </span>
                        <input type="text" class="form-control"  autocomplete="off">
                      </div>
                      <div class="input-group">
                        <input type="text" class="form-control"  autocomplete="off">
                        <span class="input-group-text">
                          <input class="form-check-input m-0" type="radio" checked>
                        </span>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Input with prepended text</label>
                      <div class="input-group input-group-flat">
                        <span class="input-group-text">
                          https://tabler.io/users/
                        </span>
                        <input type="text" class="form-control ps-0"  value="yourfancyusername" autocomplete="off">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Input with appended text</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control text-end pe-0"  value="yourfancydomain" autocomplete="off">
                        <span class="input-group-text">
                          .tabler.io
                        </span>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Input with appended link</label>
                      <div class="input-group input-group-flat">
                        <input type="password" class="form-control"  value="ultrastrongpassword" autocomplete="off">
                        <span class="input-group-text">
                          <a href="#" class="input-group-link">Show password</a>
                        </span>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Input with appended icon links</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control"  autocomplete="off">
                        <span class="input-group-text">
                          <a href="#" class="link-secondary" title="Clear search" data-bs-toggle="tooltip">
                            @include('tabler::icons.svg.x')
                          </a>
                          <a href="#" class="link-secondary ms-2" title="Search settings" data-bs-toggle="tooltip">
                            @include('tabler::icons.svg.adjustments')
                          </a>
                          <a href="#" class="link-secondary ms-2 disabled" title="Add notification" data-bs-toggle="tooltip">
                            @include('tabler::icons.svg.bell')
                          </a>
                        </span>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Floating inputs</label>
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floating-input" value="name@example.com" autocomplete="off">
                        <label for="floating-input">Email address</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floating-password" value="Password" autocomplete="off">
                        <label for="floating-password">Password</label>
                      </div>
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Select</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="row">
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <label class="form-label">Image Check</label>
                      <div class="row g-2">
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="1" class="form-imagecheck-input" />
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/1b73704b282a8ec6.jpg" alt="Breakfast served with tea, bread and eggs" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="2" class="form-imagecheck-input"  checked/>
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/3d2998219313cd37.jpg" alt="Book, fairy lights" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="3" class="form-imagecheck-input" />
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/6ab3200b14549f8a.jpg" alt="Healthy Dinner" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="4" class="form-imagecheck-input"  checked/>
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/6d35d9a2bd6c63c2.jpg" alt="Aperol Spritz is a cocktail consisting of prosecco, aperitif and soda water" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="5" class="form-imagecheck-input" />
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/8a26974ee6444acd.jpg" alt="Beautiful blonde woman on a wooden pier by the lake" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="6" class="form-imagecheck-input" />
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/8c13ad59f739558c.jpg" alt="Still life of mandarin oranges with leaves" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="7" class="form-imagecheck-input"  checked/>
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/8fdeb4785d2b82ef.jpg" alt="Blonde woman having a healthy snack at the wooden pier" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="8" class="form-imagecheck-input" />
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/9f36332564ca271d.jpg" alt="Woman working on a laptop while enjoying a breakfast coffee and chocolate in bed" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="form-imagecheck mb-2">
                            <input name="form-imagecheck" type="checkbox" value="9" class="form-imagecheck-input" />
                            <span class="form-imagecheck-figure">
                              <img src="{{ asset('/') }}tabler/static/photos/35b88fc04a518c1b.jpg" alt="Overhead view of macarons on a marble slab" class="form-imagecheck-image">
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Color Input</label>
                      <div class="row g-2">
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="dark" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-dark"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput form-colorinput-light">
                            <input name="color" type="radio" value="white" class="form-colorinput-input"  checked/>
                            <span class="form-colorinput-color bg-white"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="blue" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-blue"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="azure" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-azure"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="indigo" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-indigo"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="purple" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-purple"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="pink" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-pink"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="red" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-red"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="orange" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-orange"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="yellow" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-yellow"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="lime" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-lime"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Color Input</label>
                      <div class="row g-2">
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="dark" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-dark rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput form-colorinput-light">
                            <input name="color-rounded" type="radio" value="white" class="form-colorinput-input"  checked/>
                            <span class="form-colorinput-color bg-white rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="blue" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-blue rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="azure" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-azure rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="indigo" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-indigo rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="purple" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-purple rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="pink" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-pink rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="red" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-red rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="orange" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-orange rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="yellow" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-yellow rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="lime" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-lime rounded-circle"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Color picker</label>
                      <input type="color" class="form-control form-control-color" value="#206bc4" title="Choose your color">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Validation States </label>
                      <input type="text" class="form-control is-valid mb-2" placeholder="Valid State..">
                      <input type="text" class="form-control is-invalid" placeholder="Invalid State..">
                      <div class="invalid-feedback">Invalid feedback</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Validation States (lite)</label>
                      <input type="text" class="form-control is-valid is-valid-lite mb-2" placeholder="Valid State..">
                      <input type="text" class="form-control is-invalid is-invalid-lite" placeholder="Invalid State..">
                    </div>
                    <label class="form-label">Form fieldset</label>
                    <fieldset class="form-fieldset">
                      <div class="mb-3">
                        <label class="form-label required">Full name</label>
                        <input type="text" class="form-control" autocomplete="off"/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">Company</label>
                        <input type="text" class="form-control"  autocomplete="off"/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">Email</label>
                        <input type="email" class="form-control"  autocomplete="off"/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Phone number</label>
                        <input type="tel" class="form-control" autocomplete="off"/>
                      </div>
                      <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label required">I agree to the Terms & Conditions</span>
                      </label>
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <label class="form-label">Simple selectgroup</label>
                      <div class="form-selectgroup">
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input" checked>
                          <span class="form-selectgroup-label">HTML</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="CSS" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">CSS</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="PHP" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">PHP</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="JavaScript" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">JavaScript</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Icon input</label>
                      <div class="form-selectgroup">
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="sun" class="form-selectgroup-input" checked>
                          <span class="form-selectgroup-label">
                            @include('tabler::icons.svg.sun')
                          </span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="moon" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            @include('tabler::icons.svg.moon')
                          </span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="cloud-rain" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            @include('tabler::icons.svg.cloud-rain')
                          </span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="cloud" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            @include('tabler::icons.svg.cloud')
                          </span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="Other" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">Other</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Selectgroup with icons and text</label>
                      <div class="form-selectgroup">
                        <label class="form-selectgroup-item">
                          <input type="radio" name="icons" value="home" class="form-selectgroup-input" checked>
                          <span class="form-selectgroup-label">
                            @include('tabler::icons.svg.home')
                            Home</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="radio" name="icons" value="user" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            @include('tabler::icons.svg.user')
                            User</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="radio" name="icons" value="circle" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            @include('tabler::icons.svg.circle')
                            Circle</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="radio" name="icons" value="square" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            @include('tabler::icons.svg.square')
                            Square</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Different style</label>
                      <div class="form-selectgroup form-selectgroup-pills">
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input" checked>
                          <span class="form-selectgroup-label">HTML</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="CSS" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">CSS</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="PHP" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">PHP</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="JavaScript" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">JavaScript</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Payment method</label>
                      <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                        <label class="form-selectgroup-item flex-fill">
                          <input type="radio" name="form-payment" value="visa" class="form-selectgroup-input">
                          <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </div>
                            <div>
                              <span class="payment payment-provider-visa payment-xs me-2"></span>
                              ending in <strong>7998</strong>
                            </div>
                          </div>
                        </label>
                        <label class="form-selectgroup-item flex-fill">
                          <input type="radio" name="form-payment" value="mastercard" class="form-selectgroup-input" checked>
                          <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </div>
                            <div>
                              <span class="payment payment-provider-mastercard payment-xs me-2"></span>
                              ending in <strong>2807</strong>
                            </div>
                          </div>
                        </label>
                        <label class="form-selectgroup-item flex-fill">
                          <input type="radio" name="form-payment" value="paypal" class="form-selectgroup-input">
                          <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </div>
                            <div>
                              <span class="payment payment-provider-paypal payment-xs me-2"></span>
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Project Manager</label>
                      <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                        <label class="form-selectgroup-item flex-fill">
                          <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input" >
                          <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </div>
                            <div class="form-selectgroup-label-content d-flex align-items-center">
                              <span class="avatar me-3" style="background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)"></span>
                              <div>
                                <div class="font-weight-medium">Paweł Kuna</div>
                                <div class="text-muted">UI Designer</div>
                              </div>
                            </div>
                          </div>
                        </label>
                        <label class="form-selectgroup-item flex-fill">
                          <input type="checkbox" name="form-project-manager[]" value="2" class="form-selectgroup-input"  checked>
                          <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </div>
                            <div class="form-selectgroup-label-content d-flex align-items-center">
                              <span class="avatar me-3">JL</span>
                              <div>
                                <div class="font-weight-medium">Jeffie Lewzey</div>
                                <div class="text-muted">Chemical Engineer</div>
                              </div>
                            </div>
                          </div>
                        </label>
                        <label class="form-selectgroup-item flex-fill">
                          <input type="checkbox" name="form-project-manager[]" value="3" class="form-selectgroup-input" >
                          <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </div>
                            <div class="form-selectgroup-label-content d-flex align-items-center">
                              <span class="avatar me-3" style="background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)"></span>
                              <div>
                                <div class="font-weight-medium">Mallory Hulme</div>
                                <div class="text-muted">Geologist IV</div>
                              </div>
                            </div>
                          </div>
                        </label>
                        <label class="form-selectgroup-item flex-fill">
                          <input type="checkbox" name="form-project-manager[]" value="4" class="form-selectgroup-input" >
                          <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </div>
                            <div class="form-selectgroup-label-content d-flex align-items-center">
                              <span class="avatar me-3" style="background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)"></span>
                              <div>
                                <div class="font-weight-medium">Dunn Slane</div>
                                <div class="text-muted">Research Nurse</div>
                              </div>
                            </div>
                          </div>
                        </label>
                        <label class="form-selectgroup-item flex-fill">
                          <input type="checkbox" name="form-project-manager[]" value="5" class="form-selectgroup-input" >
                          <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </div>
                            <div class="form-selectgroup-label-content d-flex align-items-center">
                              <span class="avatar me-3" style="background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)"></span>
                              <div>
                                <div class="font-weight-medium">Emmy Levet</div>
                                <div class="text-muted">VP Product Management</div>
                              </div>
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Buttons group</label>
                      <div class="btn-group w-100">
                        <button type="button" class="btn">1 min</button>
                        <button type="button" class="btn btn-primary">5 min</button>
                        <button type="button" class="btn">10 min</button>
                        <button type="button" class="btn">30 min</button>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Buttons group with dropdown</label>
                      <div class="btn-group w-100">
                        <button type="button" class="btn">Option 1</button>
                        <button type="button" class="btn btn-primary">Option 2</button>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Other
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              Option 4
                            </a>
                            <a class="dropdown-item" href="#">
                              Option 5
                            </a>
                            <a class="dropdown-item" href="#">
                              Option 6
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Toolbar</label>
                      <div class="btn-group w-100">
                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler-icons.io/i/bold -->
                          @include('tabler::icons.svg.bold')
                        </a>
                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler-icons.io/i/italic -->
                          @include('tabler::icons.svg.italic')
                        </a>
                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler-icons.io/i/underline -->
                          @include('tabler::icons.svg.underline')
                        </a>
                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler-icons.io/i/copy -->
                          @include('tabler::icons.svg.copy')
                        </a>
                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler-icons.io/i/scissors -->
                          @include('tabler::icons.svg.scissors')
                        </a>
                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler-icons.io/i/file-plus -->
                          @include('tabler::icons.svg.file-plus')
                        </a>
                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                          @include('tabler::icons.svg.file-minus')
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="row">
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <div class="form-label">Radios</div>
                      <div>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" name="radio-group" checked>
                          <span class="form-check-label">Option 1</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" name="radio-group">
                          <span class="form-check-label">Option 2</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" disabled>
                          <span class="form-check-label">Option 3</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" checked disabled>
                          <span class="form-check-label">Option 4</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Inline Radios</div>
                      <div>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inline-radios" checked>
                          <span class="form-check-label">Option 1</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inline-radios">
                          <span class="form-check-label">Option 2</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inline-radios" disabled>
                          <span class="form-check-label">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Checkboxes</div>
                      <div>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-label">Checkbox input</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <span class="form-check-label">Disabled checkbox input</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-label">Checked checkbox input</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Inline Checkboxes</div>
                      <div>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-label">Option 1</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" disabled>
                          <span class="form-check-label">Option 2</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-label">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Checkboxes with description</label>
                      <label class="form-check mb-2">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">
                          Default checkbox
                        </span>
                        <span class="form-check-description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                      </label>
                      <label class="form-check mb-2">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">
                          Longer checkbox item that wraps on to two separate lines
                        </span>
                        <span class="form-check-description">
                          Ab alias aut, consequuntur cumque esse eveniet incidunt laborum minus molestiae.
                        </span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">
                          Default checkbox without description
                        </span>
                      </label>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Toggle switches</div>
                      <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-label">Option 1</span>
                      </label>
                      <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 2</span>
                      </label>
                      <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 3</span>
                      </label>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Single switch</div>
                      <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">I agree with terms and conditions</span>
                      </label>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Notification</label>
                      <div class="divide-y">
                        <div>
                          <label class="row">
                            <span class="col">Push Notifications</span>
                            <span class="col-auto">
                              <label class="form-check form-check-single form-switch">
                                <input class="form-check-input" type="checkbox" checked>
                              </label>
                            </span>
                          </label>
                        </div>
                        <div>
                          <label class="row">
                            <span class="col">SMS Notifications</span>
                            <span class="col-auto">
                              <label class="form-check form-check-single form-switch">
                                <input class="form-check-input" type="checkbox">
                              </label>
                            </span>
                          </label>
                        </div>
                        <div>
                          <label class="row">
                            <span class="col">Email Notifications</span>
                            <span class="col-auto">
                              <label class="form-check form-check-single form-switch">
                                <input class="form-check-input" type="checkbox" checked>
                              </label>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Custom File Input</div>
                      <input type="file" class="form-control" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Date of birth</label>
                      <div class="row g-2">
                        <div class="col-5">
                          <select name="user[month]" class="form-select">
                            <option value="">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option selected="selected" value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                          </select>
                        </div>
                        <div class="col-3">
                          <select name="user[day]" class="form-select">
                            <option value="">Day</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
                            <option value="7" >7</option>
                            <option value="8" >8</option>
                            <option value="9" >9</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                            <option value="13" >13</option>
                            <option value="14" >14</option>
                            <option value="15" >15</option>
                            <option value="16" >16</option>
                            <option value="17" >17</option>
                            <option value="18" >18</option>
                            <option value="19" >19</option>
                            <option value="20"  selected>20</option>
                            <option value="21" >21</option>
                            <option value="22" >22</option>
                            <option value="23" >23</option>
                            <option value="24" >24</option>
                            <option value="25" >25</option>
                            <option value="26" >26</option>
                            <option value="27" >27</option>
                            <option value="28" >28</option>
                            <option value="29" >29</option>
                            <option value="30" >30</option>
                            <option value="31" >31</option>
                          </select>
                        </div>
                        <div class="col-4">
                          <select name="user[year]" class="form-select">
                            <option value="">Year</option>
                            <option value="2014" >2014</option>
                            <option value="2013" >2013</option>
                            <option value="2012" >2012</option>
                            <option value="2011" >2011</option>
                            <option value="2010" >2010</option>
                            <option value="2009" >2009</option>
                            <option value="2008" >2008</option>
                            <option value="2007" >2007</option>
                            <option value="2006" >2006</option>
                            <option value="2005" >2005</option>
                            <option value="2004" >2004</option>
                            <option value="2003" >2003</option>
                            <option value="2002" >2002</option>
                            <option value="2001" >2001</option>
                            <option value="2000" >2000</option>
                            <option value="1999" >1999</option>
                            <option value="1998" >1998</option>
                            <option value="1997" >1997</option>
                            <option value="1996" >1996</option>
                            <option value="1995" >1995</option>
                            <option value="1994" >1994</option>
                            <option value="1993" >1993</option>
                            <option value="1992" >1992</option>
                            <option value="1991" >1991</option>
                            <option value="1990" >1990</option>
                            <option value="1989"  selected>1989</option>
                            <option value="1988" >1988</option>
                            <option value="1987" >1987</option>
                            <option value="1986" >1986</option>
                            <option value="1985" >1985</option>
                            <option value="1984" >1984</option>
                            <option value="1983" >1983</option>
                            <option value="1982" >1982</option>
                            <option value="1981" >1981</option>
                            <option value="1980" >1980</option>
                            <option value="1979" >1979</option>
                            <option value="1978" >1978</option>
                            <option value="1977" >1977</option>
                            <option value="1976" >1976</option>
                            <option value="1975" >1975</option>
                            <option value="1974" >1974</option>
                            <option value="1973" >1973</option>
                            <option value="1972" >1972</option>
                            <option value="1971" >1971</option>
                            <option value="1970" >1970</option>
                            <option value="1969" >1969</option>
                            <option value="1968" >1968</option>
                            <option value="1967" >1967</option>
                            <option value="1966" >1966</option>
                            <option value="1965" >1965</option>
                            <option value="1964" >1964</option>
                            <option value="1963" >1963</option>
                            <option value="1962" >1962</option>
                            <option value="1961" >1961</option>
                            <option value="1960" >1960</option>
                            <option value="1959" >1959</option>
                            <option value="1958" >1958</option>
                            <option value="1957" >1957</option>
                            <option value="1956" >1956</option>
                            <option value="1955" >1955</option>
                            <option value="1954" >1954</option>
                            <option value="1953" >1953</option>
                            <option value="1952" >1952</option>
                            <option value="1951" >1951</option>
                            <option value="1950" >1950</option>
                            <option value="1949" >1949</option>
                            <option value="1948" >1948</option>
                            <option value="1947" >1947</option>
                            <option value="1946" >1946</option>
                            <option value="1945" >1945</option>
                            <option value="1944" >1944</option>
                            <option value="1943" >1943</option>
                            <option value="1942" >1942</option>
                            <option value="1941" >1941</option>
                            <option value="1940" >1940</option>
                            <option value="1939" >1939</option>
                            <option value="1938" >1938</option>
                            <option value="1937" >1937</option>
                            <option value="1936" >1936</option>
                            <option value="1935" >1935</option>
                            <option value="1934" >1934</option>
                            <option value="1933" >1933</option>
                            <option value="1932" >1932</option>
                            <option value="1931" >1931</option>
                            <option value="1930" >1930</option>
                            <option value="1929" >1929</option>
                            <option value="1928" >1928</option>
                            <option value="1927" >1927</option>
                            <option value="1926" >1926</option>
                            <option value="1925" >1925</option>
                            <option value="1924" >1924</option>
                            <option value="1923" >1923</option>
                            <option value="1922" >1922</option>
                            <option value="1921" >1921</option>
                            <option value="1920" >1920</option>
                            <option value="1919" >1919</option>
                            <option value="1918" >1918</option>
                            <option value="1917" >1917</option>
                            <option value="1916" >1916</option>
                            <option value="1915" >1915</option>
                            <option value="1914" >1914</option>
                            <option value="1913" >1913</option>
                            <option value="1912" >1912</option>
                            <option value="1911" >1911</option>
                            <option value="1910" >1910</option>
                            <option value="1909" >1909</option>
                            <option value="1908" >1908</option>
                            <option value="1907" >1907</option>
                            <option value="1906" >1906</option>
                            <option value="1905" >1905</option>
                            <option value="1904" >1904</option>
                            <option value="1903" >1903</option>
                            <option value="1902" >1902</option>
                            <option value="1901" >1901</option>
                            <option value="1900" >1900</option>
                            <option value="1899" >1899</option>
                            <option value="1898" >1898</option>
                            <option value="1897" >1897</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Text mask</label>
                      <input type="text" name="input-mask" class="form-control" data-mask="00/00/0000" data-mask-visible="true" placeholder="00/00/0000" autocomplete="off"/>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Telephone mask</label>
                      <input type="text" name="input-mask" class="form-control" data-mask="(00) 0000-0000" data-mask-visible="true" placeholder="(00) 0000-0000" autocomplete="off"/>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Autosize textarea</label>
                      <textarea class="form-control" data-bs-toggle="autosize" placeholder="Type something…"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <label class="form-label">Datalist example</label>
                      <input class="form-control" list="datalistOptions" placeholder="Type to search..."/>
                      <datalist id="datalistOptions">
                        <option value="Aruba"/>
                        <option value="Afghanistan"/>
                        <option value="Angola"/>
                        <option value="Anguilla"/>
                        <option value="Albania"/>
                        <option value="Andorra"/>
                        <option value="United Arab Emirates"/>
                        <option value="Argentina"/>
                        <option value="Armenia"/>
                        <option value="American Samoa"/>
                      </datalist>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Range input</label>
                      <input type="range" class="form-range mb-2" value="40" min="0" max="100" step="10">
                      <div class="form-range mb-2" id="range-simple"></div>
                      <div class="form-range mb-2" id="range-connect"></div>
                      <div class="form-range mb-2 text-green" id="range-color"></div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Datepicker</label>
                      <input class="form-control mb-2" placeholder="Select a date" id="datepicker-default" value="2020-06-20"/>
                      <div class="input-icon mb-2">
                        <input class="form-control " placeholder="Select a date" id="datepicker-icon" value="2020-06-20"/>
                        <span class="input-icon-addon">
                          @include('tabler::icons.svg.calendar')
                        </span>
                      </div>
                      <div class="input-icon">
                        <span class="input-icon-addon">
                          @include('tabler::icons.svg.calendar')
                        </span>
                        <input class="form-control" placeholder="Select a date" id="datepicker-icon-prepend" value="2020-06-20"/>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Inline datepicker</label>
                      <div class="datepicker-inline" id="datepicker-inline"></div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Progress</label>
                      <div class="progress mb-2">
                        <div class="progress-bar" style="width: 38%" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" aria-label="38% Complete">
                          <span class="visually-hidden">38% Complete</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-indeterminate bg-green"></div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Form buttons</label>
                      <div class="row">
                        <div class="col">
                          <a href="#" class="btn btn-white w-100">
                            @include('tabler::icons.svg.brand-github')
                            Login with Github
                          </a>
                        </div>
                        <div class="col">
                          <a href="#" class="btn btn-white w-100">
                            @include('tabler::icons.svg.brand-twitter')
                            Login with Twitter
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Tags input</label>
                      <select type="text" class="form-select" placeholder="Select a date" id="select-tags" value="">
                        <option value="HTML">HTML</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="CSS">CSS</option>
                        <option value="jQuery">jQuery</option>
                        <option value="Bootstrap">Bootstrap</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Python">Python</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Advanced tags input</label>
                      <select type="text" class="form-select" placeholder="Select a date" id="select-tags-advanced" value="">
                        <option value="HTML">HTML</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="CSS">CSS</option>
                        <option value="jQuery">jQuery</option>
                        <option value="Bootstrap">Bootstrap</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Python">Python</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Advanced select</label>
                      <select type="text" class="form-select" placeholder="Select a date" id="select-users" value="">
                        <option value="1">Chuck Tesla</option>
                        <option value="2">Elon Musk</option>
                        <option value="3">Paweł Kuna</option>
                        <option value="4">Nikola Tesla</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Advanced select with optgroup</label>
                      <select type="text" class="form-select" placeholder="Select a date" id="select-optgroups" value="">
                        <optgroup label="Tags">
                          <option value="HTML">HTML</option>
                          <option value="JavaScript">JavaScript</option>
                          <option value="CSS">CSS</option>
                          <option value="jQuery">jQuery</option>
                          <option value="Bootstrap">Bootstrap</option>
                          <option value="Ruby">Ruby</option>
                          <option value="Python">Python</option>
                        </optgroup>
                        <optgroup label="People">
                          <option value="Chuck Tesla">Chuck Tesla</option>
                          <option value="Elon Musk">Elon Musk</option>
                          <option value="Paweł Kuna">Paweł Kuna</option>
                          <option value="Nikola Tesla">Nikola Tesla</option>
                        </optgroup>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Select with avatars</label>
                      <select type="text" class="form-select" placeholder="Select a date" id="select-people" value="">
                        <option value="1" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/000m.jpg)&quot;&gt;&lt;/span&gt;">Paweł Kuna</option>
                        <option value="2" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot;&gt;JL&lt;/span&gt;">Jeffie Lewzey</option>
                        <option value="3" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/002m.jpg)&quot;&gt;&lt;/span&gt;">Mallory Hulme</option>
                        <option value="4" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/003m.jpg)&quot;&gt;&lt;/span&gt;">Dunn Slane</option>
                        <option value="5" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/000f.jpg)&quot;&gt;&lt;/span&gt;">Emmy Levet</option>
                        <option value="6" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/001f.jpg)&quot;&gt;&lt;/span&gt;">Maryjo Lebarree</option>
                        <option value="7" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot;&gt;EP&lt;/span&gt;">Egan Poetz</option>
                        <option value="8" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/002f.jpg)&quot;&gt;&lt;/span&gt;">Kellie Skingley</option>
                        <option value="9" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/003f.jpg)&quot;&gt;&lt;/span&gt;">Christabel Charlwood</option>
                        <option value="10" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot;&gt;HS&lt;/span&gt;">Haskel Shelper</option>
                        <option value="11" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/006m.jpg)&quot;&gt;&lt;/span&gt;">Lorry Mion</option>
                        <option value="12" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/004f.jpg)&quot;&gt;&lt;/span&gt;">Leesa Beaty</option>
                        <option value="13" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/007m.jpg)&quot;&gt;&lt;/span&gt;">Perren Keemar</option>
                        <option value="14" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot;&gt;SA&lt;/span&gt;">Sunny Airey</option>
                        <option value="15" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/009m.jpg)&quot;&gt;&lt;/span&gt;">Geoffry Flaunders</option>
                        <option value="16" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/010m.jpg)&quot;&gt;&lt;/span&gt;">Thatcher Keel</option>
                        <option value="17" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/005f.jpg)&quot;&gt;&lt;/span&gt;">Dyann Escala</option>
                        <option value="18" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/006f.jpg)&quot;&gt;&lt;/span&gt;">Avivah Mugleston</option>
                        <option value="19" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot;&gt;AA&lt;/span&gt;">Arlie Armstead</option>
                        <option value="20" data-custom-properties="&lt;span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url({{ asset('/') }}tabler/static/avatars/008f.jpg)&quot;&gt;&lt;/span&gt;">Tessie Curzon</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Select with flags</label>
                      <select type="text" class="form-select" id="select-countries" value="">
                        <option value="pl" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-pl&quot;&gt;&lt;/span&gt;">Poland</option>
                        <option value="de" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-de&quot;&gt;&lt;/span&gt;">Germany</option>
                        <option value="cz" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-cz&quot;&gt;&lt;/span&gt;">Czech Republic</option>
                        <option value="br" data-custom-properties="&lt;span class=&quot;flag flag-xs flag-country-br&quot;&gt;&lt;/span&gt;">Brazil</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Select with labels</label>
                      <select type="text" class="form-select" id="select-labels" value="">
                        <option value="copy" data-custom-properties="&lt;span class=&quot;badge bg-blue-lt&quot;&gt;cmd + C&lt;/span&gt;">Copy</option>
                        <option value="paste" data-custom-properties="&lt;span class=&quot;badge bg-blue-lt&quot;&gt;cmd + V&lt;/span&gt;">Paste</option>
                        <option value="cut" data-custom-properties="&lt;span class=&quot;badge bg-blue-lt&quot;&gt;cmd + X&lt;/span&gt;">Cut</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Advanced select with validation state</label>
                      <select type="text" class="form-select mb-3 is-valid" id="select-countries-valid" value="">
                        <option value="pl">Poland</option>
                        <option value="de">Germany</option>
                        <option value="cz">Czech Republic</option>
                        <option value="br">Brazil</option>
                      </select>
                      <select type="text" class="form-select is-invalid" id="select-countries-invalid" value="">
                        <option value="pl">Poland</option>
                        <option value="de">Germany</option>
                        <option value="cz">Czech Republic</option>
                        <option value="br">Brazil</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <div class="d-flex">
              <a href="#" class="btn btn-link">Cancel</a>
              <button type="submit" class="btn btn-primary ms-auto">Send data</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Project ID</h3>
            <p class="card-subtitle">Used when interacting with the API.</p>
            <div class="input-icon">
              <input type="text" value="prj_5ae74426fe935327a8fa178b07d84ad9" class="form-control" placeholder="Search…" readonly>
              <span class="input-icon-addon">
                @include('tabler::icons.svg.files')
              </span>
            </div>
          </div>
          <div class="card-footer">
            <div class="row align-items-center">
              <div class="col">Learn more about <a href="#">Project ID</a></div>
              <div class="col-auto">
                <a href="#" class="btn btn-primary">
                  Save
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Node.js Version</h3>
            <p class="card-subtitle">The version of Node.js that is used in the Build Step and for Serverless Functions. A new Deployment is required for your changes to take effect.</p>
            <select class="form-select">
              <option>14.x</option>
              <option>12.x</option>
            </select>
          </div>
          <div class="card-footer">
            Learn more about <a href="#">Node.js Version</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Basic form</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group mb-3 ">
                <label class="form-label required">Email address</label>
                <div >
                  <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                  <small class="form-hint">We'll never share your email with anyone else.</small>
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label required">Password</label>
                <div >
                  <input type="password" class="form-control" placeholder="Password">
                  <small class="form-hint">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                    spaces, special characters, or emoji.
                  </small>
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label">Select</label>
                <div >
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
              <div class="form-group mb-3">
                <label class="form-label">Checkboxes</label>
                <div >
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
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Horizontal form</h3>
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
@endsection

@push('libs')
  <script src="{{ asset('tabler/libs/nouislider/dist/nouislider.min.js') }}" defer></script>
  <script src="{{ asset('tabler/libs/litepicker/dist/litepicker.js') }}" defer></script>
  <script src="{{ asset('tabler/libs/tom-select/dist/js/tom-select.base.min.js') }}" defer></script>
@endpush

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
     window.noUiSlider && (noUiSlider.create(document.getElementById('range-simple'), {
          start: 20,
          connect: [true, false],
          step: 10,
          range: {
            min: 0,
            max: 100
          }
     }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
     window.noUiSlider && (noUiSlider.create(document.getElementById('range-connect'), {
          start: [60, 90],
          connect: [false, true, false],
          step: 10,
          range: {
            min: 0,
            max: 100
          }
     }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
     window.noUiSlider && (noUiSlider.create(document.getElementById('range-color'), {
          start: 40,
          connect: [true, false],
          step: 10,
          range: {
            min: 0,
            max: 100
          }
     }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.Litepicker && (new Litepicker({
      element: document.getElementById('datepicker-default'),
      buttonText: {
        previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
        nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.Litepicker && (new Litepicker({
      element: document.getElementById('datepicker-icon'),
      buttonText: {
        previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
        nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.Litepicker && (new Litepicker({
      element: document.getElementById('datepicker-icon-prepend'),
      buttonText: {
        previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
        nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.Litepicker && (new Litepicker({
      element: document.getElementById('datepicker-inline'),
      buttonText: {
        previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
        nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
      },
      inlineMode: true,
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-tags'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-tags-advanced'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-users'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-optgroups'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-people'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-countries'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-labels'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-countries-valid'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-countries-invalid'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let sliderTriggerList = [].slice.call(document.querySelectorAll("[data-slider]"));
    sliderTriggerList.map(function (sliderTriggerEl) {
      let options = {};
      if (sliderTriggerEl.getAttribute("data-slider")) {
        options = JSON.parse(sliderTriggerEl.getAttribute("data-slider"));
      }
      let slider = noUiSlider.create(sliderTriggerEl, options);
      if (options['js-name']) {
        window[options['js-name']] = slider;
      }
    });
  });
</script>
@endpush