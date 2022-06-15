<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partits extends Model
{
    use HasFactory;

    public function equips(){
        return $this->belongsTo('App\Models\Equips');
    }
}

