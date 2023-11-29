<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-2">Listado de contactos</h1>

        <form action="/contacts" class="flex">

            <input type="text" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba el contacto" required>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-4">
                Buscar
            </button>

        </form>

        <a href="/contacts/create">Crear contacto</a>

        <ul class="list-disc list-inside">
            <?php foreach ($contacts['data'] as $contact) : ?>
                <li>
                    <a href="/contacts/<?= $contact['id'] ?>">
                        <?= $contact['name'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

        <?php

            $paginate = "contacts";
            require_once '../resources/views/assets/pagination.php'

        ?>
        
    </div>

</body>

</html>