<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<a href="#"><?php echo e($user->login); ?></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>