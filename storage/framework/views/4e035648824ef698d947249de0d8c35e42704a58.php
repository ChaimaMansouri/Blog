<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    
</head>
<body>

<div class="container">
  <h2>Modal Options</h2>
  <p>The <strong>show</strong> option specifies specifies whether the modal should be shown upon initialization.</p>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-md" id="myBtn">Modal (show:true)</button>
  <button type="button" class="btn btn-danger btn-md" id="myBtn2">Modal (show:false)</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Options</h4>
        </div>
        <div class="modal-body">
          <p>Modal content..</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Modal Options</h4>
        </div>
        <div class="modal-body">
          <p>Modal content..</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal({show: true});
    });
    $("#myBtn2").click(function(){
        $("#myModal2").modal({show: false});
    });
});
</script>

</body>
</html>
