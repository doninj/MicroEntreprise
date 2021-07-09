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

Route::group(['middleware' => 'auth'], function()
{

  Route::resource('organisation','OrganisationController');
  //Missions
  Route::resource('mission',MissionController::class);
  Route::resource('missionLine','MissionLineController');
  Route::resource('transaction', 'TransactionController');
  Route::get('trier', 'TransactionController@trier')->name('trier');
  Route::resource('contribution', 'ContributionController');
  Route::get('/mission/{mission}/depositInvoice', 'MissionController@getPdfDeposit');
  Route::get('/mission/{mission}/prepaymentBalance', 'MissionController@getPdfPrepaymentBalance');
  Route::get('/mission/{mission}/quote', 'MissionController@getPdfQuote');
  Route::get('/logout', 'UserController@logout')->name('logout');
});

Route::get("/", "SocialiteController@loginRegister")->name('connexion');
// La redirection vers le provider
Route::get("redirect/github", "SocialiteController@redirect")->name('socialite.redirect');

// Le callback du provider
Route::get("callback/github", "SocialiteController@callback")->name('socialite.callback');

// Route::get('/missions/{id}', 'MissionController@show')->name('missions.show');
// Route::get('/missions', 'MissionController@index')->name('missions.index');


// Route::get('/missionLine', 'MissionLineController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
