<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/14/15
 * Time: 8:31 AM
 */
?>


<form action="acciones/agregar_noticia.php" method="post">
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha"/>

    <br/>

    <label for="titulo">Titulo</label>
    <input type="text" name="titulo"/>
    <br/>


    <label for="cuerpo">Cuerpo</label>
    <textarea name="cuerpo" id="cuerpo" cols="30" rows="10"></textarea>
    <br/>


    <input type="submit" value="Agregar Noticia"/>
</form>

<a href="index.html">Regresar</a>