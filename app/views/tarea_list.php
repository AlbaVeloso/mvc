<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
    <h1>Lista de Tareas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID_Tarea</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha de creación</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($tareas->isEmpty()): ?>
                <tr>
                    <td colspan="4">No hay tareas disponibles.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($tareas as $tarea): ?>
                    <tr>
                        <!-- Aquí accedemos a las propiedades de cada tarea individual -->
                        <td><?= htmlspecialchars($tarea->id_tarea) ?></td>
                        <td><?= htmlspecialchars($tarea->title) ?></td>
                        <td><?= htmlspecialchars($tarea->descripcion) ?></td>
                        <td><?= htmlspecialchars($tarea->fecha_creacion) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
