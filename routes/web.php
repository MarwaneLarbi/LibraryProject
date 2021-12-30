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
Route::post('check', [\App\Http\Controllers\UserAuthController::class, 'check'])->name('auth.check');
Route::post('/logout', [\App\Http\Controllers\UserAuthController::class, 'logout'])->name('logout');
Route::get('login', function () {

    return view('auth.Login');
});

Route::group(['middleware' => ['isLogged']], function() {
    // uses 'auth' middleware plus all middleware from $middlewareGroups['web']
    Route::resource('blog','BlogController'); //Make a CRUD controller


Route::get('/', function () {
    return view('Layouts.gest');
});

Route::get('/auteurs2', function () {
    return view('livewire.table-auteurs');
});

Route::get('/livre', function () {
    return view('Livre');
});
Route::get('/abonne', function () {
    return view('Abonne');
});

Route::get('qr-code-g', function () {

    return view('qrCode');
});
Route::get('Statistque', function () {

    return view('Statistique');
});


Route::get('tags', function () {

    return view('Tags');
});
Route::get('emprunts/recents', function () {

    return view('RecentsEmprunts');
});

Route::post('/storeTags', [\App\Http\Livewire\MotsCles::class,'store'])->name('Tags.store');
Route::get('/tags/delete/{id}', [\App\Http\Livewire\MotsCles::class,'delete'])->name('tags.delete');
Route::get('/test', [\App\Http\Livewire\AddAbonnes::class,'testdata']);
Route::post('/MotsCles/deleteselected/', [\App\Http\Livewire\MotsCles::class,'deleteselected'])->name('tags.deleteselected');
Route::post('/Statistique/getData', [\App\Http\Livewire\StatistiqueGestionnaire::class,'getData'])->name('Statistique.Data');
Route::post('/checkqrcode', [\App\Http\Livewire\QrCodeReaderAbonne::class,'checkqrcode'])->name('qrCode.check');

Route::prefix('livre')->group(function () {
    Route::get('/', function () {
        return view('livre');
    });

    Route::get('/gen', [\App\Http\Livewire\AddLivre::class,'generateBook'])->name('livre.gen');
    Route::get('/add/check', [\App\Http\Livewire\AddLivre::class,'check'])->name('livre.add.check');
    Route::post('/add/', [\App\Http\Livewire\AddLivre::class,'store'])->name('livre.store');
    Route::get('/editer/{id}', [\App\Http\Livewire\EditLivre::class,'getEditer']);
    Route::post('/editer/', [\App\Http\Livewire\EditLivre::class,'update'])->name('livre.edit');
    Route::get('/checkbarcode/', [\App\Http\Livewire\EditLivre::class,'check_step1'])->name('livre.edit.step1');
    Route::get('/delete/{id}', [\App\Http\Livewire\DeleteLivre::class,'delete'])->name('livre.delete');
    Route::post('/deleteselected/', [\App\Http\Livewire\DeleteLivre::class,'deleteselected'])->name('livre.deleteselected');



});

Route::prefix('abonne')->group(function () {
    Route::get('/', function () {
        return view('Abonne');
    });
    Route::post('/add/', [\App\Http\Livewire\AddAbonnes::class,'store'])->name('abonne.store');
    Route::get('/check/', [\App\Http\Livewire\AddAbonnes::class,'check'])->name('abonne.check');
    Route::get('/editer/{id}', [\App\Http\Livewire\EditAbonnes::class,'getData'])->name('abonne.data');
    Route::post('/edit/', [\App\Http\Livewire\EditAbonnes::class,'update'])->name('abonne.update');
    Route::get('/delete/{id}', [\App\Http\Livewire\DeleteAbonnes::class,'delete'])->name('abonne.delete');
    Route::post('/update/', [\App\Http\Livewire\EditAbonnes::class,'update_package'])->name('abonne.update_package');
    Route::post('/deleteselected/', [\App\Http\Livewire\DeleteAbonnes::class,'deleteselected'])->name('abonne.deleteselected');

});









Route::prefix('emprunts')->group(function () {
    Route::get('/', function () {
        return view('Emprunter');
    });

    Route::post('/addToTable', [\App\Http\Livewire\AddEmprunts::class,'addToTable'])->name('emprunts.addToTable');
    Route::get('/delete_current/{id}', [\App\Http\Livewire\ListNouveauEmprunts::class,'delete']);
    Route::post('/retour', [\App\Http\Livewire\RetourEmprunt::class,'retour'])->name('emprunts.retour');
    Route::post('/valider', [\App\Http\Livewire\AddEmprunts::class,'store'])->name('emprunts.store');
    Route::post('/logout', [\App\Http\Livewire\Emprunter::class,'logout'])->name('emprunts.logout');
    Route::post('/annulerRetour', [\App\Http\Livewire\ListRetoursEmprunts::class,'annulerRetour'])->name('emprunts.annulerRetour');
    Route::post('/login', [\App\Http\Livewire\Emprunter::class,'login'])->name('emprunts.login');
});







Route::prefix('gestionnaire')->group(function () {
    Route::get('/', function () {

        return view('Administration');
    });
    Route::post('/add/', [\App\Http\Livewire\AddGestionnaire::class,'store'])->name('gestionnaire.store');
    Route::get('/editer/{id}', [\App\Http\Livewire\EditGestionnaire::class,'getData'])->name('gestionnaire.data');
    Route::post('/edit/', [\App\Http\Livewire\EditGestionnaire::class,'update'])->name('gestionnaire.update');
    Route::get('/delete/{id}', [\App\Http\Livewire\DeleteGestionnaire::class,'delete'])->name('gestionnaire.delete');
    Route::post('/deleteselected/', [\App\Http\Livewire\DeleteGestionnaire::class,'deleteselected'])->name('gestionnaire.deleteselected');
});
















Route::prefix('auteur')->group(function () {
    Route::get('/', function () {
        return view('Auteurs');
    });
    Route::post('livewire',[\App\Http\Livewire\AddAuteurForm::class,'store'])->name('AddAuteurForm.store');
    Route::get('/getAuteur', [\App\Http\Livewire\ListeAuteurs::class,'getAuteurs'])->name('AddAuteurForm.Getauteurs');
    Route::get('/list', [\App\Http\Livewire\ListeAuteurs::class, 'getAuteurs'])->name('auteurs.list');
    Route::get('/edit/{id}',[\App\Http\Livewire\EditerAuteur::class,'editer'])->name('AddAuteurForm.editer');
    Route::post('storeEditAuteur', [\App\Http\Livewire\EditerAuteur::class,'store'])->name('EditerAuteur.store');
    Route::post('/deleteselected/', [\App\Http\Livewire\DeleteAuteurForm::class,'deleteselected'])->name('auteur.deleteselected');
    Route::get('/description/{id}', [\App\Http\Livewire\ListeAuteurs::class,'getDescription'])->name('Auteur.description');
    Route::get('/delete/{id}', [\App\Http\Livewire\DeleteAuteurForm::class,'deleteAuteur'])->name('Auteur.deleteAuteur');
});



Route::prefix('category')->group(function () {
    Route::get('/', function () {
        return view('Category');
    });
    Route::post('/deleteselected/', [\App\Http\Livewire\DeleteCategories::class,'deleteselected'])->name('category.deleteselected');
    Route::post('/checkadd', [\App\Http\Livewire\AddCategories::class,'checkAdd'])->name('category.store');
    Route::get('/editer/{id}', [\App\Http\Livewire\EditCategories::class,'editer'])->name('category.edit');
    Route::post('/editer/', [\App\Http\Livewire\EditCategories::class,'store'])->name('category.upadate');
    Route::get('/delete/{id}', [\App\Http\Livewire\DeleteCategories::class,'deleteCategory'])->name('category.delete');
});
});
