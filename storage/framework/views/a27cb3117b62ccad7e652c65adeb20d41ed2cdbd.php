<?php $__env->startSection('content'); ?>  
<section class="band main" id="registro">
               <div class="background-img">
                  <img src="<?php echo e(asset('img/24.jpg')); ?>" alt="">
               </div>
            <!--Container-->
            <div class="container bg-white-trans">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content text-center gap-one-bottom-md">
                        <div class="block-title ">
                           <h1 class="uppercase">Registro</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container bg-white-trans">
               <!--Row-->
               <div class="row">
                
                <div class="col-md-12">
                    <div class="flash-message">
                        <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(Session::has('alert-' . $msg)): ?>
            
                                <p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div> <!-- end .flash-message -->
                    <div class="form-group mb-3 col-md-6">
                        <?php if($resultado): ?>
                        <h2>Tu registro se realizo de manera exitosa</h2>
                        <?php else: ?>
                        <h2>Tu registro no pudo ser realizado, intenta más tade</h2>
                        <?php endif; ?>
                    </div>
                    
                </div>

               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section> 
         <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.frontRegistro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banco/public_html/banco/resources/views/resultado.blade.php ENDPATH**/ ?>