<?php

namespace App\Service;


use App\Plot;
use App\Record;
use Carbon\Carbon;
use Illuminate\Http\Request;

class recordsService{

    public function deceased($request){
//            dd($request->all());
        $plot = Plot::find($request->plot_id);
        $plot->status = 'occupied';
        $plot->update();

        $new = new Record();
        $new->first_name = $request->first_name;
        $new->middle_name = $request->middle_name;
        $new->last_name = $request->last_name;
        $new->birth_date = $request->birthday;
        $new->deceased_date = $request->deceased;
        $new->area_id = $plot->area_id;
        $new->color = 'red';
        $new->plot_id = $request->plot_id;
        $new->save();

        $plot = Plot::find($request->plot_id);
        $plot->status = 'occupied';
        $plot->update();
    }

}