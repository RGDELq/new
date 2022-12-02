<?php $__env->startSection('content'); ?>

<?php if($message = Session::get('success')): ?>

<div class="alert alert-info">
<?php echo e($message); ?>

</div>

<?php endif; ?>

<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Login</div>
			<div class="card-body">
				<form action="<?php echo e(route('sample.validate_login')); ?>" method="post">
					<?php echo csrf_field(); ?>
					<div class="form-group mb-3">
						<input type="text" name="email" class="form-control" placeholder="Email" />
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
						<button type="subit" class="btn btn-dark btn-block">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login\resources\views/login.blade.php ENDPATH**/ ?>