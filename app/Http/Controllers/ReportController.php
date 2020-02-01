<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;
use App\PlotVisitor;
use App\Area;
class ReportController extends Controller
{
    //
    public function __construct()
    {
        $this->record_model = Record::with('plots','plots.area');
    }

    public function individualI_index(){

        $records =  $this->record_model->get();
        return view('report.individual.index')->with(compact('records'));
    }

    public function individual($id){

    $record = $this->record_model->where('id',$id)->first();
        return view('report.individual.individual')->with(compact('record'));
    }

    public function visitor_index(){

        $records =  $this->record_model->get();
        return view('report.visitor.index')->with(compact('records'));
    }

    public function visitor_result($record_id){
        $record = Record::find($record_id);
        $visitor = PlotVisitor::where('record_id',$record_id)->get();

        return view('report.visitor.result')->with(compact('record','visitor'));
    }

    public function per_plot_report(){

        $area = Area::get();
        return view('report.by_area_report.index')->with(compact('area'));
    }
    public function result(Request $request){
        $records = Record::where('area_id',$request->area_id)->get();
        $count = Record::where('area_id',$request->area_id)->count();
        $area = Area::find($request->area_id);
//        dd($record);

        return view('report.by_area_report.show')->with(compact('records','count','area'));
    }


}
