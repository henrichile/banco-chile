<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Administradores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $role = auth()->user()->roles()->first()->name;
        if($role=='invitado'){
            return redirect()->route('transmision.front') ;
        }
        $sql="SELECT * FROM `users`
        INNER JOIN role_user on users.id=role_user.user_id";
        $adminlist=DB::select($sql);
        return view('administradores')->with("administradores",$adminlist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = auth()->user()->roles()->first()->name;
        $roles= Role::all();
        return view('administradorNuevo')->with("roles",$roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'clave' => 'required',
            'rol' => 'required',

        ]);

        $user = new User();
        $user->name = $data['nombre'];
        $user->email=$data['correo'];
        $user->password= bcrypt($data['clave']);
        $user->password2= $data['clave'];
        $user->save();
        $roleuser = User::find($user->id);
        $user_superadmin = Role::where('name',  $data['rol'])->first();
        $roleuser->roles()->attach($user_superadmin);

        $request->session()->flash('alert-success', 'usuario insertado con exito!!');
        return redirect()->action('AdministradoresController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function show(Administradores $administradores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function edit(Administradores $administradores)
    {
        $role = auth()->user()->roles()->first()->name;
        if($role=='invitado'){
            return redirect()->route('transmision.front') ;
        }

        $data=request();
        if(!isset($data['id']) || empty($data['id'])){
            $id=1;

        }else{
            $id=$data['id'];
        }
        
        $sql = "SELECT * FROM role_user where user_id=?";
        $rolid= DB::select($sql,array($id));
        $idrol=$rolid[0]->role_id;
        $rol= Role::find(['id'=>$idrol]);
        $administrador= User::find(['id'=>$id]);
        return view('administradorModificar',compact('administrador','rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administradores $administradores)
    {
        $data=request()->validate([
            'nombre' => 'required',
            'correo' => 'required',
        ]);
        $data=request();
        $user =  User::find($data['id']);
        $user->name = $data['nombre'];
        $user->email=$data['correo'];
        if(!empty($data['clave'])){
            $user->password= bcrypt($data['clave']);
        }
        $user->save();
        /*$rol= Role::where('name','admin')->first();
        DB::table('role_user')
            ->where('user_id', $data['id'])
            ->update([
                'role_id' => $rol->id,
                ]);*/
        $request->session()->flash('alert-success', 'Usuario actualizado con exito!!');
        return redirect()->action('AdministradoresController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administradores $administradores, Request $request)
    {
        $data=request();
        DB::table('role_user')->where('user_id', '=', $data['id'])->delete();
        $bh = User::where('id',$data['id'])->first();
        try {
            $bh->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            $request->session()->flash('alert-error', 'No se pudo eliminar el Administrador!!');
        }
        return redirect()->action('AdministradoresController@index')->with('message', 'Administrador eliminado con exito!!');
    }
}
