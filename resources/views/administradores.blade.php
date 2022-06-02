
@extends('layouts.vertical', ['title' => 'Usuarios'])

@section('css')
@endsection
@section('botones')
<a href="{{ route('administrador.nuevo') }}" class="btn btn-primary mr-2 text-white" style="float:right">Nuevo usuario</a>
@endsection
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <!-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>-->
                    <h4 class="page-title">Usuarios</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div> <!-- end .flash-message -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Exportar</a>
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Usuarios</h4>

                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Clave</th>
                                    <th>Rol</th>
                                    <th colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $administradores as $item)
                                @php
                                    $sql = "SELECT * FROM `roles` where id=?";
                                    $rol= DB::select($sql,array($item->role_id));
                                    $namerol=$rol[0]->description;
                                @endphp
                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal">{{  $item->name }}</h5>
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                    <td>
                                        {{ $namerol }}
                                    </td>
                                    <td>
                                        <a href="{{ route('administrador.edit',['id'=>$item->user_id]) }}" class="btn btn-xs btn-light"><i class="mdi mdi-eye"></i> Modificación</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('administrador.delete',['id'=>$item->user_id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <input type="submit" class="btn btn-xs btn-danger" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->

        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection

@section('script')
@endsection
