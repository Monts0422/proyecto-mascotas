<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascotas';
    protected $fillable = ['nombre', 'especie', 'edad', 'raza', 'descripcion', 'disponible'];

    // Definir castings para campos específicos
    protected $casts = [
        'disponible' => 'boolean', // Casting para que 'disponible' se maneje como booleano
        'edad' => 'integer', // Casting para que 'edad' se maneje como entero
    ];
    // Mutador para guardar 'especie' en minúsculas
    protected function especie(): Attribute
    {
        return Attribute::make(
            set: function (string $value) {
                return strtolower($value);
            },
            get: function (string $value) {
                return ucfirst($value); // Retorna 'especie' con la primera letra en mayúscula
            }
        );
    }
}

