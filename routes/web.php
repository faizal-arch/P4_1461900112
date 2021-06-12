<?php
use App\Http\Controllers\perpusController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu0112',[perpusController::class,'menu']);
Route::get('/daftarbuku0112',[perpusController::class,'viewbuku']);
Route::get('/daftarbuku0112/export',[perpusController::class,'export']);
Route::get('/letakbuku0112',[perpusController::class,'viewletak']);
Route::get('/letakbuku0112/export',[perpusController::class,'export']);
Route::get('/jenisbuku0112',[perpusController::class,'viewjenis']);
Route::get('/jenisbuku0112/export',[perpusController::class,'export']);
