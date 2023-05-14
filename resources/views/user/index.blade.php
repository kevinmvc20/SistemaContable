@extends('layouts.app')

@section('titulo')
    Lista de Usuaurios
@endsection


@section('contenido')
<div>
    <table class="table-border container mx-auto">
        <thead>
        <tr>
            <th class="border px-4 py-2">Id</th>
            <th class="border px-4 py-2">Celula de Identidad</th>
            <th class="border px-4 py-2">Nombre</th>
            <th class="border px-4 py-2">Usuario</th>
            <th class="border px-4 py-2">email</th>
            <th class="border px-4 py-2">telefono</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario )
        <tr>
            <td class="border px-4 py-2 text-center">{{$usuario->id}}</td>
            <td class="border px-4 py-2 text-center">{{$usuario->persona->ci}}</td>
            <td class="border px-4 py-2 text-center">{{$usuario->persona->name}}</td>
            <td class="border px-4 py-2 text-center">{{$usuario->username}}</td>
            <td class="border px-4 py-2 text-center">{{$usuario->email}}</td>
            <td class="border px-4 py-2 text-center">{{$usuario->persona->telefono}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="my-10">
        {{$usuarios->links()}}
    </div>
</div>
@endsection