

  <!-- Modal -->
 
  <div class="modal fade" role="dialog" id="myModal">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Comments</h4>
        </div>
        <div class="modal-body" align="left" id="modal_comm">
        
        </div>
        <div class="modal-footer">
        <form action="/comment" method="post">
        
         
        <textarea class="form-control" name="body" placeholder="Comment.." rows="4" cols="100" align="center"></textarea><br>
       
          <button type="submit" class="btn btn-primary" style="float:right">Add Comment</button>
         

          </form>
        </div>
      </div>
      
    </div>
  

</div>

<script>
$(document).ready(function(){
    $(".myCom").click(function(){
      //console.log($(this).parent().attr('id'));
    $("#modal_comm").load("/comment/"+$(this).parent().attr('id'));
   $("#myModal").modal({show: true});
        });
      });
</script>

