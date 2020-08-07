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

    public function homeIndex()
    {
        $categories = Category::all();
        $two = '2';
        $watches = \DB::select(\DB::raw("select * from watches where category_id= :two"), array('two' => $two));
        $title = "TechWatch Home";

        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user

        return view('watchhome', compact('categories', 'watches', 'title', 'user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $watches = Watch::all();
        $categories = Category::all();
        $title = "Shop";

        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user

       return view('shop', compact('watches', 'categories', 'title', 'user'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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


}
