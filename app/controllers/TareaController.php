<?php
namespace Formacom\Controllers;
use Formacom\Core\Controller;
use Formacom\models\Tareas;

class TareaController extends Controller{
       public function index(...$params)
    {
        // Llamamos a la función listarTareas para obtener las tareas
        $tareas = Tareas::all();

        // Pasamos las tareas a la vista 'home'
        $data = ['tareas' => $tareas];
        $this->view('tarea_list', $data);
    }


    // Método para cargar la vista (esto depende de tu implementación de vistas)
    public function view($view, $data = [])
    {
        extract($data);
        require_once "./app/views/{$view}.php";
    }
    public function new()
    {
        // Verificar si se ha enviado el formulario (si existen datos en $_POST)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtener los datos del formulario
            $title = $_POST['title'] ?? null;
            $descripcion = $_POST['descripcion'] ?? null;
            $fecha_creacion = $_POST['fecha_creacion'] ?? null;

            // Validar los datos
            if ($title && $descripcion && $fecha_creacion) {
                // Crear una nueva tarea usando Eloquent
                $tarea = new Tareas ();
                $tarea->title = $title;
                $tarea->descripcion = $descripcion;
                $tarea->fecha_creacion = $fecha_creacion;

                // Guardar la tarea en la base de datos
                $tarea->save();

                // Redirigir a la lista de tareas o mostrar un mensaje de éxito
                header('Location: /AppTareas/'); // O la ruta que prefieras
                exit();
            } 

        } else {
            // Si no se ha enviado el formulario, renderizamos la vista del formulario
            $this->view('new');
        }
    }
    public function edit($id_tarea)
    {
        // Buscar la tarea por su ID
        $tarea = Tareas::find($id_tarea);

        // Verificar si la tarea existe
        if ($tarea) {
            // Si existe, pasar los datos a la vista 'edit' (formulario de edición)
            $this->view('edit', ['tarea' => $tarea]);
        } else {
            // Si no existe la tarea, redirigir a la lista de tareas o mostrar un mensaje de error
            header('Location: /AppTareas/');
            exit();
        }
    }

    // Método para procesar la actualización de una tarea
    public function update($id_tarea)
    {
        // Buscar la tarea por su ID
        $tarea = Tareas::find($id_tarea);


        // Verificar si la tarea existe
        if ($tarea) {
            // Verificar si se ha enviado el formulario
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Obtener los datos del formulario
                $title = $_POST['title'] ?? null;
                $descripcion = $_POST['descripcion'] ?? null;
                $fecha_creacion = $_POST['fecha_creacion'] ?? null;

                // Validar los datos
                if ($title && $descripcion && $fecha_creacion) {
                    // Actualizar los campos de la tarea
                    $tarea->title = $title;
                    $tarea->descripcion = $descripcion;
                    $tarea->fecha_creacion = $fecha_creacion;

                    // Guardar los cambios en la base de datos
                    $tarea->save();

                    // Redirigir a la lista de tareas
                    header('Location: /AppTareas/');
                    exit();
                } else {
                    // Si los datos no son válidos, puedes enviar un mensaje de error o hacer otra acción
                    echo "Todos los campos son requeridos.";
                }
            }
        } else {
            // Si no existe la tarea, redirigir a la lista de tareas
            header('Location: /AppTareas/');
            exit();
        }
    }
    public function delete($id_tarea)
{
    // Buscar la tarea por su ID
    $tarea = Tareas::find($id_tarea);

    // Verificar si la tarea existe
    if ($tarea) {
        // Eliminar la tarea de la base de datos
        $tarea->delete();

        // Redirigir a la lista de tareas
        header('Location: /AppTareas/');
        exit();
    } else {
        // Si no existe la tarea, redirigir a la lista de tareas o mostrar un mensaje de error
        header('Location: /AppTareas/');
        exit();
    }
}


}
?>