<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $user = new \App\User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        if($user->save()){
            return response()->json($user,201);
        }
        return response()->json(null,204);
    }

    public function showAll(){
        return response()->json(\App\User::all(),200);
    }
}
