<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;

        //relacion muchos a muchos
        public function empresas(){
            return $this->belongsToMany('App\Models\empresas');
        }
}
