<?php
include('funciones.php');
    session_start();
    $vid=$_POST['codigo'];
    $vnombre=$_POST['ficha'];
    

    $miconexion=conectar_bd('', 'sena_bd');
    $resultado=consulta($miconexion, "insert into fichas (ficha_numero,ficha_progra)
        values ({$vid},'{$vnombre}')");

    if ($resultado)
    {
        echo "Guardado exitoso";
    }
?>