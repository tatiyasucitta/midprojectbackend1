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



Route::get('/', [EmployeeController::class,'view']);

Route::get('/add', [EmployeeController::class,'addviewpage'])->name('add');
Route::post('/added', [EmployeeController::class,'add'])->name('added');


Route::get('/update/{id}', [EmployeeController::class,'update'])->name('update');
Route::patch('/updated.employee/{id}', [EmployeeController::class,'updated'])->name('updated.employee');

Route::delete('/delete/{id}', [EmployeeController::class,'delete'])->name('delete.employee');