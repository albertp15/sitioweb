<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Baloncesto</title>
  </head>
  <body>
  <?php include ("header.php"); ?>  
  <?php include ("conexion.php") ?>
    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Imagenes/baloncesto1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/baloncesto2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/baloncesto3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/baloncesto4.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/baloncesto5.jpg" class="d-block w-100" alt="...">
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
                <input class="form-control me-3 bg-light mb-4" type="search" placeholder=" Ej: LA Lakers" name="busqueda" aria-label="Search">
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
                <a href="ligas.php"> <img src="Imagenes/nba.png" alt=""></a>
               </div>
               <div class="col-3 col-sm-3">
                 <a href="ligas.php"> <img src="Imagenes/superliga.png" alt=""></a>
               </div>
               <div class="col-3 col-sm-3">
                 <a href="ligas.php"> <img src="Imagenes/ncaab.png" alt=""></a>
               </div>
               <div class="col-3 col-sm-3">
                <a href="ligas.php"> <img src="Imagenes/liga-endesa.png" alt=""></a>
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
                    El baloncesto nació como una solución a la necesidad de realizar alguna actividad deportiva durante el invierno, en la escuela de la YMCA. La introducción del tablero, a comienzos del siglo xx, dio lugar a la jugada llamada rebote, que ha pasado a ser fundamental en el juego. Las cestas de duraznos dieron paso a aros metálicos con una red sin agujeros hasta evolucionar a la malla actual.
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
                    Algunas son: <br><br> El balón puede ser lanzado en cualquier dirección, con una o dos manos. <br>El balón puede ser golpeado en cualquier dirección, con una o las dos manos (nunca con el puño o mano cerrada). <br>Los jugadores no podrán correr con el balón. Deberán pasarlo incluso desde otro lugar en el que lo cogieron, se concederá una relativa tolerancia al jugador que en plena carrera reciba el balón y deba pararse.<br>El balón no debe llevarse en ambas manos o entre ellas. Los brazos o el cuerpo no se deben usar para sostenerlo en ningún caso.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <strong>Denominación</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    En los países de habla hispana se usan tres expresiones:<br><br> 1- Baloncesto.<br>2-básquetbol o basquetbol.<br>3-Básquet
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