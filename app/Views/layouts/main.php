<?php

$pageTitle = $title ?? 'Tienda de Electrodomesticos';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="/">ElectroHogar</a>
        <nav class="main-nav" aria-label="Principal">
            <a href="/">Inicio</a>
            <a href="/catalogo">Catalogo</a>
            <a href="/producto">Producto demo</a>
        </nav>
    </header>

    <main class="page">
        <?= $content ?? '' ?>
    </main>
</body>
</html>
