<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Tareas;

class HomeController extends Controller{
    public function home(){
        echo "Hola al chollo este de tareas";
    }
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
            $titulo = $_POST['titulo'] ?? null;
            $descripcion = $_POST['descripcion'] ?? null;
            $fecha_creacion = $_POST['fecha_creacion'] ?? null;

            // Validar los datos
            if ($titulo && $descripcion && $fecha_creacion) {
                // Crear una nueva tarea usando Eloquent
                $tarea = new Tareas ();
                $tarea->titulo = $titulo;
                $tarea->descripcion = $descripcion;
                $tarea->fecha_vencimiento = $fecha_creacion;

                // Guardar la tarea en la base de datos
                $tarea->save();

                // Redirigir a la lista de tareas o mostrar un mensaje de éxito
                header('Location: /home'); // O la ruta que prefieras
                exit();
            } 

        } else {
            // Si no se ha enviado el formulario, renderizamos la vista del formulario
            $this->view('new');
        }
    }


}
?>