<?php

use App\Http\Controllers\UploadController;
use App\Http\Controllers\VaccinationsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\PerformanceController;

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

//PRESENTATION 
Route::get('presentations',[PresentationController::class,'viewPresentation']);
Route::get('observatoires',[PresentationController::class,'viewCreationObservatoire']);
Route::get('objectifs',[PresentationController::class,'viewObjectifs']);
Route::get('gouvernances',[PresentationController::class,'viewGouvernance']);
Route::get('indicateurs',[PresentationController::class,'viewSanteAnimale']);

//TAUX DE COUVERTURES VACCINALES
Route::get('couverturesvaccinales',[VaccinationsController::class,'list']);
Route::post('couverturesvaccinales',[VaccinationsController::class,'store']);
Route::get('insertiontaux',[VaccinationsController::class,'voirPays']); //AFFICHAGE DE TOUS LES PAYS
Route::get('recherchetaux',[VaccinationsController::class,'rechercheTaux']); //RECHERCHE DU FICHIER PAR DATE ET PAYS
Route::get('couverturesvaccinales',[VaccinationsController::class,'resultatRechercheTaux']); //RECHERCHE DU FICHIER PAR DATE ET PAYS


//PERFORMANCE VETERINAIRE
Route::post('performances',[PerformanceController::class,'insertionPerformance']);
Route::get('performances',[PerformanceController::class,'showPays']); //AFFICHAGE DE TOUS LES PAYS
Route::get('performances',[PerformanceController::class,'voirPaysAnnee']); //AFFICHAGE DES PAYS ET ANNEE POUR LA RECHERCHE
Route::get('recherche',[PerformanceController::class,'rechercheFichier']); //RECHERCHE DU FICHIER PAR DATE ET PAYS
Route::get('pays',[PerformanceController::class,'resultatRecherche']); //RECHERCHE DU FICHIER PAR DATE ET PAYS
Route::get('/performances/{nomFichier}',[PerformanceController::class,'download']);


//AJOUT ET AFFICHAGE DE FICHIER DANS LA BASE 
Route::get('fichiers',[UploadController::class,'show']);
Route::post('fichiers',[UploadController::class,'storeFichier']);
Route::get('/fichiers/{nomFichier}',[UploadController::class,'download']);
Route::get('/performances/{id}',[UploadController::class,'voir']);

Route::get('tests',[TestController::class,'showCountry']); //AFFICHAGE DE TOUS LES PAYS

/*Route::get('performances', function () {
    return view('performances.performance');
});

Route::get('fichiers',[UploadController::class,'show']);
Route::post('fichiers',[UploadController::class,'storeFichier']);
Route::get('/fichiers/{nomFichier}',[UploadController::class,'download']);
Route::get('/performances/{id}',[UploadController::class,'voir']);

Route::get('pays',[PaysController::class,'showPays']);
Route::get('get_states',[PaysController::class,'getState']);

Route::get('pays',[TestController::class,'showCountry']);
Route::get('pays',[TestController::class,'afficheTest']);

Route::get('/performances/{id}',[UploadController::class,'voir']);

Route::get('fichiers',[UploadController::class,'Pays']);
Route::get('/fichier/{id}',[UploadController::class,'afficheFichier']);

//INSERTION DOCUMENT AVEC PAYS ET ANNEE
Route::post('pays',[TestController::class,'insertTest']);*/





/*Route::get('indicateurs',function()
{
    $vaccins =[
        'PPCB',
        'Cattle',
        '0',
        '9000',
        '7000'
    ];
    return view('indicateurs.indicateur4',[
        'data'=>$vaccins
    ]);
});

Route::get('indicateurs', function () {
    return view('indicateurs.indicateur4');
});*/
