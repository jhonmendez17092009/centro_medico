<?php
    require_once "../config/conexion.php";
    
    // funcion para buscar un usuario por su login
    function validar_usuario($login, $psaaword)
    {
        // establecer conexion con la BD
        $conexion = conectar();

        // instruccion SQL para hacer la consulta a la BD
        $consulta = "SELECT login_usuario, password_usuario, estado_usuario, tipo_usuario, COUNT(*) AS contar FROM usuario WHERE login_usuario = '$login' AND password_usuario = '$password'";

        // ejecutar la consulta SQL a la BD
        $consulta = mysqli_query($conexion, sql) or trigger_error ("Error en la consulta MySql: " + mysqli.error($conexion));

        // convertir consulta en array
        $resultado = mysqli_fetch_array($consulta);

        // verificar si el usuario existe en la BD
        if($resultado['contar']>0);
        {
            echo 'el usuario existe en la BD';
            echo $resultado['login_usuario'];
        }
        else
        {
            echo 'el usuario no existe, o login o password incorrecto';
        }
    }
?>