<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appi Pokemon</title>
    <link rel="shortcut icon" href="./img/pokemon_2.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
</head>

<body>

<header>
        <a class="salir" href="{{ route('salir') }}">Salir</a>


    @if (Auth::user())
    <span class="span_index">Bienvenido  {{Auth::user()->name}}
        @endif </span>


    <h1>PoKemon APPI</h1>

</header>
<br><br><br>
<br><br><br>


    <div class="contenedor_pokemones">
    </div>
    <script>
        // obtener un pokemon para guardarlo
        const contenedor_pokemones = document.querySelector('.contenedor_pokemones');
        const getPokemones = () => {
            const limit = 650; //limite de pokemones ----------------------------------------------------------------------------

            for (let i = 1; i <= limit; i++) {
                fetch(`https://pokeapi.co/api/v2/pokemon/${i}`)
                    .then(res => res.json())
                    .then(data => {
                        getPokemon(data);
                    });
            }
        }
        const getPokemon = data => {
            let item = document.createElement('A');
            item.classList.add('contenedor_pokemon', `${
                data.types[0].type.name
            }`);
            item.style.order = `${
                data.id
            }`;
            item.setAttribute('id', data.id);
            item.tabIndex = data.id;
            item.setAttribute('href', `{{ url('/login/pokemon/${data.id}') }}`);
            item.innerHTML = data.name;
            contenedor_pokemones.appendChild(item);
        }
        getPokemones()
    </script>
</body>

</html>
