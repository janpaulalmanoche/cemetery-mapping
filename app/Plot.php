<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    //
    protected $table='plots';
    protected $guarded = [''];

    public function record(){
        return $this->hasOne('App\Record','plot_id','id');
    }

    public function area(){
        return $this->belongsTo('App\Area','area_id','id');
    }
}
