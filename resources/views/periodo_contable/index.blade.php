@extends('layouts.app')

@section('titulo')
    Lista de periodos contables
@endsection

@section('contenido')
<div>
    <div class="p-3">
        <a href="{{ route('periodo_contables.create') }}"><button class="bg-sky-600 hover:bg-sky-700 transition-colors 
            cursor-pointer uppercase font-bold p-3 text-white rounded-lg">Nuevo</button></a>  
    </div>
    <table class="table-border container mx-auto">
        <thead>
        <tr>
            <th class="border px-4 py-2">Id</th>
            <th class="border px-4 py-2">Fecha Inicio</th>
            <th class="border px-4 py-2">Fecha Fin</th>
            <th class="border px-4 py-2">Empresa</th>
            <th class="border px-4 py-2">Usuario</th>
            <th class="border px-4 py-2">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($periodo_contables as $periodo_contable )
        <tr>
            <td class="border px-4 py-2 text-center">{{$periodo_contable->id}}</td>
            <td class="border px-4 py-2 text-center">{{$periodo_contable->fecha_inicio}}</td>
            <td class="border px-4 py-2 text-center">{{$periodo_contable->fecha_fin}}</td>
            <td class="border px-4 py-2 text-center">{{$periodo_contable->empresa->nombre}}</td>
            <td class="border px-4 py-2 text-center">{{$periodo_contable->user_id}}</td>
            <td class="border px-4 py-2 text-center">
                <form action="{{ route('periodo_contables.destroy', $periodo_contable->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class=" bg-red-700 hover:bg-red-700 transition-colors 
                    cursor-pointer uppercase font-bold p-3 text-white rounded-lg" type="submit">Eliminar</button>
                    
                </form> 
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="my-10">
        {{$periodo_contables->links()}}
    </div>
</div>
@endsection