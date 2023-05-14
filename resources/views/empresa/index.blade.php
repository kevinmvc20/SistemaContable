@extends('layouts.app')

@section('titulo')
    Lista de Empresas
@endsection

@section('contenido')
<div>
    <div class="p-3">
        <a href="{{ route('empresas.create') }}"><button class="bg-sky-600 hover:bg-sky-700 transition-colors 
            cursor-pointer uppercase font-bold p-3 text-white rounded-lg">Nuevo</button></a>  
    </div>
    <table class="table-border container mx-auto">
        <thead>
        <tr>
            <th class="border px-4 py-2">Id</th>
            <th class="border px-4 py-2">Gerente</th>
            <th class="border px-4 py-2">NIT</th>
            <th class="border px-4 py-2">Nombre</th>
            <th class="border px-4 py-2">Rubro</th>
            <th class="border px-4 py-2">Direccion</th>
            <th class="border px-4 py-2">Telefono</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($empresas as $empresa )
        <tr>
            <td class="border px-4 py-2 text-center">{{$empresa->id}}</td>
            <td class="border px-4 py-2 text-center">{{$empresa->gerente}}</td>
            <td class="border px-4 py-2 text-center">{{$empresa->nit}}</td>
            <td class="border px-4 py-2 text-center">{{$empresa->nombre}}</td>
            <td class="border px-4 py-2 text-center">{{$empresa->rubro}}</td>
            <td class="border px-4 py-2 text-center">{{$empresa->direccion}}</td>
            <td class="border px-4 py-2 text-center">{{$empresa->telefono}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="my-10">
        {{$empresas->links()}}
    </div>
</div>
@endsection