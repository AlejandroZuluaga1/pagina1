<?php

    if(!empty($_POST["registro"])){

        if (empty($_POST["nombre_completo"]) or empty($_POST["usuario"]) or empty($_POST["clave"])){
            echo '<div class="alerta">Uno de los campos esta vacio</div>';
        }else{

            $nombre_completo =$_POST["nombre_completo"];
            $usuario =$_POST["usuario"];
            $clave =$_POST["clave"];

            $sql = $conexion->query(" insert into usuarios(Nombre_Completo,Usuario,Clave)values('$nombre_completo','$usuario','$clave') ");

            if($sql==1){
               
                echo '<div class="success">Usuario registrado correctamente</div>';
                
            }else{
                echo '<div class="alerta">Usuario no registrado</div>';
            }
        }
    
    }