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
Route::get('/Category&MotsCles', function () {
    return view('Category');
});
Route::get('/livre', function () {
    return view('Livre');
});
Route::post('livewire',[\App\Http\Livewire\AddAuteurForm::class,'store'])->name('AddAuteurForm.store');
Route::post('checkAuteur', [\App\Http\Livewire\AddAuteurForm::class,'Check'])->name('AddAuteurForm.check');
Route::get('/getAuteur', [\App\Http\Livewire\ListeAuteurs::class,'getAuteurs'])->name('AddAuteurForm.Getauteurs');
Route::get('auteurs/list', [\App\Http\Livewire\ListeAuteurs::class, 'getAuteurs'])->name('auteurs.list');
Route::get('/auteurs/edit/{id}',[\App\Http\Livewire\EditerAuteur::class,'editer'])->name('AddAuteurForm.editer');
Route::post('checkEditAuteur', [\App\Http\Livewire\EditerAuteur::class,'Check'])->name('EditerAuteur.check');
Route::post('storeEditAuteur', [\App\Http\Livewire\EditerAuteur::class,'store'])->name('EditerAuteur.store');
Route::get('/auteurs/description/{id}', [\App\Http\Livewire\ListeAuteurs::class,'getDescription'])->name('Auteur.description');
Route::post('/category/checkadd', [\App\Http\Livewire\AddCategories::class,'checkAdd'])->name('category.store');
Route::get('/category/editer/{id}', [\App\Http\Livewire\EditCategories::class,'editer'])->name('category.edit');
Route::post('/category/editer/', [\App\Http\Livewire\EditCategories::class,'store'])->name('category.upadate');
Route::get('/category/delete/{id}', [\App\Http\Livewire\DeleteCategories::class,'deleteCategory'])->name('category.delete');
Route::get('/livre/gen', [\App\Http\Livewire\AddLivre::class,'generateBook'])->name('livre.gen');
Route::get('/livre/add/check', [\App\Http\Livewire\AddLivre::class,'check'])->name('livre.add.check');
Route::post('/livre/add/', [\App\Http\Livewire\AddLivre::class,'store'])->name('livre.store');
Route::post('/storeTags', [\App\Http\Livewire\MotsCles::class,'store'])->name('Tags.store');
Route::get('/tags/delete/{id}', [\App\Http\Livewire\MotsCles::class,'delete'])->name('tags.delete');


Route::get('/test', [\App\Http\Livewire\MotsCles::class,'testdata']);
Route::get('/livre/editer/{id}', [\App\Http\Livewire\EditLivre::class,'getEditer']);
Route::post('/livre/editer/', [\App\Http\Livewire\EditLivre::class,'update'])->name('livre.edit');
Route::get('/livre/checkbarcode/', [\App\Http\Livewire\EditLivre::class,'check_step1'])->name('livre.edit.step1');
Route::get('/livre/delete/{id}', [\App\Http\Livewire\DeleteLivre::class,'delete'])->name('livre.delete');
