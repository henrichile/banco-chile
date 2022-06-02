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
        <h3>Administrador de Trivias</h3>
        
<div class="row">
    <div class="col-md-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                        <i class="fe-eye font-22 avatar-title text-warning"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo e($totalUsuariosTrivia1); ?></span></h3>
                        <p class="text-muted mb-1 text-truncate">Trivia 1 Contestada</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                        <i class="fe-eye font-22 avatar-title text-warning"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo e($totalUsuariosTrivia2); ?></span></h3>
                        <p class="text-muted mb-1 text-truncate">Trivia 2 Contestada</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                        <i class="fe-eye font-22 avatar-title text-warning"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo e($totalUsuariosTrivia3); ?></span></h3>
                        <p class="text-muted mb-1 text-truncate">Trivia 3 Contestada</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div>
    </div>
</div>       
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

<?php echo $__env->make('layouts.vertical', ['title' => 'Dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desafio/public_html/trivia/resources/views/dashboard.blade.php ENDPATH**/ ?>