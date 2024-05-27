<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;
    public function teacher(){

        return $this->belongsTo('App\Models\teacher');
    }
    public function student(){

        return $this->hasMany('App\Models\module');
    }
}
