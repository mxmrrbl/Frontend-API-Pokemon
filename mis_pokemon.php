<?php
    include('libreria/principal.php');

    plantilla::aplicar("Mis Pokemon"); 

    $usuario = getUsuario(true);

    $rs = enviarPost('http://localhost/pokeapi/act/mis_pokemon.php', ['token'=>$usuario->token]);

    $pokemon = $rs->datos;

    echo "<ol>";
    foreach($pokemon as $poke){
        echo <<<POKEMON
        <div class="pokemon">
            <li>
                <h4>{$poke->nombre} nv. {$poke->nivel}</h4>
            </li>
        </div>
        POKEMON;
    }
    echo "</ol>";