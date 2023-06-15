<?php

use App\Http\Controllers\Admin\Dashboardcontroller;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Demo1Controller;
use App\Http\Controllers\Demo2controller;
use App\Http\Controllers\demo3controller;
use App\Http\Controllers\Democontroller;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo4Controller;
use App\Http\Controllers\Demo5Controller;
use App\Http\Controllers\Demo4TestController;
use App\Http\Controllers\Demo6Controller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::group(['prefix' => 'demo1'], function() {
    Route::get('/', [Demo1Controller::class, 'index']); // cách này hoặc dưới cũng dc
    Route::get('/index', [Demo1Controller::class, 'index']);
});


Route::get('/demo/index', [Democontroller::class, 'index']);
Route::get('/demo/index2', [Democontroller::class, 'index2']);
Route::get('/demo/index3', [Democontroller::class, 'index3']);

//gán controller chạy mặc định , kiểu home
// Route::group([], function() {
//     Route::get('/', [Demo3controller::class, 'index']);
// });


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
        Route::get('/', [ProductAdminController::class, 'index']);
        Route::get('/index',[ProductAdminController::class,'index']);
        Route::get('/details/{id}',[ProductAdminController::class, 'details']);
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

Route :: group(['prefix' => 'demo6'], function() {
    Route::get('/index', [Demo6Controller::class, 'index']);
    Route::get('/index2', [Demo6Controller::class, 'index2']);
    Route::get('/index3', [Demo6Controller::class, 'index3']);
    Route::get('/index4', [Demo6Controller::class, 'index4']);
    Route::get('/index5', [Demo6Controller::class, 'index5']);
    Route::get('/index6', [Demo6Controller::class, 'index6']);
    Route::get('/index7', [Demo6Controller::class, 'index7']);
    Route::get('/index8', [Demo6Controller::class, 'index8']);
    Route::get('/index9', [Demo6Controller::class, 'index9']);
    Route::get('/index10', [Demo6Controller::class, 'index10']);
    Route::get('/index11', [Demo6Controller::class, 'index11']);
    Route::get('/index12', [Demo6Controller::class, 'index12']);
    Route::get('/index13', [Demo6Controller::class, 'index13']);
    Route::get('/index14', [Demo6Controller::class, 'index14']);
    Route::get('/index15', [Demo6Controller::class, 'index15']);
    Route::get('/index16', [Demo6Controller::class, 'index16']);
    Route::get('/index17', [Demo6Controller::class, 'index17']);
    Route::get('/index18', [Demo6Controller::class, 'index18']);
    Route::get('/index19', [Demo6Controller::class, 'index19']);
    Route::get('/index20', [Demo6Controller::class, 'index20']);
    Route::get('/index21', [Demo6Controller::class, 'index21']);
    Route::get('/index22', [Demo6Controller::class, 'index22']);
    Route::get('/index23', [Demo6Controller::class, 'index23']);
    Route::get('/index24', [Demo6Controller::class, 'index24']);
    Route::get('/index25', [Demo6Controller::class, 'index25']);
    
});
Route :: group(['prefix' => 'invoice'], function() {
    Route::get('/index', [InvoiceController::class, 'index']);
    Route::get('/index1', [InvoiceController::class, 'index1']);
    Route::get('/index2', [InvoiceController::class, 'index2']);
    Route::get('/index3', [InvoiceController::class, 'index3']);
    Route::get('/index4', [InvoiceController::class, 'index4']);
    Route::get('/index3_1', [InvoiceController::class, 'index3_1']);
    Route::get('/index3_2', [InvoiceController::class, 'index3_2']);
    Route::get('/index5', [InvoiceController::class, 'index5']);
    Route::get('/add', [InvoiceController::class, 'add']);
    Route::post('/save', [InvoiceController::class, 'save']);
    Route::get('/delete/{id}', [InvoiceController::class, 'delete']);
    Route::get('/edit/{id}', [InvoiceController::class, 'edit']);
    Route::post('/update', [InvoiceController::class, 'update']);
   
});

Route ::group([], function(){
    Route::get('/',[ProductController::class,'index']);
});

Route ::group(['prefix' => 'product'], function(){
    Route::get('/',[ProductController::class,'index']);
    Route::get('/index',[ProductController::class,'index']);
    Route::get('/details/{id}',[ProductController::class,'details']);
    Route::get('/searchbykeyword',[ProductController::class,'searchbykeyword']);
    Route::get('/searchbyprice',[ProductController::class,'searchbyprice']);
    Route::get('/add',[ProductController::class,'add']);
    Route::post('/save',[ProductController::class,'save']);
    Route::get('/delete/{id}',[ProductController::class,'delete']);
    Route::get('/edit/{id}',[ProductController::class,'edit']);
    Route::post('/update',[ProductController::class,'update']);

});
