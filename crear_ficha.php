<!doctype html>
<html>
    <head>
        <title>Creacion de Fichas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="miscss/estilos.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
        <br>
        <div id="div2">
        <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?>
        <?php } ?>
        <div id="div3" >
        <?php
            if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
            { 
            ?>
            <form id="formulario" role="form" method="post" action="guardar_ficha.php">
                <div class="col-md-12">
                <strong class="lgris">Ingrese los datos de la ficha</strong>
                <br>
                
                <div class="form-row">
                <label class="lgris">Ficha:</label>
                    
                </div>
                <label class="lgris">Código ficha:</label>
                <input class="form-control" type="number" name="codigo" min="9999" max="9999999999999" value="" placeholder="Numero ficha" required/>    
                </div>

                <label class="lgris">Nombre ficha:</label>
                <input class="form-control" style="text-transform: uppercase;" type="text" name="ficha" value="" placeholder="Nombre Ficha" required/>
                
                <br>
                <input class="btn btn-primary" type="submit" value="Guardar" >
            
                </div>
            </form>
        <?php
        }
        else
        {
        echo "No tiene permisos para realizar esta acción";
        } 
        ?>
                        <br><br>
                <a href="menu.php"class="btn btn-primary">Regresar</a>
        </div>
    </div> 
    </div> 
    </body>
</html>