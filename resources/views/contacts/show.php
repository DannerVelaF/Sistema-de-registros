<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del contacto</title>
</head>
<body>

    <h1>Detalle del contacto</h1>

    <a href="/contacts">Volver</a>
    <a href="/contacts/<?= $contact['id'] ?>/edit">Editar</a>

    <p>Nombre <?= $contact['name'] ?></p>
    <p>Email <?= $contact['email'] ?></p>
    <p>Teléfono <?= $contact['phone'] ?></p>

    <form action="/contacts/<?= $contact['id'] ?>/delete" method="post">

        <button>
            Eliminar
        </button>

    </form>

</body>
</html>