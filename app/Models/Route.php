<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    
    public function route()
    {
        return $this->belongsToMany('App\Models\Route');

    }
}
