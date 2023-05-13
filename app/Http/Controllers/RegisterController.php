<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request,[
            'ci' => 'required',
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'telefono' =>'required',
            'password' => 'required|confirmed|min:6'
        ]);

        //crear persona y usuario

        //Persona::create([
        //    'ci' => $request->ci,
        //    'name' => $request->name,
        //    'telefono' => $request->telefono
        //]);

        $persona = new Persona();
        $persona->ci = $request->ci;
        $persona->name = $request->name;
        $persona->telefono = $request->telefono;
        $persona->save();


        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'persona_id' =>$persona->id,
            'password' => Hash::make($request->password),            

        ]);

        //autenticar
        auth()->attempt($request->only('email','password'));

        //redireccionar
        return view('principal');
    }
}
