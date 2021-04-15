
<?php
    require_once 'app/contenido.php';
    $datos = contenido();
?>

<div class="container mt-2">
    <div class="row-sm-6">
        <div class="col-sm">
            <h1 class="texto-titulo">Presentacion de imagenes tipo Google</h1>
            <h2 class="texto-subtitulo">Algunos villanos de Marvel</h2>
        </div>
    </div>
    <div class="row-sm-6">
        <div class="col-sm">
            <?php require_once 'view/mostrar_imagenes.php' ?>
        </div>
    </div>
</div>