<?php

/*Datos que vienen del formulario */
header("Content-Type: application/json");
$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$foto = $_POST["foto"];
$contenido = $_POST["contenido"];

/*SELECT id, nombre, contenido, foto, fecha, autor FROM articulos*/
$conexion = new mysqli ("localhost","root","","proyecto1");
/*creo el codigo sql con lo que vino por POST */

$SQL = "INSERT INTO articulos
(nombre, contenido, foto, fecha, autor )
VALUES
('$nombre','$contenido', '$foto','$fecha',1)";
/* Ejecuto ese cuery*/
$conexion->query($sql);
/*cuery es una consulta*/
if ($conexion->insert_id > 0){
    echo json_encode([
        "respuesta" => "ok"
    ]);
}else{
    echo json_encode([
        "respuesta" => "error"
    ]);
}
/*Cierro la conexion*/
$conexion->close();