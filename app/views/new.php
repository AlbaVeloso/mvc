<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>

<body>
    <h1>Crea tu nueva tarea:</h1>
    <form class="nueva" action="" method="POST">
        <label class="nueva" for="title">Título</label>
        <input class="nueva" type="text" name="title" id="title" required><br>

        <label class="nueva" for="descripcion">Descripción</label>
        <textarea class="nueva" name="descripcion" id="descripcion" required></textarea><br>

        <label class="nueva" for="fecha_creacion">Fecha de Creación</label>
        <input class="nueva" type="date" name="fecha_creacion" id="fecha_creacion" required><br>

        <button type="submit">Crear tarea</button>
    </form>

</body>

</html>