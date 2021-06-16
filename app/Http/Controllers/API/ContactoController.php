<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use \App\User;

class ContactoController extends Controller
{
    public function register(Request $request){
        $contacto = new \App\Contacto();
        $contacto->nombre    = $request->nombre;
        $contacto->correo    = $request->correo;
        $contacto->telefono  = $request->telefono;

        if($contacto->save()){
            return response()->json($contacto,201);
        } else {
            return response()->json(['error' => 'Ocurrió un error al registrar el contacto'],201);
        }
    }

    public function showAll(){
        return response()->json(\App\Contacto::all(),200);
    }
}
