<?php

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

Route::get('ville','App\Http\Controllers\VaccinController@ville');
Route::get('ville/{id}/hopital','App\Http\Controllers\VaccinController@choisirVille');
Route::get('formulaireClient','App\Http\Controllers\VaccinController@choisirHopital');
Route::get('rendezVous','App\Http\Controllers\VaccinController@store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('layouts.master');
