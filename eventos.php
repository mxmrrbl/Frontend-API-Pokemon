<?php
    include('libreria/principal.php');

    plantilla::aplicar("Eventos"); 

    $usuario = getUsuario(true);

    $rs = enviarPost('http://localhost/pokeapi/act/eventos.php');

    $eventos = $rs->datos;

    foreach($eventos as $evento){
        echo <<<EVENTO
        <div class="evento">
            <h4>{$evento->titulo} {$evento->fecha}</h4>
            <div>
                {$evento->contenido}
            </div>
        </div>

EVENTO;
    }

