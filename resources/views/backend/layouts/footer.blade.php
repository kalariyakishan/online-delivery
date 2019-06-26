<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
        <span class="navbar-text">
            &copy; 2019. <a href="#">AOSA</a> by <a href="#" target="_blank">Complitech</a>
        </span>
    </div>
</div>

<!-- Modal DeleteModal -->
{{-- <div class="modal fade modal-danger" id="DeleteModal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <div class="modal-body">
          <p>
            Are_you_sure_you_want_to_delete_this_record?
          </p>
          <input type="hidden" class="form-control" id="data" name="data">
        </div>
        <div class="modal-footer">
          <button type="button" data-id="" id="delete" name="Delete" class="btn btn-danger">Delete Record</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}
  <div id="DeleteModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h6 class="modal-title delete-model-title">Delete Confirmation</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <h5>Are you sure you want to delete this record?</h5>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <button type="button btn-delete" data-id="" id="delete" name="Delete" class="btn bg-danger" style="font-weight: 600;">Delete Record</button>
            </div>
        </div>
    </div>
</div>
  <!-- /.Modal DeleteModal -->


@include('backend/layouts/js')

