
  <!-- Modal -->
 
  <div class="modal fade" role="dialog" id="myModal" style="overflow:visible">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Comments</h4>
        </div>
        <div class="modal-body" align="left" id="modal_comm" style="overflow:visible">
        
        </div>
        <div class="modal-footer">
          <?php if(Auth::check()): ?>
      
       
        <div class="formClassComm">
        <textarea class="form-control" id="comment_content" name="body" placeholder="Comment.." rows="4" cols="100" align="center"></textarea><br>
      
          <button type="submit" class="btn btn-primary"  style="float:right;"" onclick="return submitForm(parseInt($('.formClassComm').attr('id')));">Add Comment</button>
<button type="submit" class="btn btn-secondry" style="float:right;" onclick="return annCom();">Cancel</button>
</div>
          <?php endif; ?>
        </div>
      </div>
      
    </div>
  

</div>


<script>


function annCom()
{
$('#comment_content').val("");
 $("#myModal").modal('hide');
}

</script>

