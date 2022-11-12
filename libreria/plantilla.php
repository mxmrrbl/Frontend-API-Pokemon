<?php
class plantilla{

    static $instancia = null;

    public static function aplicar($titulo = null){
        self::$instancia = new plantilla($titulo);
    }

    public function __construct($titulo){    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
</head>
<body>
    <div class="info">
        <?php 
            $usr = getUsuario();
            if($usr){
                echo"
                    <a>{$usr->nombre}</a>
                    <a href='logout.php'>Cerrar Sesion</a>
                ";
            }
        ?>
    </div>
    <div class="container">
       
    <h1 class=" titulo mt-3"><?= $titulo; ?></h1>

<?php
    }

    public function __destruct(){
?>

            </div>
        </body>
    </html>

<?php
}

}
