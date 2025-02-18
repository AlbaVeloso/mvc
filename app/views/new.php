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
    <form action="" method="POST">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" required><br>

    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" required></textarea><br>

    <label for="fecha_creacion">Fecha de Creación</label>
    <input type="date" name="fecha_creacion" id="fecha_creacion" required><br>

    <button type="submit">Crear tarea</button>
</form>
    
</body>
</html>