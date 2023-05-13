<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @stack('styles')
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>CloudBook - Inicia Sesion</title>
</head>
<body class="bg-gray-100">
    <div class="bg-white p-6 flex shadow-sm">
        <h1 class=" text-3xl font-black flex-grow">
            <a href="{{route('principal')}}">CloudBook</a>
        </h1>
    </div>
    <div class="flex h-screen bg">
    <main class="container mx-auto mt-10">
        <div class="md:flex md:justify-center md:gap-10 md:items-center">
        
            <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
                <form method="POST" action="{{ route('login') }}" novalidate>
                    @csrf
                    
                    @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
                    @endif
    
                    <div class="mb-5">
                        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                            Email
                        </label>
                        
                        <input id="email" name="email" type="email" placeholder="Tu email" class="border p-3 w-full rounded-lg
                            @error('email') border-red-500  @enderror" value="{{old('email')}}"
                        >
    
                        @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
    
                    <div class="mb-5">
                        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                            Password
                        </label>
                        
                        <input id="password" name="password" type="password" placeholder="Tu password" class="border p-3 w-full rounded-lg
                            @error('password') border-red-500  @enderror"
                        >
    
                        @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-5">
                        <input type="checkbox" name="remember"> <label class=" text-gray-500 text-sm">Mantener mi sesion abierta</label> 
                    </div>
    
                    <input type="submit" value="Iniciar Sesion" 
                    class="bg-sky-600 hover:bg-sky-700 transition-colors 
                    cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                </form>
            </div>
        </div>
    
        
    </main>
    </div>
</body>
</html>





    