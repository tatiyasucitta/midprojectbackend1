<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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
})-> name('welcome');
// Route::get('/add', function () {
//     return view('form');
// })->name('add');
Route::get('/update', function () {
    return view('update');
})->name('up');
Route::get('/view', [EmployeeController::class,'view'])->name('view');
Route::get('/add', [EmployeeController::class,'addviewpage'])->name('add');
Route::post('/added', [EmployeeController::class,'add'])->name('added');