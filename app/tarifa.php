<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarifa extends Model
{
    protected $fillable = [
        'id','activa','monto','inicio','final','rango','tipov',
    ];
    
}
