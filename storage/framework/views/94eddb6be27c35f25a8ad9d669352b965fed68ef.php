<?php $__env->startSection('head'); ?>
<title>Home</title>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
<br><br>
<div class="row">
  
   <div class="col-sm-9">
 <br><br>
<br>
   <div class="card" >
  
   <h3 class="card-header" >Last Articals</h3>
  <br>
  
  <?php echo $__env->make('updateArtical', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <?php echo $__env->make('deleteArtical', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artical): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('layouts.modal_comment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="card-block">
  <?php if($artical->user_id==auth()->id()): ?>
<div class="btn-group" style="float:right">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="glyphicon glyphicon-align-right"></i>

  </button>
  <div class="dropdown-menu">
<a class="dropdown-item delar" attribute="<?php echo e($artical->id); ?>">delete artical</a>
  <a class="dropdown-item upar" onclick="updateArtical('<?php echo e($artical->id); ?>');">update artical</a>
  </div>
</div> 
<?php endif; ?>
    <h4 class="card-subtitle mb-2 text-muted"><?php echo e($artical->title); ?></h4>
    <br>
    <?php if($artical->file_name): ?>
   

  <img style="width:50%;height:50%;" src="/storage/image/<?php echo e($artical->file_name); ?>">
 <br>
<?php endif; ?>
<br><br>
    <p class="card-text"><?php echo e($artical->body); ?></p>

    <div class="container card-subtitle mb-2 text-muted" align="right">
    Added by 
  <a href="/user/<?php echo e($artical->user->id); ?>"><?php echo e($artical->user->login); ?></a> at 
  <?php echo e($artical->created_at->toFormattedDateString()); ?>


</div>
  </div>


  <div class="card-block" id="<?php echo e($artical->id); ?>">
  <?php if(auth()->id()==null): ?>
  
  <?php $user = 0; ?>
  <?php else: ?>
  <?php $user=auth()->id(); ?>

  <?php endif; ?>
    <?php if($artical->approves->count()==0): ?>
    <button type="button" class=" tooltip show btn btn-outline-secondary btn-sm btn-success btn-md" onclick="return addapp(<?php echo e($artical->id); ?>,<?php echo e($user); ?>);">  
    0  Approve
     <span class="tooltiptext" style="width:200px" > 
    No Approves
      </span>
    </button>
    <?php elseif($artical->approves->count()==1): ?>
     <button type="button" class="tooltip show btn btn-outline-secondary btn-sm btn-success btn-md"  onclick="return addapp(<?php echo e($artical->id); ?>,<?php echo e($user); ?>);">
    1 Approve
    <span class="tooltiptext" style="width:200px" > 
    <?php $__currentLoopData = $artical->approves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php echo e($app->user->firstName); ?> <?php echo e($app->user->lastName); ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </span>
      </button>
    
    <?php else: ?>
    <button type="button" class="tooltip show btn btn-outline-secondary btn-sm btn-success btn-md" onclick="return addapp(<?php echo e($artical->id); ?>,<?php echo e($user); ?>);">
    <?php echo e($artical->approves->count()); ?> Approves
    <span class="tooltiptext" style="width:200px"> 
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
<hr>

<div class="col-sm-3">

  <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
      </div>
  
</div>
</div>

<br>
<br>
<br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>