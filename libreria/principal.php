<?php
session_start();

    require('libreria/plantilla.php');

    function login($usuario, $clave){
        $rs = enviarPost('http://localhost/pokeapi/act/iniciar_sesion.php', array('correo' => $usuario, 'clave' => $clave));
        if($rs->exito){
            $_SESSION['usuario'] = $rs->datos;
        }
        return $rs;
    }

    function getUsuario($redirect = false){
        if(isset($_SESSION['usuario'])){
            return $_SESSION['usuario'];
        }else{
            if($redirect){
                header('Location: login.php');
                exit();
            }
            return false;
        }
     
    }



    function enviarPost($url, $data=[]){
        
        $tmp = [];
        if(is_object($data)){
            
            foreach($data as $key => $value){
                $tmp[$key] =  $value;
            }

            $data = $tmp;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        return $response;

    }


?>
