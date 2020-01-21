<?php

namespace App\Http\Controllers;

use App\Area;
use App\Plot;
use App\Record;
use App\PlotVisitor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(Request $request){

        $find = Record::where('last_name',$request->name)
            ->orWhere('last_name' ,'like','%' .$request->name .  '%')->get();

        return response()->json($find);

    }

    public function display(Request $request){
        $record = Record::where('id',$request->id)->first();


        $area_of_person = $record->plots()->first()->area;

        $plot = Plot::where('area_id',$area_of_person->id)->get();
            //with('record')->

        $plot->map(function ($person) {

            $person->first_name = $person->record()->pluck('first_name');
            $person->last_name = $person->record()->pluck('last_name');
            $person->birth_date = $person->record()->pluck('birth_date');
            $person->color = $person->record()->pluck('color');

            $k = $person->count();
                if($k >= 1){
                    return     $person->name =
                        $person->record()->pluck('first_name') ;
                }
                else{

                    return $person->name = ['null'];
                }

        });

        return response()->json([ 'area' => $area_of_person ,'plot' => $plot , 'record' => $record]);

    }

    public function visitor(Request $request){

        $new = new PlotVisitor;
        $new->record_id = $request->id;
        $new->visitor = $request->name;
        $new->save();

        return response()->json(['success' => true]);

    }


}
