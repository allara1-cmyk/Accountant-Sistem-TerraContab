<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    // Campos que se pueden asignar en masa
    protected $fillable = [
        'name',
        'code',
        'location',
        'status',
    ];

    // Conversión de tipos de datos
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Scope para filtrar proyectos activos
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
    
    // Relacion con lotes
    public function lots()
    {
        return $this->hasMany(Lot::class);
    }

}
