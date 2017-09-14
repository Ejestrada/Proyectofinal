<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boleto extends Model
{
    protected $fillable = ['id','fecha','total','tarifa','usuario',];
    
}
