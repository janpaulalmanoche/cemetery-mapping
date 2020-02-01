<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
//    return view('welcome');
        return redirect('/home');
    });
    //dashboard admin
    Route::get('/home',function (){
        return view('layouts.adminLayout.dashboard');
    });

    //adding user
    Route::resource('/user','Registration');
    Route::post('user/update','Registration@update');

    //add deceased record
    Route::resource('/record','RecordController');
    Route::post('/update-re','RecordController@haha');

    //add deceased record through the plot index
    Route::get('/add-record/{id}','RecordController@add_though_plot_index');
    Route::resource('/plot','PlotController');

});


//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
//
//
//
//
//
//Route::get('/form',function (){
//
//    return view('register.index');
//});

//report for a single record
Route::get('/report-individual','ReportController@individualI_index');
Route::get('/report-individual-result/{id}','ReportController@individual');

Route::get('visitor-individual','ReportController@visitor_index');
Route::get('visitor-individual/{record_id}','ReportController@visitor_result');

//per plot report
Route::get('/per-area','ReportController@per_plot_report');
Route::post('/area-report','ReportController@result');
