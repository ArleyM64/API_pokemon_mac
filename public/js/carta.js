const pokemon_id = document.getElementById('pokemon');
const carta_pokemon = document.querySelector('.contenedor_carta_pokemon');

const getPokemon = data =>{
    fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon_id.textContent}`)
        .then(res => res.json())
        .then(data => setPokemon(data));
}
getPokemon();

// llenamo la carta con la información del pokemon
const setPokemon = data =>{
 carta_pokemon.classList.add(data.types[0].type.name);
 carta_pokemon.firstElementChild.innerHTML = data.name;
 carta_pokemon.children[1].setAttribute('src', data.sprites.other.dream_world.front_default);
    

    for(let i = 0; i < data.abilities.length; i++){
     carta_pokemon.lastElementChild.innerHTML += `<div> ➼ ${data.abilities[i].ability.name}  </div>`;
    }
}