<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/13/15
 * Time: 8:39 AM
 */

//incluye el dao con la información de la BD:
include 'BD/global.php';

$fecha = $_POST['fecha'];
$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo'];

$sentencia_sql = "INSERT INTO noticias(fecha, titulo, cuerpo) VALUES('$fecha', '$titulo', '$cuerpo')";

ejecutar_query($sentencia_sql);

header('location: ../index.html');