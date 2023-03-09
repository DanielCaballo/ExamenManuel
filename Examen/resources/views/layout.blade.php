<?php
?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css","resources/js/app.js"])
</head>
<body>
<div id="app">
    <header class="h-15vh bg-emerald-300 flex flex-row justify-between">
        <img src="{{asset("images/logo.png")}}" alt="logo">
        <h1>Tienda</h1>
        @guest
            {{-- Esto es si no esta autentificado--}}
            <div>

                <form action="login" method="POST">
                    @method('post'){{--Se pone porque si es diferente a get o post se pone aqui--}}
                    @csrf {{-- Para evitar ataques(PONER SIEMPRE) mete un campo vacio para evitar ataques con iyecciones--}}

                </form>
                <a href="register">Registrarse</a>
            </div>
        @endguest
        @auth

            Conectado como {{auth()->User()->name}}
            <form action="logout" method="post">
                @csrf
                <input type="submit" value="Logout">
            </form>

            <a class="w1/12 bg-black-800 text-green-700" href="/alumno/alumno.blade.php">Alumnos</a>
        @endauth
    </header>
    <nav class="h-10vh bg-dark-500 flex flex-row justify-start">


        {{--    <a href="tiendas">Tiendas</a>--}}
        {{--    <a href="familias"> Familias</a>--}}

    </nav>
    <main>
        @yield("contenido")
        {{-- --}}

    </main>

    <footer>
        @copyright
    </footer>
</div>
</body>
</html>
