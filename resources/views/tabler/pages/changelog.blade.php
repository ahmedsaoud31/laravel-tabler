@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Documentation
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row gx-lg-5">
        <div class="d-none d-lg-block col-lg-3">
          <ul class="nav nav-pills nav-vertical">
            <li class="nav-item">
              <a href="./docs/" class="nav-link">
                Introduction
              </a>
            </li>
            <li class="nav-item">
              <a href="#menu-base" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                Getting started
                <span class="nav-link-toggle"></span>
              </a>
              <ul class="nav nav-pills collapse" id="menu-base">
                <li class="nav-item">
                  <a href="./docs/getting-started.html" class="nav-link">
                    Getting Started
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/download.html" class="nav-link">
                    Download
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/browser-support.html" class="nav-link">
                    Browser Support
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#menu-content" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                Content
                <span class="nav-link-toggle"></span>
              </a>
              <ul class="nav nav-pills collapse" id="menu-content">
                <li class="nav-item">
                  <a href="./docs/colors.html" class="nav-link">
                    Colors
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/typography.html" class="nav-link">
                    Typography
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/icons.html" class="nav-link">
                    Icons
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/customize.html" class="nav-link">
                    Customize Tabler
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#menu-layout" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                Layout
                <span class="nav-link-toggle"></span>
              </a>
              <ul class="nav nav-pills collapse" id="menu-layout">
                <li class="nav-item">
                  <a href="./docs/page-headers.html" class="nav-link">
                    Page headers
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#menu-forms" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                Form components
                <span class="nav-link-toggle"></span>
              </a>
              <ul class="nav nav-pills collapse" id="menu-forms">
                <li class="nav-item">
                  <a href="./docs/form-elements.html" class="nav-link">
                    Form elements
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/form-helpers.html" class="nav-link">
                    Form helpers
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/form-validation.html" class="nav-link">
                    Validation states
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/form-image-check.html" class="nav-link">
                    Image check
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/form-color-check.html" class="nav-link">
                    Color check
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/form-selectboxes.html" class="nav-link">
                    Form selectboxes
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/form-fieldset.html" class="nav-link">
                    Form fieldset
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#menu-components" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                Components
                <span class="nav-link-toggle"></span>
              </a>
              <ul class="nav nav-pills collapse" id="menu-components">
                <li class="nav-item">
                  <a href="./docs/alerts.html" class="nav-link">
                    Alerts
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/avatars.html" class="nav-link">
                    Avatars
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/badges.html" class="nav-link">
                    Badges
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/breadcrumb.html" class="nav-link">
                    Breadcrumb
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/buttons.html" class="nav-link">
                    Buttons
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/cards.html" class="nav-link">
                    Cards
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/carousel.html" class="nav-link">
                    Carousel
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/datagrid.html" class="nav-link">
                    Data grid
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/dropdowns.html" class="nav-link">
                    Dropdowns
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/divider.html" class="nav-link">
                    Divider
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/empty.html" class="nav-link">
                    Empty states
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/modals.html" class="nav-link">
                    Modals
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/page-headers.html" class="nav-link">
                    Page headers
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/progress.html" class="nav-link">
                    Progress
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/range-slider.html" class="nav-link">
                    Range slider
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/ribbons.html" class="nav-link">
                    Ribbons
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/placeholder.html" class="nav-link">
                    Placeholder
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/spinners.html" class="nav-link">
                    Spinners
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/statuses.html" class="nav-link">
                    Statuses
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/steps.html" class="nav-link">
                    Steps
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/switch-icon.html" class="nav-link">
                    Switch icon
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/tables.html" class="nav-link">
                    Tables
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/tabs.html" class="nav-link">
                    Tabs
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/timelines.html" class="nav-link">
                    Timelines
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/toasts.html" class="nav-link">
                    Toasts
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/tooltips.html" class="nav-link">
                    Tooltips
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/popover.html" class="nav-link">
                    Popover
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#menu-utils" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                Utilities
                <span class="nav-link-toggle"></span>
              </a>
              <ul class="nav nav-pills collapse" id="menu-utils">
                <li class="nav-item">
                  <a href="./docs/borders.html" class="nav-link">
                    Borders
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/cursors.html" class="nav-link">
                    Cursors
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/interactions.html" class="nav-link">
                    Interactions
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#menu-plugins" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                Plugins
                <span class="nav-link-toggle"></span>
              </a>
              <ul class="nav nav-pills collapse" id="menu-plugins">
                <li class="nav-item">
                  <a href="./docs/autosize.html" class="nav-link">
                    Autosize
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/input-mask.html" class="nav-link">
                    Form input mask
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/flags.html" class="nav-link">
                    Flags
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/payments.html" class="nav-link">
                    Payments
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/charts.html" class="nav-link">
                    Charts
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/dropzone.html" class="nav-link">
                    Dropzone
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/inline-player.html" class="nav-link">
                    Inline player
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/tinymce.html" class="nav-link">
                    TinyMCE
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="./changelog.html" class="nav-link">
                Changelog
                <span class="badge bg-blue-lt ms-auto">1.0.0-beta11</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="card card-lg">
            <div class="card-body">
              <div class="markdown">
                <div>
                  <div class="d-flex mb-3">
                    <h1 class="m-0">Changelog</h1>
                  </div>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta10</span> –
                    <small>April 29, 2022</small>
                  </h2>
                  <ul>
                    <li>new ‘datatable’ component</li>
                    <li>update Tabler Icons to v1.67</li>
                    <li>fix: <a href="https://github.com/tabler/tabler/issues/1024" target="_blank" rel="noopener">#1024</a> - fix Tom-select in dark mode</li>
                    <li>new carousel indicators: dots, vertical, thumbs (<a href="https://github.com/tabler/tabler/issues/1101" target="_blank" rel="noopener">#1101</a>)</li>
                    <li>replace !important modifier with more specific selectors (<a href="https://github.com/tabler/tabler/issues/1100" target="_blank" rel="noopener">#1100</a>)</li>
                    <li>new ‘FAQ’ page</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta9</span> –
                    <small>February 26, 2022</small>
                  </h2>
                  <ul>
                    <li>fix: <a href="https://github.com/tabler/tabler/issues/1061" target="_blank" rel="noopener">#1061</a> - list group item colors in light and dark modes</li>
                    <li>new ‘tasks’ dashboard</li>
                    <li>fix: <a href="https://github.com/tabler/tabler/issues/1059" target="_blank" rel="noopener">#1059</a> - upload button in form element in dark view has problem</li>
                    <li>fix: <a href="https://github.com/tabler/tabler/issues/1052" target="_blank" rel="noopener">#1052</a> - card background icon is practically invisible</li>
                    <li>remove Inter font and use default font system stack</li>
                    <li>fix: <a href="https://github.com/tabler/tabler/issues/1018" target="_blank" rel="noopener">#1018</a> - vector map not working</li>
                    <li>fix: <a href="https://github.com/tabler/tabler/issues/1035" target="_blank" rel="noopener">#1035</a> - wrong background color of hovered list group items in dark mode</li>
                    <li>dependencies update</li>
                    <li>add <code class="language-plaintext highlighter-rouge">font-display: swap;</code> to improve font loading</li>
                    <li>new <code class="language-plaintext highlighter-rouge">Boxed</code> layout</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta8</span> –
                    <small>February 05, 2022</small>
                  </h2>
                  <ul>
                    <li>update dependencies</li>
                    <li>new vector maps demos</li>
                    <li>fixes update map on resize</li>
                    <li>docs improvement</li>
                    <li>replace <code class="language-plaintext highlighter-rouge">badge</code> with <code class="language-plaintext highlighter-rouge">status-dot</code> in <code class="language-plaintext highlighter-rouge">navbar-notifications.html</code></li>
                    <li>map tooltip fixes</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta7</span> –
                    <small>February 05, 2022</small>
                  </h2>
                  <ul>
                    <li>fix: <a href="https://github.com/tabler/tabler/issues/1019" target="_blank" rel="noopener">#1019</a> - project-overview.html link not working</li>
                    <li>fix: <a href="https://github.com/tabler/tabler/issues/1010" target="_blank" rel="noopener">#1010</a> - card with bottom tabs has incorrect border radius</li>
                    <li>uptime monitor mobile fixes</li>
                    <li>navbar dark button fix</li>
                    <li><code class="language-plaintext highlighter-rouge">tabler-icons</code> link</li>
                    <li>autoloading webfonts</li>
                    <li>cards fixes, new cards demos</li>
                    <li>ruby dependencies update</li>
                    <li>RTL stylesheet fixes</li>
                    <li>new card action demos</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta6</span> –
                    <small>January 18, 2022</small>
                  </h2>
                  <ul>
                    <li>pricing cards fix</li>
                    <li>fix bug <code class="language-plaintext highlighter-rouge">fw-...</code>, <code class="language-plaintext highlighter-rouge">.fs-...</code> is missed (<a href="https://github.com/tabler/tabler/issues/987" target="_blank" rel="noopener">#987</a>)</li>
                    <li>avatar class fix</li>
                    <li>fix bug <a href="https://github.com/tabler/tabler/issues/903" target="_blank" rel="noopener">#903</a> <code class="language-plaintext highlighter-rouge">litepicker</code> with date range not having correct border</li>
                    <li>page wrapper fix</li>
                    <li>fix <a href="https://github.com/tabler/tabler/issues/900" target="_blank" rel="noopener">#900</a> <code class="language-plaintext highlighter-rouge">is-invalid-lite</code> class is not working under <code class="language-plaintext highlighter-rouge">was-validated</code> form class</li>
                    <li>update <code class="language-plaintext highlighter-rouge">@tabler/icons</code> to version 1.48</li>
                    <li>fix <a href="https://github.com/tabler/tabler/issues/960" target="_blank" rel="noopener">#960</a> - Badges not honoring font sizes</li>
                    <li>fix <a href="https://github.com/tabler/tabler/issues/959" target="_blank" rel="noopener">#959</a> - <code class="language-plaintext highlighter-rouge">node-sass</code> does not properly compile nested media queries</li>
                    <li>update package dependencies to newest version</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta5</span> –
                    <small>December 07, 2021</small>
                  </h2>
                  <p class="strong">Tabler has finally lived to see dark mode! 🌝🌚</p>
                  <ul>
                    <li><strong>Dark mode enabled!</strong></li>
                    <li>add more cursors (<a href="https://github.com/tabler/tabler/issues/947" target="_blank" rel="noopener">#947</a>)</li>
                    <li>fix <a href="https://github.com/tabler/tabler/issues/892" target="_blank" rel="noopener">#892</a> - Media queries need to be nested when negating</li>
                    <li>update <code class="language-plaintext highlighter-rouge">@tabler/icons</code> to newest version</li>
                    <li>move optional dependencies to peerDependencies (<a href="https://github.com/tabler/tabler/issues/924" target="_blank" rel="noopener">#924</a>)</li>
                    <li>move deployment to Github Actions (<a href="https://github.com/tabler/tabler/issues/934" target="_blank" rel="noopener">#934</a>)</li>
                    <li>table border fixes</li>
                    <li>antialiased fix</li>
                    <li>update <code class="language-plaintext highlighter-rouge">@tabler/icons</code> to version 1.42</li>
                    <li>change default font to ‘Inter’</li>
                    <li>colors unify</li>
                    <li>add <code class="language-plaintext highlighter-rouge">tom-select</code> and remove <code class="language-plaintext highlighter-rouge">choices.js</code></li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta4</span> –
                    <small>October 24, 2021</small>
                  </h2>
                  <ul>
                    <li>upgrade required node.js version to 14</li>
                    <li>upgrade Bootstrap to 5.1</li>
                    <li>upgrade dependencies</li>
                    <li>fix <a href="https://github.com/tabler/tabler/issues/775" target="_blank" rel="noopener">#775</a>  litepicker not initializing</li>
                    <li>fix <code class="language-plaintext highlighter-rouge">nouislider</code> import in dev</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta3</span> –
                    <small>May 08, 2021</small>
                  </h2>
                  <ul>
                    <li>upgrade Bootstrap to 5.0</li>
                    <li>upgrade dependencies</li>
                    <li>change <code class="language-plaintext highlighter-rouge">$border-radius-pill</code> variable</li>
                    <li>badge vertical align fix</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta2</span> –
                    <small>March 29, 2021</small>
                  </h2>
                  <ul>
                    <li>update dependencies</li>
                    <li><code class="language-plaintext highlighter-rouge">li</code> marker fix</li>
                    <li>page wrapper, nav fixes</li>
                    <li>scripts optimize, remove <code class="language-plaintext highlighter-rouge">capture_once</code></li>
                    <li><code class="language-plaintext highlighter-rouge">page-body</code> fixes</li>
                    <li>layout navbar fix</li>
                    <li>typography fix</li>
                    <li>ribbon fix</li>
                    <li>charts label fixes</li>
                    <li>charts docs</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h2 class="mb-2">
                    <span>1.0.0-beta</span> –
                    <small>February 17, 2021</small>
                  </h2>
                  <p class="strong">Initial beta release of Tabler v1.0! Lots more coming soon though 😁</p>
                  <ul>
                    <li>update Bootstrap to 5.0.0-beta2</li>
                    <li>update other dependencies.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection