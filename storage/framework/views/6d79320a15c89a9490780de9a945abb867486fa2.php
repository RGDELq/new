

<?php $__env->startSection('content'); ?>

<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="card">
		<div class="card-header">Registration</div>
		<div class="card-body">
			<form action="<?php echo e(route('sample.validate_registration')); ?>" method="POST">
				<?php echo csrf_field(); ?>
				<div class="form-group mb-3">
					<input type="text" name="name" class="form-control" placeholder="Name" />
					<?php if($errors->has('name')): ?>
						<span class="text-danger"><?php echo e($errors->first('name')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group mb-3">
					<input type="text" name="email" class="form-control" placeholder="Email Address" />
					<?php if($errors->has('email')): ?>
						<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password" />
					<?php if($errors->has('password')): ?>
						<span class="text-danger"><?php echo e($errors->first('password')); ?></span>
					<?php endif; ?>
				</div>
				<div class="d-grid mx-auto">
					<button type="submit" class="btn btn-dark btn-block">Register</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login\resources\views/registration.blade.php ENDPATH**/ ?>