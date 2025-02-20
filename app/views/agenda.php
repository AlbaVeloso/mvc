<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contactos</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
    <h1>Agenda</h1>
    <a class= "nuevo" href="/Agenda/contacto/new">Crear un nuevo contacto</a> 
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Fecha de creación</th>
                <th>Acciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php if (empty($contactos)): ?>
                <tr>
                    <td colspan="7">No hay contactos disponibles.</td> 
                </tr>
            <?php else: ?>
                <?php foreach ($contactos as $contacto): ?>
                    <tr>
                        <td><?= htmlspecialchars($contacto->id) ?></td>
                        <td><?= htmlspecialchars($contacto->nombre) ?></td>
                        <td><?= htmlspecialchars($contacto->telefono) ?></td>
                        <td><?= htmlspecialchars($contacto->email) ?></td>
                        <td><?= htmlspecialchars($contacto->direccion) ?></td>
                        <td><?= htmlspecialchars($contacto->fecha_creacion) ?></td>
                        <td>
                            <!-- Enlace que lleva a la vista de edición con el id de la tarea -->
                            <a href="/Agenda/contactos/edit/<?= $contacto->id ?>">Editar</a>
                            <!-- Enlace para eliminar la tarea -->
                            <a href="/Agenda/contactos/delete/<?= $contacto->id ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este contacto?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>



