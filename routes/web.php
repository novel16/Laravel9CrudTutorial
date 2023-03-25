<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::put();
//Route:: patch();
//Route::delete();
//Route:: options();

//Common routes naming
//index -show all data or student
//show - show a single data or student
//create - show a form to a new user
//store - store a data
//edit- show form to a data
//update - update a data
//destroy - delete a data


Route::get('/', function () {
    return view('welcome');
});


Route::get('/info', [InfoController::class, 'index']);
Route::get('/Add', [InfoController::class, 'create']);
Route::post('/store', [InfoController::class, 'store']);
Route::get('/info/{info}', [InfoController::class, 'edit']);
Route::put('/info/{info}', [InfoController::class, 'update']);
Route::delete('/info/delete/{info}', [InfoController::class, 'destroy']);