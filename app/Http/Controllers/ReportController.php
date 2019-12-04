<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

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
}
