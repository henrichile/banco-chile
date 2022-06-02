<?php $__env->startSection('content'); ?>  
<section class="padding-110px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none" id="content-section15" data-img-size="(W)1920px X (H)900px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('<?php echo e(asset('images/uploads/pre_background.jpg')); ?>')">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <img src="<?php echo e(asset('images/uploads/logochico.png')); ?>" data-img-size="(W)803px X (H)245px" alt="">
        </div>
         <div class="col-md-10 col-sm-12 col-xs-12 center-col text-center">
                
<div style="font-size: 20px; color: white;"> Mi ranking en la trivia 02 es <strong><?php echo e($lugar); ?></strong> con <?php echo e($puntaje); ?> Ptos</div>

</br>
<div class="row">
    <div  class="col-md-12"  style="margin-bottom: 20px;">
        <nav role="navigation" class="primary-navigation">
            <ul>
              <li style="float: left;
              color: white;
              font-size: 18px; padding:10px;list-style: none;"><a style="color: white;font-size: 18px;" href="<?php echo e(route('trivia.ranking1')); ?>"><i class="fa fa-chevron-right"></i> Ranking 1</a></li>
              <li style="float: left;
              color: white;
              font-size: 18px; padding:10px;list-style: none;"><a style="color: white;font-size: 18px;" href="<?php echo e(route('trivia.ranking2')); ?>"><i class="fa fa-chevron-right"></i> Ranking 2</a></li>
              <li style="float: left;
              color: white;
              font-size: 18px; padding:10px;list-style: none;"><a style="color: white;font-size: 18px;" href="<?php echo e(route('trivia.ranking3')); ?>"><i class="fa fa-chevron-right"></i> Ranking 3</a></li>
              <li style="float: left;
              color: white;
              font-size: 18px; padding:10px;list-style: none;"><a style="color: white;font-size: 18px;" href="<?php echo e(route('trivia.ranking.acumulativo')); ?>"><i class="fa fa-chevron-right"></i> Ranking Acumulativo</a></li>
            </ul>
          </nav>
    </div>
    </div>
                
<div class="datagrid"><table>
<thead><tr><th>Nº</th><th>NOMBRE</th><th>AREA</th><th>PUNTAJE</th></tr></thead>

<tbody>
    <?php
        $i=1;
    ?>
    <?php $__currentLoopData = $ranking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr><td><?php echo e($i); ?></td><td><?php echo e($item->nombre); ?></td><td><?php echo e($item->nombrearea); ?></td><td><?php echo e($item->total); ?></td></tr>
    <?php
        $i++;
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table></div>
                
                
                
    </div>
</section>  

    
    

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desafio/public_html/trivia/resources/views/ranking_trivia2.blade.php ENDPATH**/ ?>