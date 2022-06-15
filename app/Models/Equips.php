<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equips extends Model
{
    use HasFactory;

    public function entitat(){
        return $this->belongsTo('App\Models\Entitat');
    }
}
