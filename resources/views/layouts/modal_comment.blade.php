
  <!-- Modal -->
 
  <div class="modal fade" role="dialog" id="myModal">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Comments</h4>
        </div>
        <div class="modal-body" align="left" id="modal_comm">
        
        </div>
        <div class="modal-footer">
          @if(Auth::check())
        <form onsubmit="return submitForm(parseInt($('.formClassComm').attr('id')))" class="formClassComm">
       
         {{csrf_field()}}
        <textarea class="form-control" id="comment_content" name="body" placeholder="Comment.." rows="4" cols="100" align="center"></textarea><br>
       
          <button type="submit" class="btn btn-primary" style="float:right;margin: 10px;" >Add Comment</button>
         

          </form>
          @endif
        </div>
      </div>
      
    </div>
  

</div>


<script>
$(document).ready(function(){
    $(".myCom").click(function(){
     var id=$(this).parent().attr('id');
     
      $(".formClassComm").attr("id",id);
      $("#myModal").modal({keyboard:true,show: true});
    $("#modal_comm").load("/comment/"+$(this).parent().attr('id'));
   

        });
      });


</script>

