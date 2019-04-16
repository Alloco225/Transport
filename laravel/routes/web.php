<?php

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

// Public
Route::get('/', 'PagesController@index');   
Route::get('/acheter-billet', 'PagesController@achat');   
Route::get('/reserver-billet', 'PagesController@reservation');   
Route::get('/recherche', 'PagesController@recherche');
//  
Route::get('/promotions', 'PagesController@promotions');   
Route::get('/destinations', 'PagesController@destinations');   
// Admin
Auth::routes();
Route::get('/administration', 'AdministrationController@index');

Route::get('/home', 'HomeController@index')->name('home');

// Resource
Route::resource('bookings', 'BookingsController');
Route::resource('cars', 'CarsController');
Route::resource('companies', 'CompaniesController');
Route::resource('drivers', 'DriversController');
Route::resource('journeys', 'JourneysController');
Route::resource('luggages', 'LuggagesController');
Route::resource('stations', 'StationsController');
Route::resource('travelers', 'TravelersController');
