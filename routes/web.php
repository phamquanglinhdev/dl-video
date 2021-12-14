<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/{id?}/',[IndexController::class,"index","id"])->where(["id"])->name("index");

Route::get('/view/{id}', function ($id) {
    $video = \App\Models\Video::find($id);
    return view('client.video',["video"=>$video]);
})->name("video");

