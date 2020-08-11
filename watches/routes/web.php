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

Route::get('/thankyou/{id}', 'CheckoutController@thankyou');

Route::get('/{watch}/detail', 'WatchController@show');

Route::get('/profile', 'UserController@profile');

Route::get('/profile/{id}/edit', 'UserController@edit'); // edit form

Route::put('/profile/edit', 'UserController@update'); // validate and update

Route::get('/', 'WatchController@homeIndex');

Route::post('send-mail','SendMailController@Email');

//category link to shop page
Route::get('/category_list/{id}', 'WatchController@category_list');
Route::get('/watches/category/{name}', 'WatchController@category_list');


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
    Route::post('/checkout/order', 'CheckoutController@placeOrder')->name('checkout.place.order');
    Route::patch('checkout-calculate-cost', 'CheckoutController@calculateCost');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
	return redirect('/')->with('success', 'You have been successfully logged in!'); // loged in user is redirected to watchhome page
});

Route::post('/logout_user', function(){
	Auth::logout();
    return Redirect::back()->with('success', 'You have been successfully logged out!');
});


/* ----------------  ADMIN ROUTES  ------------------ */
Route::middleware(['auth','admin'])->group(function(){
	
	// this is all for the admin side

	Route::get('/admin', 'AdminController@index');
	Route::get('/admin/watches_table', 'AdminController@watches');
	Route::get('/admin/orders_table', 'AdminController@orders');
	Route::get('/admin/users_table', 'AdminController@users');
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
	// create watches 
	Route::get('admin/create/create_watch', 'Admin\WatchController@create');
	Route::post('admin/create/create_watch', 'Admin\WatchController@store');
	// create categories 
	Route::get('admin/create/create_category', 'Admin\CategoryController@create');
	Route::post('admin/create/create_category', 'Admin\CategoryController@store');
	// create orders 
	Route::get('admin/create/create_order', 'Admin\OrderController@create');
	Route::post('admin/create/create_order', 'Admin\OrderController@store');
	// create taxes 
	Route::get('admin/create/create_tax', 'Admin\TaxController@create');
	Route::post('admin/create/create_tax', 'Admin\TaxController@store');
	// create users COMPLETE
	Route::get('admin/create/create_user', 'Admin\UserController@create');
	Route::post('admin/create/create_user', 'Admin\UserController@store');
	/* -------------------------------------------------------------------- */


	/* Admin EDIT files -------------------------------------------------------- */

	//edit watch table
	Route::get('/admin/edit/{id}/edit_watch', 'Admin\WatchController@edit');
	Route::put('/admin/edit/edit_watch', 'Admin\WatchController@update');

	Route::delete('/admin/watches_table', 'Admin\WatchController@destroy');

	//edit order table
	Route::get('/admin/edit/{id}/edit_orders', 'Admin\OrderController@edit');
	Route::put('/admin/edit/edit_orders', 'Admin\OrderController@update');

	Route::delete('/admin/orders_table', 'Admin\OrderController@destroy');

	//edit category table
	Route::get('/admin/edit/{id}/edit_category', 'Admin\CategoryController@edit');
	Route::put('/admin/edit/edit_category', 'Admin\CategoryController@update');

	Route::delete('/admin/categories_table', 'Admin\CategoryController@destroy');

	// edit taxes table
	Route::get('/admin/edit/{id}/edit_tax', 'Admin\TaxController@edit');
	Route::put('/admin/edit/{id}', 'Admin\TaxController@update');

	//Route::delete('/admin/taxes_table, Admin\CategoryController@destroy');

	Route::delete('/admin/taxes_table', 'Admin\TaxController@destroy');


	// edit users table

	Route::get('/admin/edit/{id}/edit_users', 'Admin\UserController@edit');

	Route::post('/admin/edit/edit_users', 'Admin\UserController@update');

	Route::delete('/admin/users_table', 'Admin\UserController@destroy');

	/* ------------------------------ RESTORE  ----------------------------------- */

	// delete and restore watch or watches
	Route::get('/admin/restore/restore_watch', 'Admin\WatchController@restoreWatch'); 
	Route::get('/admin/restore/restore_watch/{id?}', 'Admin\WatchController@restoreBack')->name('/admin/restore/restore_watch'); 

	// delete and restore users
	Route::get('/admin/restore/restore_user', 'Admin\UserController@restoreUser'); 
	Route::get('/admin/restore/restore_user/{id?}', 'Admin\UserController@restoreBack')->name('/admin/restore/restore_user'); 

	// delete and restore categories
	Route::get('/admin/restore/restore_category', 'Admin\CategoryController@restoreCategory'); 
	Route::get('/admin/restore/restore_category/{id?}', 'Admin\CategoryController@restoreBack')->name('/admin/restore/restore_category'); 

	// delete and restore taxes
	Route::get('/admin/restore/restore_tax', 'Admin\TaxController@restoreTax'); 
	Route::get('/admin/restore/restore_tax/{id?}', 'Admin\TaxController@restoreBack')->name('/admin/restore/restore_tax'); 
});


