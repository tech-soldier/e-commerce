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
        // test if request is by category
        if(request()->category){
            $id = request()->category;
            $watches = Watch::with('category')->where('category_id', $id)->get(); // by category
            $current_category = Category::find($id); // get requested category
            $token = $current_category->category_name; // assign category name to token (active link)
        }else{ // otherwise get all watches
            $watches = Watch::with('category')->get(); // all  
            $token = 'all';    
        }

        $categories = Category::all();
        $title = "Watches";


        return view('/admin/watches_table', compact('watches', 'title', 'categories', 'token'));
    }

    /**
     * show all orers
     * @return array 
     */
    public function orders()
    {
        // test if 
        if(request()->field){
            $field = request()->field;
            $value = request()->value;
            $orders = Order::where($field, '=', $value)->get();
            $token = request()->token;
        }else{
            $orders = Order::all();
            $token = 'all';
        }

        $title = "Orders";
        return view('/admin/orders_table', compact('orders', 'title', 'token'));
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
