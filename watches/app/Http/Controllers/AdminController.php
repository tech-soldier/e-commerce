<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tax;
use App\Transaction;

use App\Watch;
use App\Category;
use App\Order; 
use App\User; 
use App\Admin; 


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

    	// $orders['watch_id'] = Watch::where('watch_id')->get();

    	// $orders['customer_id'] = Customer::where('customer_id')->get(); 

        $title = "Orders";

        return view('/admin/orders_table', compact('orders', 'title'));


        //return view('/admin/orders_table');
    }

    public function users()
    {
    	$users = User::all();
        $title = "Users";

        return view('/admin/users_table', compact('users', 'title'));
    }

    public function admin()
    {
        $admin = Admin::all();
        $title = "Admin User";

        return view('/admin/admin_table', compact('admin', 'title'));
    }

    public function taxes()
    {
        $taxes = Tax::all();
        $title = "Taxes";
        return view('/admin/taxes_table', compact('taxes', 'title'));
    }

    public function transactions()
    {
        $transactions = Transaction::all();
        $title = "Transactions";
        return view('/admin/transactions_table', compact('transactions', 'title'));
    }

    public function categories()
    {
    	$categories = Category::all();
        $title = "Categories";

        return view('/admin/categories_table', compact('categories', 'title'));
    }
}
