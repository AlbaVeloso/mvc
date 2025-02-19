<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
    <header>
        <h1>Editar Tarea</h1>
        <a href="/AppTareas">Volver a la lista de tareas</a> <!-- Enlace para volver a la lista -->
    </header>

    <main>
        <!-- Mostrar el formulario de edición con los datos de la tarea -->
        <form class="edit" method="POST" action="/apptareas/tarea/update/<?php echo $tarea->id_tarea; ?>">
            <label class="edit" for="title">Título:</label>
            <input class="edit" type="text" id="title" name="title" value="<?php echo htmlspecialchars($tarea->title); ?>" required>

            <label class="edit" for="descripcion">Descripción:</label>
            <textarea class="edit" id="descripcion" name="descripcion" required><?php echo htmlspecialchars($tarea->descripcion); ?></textarea>

            <label class="edit" for="fecha_creacion">Fecha de creación:</label>
            <input class="edit" type="date" id="fecha_creacion" name="fecha_creacion" value="<?php echo htmlspecialchars($tarea->fecha_creacion); ?>" required>

            <button class="edit" type="submit">Actualizar tarea</button>
        </form>
    </main>
</body>
</html>
