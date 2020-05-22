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


Route::get('/', function () {

    return view('homepage');
})->name('homepage');


Route::get('/staff', function () {
    return view('adminStaff');
});

Route::get('/admin', 'AdminController@admin_controller', function () {
    return view('adminPage');
});

Route::get('/onlineshop',function (){
    return view('buyContacts');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('homeCata');
