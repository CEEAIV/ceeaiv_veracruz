<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAutoridadNombre extends Model
{
    use HasFactory;
    protected $table = 'tipo_autoridades';
    protected $fillable = [
        'clave',
        'nombre',
        'ambito_dependencias_id'
    ];
}
