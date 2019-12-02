<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
     protected $table = 'records';
   protected $guarded = [''];

    public function plots(){
        return $this->belongsTo('App\Plot','plot_id','id');
    }

}
