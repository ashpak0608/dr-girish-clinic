<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'email', 'timings', 
        'map_embed', 'latitude', 'longitude', 'is_main', 'display_order'
    ];
    
    public function getFullAddressAttribute()
    {
        return $this->address;
    }
    
    public function getGoogleMapsLinkAttribute()
    {
        if ($this->latitude && $this->longitude) {
            return "https://www.google.com/maps/search/?api=1&query={$this->latitude},{$this->longitude}";
        }
        return "https://maps.google.com/?q=" . urlencode($this->address);
    }
}