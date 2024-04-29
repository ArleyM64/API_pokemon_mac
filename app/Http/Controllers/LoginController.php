<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        if(auth()->check()){
            return redirect('index');
        }else{
            return view('login');
        }
    }


    public function verificacion($id){
        if(Auth::check()){
            return view('pokemon', compact('id'));
        }else{
            return redirect()->route('login');
        }
    }

    public function check(Request $request){
        $resultados = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'

        ]);

        if ($resultados->fails()) {
            return redirect()
            ->back()
            ->withErrors($resultados)
            ->withInput();
        }

        $data['email'] = $request->get('email');
        $data['password'] = $request->get('password');

        if(Auth::attempt($data)){

            $user = Auth::User();
            return redirect()->route('index');
        }
        return back();

    }
    public function exit(){
        Auth::logout();
        return redirect()->route('login');
    }
}
