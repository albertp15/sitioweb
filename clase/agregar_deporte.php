<?php
   require('conexion.php');
    
$NombreDeporte = $_POST['nombre_depor'];

   $consulta= "insert into deporte values(NULL,'$NombreDeporte')";
   
   $resultado= mysqli_query($conexion,$consulta); 

    if($resultado)
{
    echo '<script language="javascript">alert("Datos cargados exitosamente");window.location="admin.php";</script>';
}

else 
{
    echo '<script language="javascript">alert("¡ERROR!");window.location="admin.php";</script>';
}

mysqli_close($conexion);
?>