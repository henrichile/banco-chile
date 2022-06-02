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
                           <h1 class="uppercase">Registro de banda</h1>
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
                <form style="width: 90%;margin-left:5%; margin-right:5%" method="POST" action="{{ route('banda.guardar') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                <div class="row">
                    <div class="col-md-12">
                        <h3><strong>Información de la banda</strong></h3>
                        </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="banda">Nombre de la banda</label>
                        <input type="text" id="banda" name="banda" class="form-control fecha  @error('banda') is-invalid @enderror" value="{{ old('banda') }}">
                        @error('banda')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3 col-md-6">
                        <label for="responsable">Responsable de la Banda</label>
                        <input type="text" id="responsable" name="responsable" class="form-control  @error('responsable') is-invalid @enderror" value="{{ old('responsable') }}">
                        @error('responsable')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
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
                    <div class="form-group mb-3 col-md-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control  @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}">
                        @error('telefono')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
                        <label for="correo">Cantidad de Integrantes</label>
                        <input type="text" id="integrantes" name="integrantes" class="form-control  @error('integrantes') is-invalid @enderror" value="{{ old('integrantes') }}" onchange="javascript:traeintegrantes()" >
                        @error('integrants')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <h3><strong>Integrantes de la banda</strong></h3>
                    </div>
                    <div id="lista_integrantes" class="row m-1">
                    </div>
                    <div class="form-group mb-3 col-md-12">
                        <label for="exampleFormControlFile1">Sube tu MP3 o MP4</label>
                        <input type="file" name="pista" class="form-control-file @error('pista') is-invalid @enderror " id="exampleFormControlFile1">
                        @error('pista')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="form-group form-check m-3 col-md-12">
                        <input type="checkbox" class="form-check-input" id="terminos" onclick="javascript:validarTerminos()">
                        <label class="form-check-label" for="exampleCheck1">Acepto las bases legales</label>
                    </div>
                    <div class="form-group form-check col-md-12">
                        <button type="submit" id="btnsubmit" class="btn btn-primary uppercase with-ico border-2" disabled >Registrar</button>
                    </div>
                </div>
                </form>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section> 
         @endsection 