@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Tabler License
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-lg-8">
          <div class="card card-lg">
            <div class="card-body">
              <div class="markdown">
                <p>This is a legal agreement between you, the Purchaser, and Tabler. Purchasing or downloading of any Tabler product (Tabler Free, Tabler PRO, Tabler Email), constitutes your acceptance of the terms of this license, <a href="https://tabler.io/terms-of-service.html">Tabler terms of service</a> and <a href="https://tabler.io/privacy-policy.html">Tabler private policy</a>.</p>
                <p>A license grants you a non-exclusive and non-transferable right to use and incorporate the item in your personal or commercial projects.</p>
                <h3 id="tabler-free-license">Tabler Free License</h3>
                <p>Tabler Free is available under MIT License</p>
                <p>Copyright 2022 Tabler</p>
                <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
                <p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
                <p>THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
                <h3 id="tabler-pro-and-tabler-email-license">Tabler PRO and Tabler Email License</h3>
                <p>After Purchasing you are granted the use products under the conditions featured belowed.</p>
                <p>Rights</p>
                <ol>
                  <li>You have rights to use our resources for any or all of your personal and commercial projects.</li>
                  <li>You may modify the resources according to your requirements.</li>
                  <li>You are not required to attribute or link to Tabler in any of your projects.</li>
                </ol>
                <p>Restrictions</p>
                <ol>
                  <li>You do not have the rights to redistribute, resell, lease, license, sub-license or offer the file downloaded to any third party.</li>
                  <li>For any resalable web applications or software programs, you cannot include our graphic resources as an additional attachment.</li>
                  <li>You cannot redistribute any of the software, or products created with Tabler paid  products.</li>
                  <li>You cannot add our source code to any open source repository.</li>
                  <li>The source code may not be placed on any website in a complete or archived downloadable format.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <div class="me-3">
                  @include('tabler::icons.svg.scale')
                </div>
                <div>
                  <small class="text-muted">tabler/tabler is licensed under the</small>
                  <h3 class="lh-1">MIT License</h3>
                </div>
              </div>
              <div class="text-muted mb-3">
                A short and simple permissive license with conditions only requiring preservation of copyright and
                license notices. Licensed works, modifications, and larger works may be distributed under different terms
                and without source code.
              </div>
              <h4>Permissions</h4>
              <ul class="list-unstyled space-y-1">
                <li>
                  @include('tabler::icons.svg.check')
                  Commercial use</li>
                <li>
                  @include('tabler::icons.svg.check')
                  Modification</li>
                <li>
                  @include('tabler::icons.svg.check')
                  Distribution</li>
                <li>
                  @include('tabler::icons.svg.check')
                  Private use</li>
              </ul>
              <h4>Limitations</h4>
              <ul class="list-unstyled space-y-1">
                <li>
                  @include('tabler::icons.svg.x')
                  Liability</li>
                <li>
                  @include('tabler::icons.svg.x')
                  Warranty</li>
              </ul>
              <h4>Conditions</h4>
              <ul class="list-unstyled space-y-1">
                <li>
                  @include('tabler::icons.svg.info-circle')
                  License and copyright notice</li>
              </ul>
            </div>
            <div class="card-footer">
              This is not legal advice.
              <a href="#" target="_blank">Learn more about repository licenses.</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection