<?php $__env->startSection('css'); ?>
    <!-- Plugins css -->
    <link href="<?php echo e(asset('assets/libs/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/libs/selectize/selectize.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <!-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>-->
                    <h4 class="page-title">Bienvenidos</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <h3>Administrador de invitados Arauco</h3>

        <!-- end row -->
    </div> <!-- container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Plugins js-->
    <script src="<?php echo e(asset('assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/selectize/selectize.min.js')); ?>"></script>

    <!-- Dashboar 1 init js-->
    <script src="<?php echo e(asset('assets/js/pages/dashboard-1.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.vertical', ['title' => 'Dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/invitado/public_html/invitados/resources/views/dashboard.blade.php ENDPATH**/ ?>