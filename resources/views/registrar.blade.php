<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/registrar.css') }}">
    <title>registrar usuario</title>
    <link rel="shortcut icon" href="./img/pokemon_2.png">

</head>

<body>
    
    <form action="{{ route('usuario.crear') }}" method="POST">
        
        @csrf

        <h2 class="title_registrarse">Registrarse</h2>

        <input type="text" name="name"autofocus="" placeholder="ingresa tu nombre" value="{{ old('name') }}" required minlength="5">
        <input type="email" name="email" placeholder="ingresa tu correo" autofocus="" value="{{ old('email') }}" required>
        <input type="password" name="password" placeholder="ingresa tu contraseña" required>
        <input class="button" type="submit" value="Continuar">
        <a class="button" href="{{ route('login') }}">login</a>
    </form>
</body>

</html>
