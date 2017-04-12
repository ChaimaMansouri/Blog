<div class="modal fade" id="deletear">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure, you want to delete this artical ?</p>
        <input hidden="" id="idDel">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="return deletar($('#idDel').attr('value'));">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
