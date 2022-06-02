
@extends('layouts.vertical', ['title' => 'Usuarios'])

@section('css')
@endsection
@section('botones')
<a href="{{ route('administradores.listado') }}" class="btn btn-primary mr-2 text-white"  style="float:right">Volver a usuarios</a>
@endsection
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Usuario</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Modificar usuario </h4>
                    <form method="POST" action="{{ route('administrador.update',['id'=>$administrador[0]->id]) }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" value="{{ $administrador[0]->name }}">
                                @error('nombre')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="correo">Correo</label>
                                <input type="text" id="correo" name="correo" class="form-control  @error('correo') is-invalid @enderror"  value="{{ $administrador[0]->email }}">
                                @error('correo')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="clave">contraseña</label>
                                <input type="text" id="clave" name="clave" class="form-control  @error('clave') is-invalid @enderror" value="{{ $administrador[0]->password2 }}">
                                @error('clave')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Modificar</button>
                    </div>

                </div>
            </div> <!-- end col -->

        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection

@section('script')
@endsection
