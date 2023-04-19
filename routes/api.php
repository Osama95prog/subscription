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
// create new website
Route::post('create/website','WebsitesController@store')->name('create.website');
// retrive website
Route::get('fetch/website/{website_id}','WebsitesController@getWebsite')->name('fetch.website');

// create new post
Route::post('create/post','PostsController@store')->name('create.post');

// create new subscription
Route::post('create/subscription','SubscriptionsController@store')->name('create.subscription');


