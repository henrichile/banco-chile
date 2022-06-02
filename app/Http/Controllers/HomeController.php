<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Artistas;
use App\Mail\registroBanda;
use App\Mail\registroSolista;
use App\Mail\clasificado;
use App\Mail\rechazado;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Redirect;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\Exception;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
       return view('dashboard');
    }

    public function registrados(){
        $artistas=Artistas::where('estado','=', 0)->get();
        return view('registrados')->with('artistas',$artistas);
     }

     public function preclasificar(Request $request){
        $data=request();
        $artistas=Artistas::find($data['idArtista']);
        $artistas->estado=2;
        $artistas->save();
        Mail::to($artistas->email)->send(new clasificado('Artista',$artistas->email));
        $request->session()->flash('alert-success', 'Participante fue pre-clasificado con exito!!');
        if($data['zona']==1){
            return redirect()->route('seleccionadosNorte') ;
        }else if($data['zona']==2){
            return redirect()->route('seleccionadosCentro') ;
        }else if($data['zona']==3){
            return redirect()->route('seleccionadosSur') ;
        }
        return redirect()->route('listadoseleccionados') ;
     }

     public function preSeleccionar(Request $request){
        $data=request();
        $artistas=Artistas::find($data['idArtista']);
        $artistas->estado=1;
        $artistas->save();
        Mail::to($artistas->email)->send(new clasificado('Artista',$artistas->email));
        $request->session()->flash('alert-success', 'Participante fue pre-seleccionado con exito!!');
        return redirect()->route('registrados.listado') ;
     }

     public function descalificar(Request $request){
        $idUser=auth()->user()->id;     
        $data=request();
        $artistas=Artistas::find($data['idArtista']);
        $artistas->estado=4;
        $artistas->save();
        $id=DB::table('rechazado')->insertGetId([
            'idArtista' => $data['idArtista'],
            'idUsuario' => $idUser
            ]);
        Mail::to($artistas->email)->send(new rechazado('Artista',$artistas->email));
        $request->session()->flash('alert-info', 'Participante no clasificado con exito!!');
        return redirect()->route('registrados.listado') ;
     }

     public function evaluarSeleccionado(Request $request){
        $idUser=auth()->user()->id;     
        $data=request()->validate([
            'nota' => 'required',
        ]);
        $data=request();
        $id=DB::table('notasPreseleccion')->insertGetId([
            'idArtista' => $data['idArtista'],
            'idUsuario' => $idUser,
            'nota' => $data['nota'],
           
        ]);
        $request->session()->flash('alert-success', 'El Participante fue Evaluado con exito!!');
        if($data['zona']==1){
            return redirect()->route('preSeleccionadosNorte') ;
        }else if($data['zona']==2){
            return redirect()->route('preSeleccionadosCentro') ;
        }else if($data['zona']==3){
            return redirect()->route('preSeleccionadosSur') ;
        }
        return redirect()->route('listadoseleccionados') ;
     }



     public function evaluar(Request $request){
        $idUser=auth()->user()->id;     
        request()->validate([
            'nota' => 'required',
        ]);
        $data=request();
        $id=DB::table('notas')->insertGetId([
            'idArtista' => $data['idArtista'],
            'idUsuario' => $idUser,
            'nota' => $data['nota'],
           
        ]);

        $sqln = "select * from notas where idArtista=?";
        $notas= DB::select($sqln,array($data['idArtista']));
        if(count($notas)==3){
                    DB::table('artistas')
                    ->where('id', $data['idArtista'])
                    ->update([
                        'estado' => 3,
                    ]);
        }
        $request->session()->flash('alert-success', 'El Participante fue Evaluado con exito!!');
        if($data['zona']==1){
            return redirect()->route('preClasificadosNorte') ;
        }else if($data['zona']==2){
            return redirect()->route('preClasificadosCentro') ;
        }else if($data['zona']==3){
            return redirect()->route('preClasificadosSur') ;
        }
        return redirect()->route('preclasificados.listado');
     }

     public function listadoseleccionados(){
        $artistas=Artistas::where('estado','=', 1)->get();
        $zona=0;
        return view('seleccionados')->with('artistas',$artistas)
                                      ->with('zona',$zona);
     }


     public function listadoPreClasificados(){
        $artistas=Artistas::where('estado','=', 2)->get();
        $zona=0;
        return view('preclasificados')->with('artistas',$artistas)
                                      ->with('zona',$zona);
     }

     public function listadoNoClasificados(){
        $artistas=Artistas::where('estado','=', 4)->get();
        return view('noclasificados')->with('artistas',$artistas);
     }

     

     public function clasificadosNorte(Request $request){
        $data=request();
        if($data['tipo']>0){

        $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->select('artistas.*', 'regiones.region')
            ->where([
                ['artistas.estado','=',3],
                ['artistas.tipoArtista','=',$data['tipo']],
                ['regiones.zona','=',1]
            ])
            ->get();
        }else{
            $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->select('artistas.*', 'regiones.region')
            ->where([
                ['artistas.estado','=',3],
                ['regiones.zona','=',1]
            ])
            ->get();
        }
        $tipo=$data['tipo'];
            $zona=1;
        return view('clasificados')->with('artistas',$artistas)
                                     ->with('tipo',$tipo)
                                     ->with('zona',$zona);
     }
     
     public function clasificadosCentro(Request $request){
        $data=request();
        if($data['tipo']>0){
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',3)
        ->where('artistas.tipoArtista','=',$data['tipo'])
        ->where('regiones.zona','=',2)
        ->get();
        }else{

        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',3)
        ->where('regiones.zona','=',2)
        ->get();
        }
        $tipo=$data['tipo'];
        $zona=2;
        return view('clasificados')->with('artistas',$artistas)
                                            ->with('tipo',$tipo)
                                            ->with('zona',$zona);
     }
     public function clasificadosSur(Request $request){
        $data=request();
        if($data['tipo']>0){
            $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->select('artistas.*', 'regiones.region')
            ->where('artistas.estado','=',3)
            ->where('artistas.tipoArtista','=',$data['tipo'])
            ->where('regiones.zona','=',3)
            ->get();
        }else{
            $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->select('artistas.*', 'regiones.region')
            ->where('artistas.estado','=',3)
            ->where('regiones.zona','=',3)
            ->get();
        }
        $tipo=$data['tipo'];
        $zona=3;
        return view('clasificados')->with('artistas',$artistas)
                                     ->with('tipo',$tipo)
                                     ->with('zona',$zona);
     }

     public function rankingclasificados(Request $request){
        $data=request();
        if($data['tipo']>0){
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.tipoArtista','=',$data['tipo'])
        ->where('artistas.estado','=',3)
        ->get();
    }else{
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',3)
        ->get();
    }
        $tipo=$data['tipo'];
        $zona=0;
        return view('clasificados')->with('artistas',$artistas)
                                     ->with('tipo',$tipo)
                                     ->with('zona',$zona);
     }

     

     public function preClasificadosNorte(){
      
            $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->select('artistas.*', 'regiones.region')
            ->where('artistas.estado','=',2)
            ->where('regiones.zona','=',1)
            ->get();
            $zona=1;
        return view('preclasificados')->with('artistas',$artistas)
                                     ->with('zona',$zona);
    }
     public function preClasificadosCentro(){
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',2)
        ->where('regiones.zona','=',2)
        ->get();
        $zona=2;
        return view('preclasificados')->with('artistas',$artistas)
                                     ->with('zona',$zona);
    }
     public function preClasificadosSur(){
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',2)
        ->where('regiones.zona','=',3)
        ->get();
        $zona=3;
        return view('preclasificados')->with('artistas',$artistas)
                                     ->with('zona',$zona);
     }


     public function preseleccionadosNorte(){
        $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->select('artistas.*', 'regiones.region')
            ->where('artistas.estado','=',1)
            ->where('regiones.zona','=',1)
            ->get();
            $zona=1;
        return view('seleccionados')->with('artistas',$artistas)
                                     ->with('zona',$zona);
    }
     public function preseleccionadosCentro(){
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',1)
        ->where('regiones.zona','=',2)
        ->get();
        $zona=2;
        return view('seleccionados')->with('artistas',$artistas)
                                     ->with('zona',$zona);
    }
     public function preseleccionadosSur(){
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',1)
        ->where('regiones.zona','=',3)
        ->get();
        $zona=3;
        return view('seleccionados')->with('artistas',$artistas)
                                     ->with('zona',$zona);
     }


     

     public function ficha(){
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',3,true)
        ->where('regiones.zona','=',3)
        ->get();
        return view('descalificados')->with('artistas',$artistas);
     }

     public function seleccionadosNorte(Request $request){
        $data=request();
        if($data['tipo']>0){

        $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->join('notasPreseleccion', 'artistas.id', '=', 'notasPreseleccion.idArtista')
            ->select('artistas.*', 'regiones.region')
            ->where([
                ['artistas.estado','=',1],
                ['artistas.tipoArtista','=',$data['tipo']],
                ['regiones.zona','=',1]
            ])
            ->get();
            }else{
                $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->join('notasPreseleccion', 'artistas.id', '=', 'notasPreseleccion.idArtista')
            ->select('artistas.*', 'regiones.region')
            ->where([
                ['artistas.estado','=',1],
                ['regiones.zona','=',1]
            ])
            ->get();
            }

            $tipo=$data['tipo'];
           // dd($artistas);
            $zona=1;
        return view('rankingseleccionados')->with('artistas',$artistas)
                                        ->with('tipo',$tipo)
                                     ->with('zona',$zona);
     }
     public function seleccionadosCentro(Request $request){
        $data=request();
        if($data['tipo']>0){

        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->join('notasPreseleccion', 'artistas.id', '=', 'notasPreseleccion.idArtista')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',1)
        ->where('artistas.tipoArtista','=',$data['tipo'])
        ->where('regiones.zona','=',2)
        ->get();
    }else{
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->join('notasPreseleccion', 'artistas.id', '=', 'notasPreseleccion.idArtista')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',1)
        ->where('regiones.zona','=',2)
        ->get();
    }
       $tipo=$data['tipo'];


        $zona=2;
        return view('rankingseleccionados')->with('artistas',$artistas)
                                            ->with('tipo',$tipo)
                                            ->with('zona',$zona);
     }
     public function seleccionadosSur(Request $request){
        $data=request();
        if($data['tipo']>0){

        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->join('notasPreseleccion', 'artistas.id', '=', 'notasPreseleccion.idArtista')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',1)
        ->where('artistas.tipoArtista','=',$data['tipo'])
        ->where('regiones.zona','=',3)
        ->get();
    }else{
        $artistas = DB::table('artistas')
        ->join('regiones', 'regiones.id', '=', 'artistas.region')
        ->join('notasPreseleccion', 'artistas.id', '=', 'notasPreseleccion.idArtista')
        ->select('artistas.*', 'regiones.region')
        ->where('artistas.estado','=',1)
        ->where('regiones.zona','=',2)
        ->get();
    }
       $tipo=$data['tipo'];
        $zona=3;
        return view('rankingseleccionados')->with('artistas',$artistas)
                                            ->with('tipo',$tipo)
                                            ->with('zona',$zona);
     }

     public function rankingSeleccionados(Request $request){
        $data=request();
        if($data['tipo']>0){
            $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->join('notasPreseleccion', 'artistas.id', '=', 'notasPreseleccion.idArtista')
            ->select('artistas.*', 'regiones.region')
            ->where('artistas.tipoArtista','=',$data['tipo'])
            ->where('artistas.estado','=',1)
            ->get();
        }else{
            $artistas = DB::table('artistas')
            ->join('regiones', 'regiones.id', '=', 'artistas.region')
            ->join('notasPreseleccion', 'artistas.id', '=', 'notasPreseleccion.idArtista')
            ->select('artistas.*', 'regiones.region')
            ->where('artistas.tipoArtista','=',$data['tipo'])
            ->where('artistas.estado','=',1)
            ->get();
        }
        $tipo=$data['tipo'];
        $zona=0;
        return view('rankingseleccionados')->with('artistas',$artistas)
                                    ->with('tipo',$tipo)
                                     ->with('zona',$zona);
     }


    
  

   
}
