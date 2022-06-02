<?php $__env->startSection('css'); ?>
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
                    <h4 class="page-title">Artistas y bandas registradas</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="flash-message">
            <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(Session::has('alert-' . $msg)): ?>

                    <p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> <!-- end .flash-message -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Exportar</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Fecha Registro</th>
                                    <th>Cancion</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $artistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $nombre="";
                                $fecha="";
                                if($item->tipoArtista==1){
                                    $sql = "select * from singles where idArtista=?";
                                    $datos= DB::select($sql,array($item->id));
                                    if(count($datos)>0){
                                        $nombre=$datos[0]->nombre;
                                        $f=explode(" ",$datos[0]->created_at);
                                        $c=explode('-',$f[0]);
                                        $fecha=$c[2]."-".$c[1]."-".$c[0];
                                    }
                                }else{
                                    $sql2 = "select * from bandas where idArtista=?";
                                    $datos= DB::select($sql2,array($item->id));
                                    if(count($datos)>0){
                                        $nombre=$datos[0]->nombreBanda;
                                        $f=explode(" ",$datos[0]->created_at);
                                        $c=explode('-',$f[0]);
                                        $fecha=$c[2]."-".$c[1]."-".$c[0];
                                    }
                                }
                                
                                ?>
                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal"><?php echo e($nombre); ?></h5>
                                    </td>
                                    <td>
                                       <?php if($item->tipoArtista==1): ?>
                                       Solista
                                       <?php else: ?>
                                       Banda
                                       <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php echo e($fecha); ?>

                                    </td>
                                    <td>
                                        <a href="<?php echo e(asset('storage/'.$item->archivo)); ?>" target="_blank">Descargar</a>
                                    </td>
                                   
                                    <td>
                                        <a href="javascript:void(0)" onclick="javascript:clasificar(<?php echo e($item->id); ?>)" class="btn btn-xs btn-success">Pre-seleccionar</a>
                                    </td>
                                    <td>
                                        <a  href="javascript:void(0)" onclick="javascript:descalificar(<?php echo e($item->id); ?>)"  class="btn btn-xs btn-danger">Rechazar</a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->

        </div>
        <!-- end row -->
    </div> <!-- container -->
<form id="formclasificar" action="<?php echo e(route('preseleccionar')); ?>" method="POST">
    <?php echo csrf_field(); ?>
   <input type="hidden" name="idArtista" id="idArtista">
</form>

<form id="formdescalificar" action="<?php echo e(route('descalificar')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="idArtista" id="idArtista2">
 </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.vertical', ['title' => 'Usuarios'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banco/public_html/banco/resources/views/registrados.blade.php ENDPATH**/ ?>