@extends('layouts.app')

@section('titulo')
    Registra una Sucursal
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('sucursales.store')}}" method="POST" novalidate>
                @csrf

                <div class="mb-5">
                    <label for="encargado" class="mb-2 block uppercase text-gray-500 font-bold">
                        Encargado
                    </label>

                    <input id="encargado" name="encargado" type="text" 
                        placeholder="Encargado" class="border p-3 w-full rounded-lg @error('encargado') border-red-500  @enderror"
                        value="{{old('encargado')}}"
                    >

                    @error('encargado')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="direccion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Direccion
                    </label>

                    <input id="direccion" name="direccion" type="text" 
                        placeholder="Añade una Direccion" class="border p-3 w-full rounded-lg @error('direccion') border-red-500  @enderror"
                        value="{{old('direccion')}}"
                    >

                    @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="empresa_id" class="mb-2 block uppercase text-gray-500 font-bold">
                        Empresa
                    </label>

                    <select name="empresa_id" id="empresa_id" class="border p-3 rounded-lg">
                        <option value="0">Seleccion:</option>
                        @foreach ($empresas as $empresa )
                            <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
                        @endforeach
                    </select>

                    @error('empresa_id')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear Sucursal" 
                    class="bg-sky-600 hover:bg-sky-700 transition-colors 
                    cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>
    </div>
@endsection