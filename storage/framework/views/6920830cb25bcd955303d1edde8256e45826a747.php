<!DOCTYPE html>
    <html lang="en">

    <head>
        <?php echo $__env->make('layouts.shared/title-meta', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.shared/head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <style>
        trix-editor{
            min-height: 300px;
        }
        </style>
    </head>

    <body <?php echo $__env->yieldContent('body-extra'); ?>>
        <!-- Begin page -->
        <div id="wrapper">
            <?php echo $__env->make('layouts.shared/topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('layouts.shared/left-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="py-1 mt-1 col-12">
                        <?php echo $__env->yieldContent('botones'); ?>
                </div>
                <div class="content">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- content -->

                <?php echo $__env->make('layouts.shared/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <?php echo $__env->make('layouts.shared/right-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.shared/footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>
<?php /**PATH /home/desafio/public_html/trivia/resources/views/layouts/vertical.blade.php ENDPATH**/ ?>