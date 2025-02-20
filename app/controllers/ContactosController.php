<?php
namespace Formacom\Controllers;
use Formacom\Core\Controller;
use Formacom\models\Contactos;

class ContactosController extends Controller{
       public function index(...$params)    {
        
        $contacto = Contactos::all();
        
        $data = ['contactos' => $contacto];
        $this->view('agenda', $data);
    }

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
            $nombre = $_POST['nombre'] ?? null;
            $telefono = $_POST['telefono'] ?? null;
            $email = $_POST['email'] ?? null;
            $direccion = $_POST['direccion'] ?? null;
            $fecha_creacion = $_POST['fecha_creacion'] ?? null;

            // Validar los datos
            if ($nombre && $telefono && $email && $direccion && $fecha_creacion) {
                // Crear una nueva tarea usando Eloquent
                $contacto = new Contactos ();
                $contacto->nombre = $nombre;
                $contacto->telefono = $telefono;
                $contacto->email = $email;
                $contacto->direccion = $direccion;
                $contacto->fecha_creacion = $fecha_creacion;

                // Guardar la tarea en la base de datos
                $contacto->save();

                // Redirigir a la lista de tareas o mostrar un mensaje de éxito
                header('Location: /Agenda/'); // O la ruta que prefieras
                exit();
            } 

        } else {
            // Si no se ha enviado el formulario, renderizamos la vista del formulario
            $this->view('new');
        }
    }
    public function edit($id)
    {
        // Buscar la tarea por su ID
        $contacto = Contactos::find($id);

        // Verificar si la tarea existe
        if ($contacto) {
            // Si existe, pasar los datos a la vista 'edit' (formulario de edición)
            $this->view('edit', ['contacto' => $contacto]);
        } else {
            // Si no existe la tarea, redirigir a la lista de tareas o mostrar un mensaje de error
            header('Location: /Agenda/');
            exit();
        }
    }

    // Método para procesar la actualización de una tarea
    public function update($id)
    {
        // Buscar la tarea por su ID
        $contacto = Contactos::find($id);


        // Verificar si la tarea existe
        if ($contacto) {
            // Verificar si se ha enviado el formulario
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Obtener los datos del formulario
                $nombre = $_POST['nombre'] ?? null;
                $telefono = $_POST['telefono'] ?? null;
                $email = $_POST['email'] ?? null;
                $direccion = $_POST['direccion'] ?? null;
                $fecha_creacion = $_POST['fecha_creacion'] ?? null;    

                // Validar los datos
                if ($nombre && $telefono && $email && $direccion && $fecha_creacion) {
                    // Actualizar los campos de la tarea
                    $contacto->nombre = $nombre;
                    $contacto->telefono = $telefono;
                    $contacto->email = $email;
                    $contacto->direccion = $direccion;
                    $contacto->fecha_creacion = $fecha_creacion;

                    // Guardar los cambios en la base de datos
                    $contacto->save();

                    // Redirigir a la lista de tareas
                    header('Location: /Agenda/');
                    exit();
                } else {
                    // Si los datos no son válidos, puedes enviar un mensaje de error o hacer otra acción
                    echo "Todos los campos son requeridos.";
                }
            }
        } else {
            // Si no existe la tarea, redirigir a la lista de tareas
            header('Location: /Agenda/');
            exit();
        }
    }
    public function delete($id){
    
    $contacto = Contactos::find($id);
  
    if ($contacto) {
        // Eliminar la tarea de la base de datos
        $contacto->delete();

        header('Location: /Agenda/contactos/agenda/');
        exit();
    } else {
        // Si no existe la tarea, redirigir a la lista de tareas o mostrar un mensaje de error
        header('Location: /Agenda/contactos/agenda/');
        exit();
    }
}


}
?>