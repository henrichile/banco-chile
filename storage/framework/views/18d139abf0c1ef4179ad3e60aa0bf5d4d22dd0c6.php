<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="<?php echo e(asset('assets/images/users/user-1.jpg')); ?>" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>

                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>Mi Cuenta</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Salir</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>
        <?php
        $rol = auth()->user()->roles()->first()->name;
        $rol_desc=auth()->user()->roles()->first()->description;
        ?>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title"><strong>Menú <?php echo e($rol_desc); ?></strong></li>
                <?php if( $rol=="admin"): ?>
                <li>
                    <a href="<?php echo e(route('administradores.listado')); ?>"> Administradores</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo"): ?>
                <li>
                    <a href="<?php echo e(route('registrados.listado')); ?>"> Artistas registrados</a>
                </li>
                <?php endif; ?>
                <li class="menu-title"><strong>Pre-seleccionados</strong></li>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszn" || $rol=="juradosel"): ?>
                <li>
                    <a href="<?php echo e(route('preSeleccionadosNorte')); ?>">Zona Norte</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszc" || $rol=="juradosel"): ?>
                <li>
                    <a href="<?php echo e(route('preSeleccionadosCentro')); ?>">Zona Centro</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszs" || $rol=="juradosel"): ?>
                <li>
                    <a href="<?php echo e(route('preSeleccionadosSur')); ?>">Zona Sur</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradosel"): ?>
                <li>
                    <a href="<?php echo e(route('listadoseleccionados')); ?>">Todos</a>
                </li>
                <?php endif; ?>
                <li class="menu-title"><strong>Ranking pre-seleccionados</strong></li>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszn" || $rol=="juradosel"): ?>
                <li>
                    <a href="<?php echo e(route('seleccionadosNorte',["tipo"=>0])); ?>">Zona Norte</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszc" || $rol=="juradosel"): ?>
                <li>
                    <a href="<?php echo e(route('seleccionadosCentro',["tipo"=>0])); ?>">Zona Centro</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszs" || $rol=="juradosel"): ?>
                <li>
                    <a href="<?php echo e(route('seleccionadosSur',["tipo"=>0])); ?>">Zona Sur</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradosel"): ?>
                <li>
                    <a href="<?php echo e(route('rankingseleccionados',["tipo"=>0])); ?>">Todos</a>
                </li>
                <?php endif; ?>



                
                <li class="menu-title"><strong>Pre-Clasificados</strong></li>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozn" || $rol=="juradotodos"): ?>
                <li>
                    <a href="<?php echo e(route('preClasificadosNorte')); ?>">Zona Norte</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozc" || $rol=="juradotodos"): ?>
                <li>
                    <a href="<?php echo e(route('preClasificadosCentro')); ?>">Zona Centro</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozs" || $rol=="juradotodos"): ?>
                <li>
                    <a href="<?php echo e(route('preClasificadosSur')); ?>">Zona Sur</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradotodos"): ?>
                <li>
                    <a href="<?php echo e(route('preclasificados.listado')); ?>">Todos</a>
                </li>
                <?php endif; ?>
                <li class="menu-title"><strong>Ranking</strong></li>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozn" || $rol=="juradotodos"): ?>
                <li>
                    <a href="<?php echo e(route('clasificadosNorte',["tipo"=>0])); ?>">Zona Norte</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozc" || $rol=="juradotodos"): ?>
                <li>
                    <a href="<?php echo e(route('clasificadosCentro',["tipo"=>0])); ?>">Zona Centro</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozs" || $rol=="juradotodos"): ?>
                <li>
                    <a href="<?php echo e(route('clasificadosSur',["tipo"=>0])); ?>">Zona Sur</a>
                </li>
                <?php endif; ?>
                <?php if( $rol=="admin" || $rol=="kraneo" || $rol=="juradotodos"): ?>
                <li>
                    <a href="<?php echo e(route('rankingclasificados',["tipo"=>0])); ?>">Todos</a>
                </li>
                <?php endif; ?>
                <li class="menu-title"><strong>Rechazados</strong></li>
                <?php if( $rol=="admin" || $rol=="kraneo"): ?>
                <li>
                    <a href="<?php echo e(route('noclasificados.listado')); ?>"> Artistas Rechazados</a>
                </li>
                <?php endif; ?>
            </ul>
           
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<?php /**PATH /home/banco/public_html/banco/resources/views/layouts/shared/left-sidebar.blade.php ENDPATH**/ ?>