<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login  and Registration</title>
    
</head>
<body>

        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    
                <ul class="navbar-nav">
                    <?php if(auth()->guard()->guest()): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('registration')); ?>">Register</a>
                    </li>

                    <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
                    </li>

                    <?php endif; ?>
                </ul>
                
            </div>
        </div>
    <div class="container mt-5">

        <?php echo $__env->yieldContent('content'); ?>
        
    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\login\resources\views/main.blade.php ENDPATH**/ ?>