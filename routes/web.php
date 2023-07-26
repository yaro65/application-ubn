<?php
use App\Http\Controllers\AppliControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil' ,[AppliControllers::class , 'index' ])->name('accuiel');
Route::get('/connexion' ,[AppliControllers::class , 'connec' ])->name('connec');
Route::get('/inscription' ,[AppliControllers::class , 'inscrir' ])->name('insc');


//
Route::get('/connecsecretaire' ,[AppliControllers::class , 'secretai' ])->name('secreta');
//
Route::get('/pdfcart' ,[AppliControllers::class , 'genererPDF' ])->name('pdfcarte');
//parti administrateur  sendPDFByEmail
Route::get('/carte' ,[AppliControllers::class , 'carte' ])->name('cartee');
Route::get('/incriptio' ,[AppliControllers::class , 'secret' ])->name('admin'); //lister secretaire
Route::get('/ajouteret' ,[AppliControllers::class , 'etudiant' ])->name('etude');  //lister
Route::post('/inscriptionad', [AppliControllers::class, 'store'])->name('enregistre');
Route::post('/authentification', [AppliControllers::class, 'connexion'])->name('connetion');
Route::get('/deconnecter', [AppliControllers::class, 'deconnexion'])->name('deconnct');
//partie secretaire 
Route::post('/ajouter', [AppliControllers::class, 'stor'])->name('secre');
Route::post('/authentificationse', [AppliControllers::class, 'connexionsec'])->name('conex');
Route::get('/ajoueretude' ,[AppliControllers::class , 'etudee' ])->name('etudee');

Route::get('/etudiants{id}', [AppliControllers::class, 'cartepdf'])->name('carte');

//filier 
Route::post('/admin', [AppliControllers::class, 'niveau'])->name('secre');
Route::post('/admins', [AppliControllers::class, 'cylclee'])->name('cycl');
Route::post('/admint', [AppliControllers::class, 'filier'])->name('fillie');
//enregistremen etudiant
Route::post('/etudiant', [AppliControllers::class, 'etudian'])->name('yaroma');
Route::get('/etudiant/{id}delete', [AppliControllers::class, 'delete'])->name('supprimer'); 

    // Mettez ici toutes les routes que vous voulez limiter à l'accès aux utilisateurs connectés
    Route::get('/admin' ,[AppliControllers::class , 'admi' ])->name('administ');
    Route::get('/secretaire' ,[AppliControllers::class , 'secretair' ])->name('secretaire');

    // Ajoutez autant de routes que nécessaire



    Route::get('/mail/{id}' ,[AppliControllers::class , 'sendWelcomeEmail' ])->name('mail');

    Route::get('etudiants/invoice/{invoice}' ,[AppliControllers::class , 'generatePDF' ])->name('maham');

    

