<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Futbol Americano</title>
  </head>
  <body>
  <?php include ("header.php"); ?> 
  <?php include ("conexion.php"); ?>

    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Imagenes/nfl1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/nfl2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/nfl3.jpg_large" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/nfl4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/nfl5.jpg" class="d-block w-100" alt="...">
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
                <input class="form-control me-3 bg-light mb-4" type="search" placeholder=" Ej: Kansas City Chiefs" name="busqueda" aria-label="Search">
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
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/nfl.png" alt=""></a>
               </div>
               <div class="col-4 col-sm-4">
                 <a href="ligas.php"> <img src="Imagenes/ncaaf.png" alt=""></a>
               </div>
               <div class="col-4 col-sm-4">
                 <a href="ligas.php"> <img src="Imagenes/cfl.png" alt=""></a>
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
                    La historia del fútbol americano se remonta hasta las versiones más primitivas del rugby y del fútbol, ya que todos los deportes tienen su origen en algunas variedades de fútbol jugadas en el Reino Unido a mediados del siglo xix.<br><br> La popularidad del fútbol universitario creció hasta convertirse en la versión dominante de este deporte en la primera mitad del siglo xx. Los tazones (bowls), una tradición del fútbol practicado en los colegios universitarios, atrajeron una audiencia nacional en los Estados Unidos para los equipos colegiales. Reforzado por feroces rivalidades, el fútbol colegial aun mantiene un atractivo general muy notable dentro de Estados Unidos.                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <strong>Anotaciones</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    <strong>Touchdown (TD):</strong> es la forma más valiosa de anotación y se consigue cuando un jugador del equipo ofensivo, entra a la zona de anotación contraria con el balón o recibe un pase completo en ese lugar. Al equipo que consigue un touchdown se le otorgan 6 puntos. Además, el equipo que anota un touchdown tiene derecho a realizar una jugada desde la yarda 2 y puede incrementar su cuenta de puntos mediante un:<br>• Extra point: Consiste en pasar el balón por el goalpost mediante una patada y se suma 1 punto al equipo atacante.<br>• Conversión de dos puntos : Consiste en intentar llevar de nuevo el balón hasta la zona de anotación en una sola jugada, bien mediante la carrera o el pase, y se le suman 2 puntos.<br><br> <strong>Field Goal (FG):</strong>Consiste en meter el balón entre el goalpost mediante una patada y se conceden 3 puntos en el caso de conseguirlo. Generalmente se intenta un field goal cuando el equipo llega al cuarto down o quedan pocos segundos en el reloj y se encuentra cerca de la zona de anotación contraria (normalmente entre la yarda 40 y la zona de anotación). <br><br><strong>Safety (ST):</strong> (conocida de manera errónea como "auto-anotación") Se produce cuando la defensa logra derribar al jugador atacante que está en posesión del balón dentro de su propia zona de anotación, o bloquea un punt en la zona de anotación. Otra forma de anotar un safety es si el jugador atacante se sale del campo por las líneas laterales de su propia zona de anotación. Se conceden 2 puntos al equipo defensor.                </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <strong>Popularidad</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    El fútbol americano es muy popular en Estados Unidos. Desde los años 1990 su nivel de popularidad ha sobrepasado al del béisbol, logrando así la clasificación como el deporte más popular de esa nación. La liga profesional, la National Football League (NFL), conformada por 32 equipos, es muy popular y los estadios donde se juega presentan llenos absolutos con retransmisión en televisión nacional. El Super Bowl es la final de temporada, donde los campeones de las dos conferencias (AFC y NFC) de la NFL disputan el Trofeo Vince Lombardi, el más prestigioso de este deporte.                  </div>
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