<?php
    include('libreria/principal.php');

    plantilla::aplicar("Registro Maestro"); 

    $usuario = getUsuario(false);

    if($_POST){
        $rs = enviarPost('http://localhost/pokeapi/act/registro_maestro.php',$_POST);
        if($rs->exito){
            echo "<div class='alert alert-sucess'>Maestro Registrado</div>";
        }else{
            echo "<div class='alert alert-danger'>{$rs->mensaje}</div>";
        }

        echo"
            <a class='alert' href='login.php' class='btn btn-success'>Iniciar Sesión</a>
        ";

        exit();
    }
?>

<form class="rmaestro text-center" method="post" action="">
<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">

					<div class="form-group">
						<input type="text" require class="form-control" id="nombre" name="nombre" placeholder="nombre">
					</div>

					<div class="form-group">
						<input type="text" require  class="form-control" id="apellido" name="apellido" placeholder="apellido">
					</div>

                    <div class="form-group">
						<input type="email" require  class="form-control" id="correo" name="correo" placeholder="correo">
					</div>

                    <div class="form-group">
						<input type="password" require  class="form-control" id="clave" name="clave" placeholder="clave">
					</div>

                    <div class="form-group">
						<input type="text" require  class="form-control" id="ciudad" name="ciudad" placeholder="ciudad">
					</div>

                    <div class="form-group">
						<input type="text" require  class="form-control" id="whatsapp" name="whatsapp" placeholder="whatsapp">
					</div>

				</div>
				<button type="submit" class="btn btn-primary">Registrar</button>
			</div>

</form>