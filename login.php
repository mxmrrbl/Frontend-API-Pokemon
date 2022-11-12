<?php
    include('libreria/principal.php');
    
    $mensaje = '';
    if($_POST){
        $rs = login($_POST['correo'], $_POST['contraseña']);
        if($rs->exito){
            header('Location: inicio.php');
        }
        else{
            $mensaje = $rs->mensaje;
        }
    }

    plantilla::aplicar("Inicio de Sesion"); 
?>

<div class=" login text-center">
	<div class="login-form-1">

		<form id="login-form" method="post" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">

					<div class="form-group">
						<input type="email" require class="form-control" id="correo" name="correo" placeholder="correo">
					</div>

					<div class="form-group">
						<input type="password" require  class="form-control" id="contraseña" name="contraseña" placeholder="contraseña">
					</div>

                    <div class="text-danger"><?= $mensaje; ?></div>

				</div>
				<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
			</div>
			<div class="etc-login-form">
				<p><a href="registro_maestro.php">Create new account</a></p>
			</div>
		</form>

	</div>