<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
class TestController extends Controller
{
    //
    public function index(){
        $new = new Test;
        $new->test = 'hahaha';
        $new->save();

        return response('saved');
    }

    public function result(){
        $get = Test::get();
        return response()->json($get);

    }
}
