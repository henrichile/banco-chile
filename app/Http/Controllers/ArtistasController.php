<?php

namespace App\Http\Controllers;

use App\Artistas;
use App\Mail\registroBanda;
use App\Mail\registroSolista;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function solista()
    {
    
        return view('formSolista');
    }

    public function banda()
    {
    
        return view('formBanda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSolista(Request $request)
    {
        $data=request()->validate([
            'nombre' => 'required',
            'rut' => 'required',
            'correo' => 'required',
            'dia'=> 'required',
            'mes'=> 'required',
            'ano'=> 'required',
            'telefono'=> 'required',
            'edad' => 'required',
            'pista' => 'required|mimes:mp3,mp4',
            'autorizacion' => 'required_if:edad,<,18|mimes:pdf,doc,docx',
            'colegio' => 'required_if:edad,<,18',
            'curso' => 'required_if:edad,<,18',


        ]);
        $data=request();

        try {
           

        $date=date('Y-m-d');
        $nacimiento=$data['ano']."-".$data['mes']."-".$data['dia'];
        $ruta_pista="";
        if(isset($request['pista']) && !empty($request['pista'])){
            $ruta_pista=$request['pista']->store('uploads','public');
        }
        $id=DB::table('artistas')->insertGetId([
            'created_at'=> $date,
            'tipoArtista' => 1,
            'email' => $data['correo'],
            'telefono' => $data['telefono'],
            'archivo' => $ruta_pista,
            'region' => $data['region'],
        ]);
       
        if($data['edad']>=18){
            $id2=DB::table('singles')->insertGetId([
                'created_at'=> $date,
                'idArtista' => $id,
                'nombre' => $data['nombre'],
                'rut' => $data['rut'],
                'fechaNacimiento' => $nacimiento,
                'colegio' => "",
                'curso' => "",
                'autorizacion' => "",
               
            ]);
        }else{
            if(isset($request['autorizacion']) && !empty($request['autorizacion'])){
                $ruta_autorizacion=$request['autorizacion']->store('uploads','public');
            }
            $id2=DB::table('singles')->insertGetId([
                'created_at'=> $date,
                'idArtista' => $id,
                'nombre' => $data['nombre'],
                'rut' => $data['rut'],
                'fechaNacimiento' => $nacimiento,
                'colegio' => $data['colegio'],
                'curso' => $data['curso'],
                'autorizacion' => $ruta_autorizacion,
            ]);

        }
          
        Mail::to($data['correo'])->send(new registroSolista($data['nombre'],$data['correo']));
        $request->session()->flash('alert-success', 'Registro completado con exito!!');
        return view('resultado')->with('resultado',$resultado);
        } catch (\Throwable $th) {
            $request->session()->flash('alert-error', 'Ocurrio un error al completar el registro!!');
            return back()->withInput();
        }
        
       
    }


    public function storeBanda(Request $request)
    {
        $data=request()->validate([
            'banda' => 'required',
            'responsable' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'pista' => 'required|mimes:mp3,mp4'
        ]);
        $data=request();

        try {
            //try {
        $ruta_pista="";
        $date=date('Y-m-d');
        if(isset($request['pista']) && !empty($request['pista'])){
            $ruta_pista=$request['pista']->store('uploads','public');
        }
        $id=DB::table('artistas')->insertGetId([
            'created_at'=> $date,
            'tipoArtista' => 2,
            'email' => $data['correo'],
            'telefono' => $data['telefono'],
            'archivo' => $ruta_pista,
            'region' => $data['region'],
        ]);
        
        $id2=DB::table('bandas')->insertGetId([
                'created_at'=> $date,
                'idArtista' => $id,
                'nombreBanda' => $data['banda'],
                'colegio' => "",
                'curso' => "",
                'region' => $data['region'],
                'responsable' => $data['responsable'],
                'participantes' => $data['integrantes']
            ]);
    for($k=1;$k<=$data['integrantes'];$k++){
        $nacimiento=$data['ano'.$k]."-".$data['mes'.$k]."-".$data['dia'.$k];
        if($data['edad'.$k]>=18){

            $id3=DB::table('integrantesBanda')->insertGetId([
                'created_at'=> $date,
                'idArtista' => $id,
                'idBanda' => $id2,
                'nombre' => $data['nombre'.$k],
                'rut' => $data['rut'.$k],
                'fechaNacimiento' => $nacimiento,
                'autorizacion' => ""
            ]);
        }else{
            if(isset($request['autorizacion'.$k]) && !empty($request['autorizacion'.$k])){
                $ruta_autorizacion=$request['autorizacion'.$k]->store('uploads','public');
            }else{
                $ruta_autorizacion="";
            }
            $id3=DB::table('integrantesBanda')->insertGetId([
                'created_at'=> $date,
                'idArtista' => $id,
                'idBanda' => $id2,
                'nombre' => $data['nombre'.$k],
                'rut' => $data['rut'.$k],
                'fechaNacimiento' => $nacimiento,
                'autorizacion' => $ruta_autorizacion,
            ]);

        }
    }
        Mail::to($data['correo'])->send(new registroBanda($data['nombre'],$data['correo']));
        $request->session()->flash('alert-success', 'Registro completado con exito!!');
        $resultado=true;
        /*} catch (\Throwable $th) {
            $request->session()->flash('alert-error', 'Ocurrio un error al completar el registro!!');
            $resultado=false;
        }*/
        
        return view('resultado')->with('resultado',$resultado);
        } catch (\Throwable $th) {
            $request->session()->flash('alert-error', 'Ocurrio un error al completar el registro!!');
            return back()->withInput();
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function listadoIntegrantes(Request $request){

        $data=request();
        $msj='
        ';
        for($i=1;$i<=$data['integrantes'];$i++){
        $msj.='
        <div class="col-md-4 p-0" style="padding:1px !important">
            <div class="form-group mb-1">
                <label for="nombre'.$i.'">'.$i.'.- Nombre</label>
                <input type="text" id="nombre'.$i.'" name="nombre'.$i.'" class="form-control " value="" placeholder="">
            </div>
        </div>
        <div class="col-md-2 p-0"  style="padding:1px !important">                
            <div class="form-group mb-1">
                <label for="correo">R.U.T</label>
                <input type="text" id="rut'.$i.'" name="rut'.$i.'" class="form-control " value="" placeholder="123456789-0" onchange="javascript:validarRut('.$i.')">
                <div id="error_rut'.$i.'" style="display:none">
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>R.U.T Invalido!!</strong>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-0"  style="padding:1px !important">   
            <div class="form-group mb-1">
                <label for="dia'.$i.'">Fecha de Nacimiento</label>
                <div style="clear:both">
                    <select id="dia'.$i.'" name="dia'.$i.'" class="form-control" onchange="javascript:calculaedad('.$i.')" style="width:70px;float:left; margin-right:3px" >';
                    for($j=1;$j<=31;$j++){
                        $msj.='<option value="'.$j.'">'.$j.'</option>';
                    }
                         $msj.='</select>
                    <select id="mes'.$i.'" name="mes'.$i.'" class="form-control" onchange="javascript:calculaedad('.$i.')"  style="width:70px;float:left; margin-right:3px" >';
                    for($j=1;$j<=12;$j++){
                        $msj.='<option value="'.$j.'">'.$j.'</option>';
                    }
                         $msj.='</select>
                         <select id="ano'.$i.'" name="ano'.$i.'" class="form-control" onchange="javascript:calculaedad('.$i.')"  style="width:90px;float:left" >';
                         for($j=1900;$j<=date('Y');$j++){
                             $msj.='<option value="'.$j.'">'.$j.'</option>';
                         }
                              $msj.='</select>
                </div>
            </div>
        </div>
        <div id="menor'.$i.'" class="col-md-3 p-0"  style="padding:1px !important;display:none">
                <div class="form-group mb-1">
                    <label for="exampleFormControlFile1">Subir Formulario menor de 18 años firmado por su tutor</label>
                    <input type="file" name="autorizacion'.$i.'" class="form-control-file  " id="autorizacion'.$i.'">
                </div>
        </div>
        <input type="hidden" name="edad'.$i.'" id="edad'.$i.'">
        ';
        }
        $dato['success']=true;
        $dato['path']=$msj;

        return $dato;
    }



    public function show(rc $rc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit(rc $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rc $rc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy(rc $rc)
    {
        //
    }
}
