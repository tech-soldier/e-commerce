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
    /**
     * Display a listing of the resource.
     * to display the dashboard page of Admin
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Dashboard";
        $min = \DB::table('watches')->min('price');
        $max = \DB::table('watches')->max('price');
        $avg = \DB::table('watches')->avg('price');
        $users = \DB::table('users')->count();
        $minorder = \DB::table('orders')->min('total');
        $maxorder = \DB::table('orders')->max('total');
        $avgorder = \DB::table('orders')->avg('total');

        return view('/admin/dashboard', compact('title', 'min', 'max', 'avg', 'users', 'minorder', 'maxorder', 'avgorder'));
    }

    /**
     * show all watches
     * @return array 
     */
    public function watches()
    {
        $watches = Watch::with('category')->get();
        $title = "Watches";

        return view('/admin/watches_table', compact('watches', 'title'));
    }

    /**
     * show all orers
     * @return array 
     */
    public function orders()
    {
    	$orders = Order::all();
        $title = "Orders";

        return view('/admin/orders_table', compact('orders', 'title'));
    }

    /**
     * show all users
     * @return array 
     */
    public function users()
    {
    	$users = User::all();
        $title = "Users";

        return view('/admin/users_table', compact('users', 'title'));
    }

    /**
     * show all taxes
     * @return array 
     */
    public function taxes()
    {
        $taxes = Tax::all();
        $title = "Taxes";

        return view('/admin/taxes_table', compact('taxes', 'title'));
    }

    /**
     * show all transactions
     * @return array 
     */
    public function transactions()
    {
        $transactions = Transaction::all();
        $title = "Transactions";

        return view('/admin/transactions_table', compact('transactions', 'title'));
    }

    /**
     * show all categories
     * @return array 
     */
    public function categories()
    {
    	$categories = Category::all();
        $title = "Categories";

        return view('/admin/categories_table', compact('categories', 'title'));
    }
}
