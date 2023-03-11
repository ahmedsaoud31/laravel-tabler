<div class="modal modal-blur fade" id="modal-team" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a new team</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3 align-items-end">
          <div class="col-auto">
            <a href="#" class="avatar avatar-upload rounded">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
              <span class="avatar-upload-text">Add</span>
            </a>
          </div>
          <div class="col">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Pick your team color</label>
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
        <div>
          <label class="form-label">Additional info</label>
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add Team</button>
      </div>
    </div>
  </div>
</div>