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

    //add deceased record
    Route::resource('/record','RecordController');
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
