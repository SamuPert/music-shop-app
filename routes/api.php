<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/findByCategory/', function (Request $request) {

    $id_categoria = $request->input('id_categoria', -1);

    $result = \App\Sottocategoria::where('id_categoria' , $id_categoria)
        ->select('id_sotto_categoria as id', "nome_sotto_categoria as sotto_categoria")->get();

    return $result;

});

Route::post('/staff/update', 'UserController@updateUserStaff')->name('updateUserStaff');
Route::post('/prodotto/update', 'ProdottoController@updateProdotto')->name('updateProdotto');

