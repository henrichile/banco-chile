<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Redirect;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\Exception;

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
    public function index()
    {
        $sql1="select c.idTrivia as trivia,e.area as nombrearea ,b.name as nombre,b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=1 group by b.email,e.area order by total DESC";
        $UsuariosTrivias1= DB::select($sql1);
        $totalUsuariosTrivia1=count($UsuariosTrivias1);

        $sql2="select c.idTrivia as trivia,e.area as nombrearea ,b.name as nombre,b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=2 group by b.email,e.area order by total DESC";
        $UsuariosTrivias2= DB::select($sql2);
        $totalUsuariosTrivia2=count($UsuariosTrivias2);

        $sql3="select c.idTrivia as trivia,e.area as nombrearea ,b.name as nombre,b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=3 group by b.email,e.area order by total DESC";
        $UsuariosTrivias3= DB::select($sql3);
        $totalUsuariosTrivia3=count($UsuariosTrivias3);


        return view('dashboard')->with("totalUsuariosTrivia1",$totalUsuariosTrivia1)
                                ->with("UsuariosTrivias1",$UsuariosTrivias1)
                                ->with("totalUsuariosTrivia2",$totalUsuariosTrivia2)
                                ->with("UsuariosTrivias2",$UsuariosTrivias2)
                                ->with("totalUsuariosTrivia3",$totalUsuariosTrivia3)
                                ->with("UsuariosTrivias3",$UsuariosTrivias3);
    }

    public function show()
    {
        $id=auth()->user()->id;      
        $user = User::find($id);
        $idTrivia=3;

        $sql = "select * from preguntas_usuarios a
        inner join preguntas as b  on a.idPregunta=b.id
        where a.idUser=? and b.idTrivia=?";
        $preguntasUsuario2= DB::select($sql,array($id,$idTrivia));
        $totalPreguntas2=count($preguntasUsuario2);
        if(count($preguntasUsuario2)==0){
            
            $sql2 = "select * from preguntas where idTrivia=? order by rand() limit 20;";
            $preguntasnuevas= DB::select($sql2,array($idTrivia));
            foreach($preguntasnuevas as $item){
                $idP=DB::table('preguntas_usuarios')->insertGetId([
                    'idUser' => $id,
                    'idPregunta' => $item->id,
                    'estado' => 0,
                ]);
            }
            $sql = "select a.id,a.idUser,a.respuesta,a.segundos,a.estado,a.idPregunta from preguntas_usuarios a
            inner join preguntas as b  on a.idPregunta=b.id
            where a.idUser=? and b.idTrivia=? and estado=0 limit 1";
            $preguntasUsuario= DB::select($sql,array($id,$idTrivia));

            $sql3 = "select a.id,a.idUser,a.respuesta,a.segundos,a.estado,a.idPregunta from preguntas_usuarios a
            inner join preguntas as b  on a.idPregunta=b.id
            where a.idUser=? and b.idTrivia=?";
            $preguntasUsuario2= DB::select($sql3,array($id,$idTrivia));
            $totalPreguntas2=count($preguntasUsuario2);

            $sql4 = "select a.id,a.idUser,a.respuesta,a.segundos,a.estado,a.idPregunta from preguntas_usuarios a
            inner join preguntas as b  on a.idPregunta=b.id
            where a.idUser=? and b.idTrivia=? and estado=0";
            $preguntasUsuario4= DB::select($sql4,array($id,$idTrivia));
            $pendientes=count($preguntasUsuario4);

            $sql5 = "select a.id,a.idUser,a.respuesta,a.segundos,a.estado,a.idPregunta from preguntas_usuarios a
            inner join preguntas as b  on a.idPregunta=b.id
            where a.idUser=? and b.idTrivia=? and estado>0";
            $preguntasUsuario5= DB::select($sql5,array($id,$idTrivia));
            $respondidas=count($preguntasUsuario5);



        }else{
            $sqlP = "select a.id,a.idUser,a.respuesta,a.segundos,a.estado,a.idPregunta from preguntas_usuarios a
            inner join preguntas as b  on a.idPregunta=b.id
            where a.idUser=? and b.idTrivia=? and estado=0 ";
            $preguntasUsuarioP= DB::select($sqlP,array($id,$idTrivia));
            $pendientes=count($preguntasUsuarioP);

            if($pendientes>0){
                $sql5 = "select a.id,a.idUser,a.respuesta,a.segundos,a.estado,a.idPregunta from preguntas_usuarios a
                inner join preguntas as b  on a.idPregunta=b.id
                where a.idUser=? and b.idTrivia=? and estado>0";
                $preguntasUsuario5= DB::select($sql5,array($id,$idTrivia));
                $respondidas=count($preguntasUsuario5);

            $sql = "select a.id,a.idUser,a.respuesta,a.segundos,a.estado,a.idPregunta from preguntas_usuarios a
            inner join preguntas as b  on a.idPregunta=b.id
            where a.idUser=? and b.idTrivia=? and estado=0 limit 1";
            $preguntasUsuario= DB::select($sql,array($id,$idTrivia));
            }
        }


    if($pendientes>0){
          $sqlUp = "update preguntas_usuarios set estado=1 where id=? ";
          $preguntasUsuarioUp= DB::select($sqlUp,array($preguntasUsuario[0]->id));
        return view('trivia')->with("preguntas",$preguntasUsuario)
                             ->with("totalPreguntas",$totalPreguntas2)
                             ->with("respondidas",$respondidas)
                             ->with("pendientes",$pendientes);
       }else{
            return view('salida_video');
        }
    }

    public function entrada(){
        return view('entrada');
    }

    public function finalizada(){
        return view('salida');
    }



    public function validaPregunta(Request $request)
    {
        $data=request()->validate([
            'idPreguntaUsuario'=> 'required',
            'idPregunta'=> 'required',
            'idRespuesta'=> 'required',
            'segundos' => 'required'
        ]);
        $videosbuenas[0]=asset('videos/buenos/buena1.mp4');
        $videosbuenas[1]=asset('videos/buenos/buena2.mp4');
        $videosbuenas[2]=asset('videos/buenos/buena3.mp4');
        $videosbuenas[3]=asset('videos/buenos/buena4.mp4');
        $videosbuenas[4]=asset('videos/buenos/buena5.mp4');
        $videosbuenas[5]=asset('videos/buenos/buena6.mp4');
        $videosbuenas[6]=asset('videos/buenos/buena7.mp4');
        $videosbuenas[7]=asset('videos/buenos/buena8.mp4');
        $videosbuenas[8]=asset('videos/buenos/buena9.mp4');
        $videosbuenas[9]=asset('videos/buenos/buena10.mp4');


        $videosmalas[0]=asset('videos/malas/mala1.mp4');
        $videosmalas[1]=asset('videos/malas/mala2.mp4');
        $videosmalas[2]=asset('videos/malas/mala3.mp4');
        $videosmalas[3]=asset('videos/malas/mala4.mp4');
        $videosmalas[4]=asset('videos/malas/mala5.mp4');
        $videosmalas[5]=asset('videos/malas/mala6.mp4');
        $videosmalas[6]=asset('videos/malas/mala7.mp4');
        $videosmalas[7]=asset('videos/malas/mala8.mp4');
        $videosmalas[8]=asset('videos/malas/mala9.mp4');
        $videosmalas[9]=asset('videos/malas/mala10.mp4');
        $videosmalas[10]=asset('videos/malas/mala11.mp4');
        $id_user=Auth::user()->id;
        $sqlVer = "SELECT * FROM preguntas where id=? and idRespuesta=?";
        $correcta= DB::select($sqlVer,array($data['idPregunta'],$data['idRespuesta']));

        if(count($correcta)>0){
            $sqlUp = "update preguntas_usuarios set estado=2,segundos=?,respuesta=? where id=? ";
            $preguntasUsuarioUp= DB::select($sqlUp,array($data['segundos'],$data['idRespuesta'],$data['idPreguntaUsuario']));
            $saved=true;
            $num=random_int(0, 9);
            $video=$videosbuenas[$num];
        }else{
            $sqlUp = "update preguntas_usuarios set estado=3,respuesta=? where id=? ";
            $preguntasUsuarioUp= DB::select($sqlUp,array($data['idRespuesta'],$data['idPreguntaUsuario']));
            $saved=false;
            $num=random_int(0, 10);
            $video=$videosmalas[$num];
        }
        $data['success'] = $saved;
        $data['path'] = $video;
        return $data;
    }


    public function ranking1(){
        $id_user=Auth::user()->id;
        $sqlptje = "select c.idTrivia as trivia,e.area as nombrearea , b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=1 and a.idUser=? and a.estado=2 group by b.email,e.area";
        $puntajex= DB::select($sqlptje,array($id_user));
        $puntaje=0;
        if(count($puntajex)>0){
            $puntaje=$puntajex[0]->total;
        }
        
        $sqlptjet = "select c.idTrivia as trivia,e.area as nombrearea ,b.name as nombre,b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=1 and a.estado=2 group by b.email,e.area order by total DESC limit 50";
        $ranking= DB::select($sqlptjet,array($id_user));
        $i=1;
        $lugar=0;
        foreach($ranking as $itemr){
               if($itemr->usuario==$id_user){
                $lugar=$i;
               }
               $i++;
        }


        return view('ranking_trivia1')->with("puntaje",$puntaje)
                                      ->with("ranking",$ranking)
                                      ->with("lugar",$lugar);


    }

    public function ranking2(){
        $id_user=Auth::user()->id;
        $sqlptje = "select c.idTrivia as trivia,e.area as nombrearea , b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=2 and a.idUser=? and a.estado=2 group by b.email,e.area";
        $puntajex= DB::select($sqlptje,array($id_user));
        $puntaje=0;
        if(count($puntajex)>0){
            $puntaje=$puntajex[0]->total;
        }
        $sqlptjet = "select c.idTrivia as trivia,e.area as nombrearea ,b.name as nombre,b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=2 and a.estado=2 group by b.email,e.area order by total DESC limit 50";
        $ranking= DB::select($sqlptjet,array($id_user));
        $i=1;
        $lugar=0;
        foreach($ranking as $itemr){
               if($itemr->usuario==$id_user){
                $lugar=$i;
               }
               $i++;
        }
        return view('ranking_trivia2')->with("puntaje",$puntaje)
                            ->with("ranking",$ranking)
                            ->with("lugar",$lugar);


    }

    public function ranking3(){
        $id_user=Auth::user()->id;
        $sqlptje = "select c.idTrivia as trivia,e.area as nombrearea , b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=3 and a.idUser=? and a.estado=2 group by b.email,e.area";
        $puntajex= DB::select($sqlptje,array($id_user));
        $puntaje=0;
        if(count($puntajex)>0){
            $puntaje=$puntajex[0]->total;
        }
        $sqlptjet = "select c.idTrivia as trivia,e.area as nombrearea ,b.name as nombre,b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where c.idTrivia=3 and a.estado=2 group by b.email,e.area order by total DESC limit 50";
        $ranking= DB::select($sqlptjet,array($id_user));
        $i=1;
        $lugar=0;
        foreach($ranking as $itemr){
               if($itemr->usuario==$id_user){
                $lugar=$i;
               }
               $i++;
        }
    
        return view('ranking_trivia3')->with("puntaje",$puntaje)
                            ->with("ranking",$ranking)
                            ->with("lugar",$lugar);


    }
    public function acumulativo(){
        $id_user=Auth::user()->id;
        $sqlptje = "select c.idTrivia as trivia,e.area as nombrearea , b.email as correo,a.idUser as usuario, ((count(a.respuesta)*30) + sum(segundos)) as total from `preguntas_usuarios` as a
        inner join users as b on b.id=a.idUser
        inner join preguntas as c on c.id=a.idPregunta
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci
        where a.idUser=? and a.estado=2 group by b.email,e.area,c.idTrivia ";
        $puntajex= DB::select($sqlptje,array($id_user));
        $puntaje=0;
        if(count($puntajex)>0){
            $puntaje=$puntajex[0]->total;
        }
        $sqlptjet = "select e.area as nombrearea ,b.name as nombre,b.email as correo,a.idUser as usuario,((count(a.respuesta)*30) + sum(segundos)) as total,a.estado from preguntas_usuarios a
        inner join users as b on b.id=a.idUser 
        inner join preguntas as c on c.id=a.idPregunta 
        inner join usuarios_areas as d on d.correo=b.email COLLATE utf8mb4_0900_ai_ci 
        inner join areas as e on e.id=d.idArea COLLATE utf8mb4_0900_ai_ci 
        where a.estado=2 
        group by a.idUser,e.area order by total DESC limit 50";
        $ranking= DB::select($sqlptjet,array($id_user));
        $i=1;
        $lugar=0;
        foreach($ranking as $itemr){
               if($itemr->usuario==$id_user){
                $lugar=$i;
               }
               $i++;
        }
        return view('ranking_acumulativo')->with("puntaje",$puntaje)
                            ->with("ranking",$ranking)
                            ->with("lugar",$lugar);


    }

    public function area(){
        $id_user=Auth::user()->id;
        $sqlarea = "select * from  areas;";
        $areax= DB::select($sqlarea);
        $listadoAreas=array();
        foreach($areax as $itemArea){
            $sqltotarea="select count(a.idArea) as totalarea, b.area, b.id from usuarios_areas as a
            inner join areas as b on b.id=a.idArea
            where a.idArea=?
             group by a.idArea,a.id;";
            $totaArea= DB::select($sqltotarea,array($itemArea->id));
            $listadoAreas[$itemArea->id]['total']=count($totaArea);
            $listadoAreas[$itemArea->id]['area']=$itemArea->area;
            $listadoAreas[$itemArea->id]['idarea']=$itemArea->id;
            $sqlusers="select * from preguntas_usuarios as a
            inner join users as b on b.id=a.idUser
            inner join usuarios_areas as d on LOWER(d.correo)=LOWER(b.email) COLLATE utf8mb4_0900_ai_ci
            where d.idArea=?
            group by a.id,d.id";
            $partici= DB::select($sqlusers,array($itemArea->id));
            $totalParticipantes=count($partici);
            if($totalParticipantes>0){
                $setenta5=($totalParticipantes*100)/count($totaArea);
                $part70=($setenta5*70)/100;
            }else{
                $part70=0;
            }

            $sqltotpreg="select count(a.estado) as total from preguntas_usuarios as a
       inner join users as b on b.id=a.idUser
       inner join usuarios_areas as d on LOWER(d.correo)=LOWER(b.email) COLLATE utf8mb4_0900_ai_ci
       inner join preguntas as c on c.id=a.idPregunta
       where d.idArea=? GROUP BY a.id,d.id";
       $totpreg= DB::select($sqltotpreg,array($itemArea->id));

       $sqlpregbuenas="select count(a.estado) as correctas from preguntas_usuarios as a
       inner join users as b on b.id=a.idUser
       inner join usuarios_areas as d on LOWER(d.correo)=LOWER(b.email) COLLATE utf8mb4_0900_ai_ci
       inner join preguntas as c on c.id=a.idPregunta
       where d.idArea=?  and a.estado=2 GROUP BY a.id,d.id";
       $totpregbuenas= DB::select($sqlpregbuenas,array($itemArea->id));

       if(count($totpregbuenas)>0 && count($totpreg)>0){  
       $treinta=($totpregbuenas[0]->correctas*100)/$totpreg[0]->total;
       $part30=($treinta*30)/100;
       }else{
        $part30=0;
       }
       $totaptje=$part70+ $part30;
       $listadoAreas[$itemArea->id]['70']=$part70;
       $listadoAreas[$itemArea->id]['30']=$part30;
       $listadoAreas[$itemArea->id]['puntos']= $totaptje;
       //var_dump($listadoAreas[$itemArea->id]);
        }
        foreach ($listadoAreas as $key => $row) {
            $aux[$key] = $row['puntos'];
        }
        array_multisort($aux, SORT_DESC,$listadoAreas);
        return view('ranking_area')->with("listadoAreas",$listadoAreas);


    }

    public function area2(){
        $id_user=Auth::user()->id;
        $sqlarea = "select * from  areas;";
        $areax= DB::select($sqlarea);
        $listadoAreas=array();
        foreach($areax as $itemArea){
            $sqltotarea="select count(a.idArea) as totalarea, b.area, b.id from usuarios_areas as a
            inner join areas as b on b.id=a.idArea
            where a.idArea=?
             group by a.idArea,a.id;";
            $totaArea= DB::select($sqltotarea,array($itemArea->id));
            $listadoAreas[$itemArea->id]['total']=count($totaArea);
            $listadoAreas[$itemArea->id]['area']=$itemArea->area;
            $listadoAreas[$itemArea->id]['idarea']=$itemArea->id;
            $sqlusers="select distinct(a.idUser) from preguntas_usuarios as a
            inner join users as b on b.id=a.idUser
            inner join usuarios_areas as d on LOWER(d.correo)=LOWER(b.email) COLLATE utf8mb4_0900_ai_ci
            where d.idArea=?
            group by a.id,d.id";
            $partici= DB::select($sqlusers,array($itemArea->id));
            $totalParticipantes=count($partici);
            if($totalParticipantes>0){
                $setenta5=($totalParticipantes*100)/count($totaArea);
                $part70=($setenta5*70)/100;
            }else{
                $part70=0;
            }

            $sqltotpreg="select count(a.estado) as total from preguntas_usuarios as a
       inner join users as b on b.id=a.idUser
       inner join usuarios_areas as d on LOWER(d.correo)=LOWER(b.email) COLLATE utf8mb4_0900_ai_ci
       inner join preguntas as c on c.id=a.idPregunta
       where d.idArea=? GROUP BY a.id,d.id";
       $totpreg= DB::select($sqltotpreg,array($itemArea->id));

       $sqlpregbuenas="select count(a.estado) as correctas from preguntas_usuarios as a
       inner join users as b on b.id=a.idUser
       inner join usuarios_areas as d on LOWER(d.correo)=LOWER(b.email) COLLATE utf8mb4_0900_ai_ci
       inner join preguntas as c on c.id=a.idPregunta
       where d.idArea=?  and a.estado=2 GROUP BY a.id,d.id";
       $totpregbuenas= DB::select($sqlpregbuenas,array($itemArea->id));

       if(count($totpregbuenas)>0 && count($totpreg)>0){  
       $treinta=(count($totpregbuenas)*100)/count($totpreg);
       $part30=($treinta*30)/100;
       }else{
        $part30=0;
       }
       $totaptje=$part70+ $part30;
       $listadoAreas[$itemArea->id]['70']=$part70;
       $listadoAreas[$itemArea->id]['30']=$part30;
       $listadoAreas[$itemArea->id]['puntos']= $totaptje;
       //var_dump($listadoAreas[$itemArea->id]);
        }
        foreach ($listadoAreas as $key => $row) {
            $aux[$key] = $row['puntos'];
        }
        array_multisort($aux, SORT_DESC,$listadoAreas);
        return view('ranking_area2')->with("listadoAreas",$listadoAreas);


    }

   
}
