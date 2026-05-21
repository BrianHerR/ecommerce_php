<?php ob_start(); ?>

<section class="section">
    <h1>Detalle de producto</h1>
    <p>Esta ruta queda preparada para mostrar la ficha de un electrodomestico con precio, stock, marca, garantia y especificaciones.</p>
</section>

<?php
$content = ob_get_clean();
require BASE_PATH . '/app/Views/layouts/main.php';
