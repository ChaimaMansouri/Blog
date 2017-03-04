

  <!-- Modal -->
 
  <div class="modal fade" role="dialog" id="myApprovesModal">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Approves</h4>
        </div>
        <div class="container modal-header navbar-light bg-faded">
          Approved by:
        </div>
        <div class="modal-body" align="left" id="AppModal">
        </div>
      </div>
      
    </div>
  

</div>

<script>
$(document).ready(function(){
    $(".myApp").click(function(){
      $("#AppModal").load("/approve/"+$(this).parent().attr('id'));
   $("#myApprovesModal").modal({show: true});
        });
      });
</script>

