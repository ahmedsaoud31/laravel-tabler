<div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-success"></div>
      <div class="modal-body text-center py-4">
        @include('tabler::icons.svg.circle-check')
        <h3>Payment succedeed</h3>
        <div class="text-muted">Your payment of $290 has been successfully submitted. Your invoice has been sent to support@tabler.io.</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                Go to dashboard
              </a></div>
            <div class="col"><a href="#" class="btn btn-success w-100" data-bs-dismiss="modal">
                View invoice
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>