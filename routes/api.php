<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mahasiswa', 'apicontroller@get_all_mahasiswa');
Route::post('mahasiswa/insert', 'apicontroller@insert_data_mahasiswa');
Route::post('mahasiswa/update/{nim}', 'apicontroller@update_data_mahasiswa');