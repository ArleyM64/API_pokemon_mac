<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pokemon</title>
    <link rel="shortcut icon" href="./img/pokemon_2.png">
    <link rel="stylesheet" href="{{ url('css/pokemon.css') }}">
    
</head>

<body>
    <div id="pokemon" class="ocultar_id" id="{{ $id }}">{{ $id }}</div>

    <div class="contenedor_carta_pokemon">
        <div class="nombre"></div>
        <img class="imagen"></img>
        <div class="habilidades_pokemon">

        </div>
    </div>
    <script src="{{url('js/carta.js')}}"> </script>
</body>

</html>
