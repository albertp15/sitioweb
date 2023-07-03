    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <?php include("conexion.php"); ?>
  <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                  <a  class="navbar-brand" href="index.php"><img src="Imagenes/logo.png" alt="" id="lgo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                      </li>
                      <li class="nav-item dropdown ms-2">
                        <a class="nav-link dropdown-toggle" href="categorias.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categorías
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="futbol.php">Fútbol</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="baloncesto.php">Baloncesto</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="beisbol.php">Beisbol</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="futbol_americano.php">Futbol Americano</a></li>
                        </ul>
                      </li>
                      <li class="nav-item ms-2">
                        <a class="nav-link" href="blog.php">Blog</a>
                      </li>                      
                      <li class="nav-item ms-2 me-2">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-3" type="search" placeholder="Buscar" aria-label="Search" >
                      <a class="btn btn-outline-success" href="equipos.php" role="button">Buscar</a>
                    </form>

                  </div>
                </div>
              </nav>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>