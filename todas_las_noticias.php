<?php
/**
 * Created by PhpStorm.
 * User: lalo
 * Date: 14/05/15
 * Time: 03:19 PM
 */

include 'acciones/BD/global.php';

$sentencia_sql = 'SELECT * FROM noticias';

$noticias = ejecutar_query($sentencia_sql);


?>

<h3>Noticias</h3>
<hr/>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Titulo de Noticia</th>
        <th>Operaciones</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($noticias as $noticia):?>
    <tr>
        <td><?php echo $noticia['fecha']?></td>
        <td><?php echo $noticia['titulo']?></td>
        <td><a href="acciones/eliminar_noticia.php?id=<?php echo $noticia['id_noticia']; ?>">Eliminar noticia</a></td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>
