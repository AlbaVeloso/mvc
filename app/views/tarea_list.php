<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
    <h1>Lista de Tareas</h1>
    <a class= "nueva" href="tarea/new">Crear nueva tarea</a> <!-- Enlace al formulario de nueva tarea -->
    <table border="1">
        <thead>
            <tr>
                <th>ID_Tarea</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha de creación</th>
                <th>Acciones</th> <!-- Columna para los botones de editar y eliminar -->
            </tr>
        </thead>
        <tbody>
            <?php if ($tareas->isEmpty()): ?>
                <tr>
                    <td colspan="5">No hay tareas disponibles.</td> <!-- Aumentamos el colspan a 5 -->
                </tr>
            <?php else: ?>
                <?php foreach ($tareas as $tarea): ?>
                    <tr>
                        <td><?= htmlspecialchars($tarea->id_tarea) ?></td>
                        <td><?= htmlspecialchars($tarea->title) ?></td>
                        <td><?= htmlspecialchars($tarea->descripcion) ?></td>
                        <td><?= htmlspecialchars($tarea->fecha_creacion) ?></td>
                        <td>
                            <!-- Enlace que lleva a la vista de edición con el id de la tarea -->
                            <a href="tarea/edit/<?= $tarea->id_tarea ?>">Editar</a>
                            <!-- Enlace para eliminar la tarea -->
                            <a href="/AppTareas/tarea/delete/<?= $tarea->id_tarea ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>


