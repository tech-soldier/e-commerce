<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;
use App\Order;
use App\Category;
use App\DB;
use Auth;
use App\User;

class WatchController extends Controller
{
    /**
     * Show the watches on the home page
     * @return array list of best selling products (8)
     */
    public function homeIndex()
    {
        $categories = Category::all();
        $watches = Watch::take(8)->get();
        $title = "TechWatch Home";

        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user

        return view('watchhome', compact('categories', 'watches', 'title', 'user'));
    }

    /**
     * [Displaying list of categories fetching from database]
     * @param   $name 
     * @return  array    categories
     */
     public function category_list($id){
        $watches = Watch::where('category_id', $id)->get();
        $category = Category::find($id);
        $categories = Category::all();
        // $cat = Category::where('category_name', $name)->with('watches')->first();
        //$cat = Category::with('watches')->has('watches')->get();
        $title = ucfirst($category->category_name);
        return view('category_list', compact('watches', 'categories', 'title'));

    }

    /**
     * Display a listing of the resource.
     * Shop page with pagination 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $watches = Watch::paginate(8);
        $categories = Category::all();

        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user

        return view('shop', compact('watches', 'categories', 'user'));
    }

    /**
     * Display the specified resource.
     * detail page
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $watch=Watch::find($id);
        $watches=Watch::all();
        $categories = Category::all();
        $title = 'Detail';

        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user

        return view('/detail', compact('watch','title','watches', 'categories', 'user'));
    }

    /**
    * returns about page
    * @return array
    */
    public function contact(){
        
        $title = 'contact';
        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user

        return view('contact', compact('user'));
    } 

    /**
     * Display profile page with previous orders
     *
     * @return view 'profile'
     */
    public function profile()
    {
        $title = 'Profile';
        //get authenticated user id
        $id = Auth::id();
        // test if user is authenticated
        if(empty($id)){
            return view('/auth/login'); // redirect to login if not
        }
        // get user's data
        $user = User::find($id);
        // get all orders associated with the user
        $orders = Order::all()->where('user_id', $id);

        // return view with user's profile
        return view('/profile', compact('title','user','orders'));
    } 

    public function search()
    {
        $search_term = $_GET['query']; 
        $watches = Watch::where('watch_name', 'LIKE', '%'.$search_term.'%')->orWhere('material', 'LIKE', '%'.$search_term.'%')->orWhere('movement', 'LIKE', '%'.$search_term.'%')->orWhere('long_description', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/shop_search', compact('watches')); 
    }

}
