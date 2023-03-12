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
                @include('tabler::icons.svg.ghost')
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
                  @php($files = File::allFiles(base_path().'/resources/views/tabler/icons/svg'))
                  @foreach($files as $file)
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