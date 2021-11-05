<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['numid'];
  $vnombres=$_POST['ficha_progra'];
   
  
  $miconexion=conectar_bd('','sena_bd');
  $resultado=consulta($miconexion,"update fichas set ficha_progra='{$vnombres}'
  ficha_numero='{$vide}' where ficha_numero='{$vide}'" );

  if (miconexion->affected_row>0)
    {
        echo "Actualizacion exitosa";
    }
  ?>  