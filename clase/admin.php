<?php
include("conexion.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <h3 class="text-center mt-4 text-danger">Deportes</h3>
    <!--Seccion para la subida de Deportes a la BD -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3 my-5"></div>
        <div class="col-12 col-sm-6 mt-4">
            <form action="agregar_deporte.php" method="post">
            <div class="row g-3 align-items-center" >
                <div class="col-auto">
                <label for="inputPassword6" class="col-form-label fw-bold">Nombre</label>
                </div>
            <div class="col-auto ms-3">
                <input type="text" id="inputPassword6" class="form-control" name="nombre_depor" aria-labelledby="passwordHelpInline" required>
            </div>
            <input class="btn btn-primary col-auto ms-3" type="submit" value="Cargar">
            <a class="btn btn-success col-auto ms-5" href="mostrar_deporte.php" role="button">Ver Registros</a>
            </div>
            </form>
        </div>
        <div class="col-12 col-sm-3 my-5"></div>
    </div>    
</div>
<div class="container">
<hr style="border:15px; color:black;"><hr></div>
<h3 class="text-center mt-4 text-danger">Ligas</h3>     <!--Seccion para la subida de Ligas a la BD -->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-2 my-5"></div>
        <div class="col-12 col-sm-8 mt-4">
            <form action="agregar_ligas.php" method="post" enctype="multipart/form-data">
                <div class="row g-3 align-items-center" >
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">Nombre</label>
                </div>
                <div class="col-auto ms-3">
                    <input type="text" id="inputPassword6" class="form-control" name="ligas" aria-labelledby="passwordHelpInline" required>
                </div>
                <div class="col-auto ms-4">
                    <label for="formFile" class="form-label fw-bold">Imagen</label>
                </div>
                <div class="col-auto ms-1">
                    <input class="form-control" type="file" id="formFile" name="imagen_liga" required>
                </div>
                </div><br>
                <div class="row g-3 mt-4 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">Deporte</label>
                </div>                
                <div class="col-auto ms-3">
                    <select class="form-select" name="id_deporte" id="deportes" required>
                        <option value=""></option>
                        
                        <?php
                            $sql=$conexion->query(" select * from deporte");
                                while($fila = $sql->fetch_array()){
                                    echo "<option value='".$fila["id_deporte"]."'>".$fila["nombre_depor"]."</option>";
                                }
                        ?>
                    </select>
                </div>

                <input class="btn btn-primary ms-3 mt-3 col-auto" type="submit" value="Cargar">
                <a class="btn btn-success col-auto ms-5" href="mostrar_ligas.php" role="button">Ver Registros</a>

                </div>
            </form>
        </div>
        <div class="col-12 col-sm-2 my-5"></div>
    </div>    
</div>
<div class="container">
<hr style="border:15px; color:black;"><hr></div>
<h3 class="text-center mt-4 text-danger">Equipos</h3>    <!--Seccion para la subida de información de los Equipos a la BD -->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-2 my-5"></div>
        <div class="col-12 col-sm-8 mt-4">
            <form action="agregar_equipos.php" method="post" enctype="multipart/form-data">
                <div class="row g-3 align-items-center" >
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">Nombre</label>
                </div>
                <div class="col-auto ms-3">
                    <input type="text" id="inputPassword6" class="form-control" name="nombre" aria-labelledby="passwordHelpInline" required>
                </div>
                <div class="col-auto ms-4">
                    <label for="formFile" class="form-label fw-bold">Logotipo</label>
                </div>
                <div class="col-auto ms-1">
                    <input class="form-control" type="file" id="formFile" name="logotipo" required>
                </div>
                </div><br>
                <div class="row g-3 mt-4 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">Fundación</label>
                </div>
                <div class="col-auto ms-1">
                    <input type="text" id="inputPassword6" class="form-control" name="fundacion" aria-labelledby="passwordHelpInline" required>
                </div>            
                <div class="col-auto ms-3">
                    <label for="inputPassword6" class="col-form-label fw-bold">Mejor Jugador</label>
                </div>
                <div class="col-auto ms-1">
                    <input type="text" id="inputPassword6" class="form-control" name="mejor_jugador" aria-labelledby="passwordHelpInline" required>
                </div>
                </div><br>
                <div class="row g-3 mt-4 align-items-center" >
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">Logros</label>
                </div>
                <div class="col-auto ms-3">
                    <input type="text" id="inputPassword6" class="form-control" name="logro" aria-labelledby="passwordHelpInline" required>
                </div>
                <div class="col-auto ms-3">
                    <label for="inputPassword6" class="col-form-label fw-bold">Estadio</label>
                </div>
                <div class="col-auto ms-3">
                    <input type="text" id="inputPassword6" class="form-control" name="estadio" aria-labelledby="passwordHelpInline" required>
                </div>
                </div><br>
                <div class="row g-3 mt-4 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">Deporte</label>
                </div>   
                <div class="col-auto ms-3">
                    <select class="form-select" name="id_deporte" id="deportes" required>
                        <option value=""></option>
                        
                        <?php
                            $sql=$conexion->query(" select * from deporte");
                                while($fila = $sql->fetch_array()){
                                    echo "<option value='".$fila["id_deporte"]."'>".$fila["nombre_depor"]."</option>";
                                }
                        ?>
                    </select>
                </div>
                <div class="col-auto ms-3 ">
                    <label for="inputPassword6" class="col-form-label fw-bold">Liga</label>
                </div>   
                <div class="col-auto ms-3 ">
                    <select class="form-select" name="id_ligas" id="ligas" required>
                        <option value=""></option>
                        
                        <?php
                            $sql=$conexion->query(" select * from ligas");
                                while($fila = $sql->fetch_array()){
                                    echo "<option value='".$fila["id_ligas"]."'>".$fila["ligas"]."</option>";
                                }
                        ?>
                    </select>
                </div>
                <input class="btn btn-primary ms-5 mt-4 col-auto" type="submit" value="Cargar">
                <a class="btn btn-success col-auto ms-5" href="mostrar_equipos.php" role="button">Ver Registros</a>

            </form>
        </div>
        <div class="col-12 col-sm-2 my-5"></div>
    </div>    
</div>
<hr style="border:15px; color:black;"><hr></div>
<h3 class="text-center mt-4 text-danger">Contacto</h3>    <!--Seccion para la subida de información de los Equipos a la BD -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-2 my-5"></div>
        <div class="col-12 col-sm-8 mt-4">
        <a class="btn btn-success col-auto ms-5" href="mostrar_contacto.php" role="button">Ver Registros</a>

        </div>
        <div class="col-12 col-sm-2 my-5"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>