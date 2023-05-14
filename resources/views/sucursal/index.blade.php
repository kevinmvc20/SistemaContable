@extends('layouts.app')

@section('titulo')
    Lista de Sucursales
@endsection

@section('contenido')
<div>
    <div class="p-3">
        <a href="{{ route('sucursales.create') }}"><button class="bg-sky-600 hover:bg-sky-700 transition-colors 
            cursor-pointer uppercase font-bold p-3 text-white rounded-lg">Nuevo</button></a>  
    </div>
    <table class="table-border container mx-auto">
        <thead>
        <tr>
            <th class="border px-4 py-2">Id</th>
            <th class="border px-4 py-2">Encargado</th>
            <th class="border px-4 py-2">Direccion</th>
            <th class="border px-4 py-2">Empresa</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sucursales as $sucursal )
        <tr>
            <td class="border px-4 py-2 text-center">{{$sucursal->id}}</td>
            <td class="border px-4 py-2 text-center">{{$sucursal->encargado}}</td>
            <td class="border px-4 py-2 text-center">{{$sucursal->direccion}}</td>
            <td class="border px-4 py-2 text-center">{{$sucursal->empresa->nombre}}</td>
            
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="my-10">
        {{$sucursales->links()}}
    </div>
</div>
@endsection