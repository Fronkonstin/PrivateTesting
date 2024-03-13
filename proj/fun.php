<?php

include "bd.php";

function obtenerPaises(){
    
    $sql="SELECT * 
        FROM city
        ORDER BY id
        limit 10";

    try {

        $conexion = conexion();
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    catch (Exception $e) {
        echo 'Error en la conexion a la base de datos: ',  $e->getMessage(), "\n";
        return false;
    }

    $datosPaises = $query->fetchAll();

    return $datosPaises;
}


?>