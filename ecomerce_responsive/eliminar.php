<?php
include('template/cabecera.php');

$conexion = conectar();

$idProd=$_GET['idProd'];  

$sql="DELETE FROM productos WHERE idProd =$idProd ";

$resultado=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="row" style="text-align:center;">
            <?php if($resultado) { ?>
                <h3>REGISTRO ELIMINADO CORRECTAMENTE</h3>
            <?php } else {?>
                <h3>ERROR AL ELIMINAR</h3>
            <?php } ?>
            </div>

            <div class="row">
             <div class=".col-6 .col-sm-3">
              <a class="btn btn-secondary" href="administrar.php">Regresar</a>
             </div>
            </div>
        </div>
    </div>
</body>
</html>