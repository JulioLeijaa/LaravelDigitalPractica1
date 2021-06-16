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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * Route show all
 * @return an object with all contacts
 */
Route::get('/contacto', 'API\ContactoController@showAll');

/**
 * Route register
 * @return an object with contact after register it
 */
Route::post('/contacto', 'API\ContactoController@register');
