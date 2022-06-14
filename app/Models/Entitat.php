<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entitat extends Model
{
    use HasFactory;
    
    public function equips(){
        return $this->hasMany('App\Models\Equips');
    }
}

