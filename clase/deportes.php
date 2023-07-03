<?php

include_once 'conexion.php';

class deporte extends DB{
    
    function obtenerDeporte(){
        $query = $this->connect()->query('SELECT * FROM deporte');
        return $query;
    }

    function obtenerDeportes($id){
        $query = $this->connect()->prepare('SELECT * FROM deporte WHERE id_deporte = :id_deporte');
        $query->execute(['id_deporte' => $id]);
        return $query;
    }

    function nuevoDeporte($deporte){
        $query = $this->connect()->prepare('INSERT INTO deporte (nombre_depor) VALUES (:nombre_depor)');
        $query->execute(['nombre_depor' => $deporte['nombre_depor']]);
        return $query;
    }

}

?>