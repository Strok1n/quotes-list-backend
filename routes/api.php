<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteApi;
use App\Http\Controllers\TagController;
use App\Http\Controllers\QuoteTagController;



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

Route::get("quote",[QuoteApi::class,'getData']);

Route::post("add",[QuoteApi::class,'add']);

Route::get("tag",[TagController::class,'getData']);

Route::get("quote-tag",[QuoteTagController::class,'getData']);

Route::post("add-quote-tag", [QuoteTagController::class,'add']);
