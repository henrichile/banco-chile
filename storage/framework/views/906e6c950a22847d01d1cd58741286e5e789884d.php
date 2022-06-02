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
                           <h1 class="uppercase">Registro Solista</h1>
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
                <form style="width: 80%;margin-left:10%; margin-right:10%" method="POST" action="<?php echo e(route('solista.guardar')); ?>" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>
                <div class="col-md-12">
                    <div class="form-group mb-3 col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control  <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('nombre')); ?>">
                        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="correo">R.U.T</label>
                        <input type="text" id="rut" name="rut" class="form-control  <?php $__errorArgs = ['rut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('rut')); ?>" placeholder="123456789-0" onchange="javascript:validarRut()">
                        <?php $__errorArgs = ['rut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div id="error_rut" style="display:none">
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>R.U.T Invalido!!</strong>
                        </span>
                    </div>

                    </div>


                    <div class="form-group mb-3 col-md-6">   
                            <label for="dia">Fecha de Nacimiento</label></br>
                                <select id="dia" name="dia" class="form-control" onchange="javascript:calculaedadSolista()" style="width:70px;float:left" >';
                                <?php for($j=1;$j<=31;$j++): ?>{
                                    <option value="<?php echo e($j); ?>"><?php echo e($j); ?></option>
                                <?php endfor; ?>
                                     </select>
                                <select id="mes" name="mes" class="form-control" onchange="javascript:calculaedadSolista()"  style="width:70px;;float:left" >';
                                <?php for($j=1;$j<=12;$j++): ?>
                                   <option value="<?php echo e($j); ?>"><?php echo e($j); ?></option>
                                <?php endfor; ?>
                                </select>
                                <select id="ano" name="ano" class="form-control" onchange="javascript:calculaedadSolista()"  style="width:90px;;float:left" >';
                                    <?php for($j=1900;$j<=(date('Y')-12);$j++): ?>
                                        <option value="<?php echo e($j); ?>"><?php echo e($j); ?></option>;
                                    <?php endfor; ?>
                                </select>
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="region">Región</label>
                        <select id="region" name="region" class="form-control" >
                            <?php
                            $sql = "SELECT * FROM `regiones`";
                            $regiones= DB::select($sql);
                            ?>
                            <?php $__currentLoopData = $regiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemreg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($itemreg->id); ?>"><?php echo e($itemreg->region); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div id="menor" style="display:none">
                        <div class="form-group mb-3 col-md-6">
                            <label for="colegio">Colegio</label>
                            <input type="text" id="colegio" name="colegio" class="form-control  <?php $__errorArgs = ['colegio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('colegio')); ?>">
                            <?php $__errorArgs = ['colegio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback d-block" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mb-3 col-md-3">
                            <label for="curso">Curso</label>
                            <input type="text" id="curso" name="curso" class="form-control  <?php $__errorArgs = ['curso'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('curso')); ?>">
                            <?php $__errorArgs = ['curso'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback d-block" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label for="exampleFormControlFile1">Subir Formulario menor de 18 años 
                                firmado por su tutor  ( <a href="<?php echo e(asset('pdf/autorizacion.pdf')); ?>">Descargar formulario</a>)</label>
                            <input type="file" name="autorizacion" class="form-control-file  <?php $__errorArgs = ['autorizacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " id="exampleFormControlFile1">
                            <?php $__errorArgs = ['autorizacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback d-block" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="correo">Correo</label>
                        <input type="text" id="correo" name="correo" class="form-control  <?php $__errorArgs = ['correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('correo')); ?>">
                        <?php $__errorArgs = ['correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="correo">Confirmar Correo</label>
                        <input type="text" id="correo2" name="correo2" class="form-control  <?php $__errorArgs = ['correo2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('correo2')); ?>">
                        <?php $__errorArgs = ['correo2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control  <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('telefono')); ?>">
                        <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="form-group mb-3 col-md-3">
                        <label for="exampleFormControlFile1">Sube tu MP3 o MP4</label>
                        <input type="file" name="pista" class="form-control-file <?php $__errorArgs = ['pista'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " id="exampleFormControlFile1">
                        <?php $__errorArgs = ['pista'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback d-block" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group form-check mb-3 col-md-6">
                        <input type="checkbox" class="form-check-input" id="terminos" onclick="javascript:validarTerminos()">
                        <label class="form-check-label" for="exampleCheck1">Acepto las bases legales</label>
                      </div>
                        <input type="hidden" name="edad" id="edad">
                      <div class="form-group form-check mb-3 col-md-6">
                        <button type="submit" id="btnsubmit" class="btn btn-primary uppercase with-ico border-2 mt-5" disabled >Registrar</button>
                    </div>
                </div>
                </form>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section> 
         <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.frontRegistro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banco/public_html/banco/resources/views/formSolista.blade.php ENDPATH**/ ?>