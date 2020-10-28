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
//user Routes
Route::get('/AdminPanel', function () {
    return view('users.welcomeAdmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user','UserController');

Route::get('/destroyUser/{id}', 'UserController@destroy')->name('user.destroy');
//---------------------------------------------------------------------------------------------------
//Idea Routes

    //admin side
    Route::resource('idea', 'IdeaController');

//visitor side
//Route::get('/', function () {
//    return view('ideas.welcome');
//})->name('step1');

Route::get('/' , 'IdeaStepsController@firstStep')->name('step1');
Route::get('/step2' , 'IdeaStepsController@secondStep')->name('step2');
Route::get('/step3' , 'IdeaStepsController@thirdStep')->name('step3');
Route::get('/step4' , 'IdeaStepsController@forthStep')->name('step4');
Route::get('/step5' , 'IdeaStepsController@fifthStep')->name('step5');
Route::get('/back/{pageNumber}' , 'IdeaStepsController@back')->name('back');


// localization
Route::get('/{lang?}', ['as' => 'language.change', 'uses' => 'LocalizationController@change']);