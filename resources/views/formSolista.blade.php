@extends('layouts.frontRegistro')

@section('content')  
<section class="band main" id="registro">
               <div class="background-img">
                  <img src="{{ asset('img/24.jpg')}}" alt="">
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
                <form style="width: 80%;margin-left:10%; margin-right:10%" method="POST" action="{{ route('solista.guardar') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                <div class="col-md-12">
                    <div class="form-group mb-3 col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                        @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="correo">R.U.T</label>
                        <input type="text" id="rut" name="rut" class="form-control  @error('rut') is-invalid @enderror" value="{{ old('rut') }}" placeholder="123456789-0" onchange="javascript:validarRut()">
                        @error('rut')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <div id="error_rut" style="display:none">
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>R.U.T Invalido!!</strong>
                        </span>
                    </div>

                    </div>


                    <div class="form-group mb-3 col-md-6" style="height:80px">   
                            <label for="dia">Fecha de Nacimiento</label></br>
                                <select id="dia" name="dia" class="form-control" onchange="javascript:calculaedadSolista()" style="width:70px;float:left" >';
                                @for($j=1;$j<=31;$j++){
                                    <option value="{{ $j }}" @if($j==old(dia)) selected="selected" @endif>{{ $j }}</option>
                                @endfor
                                     </select>
                                <select id="mes" name="mes" class="form-control" onchange="javascript:calculaedadSolista()"  style="width:70px;;float:left" >';
                                @for($j=1;$j<=12;$j++)
                                   <option value="{{ $j }}" @if($j==old(mes)) selected="selected" @endif>{{ $j }}</option>
                                @endfor
                                </select>
                                <select id="ano" name="ano" class="form-control" onchange="javascript:calculaedadSolista()"  style="width:90px;;float:left" >';
                                    @for($j=1900;$j<=(date('Y')-12);$j++)
                                        <option value="{{ $j }}" @if($j==old(ano)) selected="selected" @endif>{{ $j }}</option>;
                                    @endfor
                                </select>
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="region">Región</label>
                        <select id="region" name="region" class="form-control" >
                            @php
                            $sql = "SELECT * FROM `regiones`";
                            $regiones= DB::select($sql);
                            @endphp
                            @foreach ( $regiones as $itemreg )
                            <option value="{{ $itemreg->id }}">{{ $itemreg->region }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="menor" style="display:none">
                        <div class="form-group mb-3 col-md-6">
                            <label for="colegio">Colegio</label>
                            <input type="text" id="colegio" name="colegio" class="form-control  @error('colegio') is-invalid @enderror" value="{{ old('colegio') }}">
                            @error('colegio')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-3">
                            <label for="curso">Curso</label>
                            <input type="text" id="curso" name="curso" class="form-control  @error('curso') is-invalid @enderror" value="{{ old('curso') }}">
                            @error('curso')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label for="exampleFormControlFile1">Subir Formulario menor de 18 años 
                                firmado por su tutor  ( <a href="{{ asset('pdf/autorizacion.pdf')}}">Descargar formulario</a>)</label>
                            <input type="file" name="autorizacion" class="form-control-file  @error('autorizacion') is-invalid @enderror " id="exampleFormControlFile1">
                            @error('autorizacion')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="correo">Correo</label>
                        <input type="text" id="correo" name="correo" class="form-control  @error('correo') is-invalid @enderror" value="{{ old('correo') }}">
                        @error('correo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="correo">Confirmar Correo</label>
                        <input type="text" id="correo2" name="correo2" class="form-control  @error('correo2') is-invalid @enderror" value="{{ old('correo2') }}">
                        @error('correo2')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control  @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}">
                        @error('telefono')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3 col-md-3">
                        <label for="exampleFormControlFile1">Sube tu MP3 o MP4</label>
                        <input type="file" name="pista" class="form-control-file @error('pista') is-invalid @enderror " id="exampleFormControlFile1">
                        @error('pista')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
         @endsection 