<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login pokemon</title>
    <link rel="shortcut icon" href="./img/pokemon_2.png">
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>

<body>
    <form action="{{ route('usuario.verificar') }}" method="POST">

        @csrf
        <h2 class="title_login">Login</h2>

        <input type="email" name="email" autofocus="" placeholder="ingresa tu correo" value="{{ old('email') }}" required>
        <input type="password" name="password" placeholder="ingresa tu contraseña" required>
        <input class="button" type="submit" value="iniciar sesión">

        <a class="button_registrar" href="{{ route('form.create') }}">Registrarse</a>
        <a id="button-back" href="{{ url('/') }}">Pagina Principal</a>


    </form>
</body>



</html>
