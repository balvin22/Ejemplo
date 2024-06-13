<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saca extends Model
{
    use HasFactory;
    public function People(){

    return $this->belongsTo('App\Models\People');
}
public function Copy(){

    return $this->belongsTo('App\Models\Copy');
}
}
