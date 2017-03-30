<?php $__env->startSection('head'); ?>
<title>Home</title>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
<br><br>
<div class="row">
  
   <div class="col-sm-9">
 
   <form>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn" type="button">Go</button>
      </span>
    </div>
</form>
<br>
   <div class="card" >
  
   <h3 class="card-header" >Last Articles</h3>
  <br>
  
  
  
  <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artical): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('layouts.modal_comment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.modal_approve', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="card-block">

    <h4 class="card-subtitle mb-2 text-muted"><?php echo e($artical->title); ?></h4>
    <br>
    <?php if($artical->file_name): ?>
   

  <img style="width:50%;height:50%;" src="storage/image/<?php echo e($artical->file_name); ?>">
 <br>
<?php endif; ?>
    <p class="card-text"><?php echo e($artical->body); ?></p>

    <div class="container card-subtitle mb-2 text-muted" align="right">
    Added by 
  <a href="#"><?php echo e($artical->user->login); ?></a> at 
  <?php echo e($artical->created_at->toFormattedDateString()); ?>


</div>
  </div>


  <div class="card-block" id="<?php echo e($artical->id); ?>">
    
    <button type="button" class="btn btn-outline-secondary btn-sm myApp" > 
    <?php if($artical->approves->count()==1 | $artical->approves->count()==0): ?>
    
    <?php echo e($artical->approves->count()); ?> Approve
    
    <?php else: ?>
     
    <?php echo e($artical->approves->count()); ?> Approves
    
    <?php endif; ?>
    </button>
   
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
<script type="text/javascript">

function submitForm(aid)
{
  url = "/comment/" + aid;
  bodyx = $('#comment_content').val();
  
  $.ajax({
      url: url,
      method: 'post',
      data: {
        'body': bodyx
      },
      success: function(result) {
        $('#comment_content').val("");
        console.log(result);

   
  $("#modal_comm").load("/comment/"+aid);

      
      },
      error: function(result) {
        console.log('error');
        console.log(result);

      },
    });

return false;

}
 
</script>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>