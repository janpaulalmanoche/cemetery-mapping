<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table='areas';
    protected $guarded = [''];

    public function plot(){
        return $this->belongsTo('App\Plot');
    }
}
