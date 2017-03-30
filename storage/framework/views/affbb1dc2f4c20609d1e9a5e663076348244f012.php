<?php $__env->startSection('content'); ?>
<br><br>
<div class="container">
	<form action="/form" method="post">
<?php echo e(csrf_field()); ?>

	<br>
	<div class="form-group row">
		<br><label class="col-sm-2 col-form-label">Login:</label>
		<div class="col-10">
		<input class="form-control" type="text" name="login" placeholder="login" required><br></div>
		<br><label class="col-sm-2 col-form-label">Password:</label><div class="col-10"><input class="form-control"  type="password" name="password" placeholder="........" required><br></div>
		<br><label class="col-sm-2 col-form-label">First Name:</label><div class="col-10"><input class="form-control" type="text" name="firstname" placeholder=" nom" required><br></div>
		<br><label class="col-sm-2 col-form-label">Last Name:</label><div class="col-10"><input class="form-control"  type="text" name="lastname" placeholder="votre prenom" required><br></div>
		<br><label class="col-sm-2 col-form-label">E-mail:</label><div class="col-10"><input class="form-control"  type="text" name="email" placeholder="exemple@gmail.com" required>	<br>	</div>
		<br>
		<br><input class="btn btn-primary" type="submit" name="Valide">
	</div>
	</form>
	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>