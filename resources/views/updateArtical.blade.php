  <!-- Modal -->
 
  <div class="modal fade" role="dialog" id="articalModalupdate">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Artical</h4>
        </div>
     
       <div class="modal-header">
    <br><label class="col-sm-1">Title: </label>

     <input id="articleTitleupdate" class="form-control" type="text" name="title" required>
    </div> 
       
        <div class="modal-body" align="left" id="AppModalupdate">
        <div id="photoupdatezone">
        <form method="POST" action="/article" id="dropzoneup" class="dropzone dropzone-file-area dz-clickable fixedDropZone" >
            </form>
             <input class="dz-hidden-input" type="file" name="file" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
      </div>
      
         
              
        <label class="col-sm-3 col-form-label">Body:</label>
        <br> <textarea id="articleBodyupdate" class="form-control" name="body" rows="4" cols="100" align="center" required></textarea><br>
        </div>
       <div class="modal-footer">
    
        <button id="addarticalbtnupdate" type="submit" class="btn btn-primary" onclick="updateFunction($('#dropzoneup').attr('attribute'));" style="float:right">update</button>
       
        </div>
        
        
      </div>
      </div>
 

</div>

