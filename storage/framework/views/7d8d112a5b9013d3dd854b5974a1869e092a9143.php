<?php echo $__env->yieldContent('css'); ?>

<!-- icons -->
<link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css" integrity="sha512-qjOt5KmyILqcOoRJXb9TguLjMgTLZEgROMxPlf1KuScz0ZMovl0Vp8dnn9bD5dy3CcHW5im+z5gZCKgYek9MPA==" crossorigin="anonymous" />
<?php if(isset($mode) && $mode == 'rtl'): ?>

    <!-- App css -->
    <?php if(isset($demo) && $demo == 'creative'): ?>
        <link href="<?php echo e(asset('assets/css/bootstrap-creative.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="<?php echo e(asset('assets/css/app-creative-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
        <link href="<?php echo e(asset('assets/css/bootstrap-creative-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
        <link href="<?php echo e(asset('assets/css/app-creative-dark-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
    <?php else: ?>
        <?php if(isset($demo) && $demo == 'modern'): ?>
            <link href="<?php echo e(asset('assets/css/bootstrap-modern.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
            <link href="<?php echo e(asset('assets/css/app-modern-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
            <link href="<?php echo e(asset('assets/css/bootstrap-modern-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
            <link href="<?php echo e(asset('assets/css/app-modern-dark-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
        <?php else: ?>
            <?php if(isset($demo) && $demo == 'material'): ?>
                <link href="<?php echo e(asset('assets/css/bootstrap-material.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                <link href="<?php echo e(asset('assets/css/app-material-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                <link href="<?php echo e(asset('assets/css/bootstrap-material-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                <link href="<?php echo e(asset('assets/css/app-material-dark-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
            <?php else: ?>
                <?php if(isset($demo) && $demo == 'purple'): ?>
                    <link href="<?php echo e(asset('assets/css/bootstrap-purple.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                    <link href="<?php echo e(asset('assets/css/app-purple-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                    <link href="<?php echo e(asset('assets/css/bootstrap-purple-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                    <link href="<?php echo e(asset('assets/css/app-purple-dark-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
                <?php else: ?>
                    <?php if(isset($demo) && $demo == 'saas'): ?>
                        <link href="<?php echo e(asset('assets/css/bootstrap-saas.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                        <link href="<?php echo e(asset('assets/css/app-saas-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                        <link href="<?php echo e(asset('assets/css/bootstrap-saas-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                        <link href="<?php echo e(asset('assets/css/app-saas-dark-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
                    <?php else: ?>
                        <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                        <link href="<?php echo e(asset('assets/css/app-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                        <link href="<?php echo e(asset('assets/css/bootstrap-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                        <link href="<?php echo e(asset('assets/css/app-dark-rtl.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
                        <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

<?php else: ?>
    <!-- App css -->
    <?php if(isset($demo) && $demo == 'creative'): ?>
    <link href="<?php echo e(asset('assets/css/bootstrap-creative.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="<?php echo e(asset('assets/css/app-creative.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <link href="<?php echo e(asset('assets/css/bootstrap-creative-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="<?php echo e(asset('assets/css/app-creative-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
    <?php else: ?>
    <?php if(isset($demo) && $demo == 'modern'): ?>
        <link href="<?php echo e(asset('assets/css/bootstrap-modern.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="<?php echo e(asset('assets/css/app-modern.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
        <link href="<?php echo e(asset('assets/css/bootstrap-modern-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
        <link href="<?php echo e(asset('assets/css/app-modern-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
    <?php else: ?>
        <?php if(isset($demo) && $demo == 'material'): ?>
            <link href="<?php echo e(asset('assets/css/bootstrap-material.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
            <link href="<?php echo e(asset('assets/css/app-material.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
            <link href="<?php echo e(asset('assets/css/bootstrap-material-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
            <link href="<?php echo e(asset('assets/css/app-material-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
        <?php else: ?>
            <?php if(isset($demo) && $demo == 'purple'): ?>
                <link href="<?php echo e(asset('assets/css/bootstrap-purple.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                <link href="<?php echo e(asset('assets/css/app-purple.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                <link href="<?php echo e(asset('assets/css/bootstrap-purple-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                <link href="<?php echo e(asset('assets/css/app-purple-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
            <?php else: ?>
                <?php if(isset($demo) && $demo == 'saas'): ?>
                    <link href="<?php echo e(asset('assets/css/bootstrap-saas.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                    <link href="<?php echo e(asset('assets/css/app-saas.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                    <link href="<?php echo e(asset('assets/css/bootstrap-saas-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                    <link href="<?php echo e(asset('assets/css/app-saas-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
                <?php else: ?>
                    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                    <link href="<?php echo e(asset('assets/css/app.min.css')); ?> " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                    <link href="<?php echo e(asset('assets/css/bootstrap-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                    <link href="<?php echo e(asset('assets/css/app-dark.min.css')); ?> " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
                    <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

<link href="<?php echo e(asset('assets/libs/mohithg-switchery/mohithg-switchery.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/libs/multiselect/multiselect.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/libs/selectize/selectize.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/libs/bootstrap-select/bootstrap-select.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/libs/dropify/dropify.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php /**PATH /home/desafio/public_html/trivia/resources/views/layouts/shared/head-css.blade.php ENDPATH**/ ?>