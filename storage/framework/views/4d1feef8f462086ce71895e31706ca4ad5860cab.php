<div class="modal fade" id="deletecom">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure, you want to delete this comment ?</p>
        <input hidden="" id="idCom">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="return deletcom($('#idCom').attr('value'),parseInt($('.formClassComm').attr('id')));">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
     $("a").css("cursor","pointer");
   
 $(".delcom").click(function(event){
     $("#deletecom").modal({show: true});
     $("#idCom").attr("value",$(event.delegateTarget).attr("attribute"))
        });
 });
 function deletcom(id,ar)
  {
 $.ajax({
    url:"/delcomment",
    method:"post",
    data:{
      'id':id
    },
    success:function(res){
      console.log(res);
      $('#deletecom').modal('hide');
    $("#modal_comm").load("/comment/"+ar);
    },
      error:function(res){
        console.log('error');
        console.log(res);
      }
    
  });
  }
  </script>
