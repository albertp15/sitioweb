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
        <div class="col-12 col-sm-2 my-5"></div>
        <div class="col-12 col-sm-8 my-5">
            <img src="imagenes/logo2.png" alt=""><br><br>
            <h2 class="text-center mb-3 fw-bold">Equipos</h2>
        <table class="table table-striped my-5">
            
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>			<!-- Columnas de Frontend -->
                    <th>Logo</th>
                    <th>Fundación</th>
                    <th>Mejor Jugador</th>
                    <th>Campeonatos</th>
                    <th>Estadio</th>
                    <th>id_deporte</th>
                    <th>id_ligas</th>

                </tr>
                </thead>
        <?php foreach ($conexion->query('SELECT * from equipos') as $row){ // consulta de la tabla deporte ?> 
        <tr>
            <td><?php echo $row['id_equipo']   //datos cargados de la tabla deportes.  ?></td>
            <td><?php echo $row['nombre'] ?></td>
           <?php echo '<td><img src="'.$row['logotipo'].'" width=80px height=auto> </td>';?>
            <td><?php echo $row['fundacion'] ?></td>
            <td><?php echo $row['mejor_jugador'] ?></td>
            <td><?php echo $row['logro'] ?></td>
            <td><?php echo $row['estadio'] ?></td>
            <td><?php echo $row['id_deporte'] ?></td>
            <td><?php echo $row['id_ligas'] ?></td>


        </tr>
        <?php
            }
        ?>
        </table>

        <a class="btn btn-success" href="index.php" role="button">Volver al Inicio</a>
        </div>
        <div class="col-12 col-sm-2 my-5"></div>

    </div>
</div>

</body>
</html>