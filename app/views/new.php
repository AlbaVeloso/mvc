<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo contacto</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>

<body>
    <h1>Crea tu nuevo contacto:</h1>
    <div>
    <form class="nueva" action="" method="POST">
        <label class="nueva" for="nombre">Nombre</label>
        <input class="nueva" type="text" name="nombre" id="nombre" required placeholder="Nombre"></textarea><br>

        <label class="nueva" for="telefono">Teléfono</label>
        <textarea class="nueva" name="telefono" id="telefono" required placeholder="Teléfono"></textarea><br>

        <label class="nueva" for="email">Email</label>
        <textarea class="nueva" name="email" id="email" required placeholder="Email"></textarea><br>

        <label class="nueva" for="direccion">Dirección</label>
        <textarea class="nueva" name="direccion" id="direccion" required placeholder="Dirección"></textarea><br>

        <label class="nueva" for="fecha_creacion">Fecha de Creación</label>
        <input class="nueva" type="date" name="fecha_creacion" id="fecha_creacion" required><br>

        <button type="submit">Crear contacto</button>
        </div>
    </form>

</body>

</html>