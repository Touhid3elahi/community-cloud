<?php $__env->startSection('title'); ?> Sign in | <?php echo e($system->app_title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="form-items">
                        <h3>Student Login</h3>
						<hr>
                        <form method="post" action="<?php echo e(route('userlogin')); ?>">
						<?php echo e(csrf_field()); ?>

						
						<?php if(session('success')): ?>
                        <div class="alert alert-success" role="alert"><p><?php echo e(session('success')); ?></p>
                        </div>
                        <?php endif; ?>
                         <?php if(session('alert')): ?>
						 <div class="alert alert-danger" role="alert"><p> <?php echo e(session('alert')); ?> </p></div>
                        <?php endif; ?>
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><?php echo e($error); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
						
                            <input class="form-control" type="text" name="student_id" onkeyup="this.value = this.value.toUpperCase();" placeholder="Student ID" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
							<div class="form-check" style="padding-left: 0;">
							<input name="remember" class="form-check-input" id="rememberme" type="checkbox" value="1">
							<label class="form-check-label" for="rememberme">Keep me signed in</label>
							</div>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
								<a href="<?php echo e(route('reset')); ?>">Forget password?</a>
                            </div>
                        </form>
						<br>
						<div class="page-links">
                            <a href="<?php echo e(route('signup')); ?>">Register new student</a>
                        </div>
                        <div class="other-links">
                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-question-circle"></i>FAQ</a>
							<a href="#"><i class="fa fa-info-circle"></i>About this system</a>
                        </div>
                        <div class="footer-copyright text-center py-3">&copy; 2019 Developed by:
      <a href="https://fb.me/s4k1b"> Sakib</a>
    </div>
                    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.html.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>