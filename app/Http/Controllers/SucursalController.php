<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    //

    public function index(Request $request){
        $sucursales = Sucursal::with('empresa')->paginate(20);
        
        return view('sucursal.index',['sucursales' => $sucursales]);
    }

    public function create(){
        $empresas = Empresa::orderBy('nombre','asc')->get();
        return view('sucursal.create',['empresas' => $empresas]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'encargado' => 'required|max:30',
            'direccion' => 'required|max:200',
            'empresa_id' => 'required'
        ]);

        Sucursal::create([
            'encargado' => $request->encargado,
            'direccion' => $request->direccion,
            'empresa_id' => $request->empresa_id
        ]);

        return redirect()->route('sucursales.index');
    }

    public function destroy($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->delete();

        session()->flash('success', 'El registro ha sido eliminado correctamente.');


        return redirect()->route('sucursales.index');
    }
}
