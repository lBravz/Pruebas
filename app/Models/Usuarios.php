<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
/* Para la autenticación */
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'usuario', 'correo', 'clave', 'cargo_id',
    ];

    protected $hidden = [
        'clave', // Laravel espera que este campo sea 'password', pero está oculto
    ];

    // Método para que Laravel use la columna 'clave' como la contraseña
    public function getAuthPassword()
    {
        return $this->clave;
    }
}