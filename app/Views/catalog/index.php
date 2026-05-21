<?php ob_start(); ?>

<section class="section">
    <h1>Catalogo</h1>
    <p>Aca vamos a listar heladeras, lavarropas, cocinas, aires acondicionados y otros electrodomesticos.</p>
</section>

<?php
$content = ob_get_clean();
require BASE_PATH . '/app/Views/layouts/main.php';
