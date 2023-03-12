<div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        @include('tabler::icons.svg.alert-triangle')
        <h3>Are you sure?</h3>
        <div class="text-muted">Do you really want to remove 84 files? What you've done cannot be undone.</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                Cancel
              </a></div>
            <div class="col"><a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                Delete 84 items
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>