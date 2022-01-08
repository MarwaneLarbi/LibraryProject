<?php

use App\Models\abonne;
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
Route::get('/test22', function () {
    $details = [
        'abonne'=>abonne::find(230589143)
    ];
    return view('emails.idCard',[
        'details'=>$details,
    ]);
});
Route::get('/blog1', function () {

    return view('inscription');
});
Route::get('/contact', function () {

    return view('contactus');
});

Route::get('/test', [\App\Http\Livewire\AddAbonnes::class,'testdata']);
Route::get('/contact/store', [\App\Http\Controllers\contact::class,'store'])->name('contact.store');
Route::get('/comments/store', [\App\Http\Livewire\BooksList::class,'store_comments'])->name('comments.store');

Route::get('/livres/livres', [\App\Http\Livewire\BooksList::class,'saveContact'])->name('livres.search');
Route::get('/larbi', function () {
    return view('categoriesListe');
});

Route::get('/livres/id/{id}', [\App\Http\Livewire\BooksList::class,'book_id']);
Route::get('/livres/category/{id}', [\App\Http\Livewire\BooksList::class,'book_Category']);


Route::get('/livres/{id}', function () {
    return view('auth.test');
});
Route::get('/', function () {

    return view('Home',[
        'books'=>\App\Models\livre::orderBy('created_at','desc')->paginate(6)
    ]);
});
Route::get('/categories', function () {

    return view('home.Categories');
});
Route::get('/livres', function () {
    return view('Livres');
});
Route::get('/testlist', function () {
    return view('livewire.listings');
});

Route::get('sendreste', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
return view('emails.resetPassword');

});
Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
return view('emails.myTestMail');

});
Route::post('/logout', [\App\Http\Controllers\UserAuthController::class, 'logout'])->name('logout');
Route::get('NewPassword', function () {
    return view('auth.NewPassword');
});
Route::get('ForgetPassword', function () {
    return view('auth.ForgetPassword');
});
Route::post('login/Qrcode', [\App\Http\Controllers\UserAuthController::class, 'LoginWithQr'])->name('login.LoginWithQr');

Route::post('ForgetPassword/send', [\App\Http\Controllers\UserAuthController::class, 'SendToken'])->name('ForgetPassword.sendToken');
Route::get('reset-password/{token}', [\App\Http\Controllers\UserAuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [\App\Http\Controllers\UserAuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::group(['middleware' => ['AlreadyLoggedIn']], function() {
    Route::get('login/NewPassword', function () {
        return view('auth.NewPassword');
    });
    Route::get('login/ForgetPassword', function () {
        return view('auth.ForgetPassword');
    });
    Route::get('login', function () {
        return view('auth.Login');
    });
    Route::post('check', [\App\Http\Controllers\UserAuthController::class, 'check'])->name('auth.check');
});




Route::group(['middleware' => ['isLogged']], function() {

    Route::get('/messages', function () {

        return view('Contacts');
    });

    Route::group(['middleware' => ['isAdmin']], function() {
        Route::get('Statistque', function () {

            return view('Statistique');
        });

        Route::prefix('gestionnaire')->group(function () {
            Route::get('/', function () {

                return view('Administration');
            });
            Route::post('/add/', [\App\Http\Livewire\AddGestionnaire::class,'store'])->name('gestionnaire.store');
            Route::get('/editer/{id}', [\App\Http\Livewire\EditGestionnaire::class,'getData'])->name('gestionnaire.data');
            Route::post('/edit/', [\App\Http\Livewire\EditGestionnaire::class,'update'])->name('gestionnaire.update');
            Route::post('/editerProfile/', [\App\Http\Livewire\EditGestionnaire::class,'editerProfile'])->name('gestionnaire.editerProfile');
            Route::get('/delete/{id}', [\App\Http\Livewire\DeleteGestionnaire::class,'delete'])->name('gestionnaire.delete');
            Route::post('/deleteselected/', [\App\Http\Livewire\DeleteGestionnaire::class,'deleteselected'])->name('gestionnaire.deleteselected');
        });




    });
    Route::get('/account', function () {
        return view('AccountSettings');
    })->name('account');

    Route::post('/account/updateEmail', [\App\Http\Controllers\UserAuthController::class, 'updateEmail'])->name('account.updateEmail');
    Route::post('/account/updatePassword', [\App\Http\Controllers\UserAuthController::class, 'updatePassword'])->name('account.updatePassword');
    Route::post('/account/updateProfile', [\App\Http\Controllers\UserAuthController::class, 'updateProfile'])->name('account.updateProfile');



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

Route::get('tags', function () {

    return view('Tags');
});
Route::get('emprunts/recents', function () {

    return view('RecentsEmprunts');
});

Route::post('/storeTags', [\App\Http\Livewire\MotsCles::class,'store'])->name('Tags.store');
Route::get('/tags/delete/{id}', [\App\Http\Livewire\MotsCles::class,'delete'])->name('tags.delete');
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
