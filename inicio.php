<?php
    include('libreria/principal.php');

    plantilla::aplicar("Inicio"); 

    $usuario = getUsuario(true);


?>

<div class="row">
    <div class="col">
        <a href="eventos.php">Eventos</a>
    </div>

    <div class="col">
        <a href="mis_pokemon.php">Mis Pokemon</a>
    </div>

    <div class="col">
        <a href="registro_pokemon.php">Registrar Pokemon</a>
    </div>

</div>