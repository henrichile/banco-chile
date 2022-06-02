<?php $__env->startSection('content'); ?>  
<section class="padding-110px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none" id="content-section15" data-img-size="(W)1920px X (H)900px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('<?php echo e(asset('images/uploads/pre_background.jpg')); ?>')">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <img src="<?php echo e(asset('images/uploads/logochico.png')); ?>" data-img-size="(W)803px X (H)245px" alt="">
        </div>
         <div class="col-md-10 col-sm-12 col-xs-12 center-col text-center">
                


</br>

                
<div class="datagrid"><table>
<thead><tr><th>Nº</th><th>AREA</th><th>PUNTAJE</th></tr></thead>

<tbody>
    <?php
        $i=1;
    ?>
    <?php $__currentLoopData = $listadoAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr><td><?php echo e($i); ?></td><td><?php echo e($item['area']); ?></td><td><?php echo e(round($item['puntos'])); ?></td></tr>
    <?php
        $i++;
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table></div>
                
                
                
    </div>
</section>  

    
    

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desafio/public_html/trivia/resources/views/ranking_area.blade.php ENDPATH**/ ?>