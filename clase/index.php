<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equipos Deportivos de Ligas Destacadas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
  <?php include ("header.php"); ?>
  <?php include ("conexion.php"); ?>
    <section class="carrusel">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Imagenes/Futbol.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Imagenes/Baloncesto.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Imagenes/Beisbol.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section class="categorias">
      <h1 class="text-center mt-5 mb-4"><a href="categorias.php" class="text-dark">Categorías</a></h1>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 ms-auto">
            <div class="col mb-3 mb-md-0">
              <div class="card h-100 pt-4 px-4 rounded shadow" id="prueba">
                <a href="futbol.php"><img src="Imagenes/ico-futbol.png" class="card-img-top pb-1" alt="..."></a>
                <div class="card-body">
                  <h4 class="card-title text-center"><a href="futbol.php" class="text-dark">FUTBOL</a></h4>
                </div>
              </div>
            </div>
            <div class="col mb-3 mb-md-0">
              <div class="card h-100 pt-4 px-4 rounded shadow" id="prueba">
                <a href="baloncesto.php"><img src="Imagenes/ico-baloncesto.png" class="card-img-top pb-1" alt="..."></a>
                <div class="card-body">
                  <h4 class="card-title text-center"><a href="baloncesto.php" class="text-dark">BALONCESTO</a></h4>
                </div>
              </div>
            </div>
            <div class="col mb-3 mb-md-0">
              <div class="card h-100 pt-4 px-4 rounded shadow" id="prueba">
                <a href="beisbol.php"><img src="Imagenes/ico-beisbol.png" class="card-img-top pb-1" alt="..."></a>
                <div class="card-body">
                  <h4 class="card-title text-center"><a href="beisbol.php" class="text-dark">BEISBOL</a></h4>
                </div>
              </div>
            </div>
            <div class="col mb-3 mb-md-0 ">
              <div class="card h-100 pt-4 px-4 rounded shadow" id="prueba">
                <a href="futbol_americano.php"><img src="Imagenes/ico-futbol-americano.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h5 class="card-title text-center"><a href="futbol_americano.php" class="text-dark">FUTBOL AMERICANO</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog-ligas">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-8 text-center mt-5 mb-4">
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
              <h1 class="mt-5"><a href="blog.php" class="text-dark">BLOG</a></h1>
              <div class="col-12 text-center mt-3 py-4" id="blogger">
                <h5 class="card-header">Título de la Noticia</h5>
                <div class="container mt-4">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus cupiditate nesciunt optio alias eligendi odit? Ducimus possimus, voluptatum impedit necessitatibus consectetur eum omnis corporis facere reprehenderit adipisci assumenda nulla mollitia.
                </div>
                <button class="btn btn-success mt-3" type="submit">Ver más</button>
              </div>
            </div>            
          </div>
          <div class="col-sm-4">
            <div class="row">
              <h2 class="mt-5 mb-4">Ligas Destacadas</h2>
              <div class="col-4 col-sm-4 mt-4">
               <a href="ligas.php"> <img src="Imagenes/liga-futve.png" alt=""></a>
              </div>
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/nfl.png" alt=""></a>
              </div>
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/lvbp.png" alt=""></a>
              </div>          
            </div>
            <div class="row mt-4">
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/nba.png" alt=""></a>
              </div>
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/mlb.png" alt=""></a>
              </div>
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/laliga.png" alt=""></a>
              </div>              
            </div>
            <div class="row mt-4">
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/ligue-1.png" alt=""></a>
              </div>
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/bundesliga.png"></a>
              </div>
              <div class="col-4 col-sm-4">
                <a href="ligas.php"> <img src="Imagenes/serie-a.png" alt=""></a>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container my-4 p-4" id="contacto">
        <div class="row">
          <div class="col text-center" >
            <h2 class="p-3"><a href="contacto.php" class=" text-black">Contactános</a></h2>
            <p>Si posees dudas, tienes alguna sugerencia o existe algún error, ¡Escribenos!</p>
          </div>
          <div class="col text-center" id="btncontacto">
            <a href="contacto.php"><button class="btn btn-success btn-lg mt-4" type="submit">Escríbenos</button></a>
          </div>
        </div>
      </div>
    </section>
  <?php include ("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>