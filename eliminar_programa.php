<!doctype html>
<html>
    <head>
        <title>Eliminación de Programas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
                            <strong class="lgris">Ingrese criterio de busqueda</strong>
                            <br> <br>
                        <div class="form-row">
                        <div class="form-group col-md-5">
                        <input class="form-control" type="number" name="progra_id" min="9999" max="9999999999999" value="" placeholder="COD PROGRAMA" />
                        </div>
                        <br>
                        <div class="form-group col-md-3">
                        <input class="btn btn-primary" type="submit" value="Eliminar" >
                        <br>
                        <br>
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
                    $vnumid=$_POST['progra_id'];
                    $miconexion=conectar_bd('', 'sena_bd');
                    $resultado=consulta($miconexion,"select * from programa where progra_id='{$vnumid}'");
                    $resultado2=consulta($miconexion,"delete from programa where progra_id='{$vnumid}'");
                    if($resultado->num_rows>0)
                    { 
                    $fila = $resultado->fetch_object();
                    echo $fila->progra_id." ".$fila->progra_nombre." ". $fila->progra_tipo."<br>";
                    
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