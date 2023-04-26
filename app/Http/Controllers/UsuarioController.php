<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarios(){
        return view('/usuarios/usuarios');
    }

    public function registrar(Request $request){
        $usuario = new Usuario();
        $usuario->correo=$request->correo;
        $usuario->contrasena=$request->contrasena;
        $usuario->numero_documento=$request->numero_documento;
        $usuario->nombres=$request->nombres;
        $usuario->primerApellido=$request->primerApellido;
        $usuario->segundoApellido=$request->segundoApellido;
        if ($request->hasFile('imagen')) {

            $imagen=$request->file('imagen');
            $nombre_imagen = $usuario->nombres.'_'.$usuario->primerApellido.'.'.$imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagenes/usuarios/'),$nombre_imagen);

            $path = url('imagenes/usuarios/'.$nombre_imagen);
            $usuario->imagen = $path;
        }
        $usuario->telefono=$request->telefono;
        $usuario->sexo=$request->sexo;
        //FORMATO DE DATE EN SQL  AÑO-MES-DIA
        $fecha = date('Y-m-d',strtotime($request->fechaNacimiento));
        $usuario->fechaNacimiento=$fecha;
        $usuario->idTiposdocumentos=$request->idTiposdocumentos;
        $usuario->idTiposusuarios='3';
        //dd($usuario);
        $usuario->save();
        return redirect()->route('uruarios'); //Redirige a otra vista
    }

    public function buscar_correo(Request $request)
    {   //VALIDAR EXISTENCIA
        $correo = $request->input('correo');
        $usuario = Usuario::where('correo', $correo)->first();

        if ($usuario) {
            return 1;
        } else {
            return 0;
        }
    }

    public function buscar_documento_identidad(Request $request)
    {   //VALIDAR EXISTENCIA
        $numeroDocumento = $request->input('numero_documento');
        $usuario = Usuario::where('numero_documento', $numeroDocumento)->first();

        if ($usuario) {
            return 1;

            return redirect()->route('uruarios'); //Redirige a otra vista
        } else {
            return 0;
        }
    }


    public function buscar_logeo(Request $request)
    {   //VALIDAR EXISTENCIA
        $correo = $request->input('correo');
        $corr = Usuario::where('correo', $correo)->first();
        $contrasena = $request->input('contrasena');
        $contra = Usuario::where('contrasena', $contrasena)->first();

        if ($corr && $contra) {
            return 1;
        } else {
            return 0;
        }
    }

    public function regresar_index(){
        return view('/index');
    }
}
