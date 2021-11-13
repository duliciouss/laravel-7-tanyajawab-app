<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/question', 'QuestionController@index')->name('question.index');
    Route::get('/question/create', 'QuestionController@create')->name('question.create');
    Route::post('/question', 'QuestionController@store')->name('question.store');
    Route::get('/question/{question}', 'QuestionController@show')->name('question.show');

    Route::patch('/question/{question}', 'AnswerController@update')->name('answer.update');
});
