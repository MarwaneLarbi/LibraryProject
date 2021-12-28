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
Route::get('/abonne', function () {
    return view('Abonne');
});
Route::get('/emprunter', function () {
    return view('Emprunter');
});
Route::get('qr-code-g', function () {

    return view('qrCode');
});
Route::get('Statistque', function () {

    return view('Statistique');
});
Route::get('login', function () {

    return view('Login');
});
Route::get('gestionnair', function () {

    return view('Administration');
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


Route::get('/test', [\App\Http\Livewire\AddAbonnes::class,'testdata']);
Route::get('/livre/editer/{id}', [\App\Http\Livewire\EditLivre::class,'getEditer']);
Route::post('/livre/editer/', [\App\Http\Livewire\EditLivre::class,'update'])->name('livre.edit');
Route::get('/livre/checkbarcode/', [\App\Http\Livewire\EditLivre::class,'check_step1'])->name('livre.edit.step1');
Route::get('/livre/delete/{id}', [\App\Http\Livewire\DeleteLivre::class,'delete'])->name('livre.delete');

Route::post('/abonne/add/', [\App\Http\Livewire\AddAbonnes::class,'store'])->name('abonne.store');
Route::get('/abonne/check/', [\App\Http\Livewire\AddAbonnes::class,'check'])->name('abonne.check');
Route::get('/abonne/editer/{id}', [\App\Http\Livewire\EditAbonnes::class,'getData'])->name('abonne.data');
Route::post('/abonne/edit/', [\App\Http\Livewire\EditAbonnes::class,'update'])->name('abonne.update');
Route::get('/abonne/delete/{id}', [\App\Http\Livewire\DeleteAbonnes::class,'delete'])->name('abonne.delete');
Route::post('/abonne/update/', [\App\Http\Livewire\EditAbonnes::class,'update_package'])->name('abonne.update_package');
Route::post('/abonne/deleteselected/', [\App\Http\Livewire\DeleteAbonnes::class,'deleteselected'])->name('abonne.deleteselected');
Route::post('/auteur/deleteselected/', [\App\Http\Livewire\DeleteAuteurForm::class,'deleteselected'])->name('auteur.deleteselected');
Route::post('/category/deleteselected/', [\App\Http\Livewire\DeleteCategories::class,'deleteselected'])->name('category.deleteselected');
Route::post('/MotsCles/deleteselected/', [\App\Http\Livewire\MotsCles::class,'deleteselected'])->name('tags.deleteselected');

Route::post('/livre/deleteselected/', [\App\Http\Livewire\DeleteLivre::class,'deleteselected'])->name('livre.deleteselected');
Route::post('/checkqrcode', [\App\Http\Livewire\QrCodeReaderAbonne::class,'checkqrcode'])->name('qrCode.check');

Route::post('/emprunts/addToTable', [\App\Http\Livewire\AddEmprunts::class,'addToTable'])->name('emprunts.addToTable');
Route::get('/emprunts/delete_current/{id}', [\App\Http\Livewire\ListNouveauEmprunts::class,'delete']);
Route::post('/emprunts/retour', [\App\Http\Livewire\RetourEmprunt::class,'retour'])->name('emprunts.retour');
Route::post('/emprunts/valider', [\App\Http\Livewire\AddEmprunts::class,'store'])->name('emprunts.store');
Route::post('/emprunts/logout', [\App\Http\Livewire\Emprunter::class,'logout'])->name('emprunts.logout');
Route::post('/emprunts/annulerRetour', [\App\Http\Livewire\ListRetoursEmprunts::class,'annulerRetour'])->name('emprunts.annulerRetour');
Route::post('/emprunts/login', [\App\Http\Livewire\Emprunter::class,'login'])->name('emprunts.login');
Route::post('/Statistique/getData', [\App\Http\Livewire\StatistiqueGestionnaire::class,'getData'])->name('Statistique.Data');


Route::post('/gestionnaire/add/', [\App\Http\Livewire\AddGestionnaire::class,'store'])->name('gestionnaire.store');
Route::get('/gestionnaire/editer/{id}', [\App\Http\Livewire\EditGestionnaire::class,'getData'])->name('gestionnaire.data');
Route::post('/gestionnaire/edit/', [\App\Http\Livewire\EditGestionnaire::class,'update'])->name('gestionnaire.update');
Route::get('/gestionnaire/delete/{id}', [\App\Http\Livewire\DeleteGestionnaire::class,'delete'])->name('gestionnaire.delete');
Route::post('/gestionnaire/deleteselected/', [\App\Http\Livewire\DeleteGestionnaire::class,'deleteselected'])->name('gestionnaire.deleteselected');
