<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Materium;
use Illuminate\Http\Request;

class UsuarioController extends Controller{
    public function index(){

    }

    public function create(){
        $materias = Materium::all();
        return view('Prueba.prueba', compact('materias'));
    }

    public function store(Request $request){
        /*$valida = $request->validate([
            'nombres' => 'required|min:3|max:40|alpha',
            'apellidoP' => 'required|min:3|max:60|alpha',
            'correo' => 'required|max:60|min:3|email',
            'contrasenia' => 'required|max:14|min:1'
        ]);

        $datosUsuario = request()->except('_token');
        $datosUsuario = request()->all();
        $usuario = new Usuario();
        $usuario->Id_U='doc0200';
        $usuario->Nomb_U=$request->nombres;
        $usuario->Corr_U=$request->contrasenia;
        $usuario->Cont_U=$request->correo;
        $usuario->ApelPate_U=$request->apellidoP;
        $usuario->ApelMate_U=$request->apellidoM;
        if($request->docente == 'on'){
            $usuario->Rol_U=1;
        }
        if ($request->admin == 'on') {
            $usuario->Rol_U=2;
        }
        $usuario->save();
        return response()->json($datosUsuario);
        */
        try{
            $valida = $request->validate([
                'nombres' => 'required|min:3|max:40|alpha',
                'apellidoP' => 'required|min:3|max:60|alpha',
                'correo' => 'required|max:60|min:3|email',
                'contrasenia' => 'required|max:14|min:1'
            ]);
            $insert['Id_U']=$request['codSis'];
            $insert['Nomb_U']=$request['nombre'];
            $insert['Cont_U']=$request['contrasenia'];
            $insert['Corr_U']=$request['correo'];
            $insert['ApelPate_U']=$request['apellidoP'];
            $insert['ApelMate_U']=$request['apellidoM'];
            if($request->docente == 'on'){
                $insert['Rol_U']=1;
            }
            if ($request->admin == 'on') {
                $insert['Rol_U']=2;
            }
            $response['message']="Save succesful";
            $response['succes']=true;
        }catch(\Exception $e) {
            $response['message'] = $e->getMessage();
            $response['succes'] = true;
        }
    }

    public function show(Usuario $usuario){

    }
    public function edit(Usuario $usuario){

    }
}

?>
