<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    // Controlar qué campos se pueden asignar masivamente
    protected $fillable = [
        'lot_number',
        'area_m2',
        'base_price',
        'price_m2',
        'status',
        'project_id',
    ];

    // formatear tipos automáticamente
    protected $casts = [
        'area_m2' => 'decimal:2',
        'base_price' => 'decimal:2',
        'price_m2' => 'decimal:2',
    ];


    // Relación con Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    // formato visual de precios
    public function getFormattedBasePriceAttribute()
    {
        return '$' . number_format($this->base_price, 2);
    }


    // Scope para filtrar lotes por estado
    public function scopeAvailable($query)
    {
        return $query->where('status', 'Available');
    }

    public function scopeReserved($query)
    {
        return $query->where('status', 'Reserved');
    }

    public function scopeSold($query)
    {
        return $query->where('status', 'Sold');
    }

    public function scopeBlocked($query)
    {
        return $query->where('status', 'Blocked');
    }

}
