<?php $__env->startSection('content'); ?>  
<section class="position-relative cover-background tz-builder-bg-image border-none hero-style9" style="padding-top: 0px; padding-bottom: 0px; background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1)), url('<?php echo e(asset('images/uploads/fondoconecta3.jpg')); ?> ');">
    <div class="container one-sixth-screen xs-one-third-screen position-relative">
        <div class="row">
            <div class="slider-typography text-center xs-position-absolute">
                <div class="slider-text-middle-main">
                    <div class="slider-text-middle">
                        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <div style="width:1000px" class="center-col">
                                    <iframe src="https://player.vimeo.com/video/538967187?autoplay=1&loop=1&title=0&byline=0&portrait=0" width="560" height="315" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <a href="<?php echo e(route('trivia.salida')); ?>" class="btn btn-extra-large propClone bg-light-green text-white btn-circle margin-five-top sm-margin-five-top xs-margin-ten-top tz-text">Siguiente</a>
                        </div>
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
    </div>
</section>

    
    

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desafio/public_html/trivia/resources/views/salida_video.blade.php ENDPATH**/ ?>