<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/13/15
 * Time: 8:45 AM
 */

include 'BD/global.php';

$sentencia_sql = "SELECT * FROM noticias";

$noticias = ejecutar_query($sentencia_sql);

