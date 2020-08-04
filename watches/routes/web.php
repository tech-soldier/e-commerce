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


// Route::get('/', 'PagesController@watchhome');

Route::get('/about', 'PagesController@about');

Route::get('/shop', 'WatchController@index');

Route::get('/contact', 'PagesController@contact');

Route::get('/{watch}/detail', 'WatchController@show');

Route::get('/cart', 'PagesController@cart');

Route::get('add-to-cart/{id}', 'CartController@addToCart');


Route::get('/', 'WatchController@homeIndex');

Route::delete('remove-from-cart', 'CartController@remove');




/* ----------------------------------------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* -------------------------------------------------- */

// this is all for the admin side 

Route::get('/admin/watches_table', 'AdminController@watches'); 

Route::get('/admin/orders_table', 'AdminController@orders'); 

Route::get('/admin/customers_table', 'AdminController@customers'); 

Route::get('/admin/admin_table', 'AdminController@admin'); 

Route::get('/admin/taxes_table', 'AdminController@taxes'); 

Route::get('/admin/transactions_table', 'AdminController@transactions'); 

Route::get('/admin/categories_table', 'AdminController@categories'); 
