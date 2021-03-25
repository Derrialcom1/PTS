<?php

use Illuminate\Support\Facades\Route;
$url = "App\Http\Controllers";

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', $url . '\PtsController@index');
Route::get('addPts',$url. '\PtsController@addData');
Route::post('savePts',$url. '\PtsController@saveData');
Route::get('editPts{id}',$url. '\PtsController@editData');
Route::post('updatePts',$url. '\PtsController@updateData');
Route::get('deletePts{id}', $url . '\PtsController@deleteData');

Route::get('home/export/xlsx',$url. '\PtsController@exportXL');
Route::get('home/export/pdf',$url. '\PtsController@exportPDF');

Route::get('upload',$url. '\PtsController@upload');
Route::post('home/upload/data',$url. '\PtsController@uploadData');