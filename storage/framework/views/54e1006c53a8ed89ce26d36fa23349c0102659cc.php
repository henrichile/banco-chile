<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- title -->
        <title>SUMMIT TI ARAUCO 2021</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="eventoom">
		<meta http-equiv="Expires" content="0">
		<meta http-equiv="Last-Modified" content="0">
		<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
		<meta http-equiv="Pragma" content="no-cache">
        <!-- favicon -->
        <link rel="shortcut icon" href="https://www.arauco.cl/chile/wp-content/uploads/sites/14/2017/10/favicon-64x64.png">
        <!-- animation -->
        <link rel="stylesheet" href="<?php echo e(asset('css/sponsors.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('css/colores.css')); ?>" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" />
        <!-- themify-icons -->
        <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.transitions.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>" /> 
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" /> 
        <!-- base -->
        <link rel="stylesheet" href="<?php echo e(asset('css/base.css')); ?>" /> 
        <!-- elements -->
        <link rel="stylesheet" href="<?php echo e(asset('css/elements.css')); ?>" />
        <!-- responsive -->
        <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" />
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
		




    </head>
	
	
	
    <body>
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                <?php if(auth()->guard()->guest()): ?>

                <?php else: ?>
                <p style="margin-top:10px;padding-top:10px;font-size:16px !important; float:right"><?php echo e(Auth::user()->name); ?></p>
                <?php endif; ?>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-success " style="float: right !important" href="<?php echo e(route('logout')); ?>"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    <?php echo e(__('Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                    </form>
                </div>
                </div>
        </div>
    </div>
<div id="page" class="page">
<?php echo $__env->yieldContent('content'); ?>
			<footer id="footer" class="padding-30px-tb bg-araucoca builder-bg" style="padding: 30px 0px;">
                <div class="container">
                    <div class="row equalize">
                        <!-- caption -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-text-center xs-margin-four-bottom display-table" style="">
                            <div class="display-table-cell-vertical-middle">
                                
                            </div>
                        </div>
                        <!-- end caption -->
                        <!-- caption -->
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right xs-text-center display-table" style="">
                            <div class="display-table-cell-vertical-middle">
                                <span class="text-light-gray tz-text">© 2021 Sitio y evento desarrollado por </span> <a href="http://www.kraneo.cl" class="inner-link"><img src="<?php echo e(asset('images/uploads/kraneo.png')); ?>" data-img-size="(W)163px X (H)40px" style="border-radius: 0px; border-style: none; border-width: 1px !important;"></a>
                            </div>
                        </div>
                        <!-- end caption -->
                    </div>
                </div>
            </footer>
			
</div><!-- /#page -->


        <!-- javascript libraries -->
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.appear.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/smooth-scroll.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <!-- wow animation -->
        <script type="text/javascript" src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>        
        <!-- images loaded -->
        <script type="text/javascript" src="<?php echo e(asset('js/imagesloaded.pkgd.min.js')); ?>"></script>
        <!-- isotope -->
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.isotope.min.js')); ?>"></script> 
        <!-- magnific popup -->
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
        <!-- navigation -->
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.nav.js')); ?>"></script>
        <!-- equalize -->
        <script type="text/javascript" src="<?php echo e(asset('js/equalize.min.js')); ?>"></script>
        <!-- fit videos -->
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.fitvids.js')); ?>"></script>
        <!-- number counter -->
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
        <!-- time counter  -->
        <script type="text/javascript" src="<?php echo e(asset('js/counter.js')); ?>"></script>
        <!-- twitter Fetcher  -->
        <script type="text/javascript" src="<?php echo e(asset('js/twitterFetcher_min.js')); ?>"></script>
        <!-- main -->
        <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
    

    </body>
</html>
        <?php /**PATH /home/invitado/public_html/invitados/resources/views/video.blade.php ENDPATH**/ ?>