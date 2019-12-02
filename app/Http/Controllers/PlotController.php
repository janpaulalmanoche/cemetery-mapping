<?php

namespace App\Http\Controllers;

use App\Plot;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    //
    public function index(){

        $plots = Plot::with('record','area')->orderBy('area_id','asc')->get();
        return view('plot.index')->with(compact('plots'));
    }
}
