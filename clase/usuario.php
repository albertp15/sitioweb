<?php
   include('conexion.php');  //se trae la conexion realizada 
 
$USUARIO=$_POST['usuario'];  
$PASSWORD=$_POST['password'];
    
    $consulta = "SELECT* FROM Personal where usuario = '$USUARIO' and password = '$PASSWORD' "; //seleccion de la tabla un columnas de BD
    $resultado = mysqli_query($conexion,$consulta);

    $row_cnt = mysqli_num_rows($resultado); 
    if ($row_cnt) {
        header("location:admin.php");  //si es correcto el login, se redirecciona al admin

    }else{
        echo '<script language="javascript">alert("contraseña o usuario incorrecto");</script>';
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>