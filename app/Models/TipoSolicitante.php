<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSolicitante extends Model
{
    use HasFactory;
    protected $table = 'tipo_solicitantes';
    protected $fillable = [
        'clave',
        'nombre',
        'tipo_solicitantes_id'
    ];
}
