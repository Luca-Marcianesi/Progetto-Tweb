<?php

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

//Ingresso al sito

Route::get('/', 'PublicController@showHome')
        ->name('catalog1');

//Admin

Route::get('/admin', 'AdminController@getHome')
        ->name('admin');

Route::get('/modificaFaq{domanda}', 'AdminController@showModificaFaq')
        ->name('showmodificaFaq');

Route::post('/modificaFaq{domanda}', 'AdminController@modificaFaq')
        ->name('modificaFaq');


//Home

Route::get('/annunciHome/{citta}', 'HomeController@showAnnunci')
        ->name('annunciHome');

Route::get('/elencocitta', 'HomeController@showlistacitta')
        ->name('elencocitta');

Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

Route::get('/home', 'HomeController@index')
        ->name('home');


//Locatore

Route::get('/annunciLocatore', 'locatoreController@showAnnunci')
        ->name('annunciLocatore');

Route::get('/locatore/annunciLocatore', 'locatoreController@showaggiungiofferta')
        ->name('aggiungiOfferta');

Route::post('/locatore/annunciLocatore/aggiungiAppartamento', 'locatoreController@aggiungiOffertaAppartamento')
        ->name('aggiungiAppartamento');
        
Route::post('/locatore/annunciLocatore/aggiungiPostoLetto', 'locatoreController@aggiungiOffertaPostoLetto')
        ->name('aggiungiPostoLetto');
        
Route::get('/locatore/aggiungiServizi{id}', 'locatoreController@showServizi')
        ->name('showAggiungiServizi');

Route::post('/locatore/annunciLocatore/Servizi{id}', 'locatoreController@setServizi')
        ->name('aggiungiServizi');

Route::get('/opziona{id}/{locatario}', 'locatoreController@assegna')
        ->name('assegnaOfferta');
        
Route::get('/ImieiAlloggi', 'locatoreController@showMieiAlloggi')
        ->name('mieiAlloggi');

Route::get('/dettagliOpzionamento{offerta}/{utente}', 'locatoreController@showDettagliOpzionamento')
        ->name('dettagliOpzionamento');

Route::get('/stipulaContratto{offerta}/{locatario}', 'locatoreController@stipulaContratto')
        ->name('stipulaContratto');

Route::post('/locatore/modificaApp{id}', 'locatoreController@modificaAppartamento')
        ->name('modificaAppartamento');

Route::post('/locatore/modificaPletto{id}', 'locatoreController@modificaPostoLetto')
        ->name('modificaPostoLetto');

Route::get('/locatore/mieiAlloggi{id}', 'locatoreController@showModificaOfferta')
        ->name('dettagliAlloggioProprietario');

Route::post('/locatore/modificaOff{id}', 'locatoreController@modificaOfferta')
        ->name('modificaOffertaProp');

Route::get('/locatore/eliminaofferta{id}', 'locatoreController@eliminaOfferta')
        ->name('elimina');

Route::get('/locatore/chatLocatore', 'locatoreController@showChats')
        ->name('chatLocatore');

Route::get('/chat{id}', 'UserController@showchat')
        ->name('chat');



//Locatario

Route::get('/annunciLocatario', 'locatarioController@showAnnunci')
        ->name('annunciLocatario');

Route::get('/locatario/opzionaofferta{id}', 'locatarioController@opziona')
        ->name('opziona');
        
Route::get('/locatario/chatLocatario', 'locatarioController@showChats')
        ->name('chatLocatario');


//User




Route::get('/account', 'UserController@showAccount')
        ->name('showAccount');

Route::get('/modifica-account', 'UserController@showModificaAccount')
        ->name('modificaAccount');

Route::post('/modifica-account', 'UserController@modificaAccount')
        ->name('modificaAccount');

Route::get('/locatore', 'UserController@areaLocatore')
        ->name('locatore');

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');

        




Route::get('/locatario', 'UserController@areaLocatario')
        ->name('locatario');


Route::get('/listacitta', 'PublicController@showCatalog1')
        ->name('listacitta1');



// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');


Auth::routes();


/*
rotta per visualizzare il singolo annuncio



*/

Route::get('/offerta{id}', 'HomeController@showAnnuncioSingolo')
        ->name('dettagliAnnuncio'); //da cambiare controller

Route::get('/locatore/offerta{id}', 'HomeController@showAnnuncioSingoloLocatore')
        ->name('AnnuncioSingoloLocatore'); //da cambiare controller


Route::get('/locatario/offerta{id}', 'HomeController@showAnnuncioSingoloLocatario')
        ->name('dettagliAnnuncioLocatario'); //da cambiare controller






Route::view('/messaggiLocatore', 'messaggiLocatore')
        ->name('messaggiLocatore');
        

Route::view('/messaggiLocatario', 'messaggiLocatario')
        ->name('messaggiLocatario');
     