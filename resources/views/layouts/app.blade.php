<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>CloudBook - @yield('titulo')</title>
        
       
        
        
    </head>
    <body class="bg-gray-100">
        
        
            <div class="bg-white p-6 flex shadow-sm">
                <h1 class=" text-3xl font-black flex-grow">
                    CloudBook
                </h1>

                @auth
                    <nav class="flex gap-2 items-center">
                        {{-- <a href="#" class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase 
                            font-bold cursor-pointer">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                </svg>
                              
                            Crear
                        </a> --}}

                        <a class="font-bold text-gray-600 text-sm" href="#">Hola: 
                            <span class="font-normal"> {{auth()->user()->username}}</span>
                        </a>

                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Cerrar Sesion</button>
                        </form>

                    </nav>
                @endauth

                @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('login')}}">Login</a>
                    </nav>
                @endguest
                
            </div>

            <div class="flex h-screen bg">
                @auth
                <div class="border-r border-gray-200 hidden md:block p-6 w-64">
                    
                        <button id="dropdown-btn" type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">
                                Usuarios
                            </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="dropdown-menu" class="hidden">
                            <ul class="py-2 space-y-2">
                                <li>
                                    <a href="{{route('usuarios.index')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 dark:text-white dark:hover:bg-gray-700">Usuario</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-300 dark:text-white dark:hover:bg-gray-700">Bitacora</a>
                                </li>
                                <li>
                                    <a href="{{route('register')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-300 dark:text-white dark:hover:bg-gray-700">Crear Cuenta</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-300 dark:text-white dark:hover:bg-gray-700">Roles y Permisos</a>
                                </li>
                            </ul>
                        </div>

                        <button id="dropdown-btn-2" type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">
                                Empresa
                            </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="dropdown-menu-2" class="hidden">
                            <ul class="py-2 space-y-2">
                                <li>
                                <a href="{{route('empresas.index')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 dark:text-white dark:hover:bg-gray-700">Empresa</a>
                                </li>
                                <li>
                                <a href="{{route('sucursales.index')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-300 dark:text-white dark:hover:bg-gray-700">Sucursal</a>
                                </li>
                                <li>
                                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-300 dark:text-white dark:hover:bg-gray-700">Periodo Contable</a>
                                </li>
                            </ul>
                        </div>
                </div>
                @endauth
                <main class="container mx-auto mt-10">
                    <h2 class="font-black text-center text-3xl mb-10">
                        @yield('titulo')
                    </h2>
                    @yield('contenido')
                </main> 
            </div>
            
            <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
                CloudBook - Todos los derechos reservados 
                {{now()->year}}
            </footer> 
            
            
    </body>
</html>