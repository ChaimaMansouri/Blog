
@if (count($errors))

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        </div>
        <div class="modal-body">
        <div class="container">
        <ul class=" alert alert-danger">
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
        </div>
        
      </div>
      
    </div>
  </div> 


<script>
$(document).ready(function(){
 $("#myModal").modal({show: true});
        
      });
</script>
@endif
