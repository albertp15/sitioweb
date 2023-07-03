<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Fútbol</title>
  </head>
  <body>
  <?php include ("header.php"); ?> 
  <?php include ("conexion.php"); ?>

    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Imagenes/futbol1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/futbol2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/futbol3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/futbol4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/futbol5.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 my-5">
            <div class="row" id="busqueda">
              <div class="col">
                <h2 class="mt-4">¡Encuentra tu Equipo Favorito!</h2>
              </div>
              <form class="d-flex mt-3 input-group-lg" role="search">
                <input class="form-control me-3 bg-light mb-4" type="search" placeholder=" Ej: Manchester City" name="busqueda" aria-label="Search">
                <button class="btn btn-outline-success mb-4" type="submit" name="enviar">Buscar</button>
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
            <h6 class="mt-2 mb-4">Todas los Equipos de las ligas importantes, en un SOLO SITIO!</h6>
            </div>
            <div class="row">
              <h2 class="text-center mt-5">Ligas destacadas</h2>
              <div class="col-3 col-sm-3">
                <a href="ligas.php"> <img src="Imagenes/liga-futve.png" alt=""></a>
               </div>
               <div class="col-3 col-sm-3">
                 <a href="ligas.php"> <img src="Imagenes/laliga.png" alt=""></a>
               </div>
               <div class="col-3 col-sm-3">
                 <a href="ligas.php"> <img src="Imagenes/bundesliga.png" alt=""></a>
               </div>
               <div class="col-3 col-sm-3">
                <a href="ligas.php"> <img src="Imagenes/serie-a.png" alt=""></a>
              </div>  
            </div>
          </div>
          <div class="col-12 col-sm-6 my-5">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <strong>Historia</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    se considera a partir de 1869, año de fundación de la Asociación Inglesa de Fútbol, aunque en sus orígenes, al igual que los demás códigos de fútbol, se remontan varios siglos en el pasado, particularmente en las islas británicas durante la Edad Media. El 30 de noviembre de 1872, Escocia e Inglaterra disputaron el primer partido oficial entre selecciones nacionales, encuentro que concluyó en empate sin goles. 
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <strong>Reglas del Juego</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    El fútbol está reglamentado por 17 leyes o reglas, las cuales se utilizan universalmente.<br><br><strong>Campo de Juego:</strong> Las medidas permitidas del terreno son de 90 a 120 metros de largo y de 45 a 90 metros de ancho, pero para partidos internacionales se recomiendan las siguientes medidas: entre 100 y 110 metros de largo, y entre 64 y 75 metros de ancho.<br><br><strong>Duración y Resultado:</strong> La duración de un partido, será de dos tiempos iguales de 45 minutos, con un periodo intermedio de descanso que no podrá exceder los 15 minutos. <br><br><strong>Faltas y Reanudación del juego:</strong> Cada vez que un jugador intente golpear o golpee a otro, lo empuje, lo retenga para sacar una ventaja, lo escupa o toque el balón con sus manos (excepto el guardameta), el árbitro marcará un tiro libre directo a favor del equipo que no cometió la infracción, que se ejecutará desde el lugar de la infracción.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <strong>Cultura</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    La cultura es el conjunto de expresiones de una sociedad, y como tal el fútbol no está exento de la misma. Uno de los institutos que promueven el fútbol como cultura a nivel internacional es el Goethe-Institut, que ha realizado exposiciones alrededor del mundo cuyos temas eran el fútbol. <br><br> La relación entre los videojuegos y el fútbol es muy fructífera. Uno de los primeros videojuegos futbolísticos exitosos fue el Pele's Soccer de la consola Atari 2600. Muchas ediciones se volvieron clásicos, como el FIFA Series, el Pro Evolution Soccer/Winning Eleven y el PC Fútbol.
                  </div>
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