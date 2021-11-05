<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['id'];
  $vnombres=$_POST['progra_nombre'];
  $vtipoprograma=$_POST['progra_tipo'];
  
  
  $miconexion=conectar_bd('','sena_bd');
  $resultado=consulta($miconexion,"update programa set progra_id='{$vide}',progra_nombre='{$vnombres}'
  progra_tipo='{$vtipoprograma}'");

  if (miconexion->affected_row>0)
    {
        echo "Actualizacion exitosa";
    }
  ?>  