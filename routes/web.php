<?php

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

Route::get('/', 'QnAController@index');

Route::get('/question', 'QnAController@question');
Route::get('/get-question', 'QnAController@getGuestion');
Route::post('/submit-answer/{id}', 'QnAController@submitAanswer');
Route::post('/submit-skip/{id}', 'QnAController@submitSkip');

Route::get('/result', 'QnAController@result');
Route::get('/dashboard', 'QnAController@dashboard');
Route::get('/create-test', 'QnAController@createTest');

Route::post('/join', 'QnAController@join')->name('join-qna');
Route::get('/test', 'QnAController@test');