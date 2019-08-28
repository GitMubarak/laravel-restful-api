<?php

use Illuminate\Http\Request;
//use Illuminate\Routing\Route;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
// Get Data
Route::get('country', 'API\CountryController@country');
Route::get('country/{id}', 'API\CountryController@countryById');
// Save
Route::post('country', 'API\CountryController@countrySave');
// Update
Route::put('country/{country}', 'API\CountryController@countryUpdate');
// Delete
Route::delete('country/{country}', 'API\CountryController@countryDelete');
