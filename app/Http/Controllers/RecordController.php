<?php

namespace App\Http\Controllers;

use App\Plot;
use App\Record;
use App\Service\recordsService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    //
    public function index(){
       $records = Record::with('plots','plots.area')->orderBy('last_name','desc')->get();

        return view('deceased.index')->with(compact('records'));
    }

    public function create(){
        $plot = Plot::with('area')->get();
        return view('deceased.create')->with(compact('plot'));
    }
    public function add_though_plot_index($id){
        $plot = Plot::with('area')->where('id',$id)->first();
        return view('deceased.create_with_id')->with(compact('plot'));

    }

    public function store(Request $request){


        //        dd($request->all());
        if($request->birthday > Carbon::now()){
            return redirect()->back()->with('error','You cant put a date that is ahead of the present date');
        }
        if($request->deceased > Carbon::now()){
            return redirect()->back()->with('error','You cant put a date that is ahead of the present date');
        }
        if($request->birthday > $request->deceased ){
            return redirect()->back()->with('error','Deceased Date should be greater than Birthdate');
        }
        if(empty($request->plot_id)){
            return redirect()->back()->with('error','select Plot ');
        }

        $check_if_taken = Plot::where('id',$request->plot_it)->count();
        if($check_if_taken == 1){
            return redirect()->back()->with('error','Plot ID is already Occupied');
        }


        $this->validate($request,[
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
        ]);

        $service = new recordsService();
        $service->deceased($request);
        return redirect('/record')->with('ok','New Record Saved');

    }

    public function show(){

    }

    public function update(){

    }



}

