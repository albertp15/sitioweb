<!DOCTYPE html>
<html lang="en">
<head>
  <title>deportes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php

require ("conexion.php");  //conexion a BD

?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3 my-5"></div>
        <div class="col-12 col-sm-6 my-5">
            <img src="imagenes/logo2.png" alt=""><br><br>
            <h2 class="text-center mb-3 fw-bold">Deportes</h2>
        <table class="table table-striped my-5">
            
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Deporte</th>			<!-- Columnas de Frontend -->

                </tr>
                </thead>
        <?php foreach ($conexion->query('SELECT * from deporte') as $row){ // consulta de la tabla deporte ?> 
        <tr>
            <td><?php echo $row['id_deporte']   //datos cargados de la tabla deportes.  ?></td>
            <td><?php echo $row['nombre_depor'] ?></td>

        </tr>
        <?php
            }
        ?>
        </table>

        <a class="btn btn-success" href="admin.php" role="button">Volver</a>
        </div>
        <div class="col-12 col-sm-3 my-5"></div>

    </div>
</div>
</body>
</html>