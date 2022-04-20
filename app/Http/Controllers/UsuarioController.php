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

        try{
            $valida = $request->validate([
                'nombres' => 'required|min:3|max:40|alpha',
                'apellidoP' => 'required|min:3|max:60|alpha',
                'correo' => 'required|max:60|min:3|email',
                'contrasenia' => 'required|max:14|min:1',
                'codsis' => 'required|numeric|unique:Usuario,Id_U'
            ]);

            $datosUsuario = request()->except('_token');
            $datosUsuario = request()->all();
            $usuario = new Usuario();
            $usuario->Id_U=$request->codsis;
            $usuario->Nomb_U=strtoupper($request->nombres);
            $usuario->Corr_U=$request->correo;
            $usuario->Cont_U=$request->contrasenia;
            $usuario->ApelPate_U=strtoupper($request->apellidoP);
            $usuario->ApelMate_U=strtoupper($request->apellidoM);
            if($request->docente == 'on'){
                $usuario->Rol_U=1;
            }
            if ($request->admin == 'on') {
                $usuario->Rol_U=2;
            }
            $usuario->save();
            return response("Registrado exitosamente");
        }catch(Execption $e){
            return response($e->getMessage());
        }
    }

    public function show(Usuario $usuario){

    }
    public function edit(Usuario $usuario){

    }
}

?>
