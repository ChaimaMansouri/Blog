<?php $__env->startSection('content'); ?>
<br><br>
<div class="row">
<div class="col-2">
  
</div>
<div class="col-8">
<div class="container">
 <div class="card" >
  
   <h3 class="card-header" >My Articles</h3>
  <br>
  
  
  
  
  <?php $__currentLoopData = $ar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artical): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('layouts.modal_comment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="card-block">

    <h4 class="card-subtitle mb-2 text-muted"><?php echo e($artical->title); ?></h4>
    <br>
    <?php if($artical->file_name): ?>
   

  <img style="width:50%;height:50%;" src="storage/image/<?php echo e($artical->file_name); ?>">
 <br>
<?php endif; ?>
<br><br>
    <p class="card-text"><?php echo e($artical->body); ?></p>

    <div class="container card-subtitle mb-2 text-muted" align="right">
    Added by 
  <a href="#"><?php echo e($artical->user->login); ?></a> at 
  <?php echo e($artical->created_at->toFormattedDateString()); ?>


</div>
  </div>


  <div class="card-block" id="<?php echo e($artical->id); ?>">
    <?php if($artical->approves->count()==0): ?>
    <button type="button" class="btn btn-outline-secondary btn-sm btn-success btn-md" onclick="return addapp(<?php echo e($artical->id); ?>,<?php echo e(auth()->id()); ?>);">
  
   
    0  Approve
    </button>
    <?php elseif($artical->approves->count()==1): ?>
     <button type="button" class="tooltip show btn btn-outline-secondary btn-sm btn-success btn-md"  onclick="return addapp(<?php echo e($artical->id); ?>,<?php echo e(auth()->id()); ?>);">
    1 Approve
    <span class="tooltiptext "> 
    <?php $__currentLoopData = $artical->approves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php echo e($app->user->firstName); ?> <?php echo e($app->user->lastName); ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </span>
      </button>
    
    <?php else: ?>
    <button type="button" class="tooltip show btn btn-outline-secondary btn-sm btn-success btn-md" onclick="return addapp(<?php echo e($artical->id); ?>,<?php echo e(auth()->id()); ?>);">
    <?php echo e($artical->approves->count()); ?> Approves
    <span class="tooltiptext"> 
    <?php $__currentLoopData = $artical->approves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php echo e($app->user->firstName); ?> <?php echo e($app->user->lastName); ?>

     <br>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </span>
   </button>
    <?php endif; ?>
      
    <button type="button" class="btn btn-outline-secondary btn-sm btn-success btn-md myCom ">Comment</button>

  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
</div>
<br><br><br>

</div>
<div class="col-2">
  
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>