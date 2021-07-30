<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    // public function index()
    // {
    //     return view('auth.login');
    // }

    // public function customLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('welcome')
    //                     ->withSuccess('Signed in');
    //     }

    //     return redirect("login")->withSuccess('Login details are not valid');
    // }

    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('welcome');
    //     }

    //     return redirect('login')->withSuccess('You are not allowed to access');
    // }

    // public function logout() {
    //     // Session::flush();
    //     session()->flush();
    //     Auth::logout();

    //     return Redirect('login');
    // }
}
