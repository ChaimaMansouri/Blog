 <?php $__currentLoopData = $approve; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <a href=""><?php echo e($app->user->firstName); ?> <?php echo e($app->user->lastName); ?></a>
          <br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       