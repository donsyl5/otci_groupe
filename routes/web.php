<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/groupe', [HomeController::class, 'groupe'])->name('groupe');
Route::get('/metier', [HomeController::class, 'metier'])->name('metier');

Route::get('/notre-approche', [HomeController::class, 'client'])->name('client');



Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storeContact', [HomeController::class, 'storeContact'])->name('storeContact');


Route::get('/realisation', [HomeController::class, 'realisation'])->name('realisation');



Route::get('/actualite', [HomeController::class, 'actualite'])->name('actualite');



Route::get('/nous-joindre', [HomeController::class, 'joindre'])->name('joindre');
Route::post('/storeCandidature', [HomeController::class, 'storeCandidature'])->name('storeCandidature');



Route::get('/realisation/{id}/{titre}', [HomeController::class, 'detail'])->name('detail');
Route::get('/actualites/{id}/{titre}', [HomeController::class, 'detail_actualite'])->name('detailArticle');
Route::get('/metiers/{slug}', [HomeController::class, 'detail_metier'])->name('detailMetier');



Route::get('/realisations/sous-categories/{id}/{nom}', [HomeController::class, 'part'])->name('part');


Route::get('/realisations-par-sous-categorie', [HomeController::class, 'realisationsParSousCategorie']);

Route::get('/telecharger-pdf/{nomFichier}', [HomeController::class, 'telechargerPDF'])->name('telecharger-pdf');


Route::post('/accept-cookies', [HomeController::class, 'acceptCookies'])->name('acceptCookies');

Route::post('/check-cookies', [HomeController::class, 'checkCookies'])->name('checkCookies');


//GESTION DES UTILISATEURS
Route::group(['middleware' => 'guest'], function() {

Route::get('/connexion', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('postLogin');

});




Route::group(['middleware' => 'auth'], function() {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');


    Route::get('/administrations-liste-realisation', [AdminController::class, 'realisation'])->name('realisation-a');
    Route::post('/administrations-store-realisation', [AdminController::class, 'store'])->name('store');
    Route::get('/administrations-form', [AdminController::class, 'form'])->name('form');

    Route::get('/administrations-recherche', [AdminController::class, 'search'])->name('search');
    Route::get('/administrations-modifier-realisation/{id}', [AdminController::class, 'modifierRealisation'])->name('modifierRealisation');
    Route::post('/administrations-update-realisation/{id}', [AdminController::class, 'updateRealisation'])->name('updateRealisation');
    Route::post('/administrations-delete-realisation', [AdminController::class, 'deleteRealisation'])->name('deleteRealisation');

    Route::get('/administrations-liste-actualite', [AdminController::class, 'actualite'])->name('actualite-a');
    Route::post('/administrations-store-article', [AdminController::class, 'storeArticle'])->name('storeArticle');
    Route::get('/administrations-formArticle', [AdminController::class, 'formArticle'])->name('formArticle');
    Route::get('/administrations-modifier-actualite/{id}', [AdminController::class, 'modifierActualite'])->name('modifierActualite');
    Route::post('/administrations-update-actualite/{id}', [AdminController::class, 'updateActualite'])->name('updateActualite');
    Route::post('/administrations-delete-actualite', [AdminController::class, 'deleteActualite'])->name('deleteActualite');

    Route::get('/administrations-liste-metier', [AdminController::class, 'metier'])->name('listeMetier');
    Route::post('/administrations-store-metier', [AdminController::class, 'storeMetier'])->name('storeMetier');
    Route::get('/administrations-ajouter-metier', [AdminController::class, 'formulaireMetier'])->name('formulaireMetier');
    Route::get('/administrations-modifier-metier/{id}', [AdminController::class, 'modifierMetier'])->name('modifierMetier');
    Route::post('/administrations-update-metier/{id}', [AdminController::class, 'updateMetier'])->name('updateMetier');
    Route::post('/administrations-delete-metier', [AdminController::class, 'deleteMetier'])->name('deleteMetier');

    Route::get('/administrations-liste-groupe', [AdminController::class, 'groupe'])->name('listeGroupe');
    Route::post('/administrations-store-groupe', [AdminController::class, 'storeGroupe'])->name('storeGroupe');
    Route::get('/administrations-formulaire-groupe', [AdminController::class, 'formulaireGroupe'])->name('formulaireGroupe');
    Route::get('/administrations-modifier-groupe/{id}', [AdminController::class, 'modifierGroupe'])->name('modifierGroupe');
    Route::post('/administrations-update-groupe/{id}', [AdminController::class, 'updateGroupe'])->name('updateGroupe');

    Route::get('/liste-contact', [AdminController::class, 'infosContact'])->name('infosContact');
    Route::post('/store-infos', [AdminController::class, 'storeInfos'])->name('storeInfos');

    Route::get('/modifier-informations-contact/{id}', [AdminController::class, 'modifierInfos'])->name('modifierInfos');
    Route::post('/update-informations-contact/{id}', [AdminController::class, 'updateInfos'])->name('updateInfos');

    Route::get('/formulaire-infos', [AdminController::class, 'formulaireInfos'])->name('formulaireInfos');
    Route::get('/administrations-modifier-categorie/{id}', [AdminController::class, 'modifierCategorie'])->name('modifierCategorie');
    Route::post('/administrations-update-categorie/{id}', [AdminController::class, 'updateCategorie'])->name('updateCategorie');
    Route::post('/administrations-delete-categorie', [AdminController::class, 'deleteCategorie'])->name('deleteCategorie');

    Route::post('/storeCategorie', [AdminController::class, 'storeCategorie'])->name('storeCategorie');
    Route::get('/categorie', [AdminController::class, 'categorie'])->name('categorie');
    Route::get('/administrations-modifier-categorie/{id}', [AdminController::class, 'modifierCategorie'])->name('modifierCategorie');
    Route::post('/administrations-update-categorie/{id}', [AdminController::class, 'updateCategorie'])->name('updateCategorie');
    Route::post('/administrations-delete-categorie', [AdminController::class, 'deleteCategorie'])->name('deleteCategorie');

    Route::post('/storeSousCategorie', [AdminController::class, 'storeSousCategorie'])->name('storeSousCategorie');
    Route::get('/sousCategorie', [AdminController::class, 'sousCategorie'])->name('sousCategorie');
    Route::get('/administrations-modifier-sous-categorie/{id}', [AdminController::class, 'modifierSousCategorie'])->name('modifierSousCategorie');
    Route::post('/administrations-update-sous-categorie/{id}', [AdminController::class, 'updateSousCategorie'])->name('updateSousCategorie');
    Route::post('/administrations-delete-sous-categorie', [AdminController::class, 'deleteSousCategorie'])->name('deleteSousCategorie');

    Route::post('/storeCategorieArticle', [AdminController::class, 'storeCategorieArticle'])->name('storeCategorieArticle');
    Route::get('/categorieArticle', [AdminController::class, 'categorieArticle'])->name('categorieArticle');
    Route::get('/administrations-modifier-categorie-article/{id}', [AdminController::class, 'modifierCategorieArticle'])->name('modifierCategorieArticle');
    Route::post('/administrations-update-categorie-article/{id}', [AdminController::class, 'updateCategorieArticle'])->name('updateCategorieArticle');
    Route::post('/administrations-delete-categorie-article', [AdminController::class, 'deleteCategorieArticle'])->name('deleteCategorieArticle');

    Route::get('/administrations-liste-equipe', [AdminController::class, 'listeEquipe'])->name('listeEquipe');
    Route::post('/administrations-store-equipe', [AdminController::class, 'storeEquipe'])->name('storeEquipe');
    Route::get('/administrations-ajouter-equipe', [AdminController::class, 'formulaireEquipe'])->name('formulaireEquipe');
    Route::get('/administrations-modifier-equipe/{id}', [AdminController::class, 'modifierEquipe'])->name('modifierEquipe');
    Route::post('/administrations-update-equipe/{id}', [AdminController::class, 'updateEquipe'])->name('updateEquipe');
    Route::post('/administrations-delete-equipe', [AdminController::class, 'deleteEquipe'])->name('deleteEquipe');

    Route::get('/administrations-liste-poste', [AdminController::class, 'listePoste'])->name('listePoste');
    Route::post('/administrations-store-poste', [AdminController::class, 'storePoste'])->name('storePoste');
    Route::get('/administrations-ajouter-poste', [AdminController::class, 'formulairePoste'])->name('formulairePoste');
    Route::get('/administrations-modifier-poste/{id}', [AdminController::class, 'modifierPoste'])->name('modifierPoste');
    Route::post('/administrations-update-poste/{id}', [AdminController::class, 'updatePoste'])->name('updatePoste');
    Route::post('/administrations-delete-poste', [AdminController::class, 'deletePoste'])->name('deletePoste');
    Route::get('/administrations-activer-poste/{id}', [AdminController::class, 'activerPoste'])->name('activerPoste');
    Route::get('/administrations-desactiver-poste/{id}', [AdminController::class, 'desactiverPoste'])->name('desactiverPoste');

    Route::get('telecharger-cv/{id}', [AdminController::class, 'dowloadCv'])->name('dowloadCv');
    Route::get('telecharger-lettre/{id}', [AdminController::class, 'dowloadLettre'])->name('dowloadLettre');


    Route::get('/liste-candidature', [AdminController::class, 'listeCandidature'])->name('listeCandidature');

    Route::get('/liste-messages-contact', [AdminController::class, 'listeContactMessage'])->name('listeContactMessage');

    Route::get('/inscription', [AuthController::class, 'register'])->name('register');
Route::post('/post-register', [AuthController::class, 'postRegister'])->name('postRegister');

Route::get('/administration-liste-utilisateurs', [AdminController::class, 'listeUtilisateurs'])->name('listeUtilisateurs');
Route::get('/administrations-modifier-utilisateur/{id}', [AuthController::class, 'modifierUser'])->name('modifierUser');
Route::post('/administrations-update-utilisateur/{id}', [AuthController::class, 'updateUser'])->name('updateUser');
Route::post('/administrations-delete-utilisateur', [AuthController::class, 'deleteUser'])->name('deleteUser');

});



Route::get('/getSlug', function(Request $request){
    $slug = '';

    if(!empty($request->titre)){
        $slug = Str::slug($request->titre);
    }

    return response()->json([
        'status' => true,
        'slug' => $slug
    ]);

})->name('getSlug');
