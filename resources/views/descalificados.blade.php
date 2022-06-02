
@extends('layouts.vertical', ['title' => 'Usuarios'])

@section('css')
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
                    <h4 class="page-title">Artistas y bandas registradas</h4>
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
                                    <th>Tipo</th>
                                    <th>Fecha registro</th>
                                    <th>Cancion</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $artistas as $item)
                                @php
                                $nombre="";
                                $fecha="";
                                if($item->tipoArtista==1){
                                    $sql = "select * from singles where idArtista=?";
                                    $datos= DB::select($sql,array($item->id));
                                    

                                    $nombre=$datos[0]->nombre;
                                   $f=explode(" ",$datos[0]->created_at);
                                    $c=explode('-',$f[0]);
                                    $fecha=$c[2]."-".$c[1]."-".$c[0];
                                }else{
                                    $sql2 = "select * from bandas where idArtista=?";
                                    $datosx= DB::select($sql2,array($item->id));
                                    $nombre=$datosx[0]->nombreBanda;
                                    $f=explode(" ",$datos[0]->created_at);
                                    $c=explode('-',$f[0]);
                                    $fecha=$c[2]."-".$c[1]."-".$c[0];
                                }
                                
                                @endphp
                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal">{{  $nombre }}</h5>
                                    </td>
                                    <td>
                                       @if($item->tipoArtista==1)
                                       Solista
                                       @else
                                       Banda
                                       @endif
                                    </td>
                                    <td>
                                        {{ $fecha }}
                                    </td>
                                    <td>
                                        <a href="{{ asset('storage/'.$item->archivo) }}">Descargar</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('ficha',['idArtista'=>$item->id]) }}" class="btn btn-xs btn-light">Ficha de Registro</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('preclasificar',['idArtista'=>$item->id]) }}" class="btn btn-xs btn-success">Pre-seleccionar</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('descalificar',['idArtista'=>$item->id]) }}" class="btn btn-xs btn-danger">Rechazar</a>
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
