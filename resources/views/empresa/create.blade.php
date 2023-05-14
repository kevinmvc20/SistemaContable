@extends('layouts.app')

@section('titulo')
    Registra una Empresa
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('empresas.store')}}" method="POST" novalidate>
                @csrf

                <div class="mb-5">
                    <label for="gerente" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre Gerente
                    </label>

                    <input id="gerente" name="gerente" type="text" 
                        placeholder="Nombre del Gerente" class="border p-3 w-full rounded-lg @error('gerente') border-red-500  @enderror"
                        value="{{old('gerente')}}"
                    >

                    @error('gerente')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre de la Empresa
                    </label>

                    <input id="nombre" name="nombre" type="text" 
                        placeholder="Nombre de la Empresa" class="border p-3 w-full rounded-lg @error('nombre') border-red-500  @enderror"
                        value="{{old('nombre')}}"
                    >

                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="rubro" class="mb-2 block uppercase text-gray-500 font-bold">
                        Rubro
                    </label>

                    <input id="rubro" name="rubro" type="text" placeholder="Rubro de la Empresa" class="border p-3 w-full rounded-lg
                        @error('rubro') border-red-500  @enderror" value="{{old('rubro')}}"
                    >

                    @error('rubro')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="nit" class="mb-2 block uppercase text-gray-500 font-bold">
                        NIT
                    </label>
                    
                    <input id="nit" name="nit" type="number" placeholder="NIT .." class="border p-3 w-full rounded-lg
                        @error('nit') border-red-500  @enderror" value="{{old('nit')}}"
                    >

                    @error('nit')
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
                    <label for="telefono" class="mb-2 block uppercase text-gray-500 font-bold">
                        Telefono
                    </label>
                    
                    <input id="telefono" name="telefono" type="text" placeholder="Añade un Telefono" class="border p-3 w-full rounded-lg
                        @error('telefono') border-red-500  @enderror"
                    >

                    @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear Empresa" 
                    class="bg-sky-600 hover:bg-sky-700 transition-colors 
                    cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>
    </div>
@endsection