<?php   
    require('conexion.php');

$ligas = $_POST['ligas'];
$id_deporte = $_POST['id_deporte'];
$imagen_liga = '';

//Metodo para guardar la ruta de las imagenes guardadas en una carpeta dentro del servidor
if (isset ($_FILES["imagen_liga"])){
    $file = $_FILES["imagen_liga"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize ($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "Imagenes/";
    if ($tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" && $tipo != "image/png" && $tipo != "image/gif")
    {
        echo '<script language="javascript">alert("Error, el archivo no es una imagen");window.location="admin.php";</script>';        
    }
    else if ($size > 3*1024*1024){
        echo '<script language="javascript">alert("Error, el tamaño máximo permitido es 3mb");window.location="admin.php";</script>';        
       }
      else{
          $src = $carpeta.$nombre;
          move_uploaded_file($ruta_provisional, $src);
          $imagen_liga="Imagenes/".$nombre;
        }
}  //Subida de los datos a la BD, llenados en la Seccion "Ligas" del admin
     $query=mysqli_query($conexion, "INSERT INTO ligas (ligas,
      imagen_liga, id_deporte) VALUES ('$ligas', '$imagen_liga', '$id_deporte')");      

 
    if($query)
{
    echo '<script language="javascript">alert("Datos cargados exitosamente");window.location="admin.php";</script>';
}

else 
{
    echo '<script language="javascript">alert("¡ERROR!");window.location="admin.php";</script>';
}

mysqli_close($conexion);

?>