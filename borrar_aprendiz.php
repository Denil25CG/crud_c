<!doctype html>
<html>
<head>
    <title>Eliminación de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="miscss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<div id="divconsulta" class="container">
<br>
<div id="div2">
<div id="div4" >
<form name="formulario" role="form" method="post">
<div class="col-md-12">
<strong class="lgris">Ingrese criterio de
busqueda</strong>
<br> <br>
<div class="form-row">
<div class="form-group col-md-5">
<input class="form-control" type="number" name="numid"
min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION" />
</div>
<div class="form-group col-md-3">
<input class="btn btn-primary" type="submit"
value="Eliminar" >
</div>
</div>

<br>
</div>
</form>
<br>
</div>
<div id="divconsulta2">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST')
{
include('funciones.php');
$vnumid=$_POST['numid'];
$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"select * from aprendices where
Apre_Numid='{$vnumid}'");
$resultado2=consulta($miconexion,"delete from aprendices where
Apre_Numid='{$vnumid}'");
if($resultado->num_rows>0)
{
$fila = $resultado->fetch_object();
echo $fila->apre_id." ".$fila->apre_tipoid." ".$fila->apre_numid." ".$fila->apre_nombres." ".
$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";
if($resultado2)
echo "<br> Datos borrados exitosamente";
}
else{
echo "No existen registros";
}
$miconexion->close();
}?>
                <br><br>
                <a href="menu.php"class="btn btn-primary">Regresar</a>
</div>
</div>
</div>
</body>
</html>
