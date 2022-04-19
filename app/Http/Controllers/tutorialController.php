<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Materium;
use App\Models\Grupo;
use App\Models\UsuarioMaterium;

class tutorialController extends Controller
{
    public function create(Request $request){
        try{
            $insert['Fech_SR']=$request['fecha'];
            $insert['HoraInic_SR']=$request['horaIni'];
            $insert['NumePeri_SR']=$request['NumPeri'];
            $insert['NumeEstu_SR']=$request['NumEstu'];
            $insert['EstaAten_SR']=$request['EstaAten'];
            $insert['Moti_SR']=$request['Moti'];
            $insert['Dia_SR']=$request['Dia'];
            $insert['HoraFina_SR']=$request['HoraFin'];

            SolicitudReserva::insert($insert);

            $response['message'] = 'Save successful';
            $response['success'] = true;
        
        }catch(\Exception $e){
            $response['message']=$e->getMessage();
            $response['succes']=false;
        }
        return $response;
    }
    public function obtenerUsuarios(){

        $respuesta =\DB::table('usuario')->get();
        return response()->json($respuesta);
        //return Usuario::all();
    }

    public function getGrupoMateria($id){
        $data = \DB::table('grupo')
        ->join('materia', 'SisM_UM', '=', 'SisM_M')
        ->select('grupo.Nume_G', 'grupo.Nomb_M')
        ->where('Id_U_G', '=', $id)
        ->get();

        $response['data']=$data;
        $response['success']=true;

        return $response;
    }

    public function obtenerMaterias(){
        $data = \DB::table('materia')
        ->join('usuario_materia', 'SisM_UM', '=', 'SisM_M')
        ->join('usuario', 'Id_U', '=', 'Id_U_UM')
        ->select('materia.SisM_M','materia.Nomb_M')
        ->where('Id_U', '=', 'doc0213')
        ->get();

        $response['data']=$data;
        $response['success']=true;

        return $response;
    }
    public function obtenerGrupos($id){
        $data = \DB::table('grupo')
        ->join('materia', 'SisM_M', '=', 'SisM_M_G')
        ->select('Nume_G', 'Nomb_M')
        ->where('Id_U_G', '=', $id)
        ->get();

        $response['data']=$data;
        $response['success']=true;

        return $response;
        /*
        select Nume_G
        from grupo where SisM_M_G = "2006018" and Id_U_G = "doc0211";
        
        $data = \DB::table('grupo')
        ->select('grupo.Nume_G')
        ->where('Id_U_G', '=', $id)
        ->where('SisM_M_G', '=', '2006018')
        ->get();

        $response['data']=$data;
        $response['success']=true;
        */
        return $response;
    }
}
