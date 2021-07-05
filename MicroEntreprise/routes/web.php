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
//Organisations
// Route::get('/organisations', 'OrganisationController@index')->name('organisations.index');
// Route::get('/organisations/{id}', 'OrganisationController@show')->name('organisations.show');
Route::get("/", "SocialiteController@loginRegister");

// La redirection vers le provider
Route::get("redirect/{provider}", "SocialiteController@redirect")->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", "SocialiteController@callback")->name('socialite.callback');

Route::resource('organisation','OrganisationController');
//Missions
Route::resource('mission','MissionController');
Route::resource('missionLine','MissionLineController');
Route::resource('transaction', 'TransactionController');
Route::resource('contribution', 'ContributionController');

// Route::get('/missions/{id}', 'MissionController@show')->name('missions.show');
// Route::get('/missions', 'MissionController@index')->name('missions.index');


// Route::get('/missionLine', 'MissionLineController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
