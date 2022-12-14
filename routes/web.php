<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

app()->bind('Game',function(){

    return 'football';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function() {
    Codewolfy::welcome();
});
Route::get('/test',[ArticleController::class,'test']);
Route::get('/test2',[ArticleController::class,'test2']);


//dd(app()->make('Game'));

