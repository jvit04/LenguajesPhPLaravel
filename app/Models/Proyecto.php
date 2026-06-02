<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyecto extends Model
{
    use HasFactory;
    
    // Desabilitar timestamps si no los usas
    public $timestamps = false;
    
    //$fillable: evitamos asignación masiva.
    protected $fillable = [
        'nombre' , 
        'descripcion',
        'fecha_de_creacion',
    ];

    // Asignar fecha automáticamente cuando se crea un proyecto
    protected static function booted(): void
    {
        static::creating(function ($model) {
            if (!$model->fecha_de_creacion) {
                $model->fecha_de_creacion = now();
            }
        });
    }
}
