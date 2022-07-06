<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equips extends Model
{
    use HasFactory;

    public function entitats(){
        return $this->belongsTo('App\Models\Entitats');
    }
    public function partits(){
        return $this->hasMany('App\Models\Partits');
    }
}
