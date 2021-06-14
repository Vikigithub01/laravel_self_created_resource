<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

 // Route::get('/', function () {
 //     return view('welcome');
 // });
Route::resource('cruds',CrudController::class);

// Route::view('/','add');
// Route::get('list',[AddController::class]);
// Route::get('delete/{id}',[AddController::class,'delete']);
// Route::get('edit/{id}',[AddController::class,'edit']);
// Route::post('update',[AddController::class,'update']);


// Route::post('add',[AddController::class,'add']);
