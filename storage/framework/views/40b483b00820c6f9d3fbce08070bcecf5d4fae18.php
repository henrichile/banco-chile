<!doctype html>
<html class="no-js"  lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- title -->
        <title>BIENVENIDOS</title>
        <meta name="description" content="DESAFIO CONECTA CCU" />
        <meta name="keywords" content="" />
        <meta name="author" content="Kraneo">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('images/icon/favicon.png')); ?>">
        <!-- animation -->
        <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" />

        <!-- bootstrap       -->
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
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/ie.css')); ?>" />
        <![endif]-->
        <!--[if IE]>
            <script src="<?php echo e(asset('js/html5shiv.min.js')); ?>"></script>
        <![endif]-->
        <style>
        .circulo {
            width: 100px;
            height: 100px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: #fff;
            color: #333; 
            font-size: 48px;
            display: inline-block;
            padding-top: 3.5%;
            margin-bottom: 3%;
            text-align: center;
            margin-left: 40%;
        }
        .shadow-lg{
            box-shadow: 11px 15px 11px -5px rgba(0,0,0,0.54);
                -webkit-box-shadow: 11px 15px 11px -5px rgba(0,0,0,0.54);
                -moz-box-shadow: 11px 15px 11px -5px rgba(0,0,0,0.54);
                border-radius: 15px 15px 15px 15px;
                -webkit-border-radius: 15px 15px 15px 15px;
                -moz-border-radius: 15px 15px 15px 15px;
                border: 2px solid #e9e6e6;
                background-color: #ffffff;
                padding:2%;
        }
        .time {display: inline-block; border-radius:4px; width: auto; font-family: 'Montserrat', sans-serif !important; font-weight: 500; white-space: inherit; font-size: 11px; padding: 4px 14px !important; line-height: 18px;}

        .funkyradio div {
  clear: both;
  overflow: hidden;
}

.funkyradio label {
  width: 100%;
  border-radius: 3px;
  border: 1px solid #D1D3D4;
  font-weight: normal;
}

.funkyradio input[type="radio"]:empty,
.funkyradio input[type="checkbox"]:empty {
  display: none;
}

.funkyradio input[type="radio"]:empty ~ label,
.funkyradio input[type="checkbox"]:empty ~ label {
  position: relative;
  line-height: 2.5em;
  text-indent: 3.25em;
  margin-top: 2em;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.funkyradio input[type="radio"]:empty ~ label:before,
.funkyradio input[type="checkbox"]:empty ~ label:before {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
  color: #888;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

.funkyradio input[type="radio"]:checked ~ label,
.funkyradio input[type="checkbox"]:checked ~ label {
  color: #777;
}

.funkyradio input[type="radio"]:checked ~ label:before,
.funkyradio input[type="checkbox"]:checked ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #333;
  background-color: #ccc;
}

.funkyradio input[type="radio"]:focus ~ label:before,
.funkyradio input[type="checkbox"]:focus ~ label:before {
  box-shadow: 0 0 0 3px #999;
}

.funkyradio-default input[type="radio"]:checked ~ label:before,
.funkyradio-default input[type="checkbox"]:checked ~ label:before {
  color: #333;
  background-color: #ccc;
}

.funkyradio-primary input[type="radio"]:checked ~ label:before,
.funkyradio-primary input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #337ab7;
}

.funkyradio-success input[type="radio"]:checked ~ label:before,
.funkyradio-success input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5cb85c;
}

.funkyradio-danger input[type="radio"]:checked ~ label:before,
.funkyradio-danger input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #d9534f;
}

.funkyradio-warning input[type="radio"]:checked ~ label:before,
.funkyradio-warning input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #f0ad4e;
}

.funkyradio-info input[type="radio"]:checked ~ label:before,
.funkyradio-info input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5bc0de;
}

/* SCSS STYLES */
/*
.funkyradio {

    div {
        clear: both;
        overflow: hidden;
    }

    label {
        width: 100%;
        border-radius: 3px;
        border: 1px solid #D1D3D4;
        font-weight: normal;
    }

    input[type="radio"],
    input[type="checkbox"] {

        &:empty {
            display: none;

            ~ label {
                position: relative;
                line-height: 2.5em;
                text-indent: 3.25em;
                margin-top: 2em;
                cursor: pointer;
                user-select: none;

                &:before {
                    position: absolute;
                    display: block;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    content: '';
                    width: 2.5em;
                    background: #D1D3D4;
                    border-radius: 3px 0 0 3px;
                }
            }
        }

        &:hover:not(:checked) ~ label {
            color: #888;

            &:before {
                content: '\2714';
                text-indent: .9em;
                color: #C2C2C2;
            }
        }

        &:checked ~ label {
            color: #777;

            &:before {
                content: '\2714';
                text-indent: .9em;
                color: #333;
                background-color: #ccc;
            }
        }

        &:focus ~ label:before {
            box-shadow: 0 0 0 3px #999;
        }
    }

    &-default {
        input[type="radio"],
        input[type="checkbox"] {
            &:checked ~ label:before {
                color: #333;
                background-color: #ccc;
            }
        }
    }

    &-primary {
        input[type="radio"],
        input[type="checkbox"] {
            &:checked ~ label:before {
                color: #fff;
                background-color: #337ab7;
            }
        }
    }

    &-success {
        input[type="radio"],
        input[type="checkbox"] {
            &:checked ~ label:before {
                color: #fff;
                background-color: #5cb85c;
            }
        }
    }

    &-danger {
        input[type="radio"],
        input[type="checkbox"] {
            &:checked ~ label:before {
                color: #fff;
                background-color: #d9534f;
            }
        }
    }

    &-warning {
        input[type="radio"],
        input[type="checkbox"] {
            &:checked ~ label:before {
                color: #fff;
                background-color: #f0ad4e;
            }
        }
    }

    &-info {
        input[type="radio"],
        input[type="checkbox"] {
            &:checked ~ label:before {
                color: #fff;
                background-color: #5bc0de;
            }
        }
    }
}
*/

        </style>
    </head>
    <body>
        

        <div id="page" class="page">
		
		 <header class="header-style7" id="header-section18">
                <!-- nav -->
                <nav class="navbar tz-header-bg no-margin alt-font shrink-transparent-header-dark dark-header">
                    <div class="container navigation-menu">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-3 col-sm-4 col-xs-9">
                                <a href="/" class="inner-link"><img alt="" src="<?php echo e(asset('images/logo-white.png')); ?>"></a>
                            </div>
                            <!-- end logo -->
                            <div class="col-md-9 col-sm-8 col-xs-3 position-inherit">
                                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pull-right">
                                    <ul class="nav navbar-nav">
                                        <li class="propClone"><a class="inner-link" href="#VIDEO">VIDEO</a></li>
                                        <li class="propClone sm-no-border"><a class="inner-link" href="#BASES">BASES</a></li> 
                                        <?php if(auth()->guard()->guest()): ?>
                                        
                                <?php else: ?>
                                <li class="propClone sm-no-border"><a class="inner-link" href="<?php echo e(route('trivia.entrada')); ?>">TRIVIA</a></li>
                                        <li class="propClone sm-no-border"><a class="inner-link" href="<?php echo e(route('trivia.ranking1')); ?>">RANKING</a></li>
                                        <li class="propClone sm-no-border"><a class="inner-link" href="<?php echo e(route('trivia.ranking.areas')); ?>">RANKING AREA</a></li>
                                <li class="propClone float-left btn-medium sm-no-margin-tb dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Hola <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>
        
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" style="padding-left: 40px;" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
        
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                                <?php endif; ?> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav> 
                <!-- end nav -->
            </header>  
			
			
            <?php echo $__env->yieldContent('content'); ?>

			
			<footer id="footer-section11" class="padding-30px-tb bg-dark-gray builder-bg" style="padding: 30px 0px; border-color: rgb(146, 29, 113); background-color: rgb(146, 29, 113) !important;">
                <div class="container">
                    <div class="row equalize">
                        <!-- caption -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-text-center xs-margin-four-bottom display-table" style="">
                            <div class="display-table-cell-vertical-middle">
                                <a href="#home" class="inner-link"><img src="<?php echo e(asset('images/logo-white.png')); ?>" data-img-size="(W)163px X (H)40px" alt="" style="border-radius: 0px; border-color: rgb(78, 78, 78); border-style: none; border-width: 1px !important;"></a>
                            </div>
                        </div>
                        <!-- end caption -->
                        <!-- caption -->
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right xs-text-center display-table" style="">
                            <div class="display-table-cell-vertical-middle">
                                <span class="text-white tz-text">© 2021 Sitio y evento desarrollado por <a class="text-white" href="http://www.kraneo.cl/">KRANEO</a></span>
                            </div>
                        </div>
                        <!-- end caption -->
                    </div>
                </div>
            </footer>
			
			</div><!-- /#page -->            
        <!-- javascript libraries  -->
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
       
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.appear.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/smooth-scroll.js')); ?>"></script>
       
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>
        

window.onload = updateClock;

var totalTime = 20;

function updateClock() {
  document.getElementById('countdown').innerHTML = totalTime;
  if(totalTime==0){
    alert('se acabo el tiempo desgraciado!!');
  }else{
    totalTime-=1;
    setTimeout("updateClock()",1000);
  }
}


    </script>

    </body>
</html><?php /**PATH /home/desafio/public_html/trivia/resources/views/layouts/front2.blade.php ENDPATH**/ ?>