<?php $__env->startSection('head'); ?>
<title>Registration</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br><br>
<div class="container">
<div>
	<h3>Register: </h3>
</div>
	<form action="/form" method="post">
<?php echo e(csrf_field()); ?>

	<br>
	<div class="form-group row">
		<br><label class="col-sm-3 col-form-label">Login:</label>
		<div class="col-9">
		<input class="form-control" type="text" name="login" placeholder="login" required="required"><br></div>
		<br><label class="col-sm-3 col-form-label">Password:</label><div class="col-9"><input class="form-control"  type="password" name="password" placeholder="........" required><br></div>
		<br><label class="col-sm-3 col-form-label">Password Confirmation:</label><div class="col-9"><input class="form-control"  type="password" name="password_confirmation" placeholder="........" required><br></div>
		<br><label class="col-sm-3 col-form-label">First Name:</label><div class="col-9"><input class="form-control" type="text" name="firstname" placeholder=" nom" required><br></div>
		<br><label class="col-sm-3 col-form-label">Last Name:</label><div class="col-9"><input class="form-control"  type="text" name="lastname" placeholder="votre prenom" required><br></div>
		<br><label class="col-sm-3 col-form-label">E-mail:</label><div class="col-9"><input class="form-control"  type="text" name="email" placeholder="exemple@gmail.com" required>	<br>	</div>
		<br>
		<br><input class="btn btn-primary" type="submit" name="Valide">
	</div>
	</form>
	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>