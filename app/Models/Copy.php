<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
    public function Book(){

        return $this->belongsTo('App\Models\Book');
    }
    public function People(){

        return $this->belongsToMany('App\Models\People','Saca');
    }
}
