<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
use HasFactory;

protected $table = 'comida';

protected $fillable = [
    'nombre',
    'valor',
    'tipo',
    'descripcion'
];

}