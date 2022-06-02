<?php $__env->startSection('content'); ?>  
<section class="position-relative cover-background tz-builder-bg-image border-none hero-style9" style="padding-top: 0px; padding-bottom: 0px; background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1)), url('<?php echo e(asset('images/uploads/fondoconecta3.jpg')); ?> ');">
    <div class="container one-sixth-screen xs-one-third-screen position-relative">
        <div class="row">
            <div class="slider-typography text-center xs-position-absolute">
                <div class="slider-text-middle-main">
                    <div class="slider-text-middle">
                        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <img src="<?php echo e(asset('images/uploads/pizarron-error.png')); ?>" alt="" style="border-radius: 0px; border-color: rgb(78, 78, 78); border-style: none; border-width: 1px !important;">
                        </br></br></br></br>
                            <a href="<?php echo e(url('auth/google')); ?>" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
                                <strong>iniciar Sesión</strong>
                              </a> 
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
    </div>
</section>

    
    

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desafio/public_html/trivia/resources/views/error_login.blade.php ENDPATH**/ ?>