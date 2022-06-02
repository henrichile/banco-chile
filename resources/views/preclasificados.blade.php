
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
                    <h4 class="page-title">Artistas y bandas pre-clasificadas 
                        @php
                        if($zona==1){
                            echo "Norte";
                        }else if($zona==2){
                            echo 'Centro' ;
                        }else if($zona==3){
                            echo 'Sur' ;
                        }
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
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Exportar</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Fecha registro</th>
                                    <th>Cancion</th>
                                    <th>Nota de Evaluación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $artistas as $item)
                                @php
                                $nombre="";
                                $fecha="";
                                $sqln = "select * from notas where idArtista=?";
                                $notas= DB::select($sqln,array($item->id));
                                @endphp

                                @if(count($notas)<3)
                                @php
                                $idUser=auth()->user()->id; 
                                 $sqls = "select * from notas where idArtista=? and idUsuario=?";
                                $existes= DB::select($sqls,array($item->id,$idUser));
                                @endphp
                                @if(count($existes)==0)
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
                                    <td>
                                        <form method="POST" action="{{ route('evaluar',['idArtista'=>$item->id,'zona'=>$zona]) }}">
                                            @csrf
                                            <div class="row">
                                            <div class="form-group col-md-6">
                                                <input step="any" type="number" min="1" max="10" id="nota" name="nota" class="form-control  @error('nota') is-invalid @enderror" value="{{ old('nota') }}">
                                            
                                            </div>
                                            <div class="form-group form-check col-md-6">
                                                <button type="submit" id="btnsubmit" class="btn btn-primary uppercase with-ico border-2">Evaluar</button>
                                            </div>
                                        </div>
                                        </form>
                                    </td>
                                   
                                </tr>
                                @endif
                                @endif
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
