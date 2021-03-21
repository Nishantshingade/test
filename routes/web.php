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
Route::get('/home', function () {
    return view('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/employee/new', function () {
    return view('employee.new');
})->name('employee.new');
Route::middleware(['auth:sanctum', 'verified'])->get('/q1', function () {
    return view('question.one');
})->name('question.one');
Route::middleware(['auth:sanctum', 'verified'])->get('/q2', function () {
    return view('question.two');
})->name('question.two');
Route::middleware(['auth:sanctum', 'verified'])->get('/q3', function () {
    return view('question.three');
})->name('question.three');
Route::post('/q3/ans', 'App\Http\Controllers\CompanyController@q3')->name('q3.ans');
Route::middleware(['auth:sanctum', 'verified'])->get('/q4', function () {
    return view('question.four');
})->name('question.four');
Route::middleware(['auth:sanctum', 'verified'])->get('/q6', function () {
    return view('question.six');
})->name('question.six');
Route::middleware(['auth:sanctum', 'verified'])->get('/aws', function () {
    return view('question.aws');
})->name('question.aws');

Route::post('/employee/create', 'App\Http\Controllers\CompanyController@store')->name('createEmployee');


