
@extends('layouts.vertical', ['title' => 'Nuevo usuario'])

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
                    <h4 class="page-title">Nuevo usuario</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Nuevo usuario </h4>
                    <form method="POST" action="{{ route('administrador.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                                @error('nombre')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="correo">Correo</label>
                                <input type="text" id="correo" name="correo" class="form-control  @error('correo') is-invalid @enderror" value="{{ old('correo') }}">
                                @error('correo')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            @php
                            $logitud = 8;
                            $psswd = substr( md5(microtime()), 1, $logitud);
                            @endphp
                            <div class="form-group mb-3">
                                <label for="clave">contraseña</label>
                                <input type="text" id="clave" name="clave" class="form-control  @error('clave') is-invalid @enderror" value="{{ $psswd }}">
                                @error('clave')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="rol" class="col-form-label">Seleccione rol de usuario</label> <br/>
                                <select  name="rol" id="rol" class="selectpicker @error('rol') is-invalid @enderror" data-style="btn-light"  onchange="javascript:selsede()">
                                    <option data-display="Select">Elija un rol</option>
                                    @foreach ( $roles as $itemrol )
                                     <option value="{{ $itemrol->name }}" >{{ $itemrol->description }}</option>
                                    @endforeach

                                </select>
                                @error('rol')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Crear administrador</button>
                    </div>

                </div>
            </div> <!-- end col -->

        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection

@section('script')
@endsection
