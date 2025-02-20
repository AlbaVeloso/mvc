<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
    <header>
        <h1>Editar Contacto</h1>
        <a href="/Agenda">Volver a la lista de contactos</a> 
    </header>

    <main>
        <form class="edit" method="POST" action="/Agenda/contactos/update/<?php echo $contacto->id; ?>">
            <label class="edit" for="name">Nombre:</label>
            <input class="edit" type="text" id="name" name="nombre" value="<?php echo htmlspecialchars($contacto->nombre); ?>" required>

            <label class="edit" for="telefono">Teléfono:</label>
            <input class="edit" type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($contacto->telefono); ?>" required>

            <label class="edit" for="email">Email:</label>
            <input class="edit" type="text" id="email" name="email" value="<?php echo htmlspecialchars($contacto->email); ?>" required>

            <label class="edit" for="direccion">Dirección:</label>
            <textarea class="edit" id="direccion" name="direccion" required><?php echo htmlspecialchars($contacto->direccion); ?></textarea>

            <label class="edit" for="fecha_creacion">Fecha de creación:</label>
            <input class="edit" type="date" id="fecha_creacion" name="fecha_creacion" value="<?php echo htmlspecialchars($contacto->fecha_creacion); ?>" required>

            <button class="edit" type="submit">Actualizar contacto</button>
        </form>
    </main>
</body>
</html>
