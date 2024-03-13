<?php

/*
define("BBDD_PWD", "r7BMapKWV1v1EC"); // Contraseña
define("BBDD_USER", "if0_35320978");
define("BBDD_HOST", "sql112.infinityfree.com");
define("BBDD_NAME", "if0_35320978_cyantours"); // Nombre de la base de datos
*/

define("BBDD_PWD", ""); // Sin contraseña
define("BBDD_USER", "root");
define("BBDD_HOST", "localhost");
define("BBDD_NAME", "world_x"); // Nombre de la base de datos

function conexion() {
    $conn = new PDO("mysql:host=".BBDD_HOST.";dbname=".BBDD_NAME, BBDD_USER, BBDD_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $conn->exec("SET NAMES utf8");
    return $conn;
}

/*

//comprobacion de conexion con la base de datos
try {
    $conexion = conexion();
    echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}

*/







?>

