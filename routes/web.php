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
    return view('Layouts.gest');
});
Route::get('/auteurs', function () {
    return view('Auteurs');
});
Route::get('/auteurs2', function () {
    return view('livewire.table-auteurs');
});
Route::post('livewire',[\App\Http\Livewire\AddAuteurForm::class,'store'])->name('AddAuteurForm.store');
Route::post('checkAuteur', [\App\Http\Livewire\AddAuteurForm::class,'Check'])->name('AddAuteurForm.check');
Route::get('/getAuteur', [\App\Http\Livewire\ListeAuteurs::class,'getAuteurs'])->name('AddAuteurForm.Getauteurs');
Route::get('auteurs/list', [\App\Http\Livewire\ListeAuteurs::class, 'getAuteurs'])->name('auteurs.list');

