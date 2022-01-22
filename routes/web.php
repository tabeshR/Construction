<?php

use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    $array = explode('lang=',$request->getQueryString());
    $lang = isset($array[1])? $array[1]:"fa";
    return view($lang.'.home');
})->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories','CategoryController@index')->name('categories');
Route::get('/categories/{category}','CategoryController@single')->name('categories.single');
Route::get('/abouts/us','AboutController@index')->name('abouts.us');
Route::get('/contact/us','ContactController@index')->name('contact.us');
Route::get('/articles','ArticleController@index')->name('articles');
Route::post('/send/message','ContactController@store')->name('send.message');


