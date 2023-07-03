<?php
   require('conexion.php');
    
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$texto = $_POST['texto'];


   $consulta= "insert into contacto values(NULL,'$correo','$asunto','$texto')";  //insert de los datos del formulario de la pagina CONTACTO
   
   $resultado= mysqli_query($conexion,$consulta); //carga de datos a la BD


    if($resultado)
{

    echo '<script language="javascript">alert("Datos Enviados Correctamente");window.location="contacto.php";</script>';

}

else
{

    echo "Error al ingresar los datos";
}

mysqli_close($conexion);
?>