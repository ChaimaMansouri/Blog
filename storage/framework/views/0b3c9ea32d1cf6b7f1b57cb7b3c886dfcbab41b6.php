 <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-control">
       <strong><?php echo e($com->user->login); ?>:</strong>
          <?php echo e($com->body); ?>

          <br>
        <div class="container" align="right">
        <small class="text-muted">
         <b> <?php echo e($com->created_at->diffForHumans()); ?></b>
          </small>
        </div>
          </div> 
          <br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       