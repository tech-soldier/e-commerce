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

Route::get('/profile', 'WatchController@profile');

Route::get('/', 'WatchController@homeIndex');

Route::post('send-mail','SendMailController@Email');

/* --------------- CART ROUTES ------------------*/

Route::get('/cart', 'PagesController@cart');

Route::get('add-to-cart/{id}', 'CartController@addToCart');

Route::delete('remove-from-cart', 'CartController@remove');

Route::patch('update-cart', 'CartController@update');


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



/* admin create files */ 
Route::get('admin/create/create_watch', 'Admin\WatchController@create'); 
Route::post('admin/create/create_watch', 'Admin\WatchController@store'); 

Route::get('/admin/categories_table', 'AdminController@categories');


Route::get('admin/create/create_admin', 'Admin\AdminController@create'); 
Route::post('admin/create/create_admin', 'Admin\AdminController@store'); 

/* admin create files */
Route::get('/admin/create/create_watch', 'Admin\WatchesController@create');


/* admin edit files */ 
Route::get('/admin/edit/{id}/edit_watch', 'Admin\WatchesController@edit'); 
Route::put('/admin/edit/watches_table', 'Admin\WatchesController@update'); 


Route::get('/admin/edit/{id}/edit_categories', 'Admin\CategoryController@edit');
Route::post('/admin/edit/categories_table', 'Admin\CategoryController@update');

  