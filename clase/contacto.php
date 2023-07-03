<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Contacto</title>
  </head>
  <body>
    <?php include ("header.php"); ?>
    <?php include ("conexion.php"); ?>
      <div id="intro" class="p-5 text-center bg-light">
        <h1 class="mb-3 h2 fs-1" >Contacto</h1>
        <p class="mb-3"><em>Portal para notificar cualquier sugerencia, spam, fallas en la web...</em></p>
      </div>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 m-5 px-4" id="form" >
            <form action="cargar.php" method="post">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Dirección Correo Electrónico</label>
                <input  class="form-control" id="exampleFormControlInput1"  name="correo" placeholder="nombre@ejemplo.com">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Asunto</label>
                <input  class="form-control" id="exampleFormControlInput1"  name="asunto" placeholder="Sugerencia">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="texto" placeholder="Comentario" rows="3"></textarea>
              </div>
              <div class="mb-3 text-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Enviar">
              </div>

            </form>
            </div>
            <div class="col mt-3">
              <div class="row" id="busquedablog">
                <div class="col">
                    <h4 class="mt-4 text-center">¡Encuentra tu Equipo Favorito!</h4>
                  <form class="d-flex mt-3 input-group-lg" role="search" method="get">
                    <input class="form-control me-3 bg-light mb-3" type="search" placeholder=" Ej: Venezuela" name="busqueda" aria-label="Search">
                    <button class="btn btn-outline-success mb-3" type="submit" name="enviar">Buscar</button>
                  </form>

                  <?php 

                    if(isset($_GET['enviar'])) {
                      $busqueda = $_GET['busqueda'];

                      $consulta = $conexion->query("SELECT * FROM equipos WHERE nombre LIKE '%$busqueda%'");

                      while ($row = $consulta->fetch_array()) {
                        echo $row['nombre'].'<br>';

                      }
                      echo '<a class="btn btn-primary mt-3 btn-sm" href="equipos.php" role="button">Mostrar mas</a>';

                    }
                  ?>
                
                    <h6 class="mt-3 mb-4 text-center"><em>Todas los Equipos de las ligas importantes, en un SOLO SITIO!</em></h6>
                  </div>
                </div>
                <div class="row">
                  <h2 class="text-center mt-5">Ligas destacadas</h2>
                  <div class="col-4 col-sm-4">
                    <a href="ligas.php"> <img src="Imagenes/mlb.png" alt=""></a>
                   </div>
                   <div class="col-4 col-sm-4">
                     <a href="ligas.php"> <img src="Imagenes/nba.png" alt=""></a>
                   </div>
                   <div class="col-4 col-sm-4">
                     <a href="ligas.php"> <img src="Imagenes/nfl.png" alt=""></a>
                   </div>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include ("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>