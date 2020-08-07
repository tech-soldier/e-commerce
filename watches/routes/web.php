<?php

use Illuminate\Support\Facades\Route;

use App\Watch; 
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

// front-end search
Route::get('/shop_search', 'WatchController@search');

/* --------------- CART ROUTES ------------------*/

Route::get('/cart', 'PagesController@cart');

Route::get('add-to-cart/{id}', 'CartController@addToCart');

Route::delete('remove-from-cart', 'CartController@remove');

Route::patch('update-cart', 'CartController@update');


/* ----------------------------------------------*/

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'CheckoutController@getCheckout')->name('checkout.index');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
	return redirect('/'); // loged in user is redirected to watchhome page
});

/* -------------------------------------------------- */

// this is all for the admin side

Route::get('/admin', 'AdminController@index');

Route::get('/admin/watches_table', 'AdminController@watches');

Route::get('/admin/orders_table', 'AdminController@orders');

Route::get('/admin/users_table', 'AdminController@users');

// Route::delete('/admin/customers_table', 'Admin\CustomerController@destroy');

Route::get('/admin/admin_table', 'AdminController@admin');

Route::get('/admin/taxes_table', 'AdminController@taxes');

Route::get('/admin/transactions_table', 'AdminController@transactions');

Route::get('/admin/categories_table', 'AdminController@categories');


/* admin search routes ------------------------------------------*/ 
Route::get('/admin/search/search_watches', 'Admin\WatchController@search');

Route::get('/admin/search/search_users', 'Admin\UserController@search');

Route::get('/admin/search/search_orders', 'Admin\OrderController@search');

Route::get('/admin/search/search_categories', 'Admin\CategoryController@search');

Route::get('/admin/search/search_taxes', 'Admin\TaxController@search');

Route::get('/admin/search/search_transactions', 'Admin\TransactionController@search');


/*----------------------------------------------------------------*/

/* admin create files ----------------------------------------------*/ 

// create watches COMPLETE *except for image upload* 
Route::get('admin/create/create_watch', 'Admin\WatchController@create'); 
Route::post('admin/create/create_watch', 'Admin\WatchController@store'); 

/* admin create files ----------------------------------------------*/

// create watches incomplete
Route::get('admin/create/create_watch', 'Admin\WatchController@create');
Route::post('admin/create/create_watch', 'Admin\WatchController@store');


// create admin COMPLETE
Route::get('admin/create/create_admin', 'Admin\AdminController@create');
Route::post('admin/create/create_admin', 'Admin\AdminController@store');

// create categories COMPLETE
Route::get('admin/create/create_category', 'Admin\CategoryController@create'); 
Route::post('admin/create/create_category', 'Admin\CategoryController@store'); 

// create orders COMPLETE
Route::get('admin/create/create_order', 'Admin\OrderController@create'); 
Route::post('admin/create/create_order', 'Admin\OrderController@store'); 

// create taxes COMPLETE
Route::get('admin/create/create_tax', 'Admin\TaxController@create'); 
Route::post('admin/create/create_tax', 'Admin\TaxController@store');

// create transactions COMPLETE
Route::get('admin/create/create_transaction', 'Admin\TransactionController@create'); 
Route::post('admin/create/create_transaction', 'Admin\TransactionController@store');

// create users COMPLETE 
Route::get('admin/create/create_user', 'Admin\UserController@create'); 
Route::post('admin/create/create_user', 'Admin\UserController@store');


/* Admin EDIT files -------------------------------------------------------- */


//edit watch table
Route::get('/admin/edit/{id}/edit_watch', 'Admin\WatchController@edit');

Route::put('/admin/edit/{id}', 'Admin\WatchController@update');

Route::delete('/admin/watches_table, Admin\WatchController@destroy');

//edit category table

Route::get('/admin/edit/{category_id}/edit_category', 'Admin\CategoryController@edit');

Route::put('/admin/edit/edit_category', 'Admin\CategoryController@update');

 
 //edit order table
Route::get('/admin/edit/{id}/edit_orders', 'Admin\OrderController@edit');

Route::put('/admin/edit/orders_table', 'Admin\OrderController@update');


