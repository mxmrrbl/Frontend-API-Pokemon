<?php
    include('libreria/principal.php');

    plantilla::aplicar("Registro Pokemon"); 

    $usuario = getUsuario(true);

    if($_POST){
        $_POST['token'] = $usuario->token;
        $rs = enviarPost('http://localhost/pokeapi/act/registro_pokemon.php', $_POST);
        if($rs->exito){
            echo "<div class='alert alert-sucess'>Pokemon registrado</div>";
        }else{
            echo "<div class='alert alert-danger'>{$rs->mensaje}</div>";
        }

        echo"
            <a class='alert' href='mis_pokemon.php' class='btn btn-success'>Mis Pokemon</a>
        ";

        exit();
    }
?>

<form class="rpokemon text-center" method="post" action="">
<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">

					<div class="form-group">
						<input type="text" require class="form-control" id="nombre" name="nombre" placeholder="nombre">
					</div>

					<div class="form-group">
						<input type="number" require  class="form-control" id="nivel" name="nivel" placeholder="nivel">
					</div>

                    <div class="form-group">
						<input type="text" require  class="form-control" id="tipo" name="tipo" placeholder="tipo">
					</div>

                    <div class="form-group">
						<input type="text" require  class="form-control" id="comentario" name="comentario" placeholder="comentario">
					</div>

				</div>
				<button type="submit" class="btn btn-primary">Registrar</button>
			</div>

</form>