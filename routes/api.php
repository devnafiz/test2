<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Api\PassportAuthController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 //   return $request->user();
//});


Route::get('articles',[ArticleController::class,'index']);
Route::get('articles/{article}',[ArticleController::class,'show']);
Route::post('articles/store',[ArticleController::class,'store']);
Route::put('articles/{article}',[ArticleController::class,'update']);
Route::delete('articles/{article}',[ArticleController::class,'delete']);


Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login'])->name('login');
  

  Route::middleware('auth:api')->group(function(){

    Route::get('get_user',[PassportAuthController::class,'userInfo']);
  });



