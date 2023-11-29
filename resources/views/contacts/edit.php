<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar contacto</title>
</head>
<body>
    
    <h1>Actualizar contacto</h1>

    <form action="/contacts/<?= $contact['id'] ?>" method="post">

        <div>
            <label for="name">
                Nombre
            </label>
            <input type="text" name="name" id="name" value="<?= $contact['name'] ?>">
        </div>

        <div>
            <label for="email">
                Email
            </label>
            <input type="email" name="email" id="email" value="<?= $contact['email'] ?>">
        </div>

        <div>
            <label for="phone">
                Teléfono
            </label>
            <input type="text" name="phone" id="phone" value="<?= $contact['phone'] ?>">
        </div>

        <button type="submit">
            Actualizar
        </button>

    </form>

</body>
</html>