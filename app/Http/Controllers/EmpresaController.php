<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    //
    public function index(Request $request){
        $empresas = Empresa::paginate(20);

        return view('empresa.index',['empresas' => $empresas]);
    }

    public function create(){
        return view('empresa.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'gerente' => 'required|max:30',
            'nit' => 'required',
            'nombre' => 'required|max:250',
            'rubro' => 'max:250|string',
            'direccion' => 'required|max:200',
            'telefono' => 'required|max:20'
        ]);

        Empresa::create([
            'gerente' => $request->gerente,
            'nit' => $request->nit,
            'nombre' => $request->nombre,
            'rubro' => $request->rubro,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono
        ]);

        return redirect()->route('empresas.index');
    }
}
