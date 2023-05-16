@extends('layouts.app')

@section('titulo')
    Registra un Periodo Contable
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('periodo_contables.store')}}" method="POST" novalidate>
                @csrf

                <div class="mb-5">
                    <label for="fecha_inicio" class="mb-2 block uppercase text-gray-500 font-bold">
                        Fecha Inicio
                    </label>

                    <input id="fecha_inicio" name="fecha_inicio" type="date"  
                        class="border p-3 w-full rounded-lg @error('fecha_inicio') border-red-500  @enderror"
                        value="{{old('fecha_inicio')}}"
                    >

                    @error('fecha_inicio')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="fecha_fin" class="mb-2 block uppercase text-gray-500 font-bold">
                        Fecha Fin
                    </label>

                    <input id="fecha_fin" name="fecha_fin" type="date" 
                        class="border p-3 w-full rounded-lg @error('fecha_fin') border-red-500  @enderror"
                        value="{{old('fecha_fin')}}"
                    >

                    @error('fecha_fin')
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

                <input type="submit" value="Crear Periodo Contable" 
                    class="bg-sky-600 hover:bg-sky-700 transition-colors 
                    cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>
    </div>
@endsection