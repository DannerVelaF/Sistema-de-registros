<!-- layout.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- styles resources/css/app.css -->
    <link rel="stylesheet" href="../../css/app.css">

    <!-- scripts -->
    <script src="../../js/app.js" defer></script>

</head>
<body>

    <header>
        <!-- Contenido del encabezado -->
        <h1>Mi Sitio Web</h1>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/about">Acerca de</a></li>
                <!-- Otros elementos del menú -->
            </ul>
        </nav>
    </header>

    <main>
        <!-- Contenido específico de cada página se insertará aquí -->
        <?php echo $content; ?>
    </main>

    <footer>
        <!-- Contenido del pie de página -->
        <p>&copy; <?php echo date("Y"); ?> Mi Sitio Web</p>
    </footer>

</body>
</html>
