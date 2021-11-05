<?php
include('funciones.php');
  $vtipoid=$_POST['tipoid'];
  $vnumid=$_POST['numid'];
  $vnombre=$_POST['nombres'];
  $vapellidos=$_POST['apellidos'];
  $direccion=$_POST['direccion'];
  $telefonos=$_POST['telefono'];
  $ficha=$_POST['ficha'];

  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion, "insert into aprendices (apre_tipoid,apre_numid,apre_nombres,apre_apellidos,apre_direccion,apre_telefono,apre_ficha) 
  values ('{$vtipoid}','{$vnumid}','{$vnombre}','{$vapellidos}','{$direccion}','{$telefonos}','{$ficha}')");

  if ($resultado)
    {
        echo "Guardado Exitoso";
    }
?>