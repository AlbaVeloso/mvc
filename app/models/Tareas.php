<?php
namespace Formacom\Models;

use Illuminate\Database\Eloquent\Model; // Importar la clase base de Eloquent

class Tareas extends Model
{
    // Especifica la tabla que este modelo utilizará (si es diferente del nombre en plural del modelo)
    protected $table = 'tareas'; // Asegúrate de que el nombre de la tabla sea correcto

    // Si la tabla tiene una clave primaria diferente (por defecto Eloquent usa 'id')
    protected $primaryKey = 'id_tarea'; // Si tu tabla usa una clave primaria diferente, defínela aquí.

    // Si no quieres que Eloquent gestione las marcas de tiempo (created_at, updated_at), ponlo en falso
    public $timestamps = false; // Si no usas marcas de tiempo, ponlo a false.

    // Definir qué columnas pueden ser asignadas masivamente (mass assignable)
    protected $fillable = [
        'titulo', 
        'descripcion', 
        'fecha_creacion', 
    ];

    // O si prefieres usar el método `guarded` para lo contrario (definir qué campos no se pueden asignar masivamente)
    // protected $guarded = ['id']; // Excluir el campo 'id' del llenado masivo
}
?>
