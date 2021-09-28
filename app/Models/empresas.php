<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    use HasFactory;

        //relacion muchos a muchos
        public function empleados(){
            return $this->belongsToMany('App\Models\empleados');
        }
}
