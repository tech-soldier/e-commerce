<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Watch;
use App\Category;
use App\Order; 
use App\Customer; 


class AdminController extends Controller
{
    public function watches()
    {

    	$watches = Watch::all();
        //$categories = Category::all();
        $title = "Watches";

        return view('/admin/watches_table', compact('watches', 'title'));
        


        //return view('/admin/watches_table');
    }

    public function orders()
    {
    	$orders = Order::all();

    	// $watch_id = Watch::all(); 

    	// $customer_id = Customer::all(); 

        $title = "Orders";

        return view('/admin/orders_table', compact('orders', 'title'));


        //return view('/admin/orders_table');
    }

    public function customers()
    {
        return view('/admin/customers_table');
    }

    public function admin()
    {
        return view('/admin/admin_table');
    }

    public function taxes()
    {
        return view('/admin/taxes_table');
    }

    public function transactions()
    {
        return view('/admin/transactions_table');
    }

    public function categories()
    {
        return view('/admin/categories_table');
    }
}
