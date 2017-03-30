
<?php if(count($errors)): ?>

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
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?>
