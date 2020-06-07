<?php

use App\Categoria;
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

//// LISTA CATEGORIE
//'/catalogo'
//
//// LISTA SOTTOCATEGORIE - id_categoria
//'/catalogo/{id_categoria}'
//
//// LISTA PRODOTTI - id_sotto_categoria
//'/catalogo/categoria/{id_sotto_categoria}'
//
//// VISUALIZZAZIONE PRODOTTO - id_prodotto
//'/catalogo/prodotto/{id_prodotto}'


Route::get('/', function () {

    return view('homepage');
})->name('homepage');

// Route for /catalogo
Route::prefix('catalogo')->group(function () {

    // Route: /catalogo
    Route::get('/', 'CatalogoController@lista_categorie')
        ->name('catalogo');

    // Route: /catalogo/{id_categoria}
    Route::get('{id_categoria}', 'CategoriaController@lista_sotto_categorie')
        ->where('id_categoria', '[0-9]+')
        ->name('lista_sotto_categorie');

    // Route: /catalogo/categoria/{id_sotto_categoria}
    Route::get('categoria/{id_sotto_categoria}', 'SottoCategoriaController@lista_prodotti')
        ->where('id', '[0-9]+')
        ->name('lista_prodotti');

    // Route: /catalogo/prodotto/{id_prodotto}
    Route::get('prodotto/{id_prodotto}', 'ProdottoController@visualizza_prodotto')
        ->where('id', '[0-9]+')
        ->name('visualizza_prodotto');
});

Route::get('/utentiStaff/gestione', 'AdminController@gestione_staff')
    ->name('gestione_staff');


// Route: /prodotti/gestione
Route::get('/prodotti/gestione', 'ProdottoController@gestione_prodotti')
    ->name('gestione_prodotti');


// Route for /staff
Route::prefix('staff')->group(function () {

    Route::get('/', 'StaffController@homepage')
        ->name('staff.homepage');

});


// Route for /admin
Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@homepage')
        ->name('admin.homepage');

});

Route::get('/modificaProfilo',function (){
    return view('showUser');
})->name('modificaProfilo');


Route::get('/onlineshop',function (){
    return view('buyContacts');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
})->name('privacypolicy');



Auth::routes();

Route::post('/registrazione', 'Auth\\RegisterController@registerUser')->name('registrazione');
Route::post('/registrazioneStaff', 'Auth\\RegisterStaffController@registerStaff')->name('registrazioneStaff');
Route::post('/insertNuovaCategoria', 'CategoriaController@insertCategory')->name('insertNuovaCategoria');
Route::post('/insertNuovaSubCategoria', 'SottoCategoriaController@insertNuovaSubCategory')->name('insertNuovaSubCategoria');
Route::post('/insertNewProduct', 'ProdottoController@insertNewProduct')->name('insertNewProduct');
Route::delete('/eliminaUtenteStaff/{id}', 'AdminController@removeUser')->name('removeStaff');
Route::delete('/eliminaUtenteRegistrato/{id}', 'AdminController@removeUser')->name('removeUser');
Route::delete('/eliminaProdotto/{id_prodotto}', 'ProdottoController@removeProdotto')->name('removeProdotto');
// Route::get('/home', 'HomeController@index')->name('homeCata');
