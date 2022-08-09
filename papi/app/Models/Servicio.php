<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'Servicios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre', 'descripcion', 'logo'
    ];
}
