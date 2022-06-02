
@extends('layouts.vertical', ['title' => 'Ficha de Registro'])

@section('css')
@endsection
@section('botones')
<a href="{{ route('registrados.listado') }}" class="btn btn-primary mr-2 text-white"  style="float:right">Volver a lista de registrados</a>
@endsection
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Ficha de Registro</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Solista</h4>
                    <div class="col-md-12">
                        <div class="form-group mb-3 col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                        </div>
                        <div class="form-group mb-3 col-md-3">
                            <label for="correo">R.U.T</label>
                            <input type="text" id="rut" name="rut" class="form-control  @error('rut') is-invalid @enderror" value="{{ old('rut') }}" placeholder="123456789-0" onchange="javascript:validarRut()">
                        </div>
                        <div class="form-group mb-3 col-md-3">
                            <label for="fnac">Fecha de Nacimiento</label>
                            <input type="text" id="fnac" name="fnac" placeholder="01/01/2000" class="form-control  @error('fnac') is-invalid @enderror" value="{{ old('fnac') }}">
                        </div>
                        <div id="menor" style="display:none">
                            <div class="form-group mb-3 col-md-6">
                                <label for="colegio">Colegio</label>
                                <input type="text" id="colegio" name="colegio" class="form-control  @error('colegio') is-invalid @enderror" value="{{ old('colegio') }}">
                            </div>
                            <div class="form-group mb-3 col-md-3">
                                <label for="curso">Curso</label>
                                <input type="text" id="curso" name="curso" class="form-control  @error('curso') is-invalid @enderror" value="{{ old('curso') }}">
                            </div>
                            <div class="form-group mb-3 col-md-12">
                                <label for="exampleFormControlFile1">Formulario menor de 18 años firmado por su tutor </label>
                                <a>Descargar formulario</a>
                            </div>
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="correo">Correo</label>
                            <input type="text" id="correo" name="correo" class="form-control  @error('correo') is-invalid @enderror" value="{{ old('correo') }}">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="correo">Confirmar Correo</label>
                            <input type="text" id="correo2" name="correo2" class="form-control  @error('correo2') is-invalid @enderror" value="{{ old('correo2') }}">
                        </div>
                        <div class="form-group mb-3 col-md-3">
                            <label for="telefono">Teléfono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control  @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}">
                        </div>
                        
                        <div class="form-group mb-3 col-md-3">
                        </div>
                    </div>

                </div>
            </div> <!-- end col -->

        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection

@section('script')
@endsection
