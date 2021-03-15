<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/employee/new', function () {
    return view('employee.new');
})->name('employee.new');
Route::middleware(['auth:sanctum', 'verified'])->get('/q2', function () {
    return view('question.two');
})->name('employee.new');
Route::post('/employee/create', 'App\Http\Controllers\CompanyController@store')->name('createEmployee');

