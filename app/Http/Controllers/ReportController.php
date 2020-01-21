<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;
use App\PlotVisitor;
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

}
