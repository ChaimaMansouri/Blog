
   @if(Auth::check())
   
<div class="container">
   <div class="list-group">
  <button class="btn-primary btn" type="button" id="side">Add Article</button>
   </div>
   </div>
   
  @endif
  
  <!-- Modal -->
 
  <div class="modal fade" role="dialog" id="Modal_side">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Artical</h4>
        </div>
     
       <div class="modal-header">
    <br><label class="col-sm-1">Title: </label>

     <input id="articleTitle" class="form-control" type="text" name="title" required>
    </div> 
       
        <div class="modal-body" align="left" id="AppModal">
        <div id="dropzonecontainer">
        <form method="POST" action="/article" id="dropzone" class="dropzone dropzone-file-area dz-clickable fixedDropZone" >
            </form>
      </div>
      
         
              
        <label class="col-sm-3 col-form-label">Body:</label>
        <br> <textarea id="articleBody" class="form-control" name="body" rows="4" cols="100" align="center" required></textarea><br>
        </div>
       <div class="modal-footer">
    
        <button id="addarticalbtn" type="submit" class="btn btn-primary" style="float:right" onclick="return storearticle();">Add</button>

        <button id="addarticalbtn" type="submit" class="btn btn-secondary" style="float:right" onclick="return canceladd();">Cancel</button>
       
        </div>
        
         <input class="dz-hidden-input" type="file" name="file" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
      </div>
      </div>
    </div>

</div>
<script type="text/javascript">

$(document).ready(function(){
  $("#side").click(function(){
  $("#Modal_side").modal({show: true,keyboard:true});
        });
      });

function storearticle()
{title=$("#articleTitle").val();
body=$("#articleBody").val();
  id=$(".upimage").attr('id');
  $.ajax({
  url:"/article/store",
  method:'POST',
  data:{
    'title':title,
    'body':body,
    'file_name':id
  },
  success:function(res){
    document.location.href="/";
console.log(res);
  },
  error:function(res){
    console.log(res);
  }

  });

}
function canceladd(){
  $("#articleTitle").val("");
$("#articleBody").val("");
id=$(".upimage").attr('id');
if (id) {
  $.ajax({
    url:"/photo_delete",
    method:"post",
    data:{
      'delPhoto':id
    },
    success:function(res){
      console.log(res);
      
      var aux = "<form method=\"POST\" action=\"/article\" id=\"dropzone\" class=\"dropzone dropzone-file-area dz-clickable fixedDropZone\" ></form>"
      $("#dropzone").remove();
      
      $("#dropzonecontainer").append(aux);
      $("#dropzone").dropzone({
      url: "/article",
      method: "post",
      maxFiles: 1
            });
    },
    error:function(res){
      console.log('error');
      console.log(res);
    }
  });
}
$("#Modal_side").modal("hide");
}

</script>
