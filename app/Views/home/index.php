<?php ob_start(); ?>

<section class="hero">
    <p class="eyebrow">Ecommerce MVC en PHP</p>
    <h1>Tienda de electrodomesticos lista para crecer</h1>
    <p>Esta es la base inicial del proyecto: rutas, controlador, vistas, entorno y configuracion preparados para empezar el catalogo.</p>
    <a class="button" href="/catalogo">Ver catalogo</a>
</section>

<?php
$content = ob_get_clean();
require BASE_PATH . '/app/Views/layouts/main.php';
