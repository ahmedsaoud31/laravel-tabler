@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Icons
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card card-md">
            <div class="card-stamp card-stamp-lg">
              <div class="card-stamp-icon bg-primary">
                <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" /><line x1="10" y1="10" x2="10.01" y2="10" /><line x1="14" y1="10" x2="14.01" y2="10" /><path d="M10 14a3.5 3.5 0 0 0 4 0" /></svg>
              </div>
            </div>
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-10">
                  <h3 class="h1">Tabler Icons</h3>
                  <div class="markdown text-muted">
                    All icons come from the Tabler Icons set and are MIT-licensed. Visit
                    <a href="https://tabler-icons.io" target="_blank" rel="noopener">tabler-icons.io</a>,
                    download any of the 2160 icons in SVG, PNG or&nbsp;React and use them in your favourite design tools.
                  </div>
                  <div class="mt-3">
                    <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank" rel="noopener">Download icons</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">{{ __('All Icons') }}</div>
            </div>
            <div class="card-body p-0">
              <div class="demo-icons-list-wrap">
                <div class="demo-icons-list">
                  @foreach(File::allFiles(base_path().'/resources/views/tabler/icons/svg') as $file)
                    @php($name = str_replace('.blade.php', '', $file->getFilename()))
                    <a href="https://tabler-icons.io/i/{{ $name }}" target="_blank" rel="noopener" class="demo-icons-list-item" title="{{ $name }}" data-bs-toggle="tooltip" data-bs-placement="top">
                      <!-- Download SVG icon from http://tabler-icons.io/i/{{ $name }} -->
                      @include("tabler.icons.svg.".$name)
                    </a>
                  @endforeach
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')

@endpush

@push('scripts')

@endpush