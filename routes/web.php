<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProgrammeController;
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

Route::resource('/dashboard',DashboardController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('/dashboard');

Route::resource('/regist',RegistController::class);
Route::resource('/personal',StudentsController::class);
Route::resource('/parent',ParentController::class);
Route::resource('/academic',AcademicController::class);
Route::resource('/document',DocumentController::class);


Route::get('/application/processed', [ApplicationController::class, 'index2']);
Route::resource('/application',ApplicationController::class);
Route::resource('/programme',ProgrammeController::class);
require __DIR__.'/auth.php';


