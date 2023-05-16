<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\PeriodoContable;

class PeriodoContableController extends Controller
{
    //

    public function index(Request $request)
    {
        $periodo_contables = PeriodoContable::with('empresa','user')->paginate(20);
        return view('periodo_contable.index',['periodo_contables' => $periodo_contables]);
    }

    public function create(){
        $empresas = Empresa::orderBy('nombre','asc')->get();
        return view('periodo_contable.create',['empresas' => $empresas]);
    }


    public function store(Request $request){
        $this->validate($request,[
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'empresa_id' => 'required'
        ]);

        PeriodoContable::create([
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'user_id' => auth()->user()->id,
            'empresa_id' => $request->empresa_id
        ]);

        return redirect()->route('periodo_contables.index');
    }

    public function destroy($id)
    {
        $periodo_contable = PeriodoContable::findOrFail($id);
        $periodo_contable->delete();

        session()->flash('success', 'El registro ha sido eliminado correctamente.');


        return redirect()->route('periodo_contables.index');
    }
}
