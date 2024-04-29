<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return redirect('registrar');
    }



    public function store(Request $request)
    {
        $resultados = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email|',
            'password' => 'required'

        ]);


        if ($resultados->fails()) {
            return redirect()
                ->back()
                ->withErrors($resultados)
                ->withInput();
        }

        $user = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ];

        User::Create($user);

        return redirect('login');


    }


}
