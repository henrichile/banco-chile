
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
                    <h4 class="page-title">Ranking de 
                     @php
                     if($tipo==1){
                        echo " artistas ";
                    }else if($tipo==2){
                        echo ' bandas ' ;
                    }else{
                        echo 'artistas y bandas ' ;
                    }

                    if($zona==1){
                        echo "Zona Norte";
                        $ruta="clasificadosNorte";
                    }else if($zona==2){
                        echo 'Zona Centro' ;
                        $ruta="clasificadosCentro";
                    }else if($zona==3){
                        echo 'Zona Sur' ;
                        $ruta="clasificadosSur";
                    }else{
                        $ruta="rankingclasificados";
                    }
                    $rol = auth()->user()->roles()->first()->name;
                    @endphp
                    </h4>
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
                    <div class="dropdown float-left" style="margin-bottom: 15px">

                        <a href="{{ route($ruta,["tipo"=>1]) }}"  class="btn btn-xs btn-info">Solista</a>
                        <a href="{{ route($ruta,["tipo"=>2]) }}"  class="btn btn-xs btn-info">Bandas</a>
                        <a href="{{ route($ruta,["tipo"=>0]) }}"  class="btn btn-xs btn-info">Todos</a>
                       
                    </div>
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Exportar</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="listados" class="table table-borderless table-hover table-nowrap table-centered m-0">
                            <thead  class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Fecha registro</th>
                                    <th>Cancion</th>
                                    <th>Nota</th>
                                    <th>Jurado</th>
                                    <th>Nota</th>
                                    <th>Jurado</th>
                                    <th>Nota</th>
                                    <th>Jurado</th>
                                    <th>Promedio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $artistas as $item)
                                @php
                                $nombre="";
                                $fecha="";
                                @endphp
                                @php
                                if($item->tipoArtista==1){
                                    $sql = "select * from singles where idArtista=?";
                                    $datos= DB::select($sql,array($item->id));
                                    
                                    if(count($datos)>0){
                                        $nombre=$datos[0]->nombre;
                                        $f=explode(" ",$datos[0]->created_at);
                                        $c=explode('-',$f[0]);
                                        $fecha=$c[2]."-".$c[1]."-".$c[0];
                                    }
                                }else{
                                    $sql2 = "select * from bandas where idArtista=?";
                                    $datos= DB::select($sql2,array($item->id));
                                    if(count($datos)>0){
                                        $nombre=$datos[0]->nombreBanda;
                                        $f=explode(" ",$datos[0]->created_at);
                                        $c=explode('-',$f[0]);
                                        $fecha=$c[2]."-".$c[1]."-".$c[0];
                                    }
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
                                        <a href="{{ asset('storage/'.$item->archivo) }}" target="_blank">Descargar</a>
                                    </td>
                                    @php
                                    $sqln = "select * from notas where idArtista=?";
                                    $notas= DB::select($sqln,array($item->id));
                                    $nota=0;
                                    $promedio=0;
                                    @endphp
                                    @foreach ($notas as $itemnota)
                                    @php
                                    $sqlx = "select * from users where id=?";
                                    $jurado= DB::select($sqlx,array($itemnota->idUsuario));
                                    //var_dump($jurado);
                                    //echo "</br>";
                                    $nota=$nota+$itemnota->nota;
                                    $promedio=$nota/3;
                                    @endphp
                                    <td>
                                        {{ number_format($itemnota->nota,'2','.',',') }}
                                    </td>
                                    <td>
                                        {{ $jurado[0]->name ?? 'S/Datos'}}
                                    </td>
                                        
                                    @endforeach
                                    <td>
                                        {{ number_format($promedio,'2','.',',') }}
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
