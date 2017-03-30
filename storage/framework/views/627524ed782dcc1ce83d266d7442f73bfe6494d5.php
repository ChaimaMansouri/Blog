<?php $__env->startSection('head'); ?>
    <title>Sign in</title>
      <link href="/css/signin.css" rel="stylesheet">
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('content'); ?>
<br>
    <div class="container">
    <form class="form-signin" method="post" action="/sign">
    <?php echo e(csrf_field()); ?>

        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Login</label>
        <input type="text" id="input" class="form-control" placeholder="Login" name="login" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" name="remember"> Remember me
          </label>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> 
    
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>