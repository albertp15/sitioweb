<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Beisbol</title>
  </head>
  <body>
  <?php include ("header.php"); ?>  
  <?php include ("conexion.php"); ?>

    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Imagenes/beisbol1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/beisbol2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/beisbol3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/beisbol4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Imagenes/beisbol5.jpg" class="d-block w-100" alt="...">
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
                <input class="form-control me-3 bg-light mb-4" type="search" placeholder=" Ej: Venezuela" name="busqueda" aria-label="Search">
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
                <a href="ligas.php"> <img src="Imagenes/mlb.png" alt=""></a>
               </div>
               <div class="col-4 col-sm-4">
                 <a href="ligas.php"> <img src="Imagenes/serie-del-caribe.jpg" alt=""></a>
               </div>
               <div class="col-4 col-sm-4">
                 <a href="ligas.php"> <img src="Imagenes/lvbp.png" alt=""></a>
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
                    En 1744 surge en Inglaterra la primera evidencia impresa del juego 'Base Ball', que fue publicada en un libro de pasatiempos infantiles. Entre ese año y 1796 surgen varias referencias más sobre baseball en Europa dando cuenta de un juego de pequeñas dimensiones jugado por niños. En 1796 se publican en Alemania las primeras reglas de "base ball" lo que da cuenta de que, probablemente, en ese país ya se practicaba el juego.                  </div>
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
                    Trata de un equipo de bateadores/corredores que golpea o batea la bola o pelota de béisbol, de manera que esto les permita avanzar sobre las bases, hasta completar una carrera 'homerun' (o jonrón) antes de que el equipo receptor tome la bola. Los bateadores tienen determinados segundos para ponerse en su zona de lanzamiento, de lo contrario puede ser sancionado.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <strong>Elementos distintivos</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    El béisbol tiene ciertos atributos que lo distinguen de los otros deportes de equipo populares en los países donde tiene seguidores. Todos estos deportes usan un reloj, el juego es menos individual, y la variación entre los campos de juego no es tan importante. La comparación entre el críquet y el béisbol demuestra que muchos de los elementos distintivos del béisbol se comparten de diversas maneras con sus primos deportivos.
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