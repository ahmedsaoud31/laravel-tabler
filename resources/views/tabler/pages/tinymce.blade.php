@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            TinyMCE
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label">Your name</label>
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <form method="post">
              <textarea id="tinymce-mytextarea">Hello, <b>Tabler</b>!</textarea>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs')
  <script src="{{ asset('tabler/libs/tinymce/tinymce.min.js') }}" defer></script>
@endpush

@push('scripts')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    tinyMCE.init({
      selector: '#tinymce-mytextarea',
      height: 300,
      menubar: false,
      statusbar: false,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
      ],
      toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat',
      content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
    });
  })
  // @formatter:on
</script>
@endpush