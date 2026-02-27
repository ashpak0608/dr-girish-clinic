<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['category', 'name', 'description', 'icon', 'display_order'];
    
    public function scopeOrthopaedic($query)
    {
        return $query->where('category', 'Orthopaedic')->orderBy('display_order');
    }
    
    public function scopeDermatology($query)
    {
        return $query->where('category', 'Dermatology')->orderBy('display_order');
    }
}