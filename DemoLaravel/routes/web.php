<?php

use App\Http\Controllers\Admin\Dashboardcontroller;
use App\Http\Controllers\Admin\Productcontroller;
use App\Http\Controllers\Demo2controller;
use App\Http\Controllers\demo3controller;
use App\Http\Controllers\Democontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo4Controller;
use App\Http\Controllers\Demo5Controller;
use App\Http\Controllers\Demo4TestController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/demo/index', [Democontroller::class, 'index']);
Route::get('/demo/index2', [Democontroller::class, 'index2']);
Route::get('/demo/index3', [Democontroller::class, 'index3']);

//gán controller chạy mặc định , kiểu home
Route::group([], function() {
    Route::get('/', [Demo3controller::class, 'index']);
});


//Route::get('/demo2/index', [Demo2controller::class, 'index']);
//nhóm lại thành  một cụm 
Route::group(['prefix' => 'demo2'], function() {
    Route::get('/', [Demo2controller::class, 'index']); // cách này hoặc dưới cũng dc
    Route::get('/index', [Demo2controller::class, 'index']);
    
    Route::get('/index2/{id}', [Demo2controller::class, 'index2']);
    Route::get('/index3/{id}/{username}', [Demo2controller::class, 'index3']);
  //  Route::get('/index4',[Demo2controller::class, 'index4']);

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::group(['prefix' => 'dashboard'], function() {
        Route::get('/', [Dashboardcontroller::class, 'index']);
        Route::get('/index',[Dashboardcontroller::class,'index']);
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [Productcontroller::class, 'index']);
        Route::get('/index',[Productcontroller::class,'index']);
        Route::get('/details/{id}',[Productcontroller::class, 'details']);
    });

});
Route::group(['prefix' => 'demo4'], function(){
    
        Route::get('/', [Demo4controller::class, 'index']);
        Route::get('/index',[Demo4controller::class,'index']);
        Route::get('/searchbykeyword',[Demo4Controller::class,'searchbykeyword']);
        Route::get('/searchbyprice',[Demo4Controller::class,'searchbyprice']);
        Route::post('/login',[Demo4Controller::class,'login']);
        Route::post('/upload',[Demo4Controller::class,'upload']);
    
});


Route::group(['prefix' => 'demo5'], function(){
    Route::get('/',[Demo5Controller::class, 'index']);
    Route::get('/index',[Demo5Controller::class,'index']);
    Route::get('/index2',[Demo5Controller::class,'index2']);

});

Route :: group(['prefix' => 'demo4test'], function() {
    Route::get('/', [Demo4TestController::class, 'index']);
    Route::get('/index', [Demo4TestController::class, 'index']);
    Route::get('/searchbyword', [Demo4TestController::class, 'searchbyword']);
});