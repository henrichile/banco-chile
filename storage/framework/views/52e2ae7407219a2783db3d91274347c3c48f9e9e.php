<!DOCTYPE html>
<html lang="es">
    <head>
 
        <?php echo $__env->make('layouts.shared.title-meta', ['title' => "Log In"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.shared.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">      
                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <div class="auth-logo">
                                <a href="<?php echo e(route('login')); ?>" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="<?php echo e(asset('images/uploads/logo.png')); ?>" alt="" width="60%">
                                    </span>
                                </a>
            
                                <a href="<?php echo e(route('login')); ?>" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="<?php echo e(asset('images/uploads/logo.png')); ?>" alt="" width="60%">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="flash-message">
                            <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Session::has('alert-' . $msg)): ?>

                                    <p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- title-->
                        <h4 class="mt-0">Ingreso de administradores <strong>DESAFIO</strong> Conecta</h4>
                        <p class="text-muted mb-4">Ingrese con su correo y contraseña. </p>
                    
                       

                        <form method="POST" action="<?php echo e(route('login')); ?>" novalidate>
                     <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <div class="input-group input-group-merge">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                

                                </div>
                            </div>
                           
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" style="background-color:#116da8 !important" type="submit">Ingreso </button>
                            </div>
                            <!-- social-->
                        </form>

                        <!-- end form-->
                        <a href="<?php echo e(url('auth/google')); ?>" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
                            <strong>Entrar con correo CCU</strong>
                          </a> 
                        <!-- Footer-->
                    
                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

        </div>
        <!-- end auth-fluid-->
        
        <?php echo $__env->make('layouts.shared.footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </body>
</html><?php /**PATH /home/desafio/public_html/trivia/resources/views/auth/login.blade.php ENDPATH**/ ?>