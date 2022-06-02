<?php $__env->startSection('content'); ?>  
    <section class="padding-110px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none" id="content-section15" data-img-size="(W)1920px X (H)900px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('images/uploads/pre_background.jpg')">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                                <img src="images/uploads/logochico.png" data-img-size="(W)803px X (H)245px" alt="">
            </div>
             <div class="col-md-10 col-sm-12 col-xs-12 center-col text-center">
                <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-medium sm-title-medium text-white sm-margin-five-bottom xs-title-small width-85 sm-width-100 center-col tz-text">PREGUNTA N° <?php echo e(($respondidas+1)); ?> DE <?php echo e($totalPreguntas); ?></div>
                  
                    <?php
                       // var_dump($item);
                        $sql2 = "select * from preguntas where id=?";
                        $pregunta= DB::select($sql2,array($item->idPregunta));
                        $sql22 = "select * from respuestas where idPregunta=? order by rand()";
                        $respuestas= DB::select($sql22,array($item->idPregunta));

                    ?>
                        
                    
                    <h2 class="alt-font text-white title-large-2 line-height-50 sm-section-title-medium xs-section-title-medium margin-one-bottom sm-no-margin-top sm-margin-five-bottom xs-margin-five-bottom tz-text"><?php echo e($pregunta[0]->pregunta); ?></h2>
                    <div class="time text-white no-letter-spacing margin-ten-bottom" style="background-color: rgb(146, 29, 113)"> <span id="countdown"></span> SEGUNDOS</span></div>
                    
                     <div class="col-md-8 col-sm-10 col-xs-12 center-col">
                         <?php $__currentLoopData = $respuestas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="form-group radio_input title-small text-white width-100 sm-width-100 tz-text">
                            <label><input type="radio" name="pregunta<?php echo e($itemr->id); ?>" value="<?php echo e($itemr->id); ?>" class="icheck" style="cursor:pointer" onclick="validarPregunta(<?php echo e($itemr->id); ?>, <?php echo e($itemr->idPregunta); ?>, <?php echo e($item->id); ?> )"><?php echo e($itemr->respuesta); ?></label>
                        </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
                            </div>
                </div>       
                                <input type="hidden" id="pregunta" value="<?php echo e($item->idPregunta); ?>">
                                <input type="hidden" id="preguntaCliente" value="<?php echo e($item->id); ?>">    
                                <input type="hidden" id="segundos" value="">    

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
    </section>  

    <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideo" aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
               
    
                <div class="form-group  mb-3 col-lg-12">
                    <video width="320" height="240" autoplay>
                        <source id="videos" src="" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
                    </div>
                    <div class="form-group mb-3 col-lg-4">
                    </div>
                </form>
            </div>
        </div>
    </div><!-- End Register modal -->
    
    

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front_trivia', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desafio/public_html/trivia/resources/views/trivia.blade.php ENDPATH**/ ?>