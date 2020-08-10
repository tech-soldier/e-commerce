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
     * [Displaying list of categories fetching from database]
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
     public function category_list($name){
        $categories = Category::all();
        $cat = Category::where('category_name', $name)->with('watches')->first();
        $title = 'Category: ' . $name;
        return view('watches/category_list', compact('cat', 'categories', 'title'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $watches = Watch::paginate(8);
        $data = '';
        if ($request->ajax()){
           
            foreach ($watches as $watch) {
                $str = 
                
                "<div class="."'col-3 text-center bord'>".
                    "<div class="."'single-product-area mb-30'>".
                        "<div class="."'product_image'>".
                            
                            "<a href="."'{$watch->id}/detail'>".
                            "<img class="."'normal_img' src="."/storage/images/{$watch->cover_img} alt="."{$watch->watch_name} href="."{$watch->id}/detail>
                            </a>
                        </div>".

                        
                        "<div class="."'product_description'>".
                            "<div class="."'watch_info_wrapper pt-4 pb-3 text-center'>".
                                "<a class="."'text-center h4 watch-name'  href="."'{$watch->id}/detail'>{$watch->watch_name}</a>".
                                "<hr style="."'background-color: white; width: 90%;'>".
                                "<h6 class="."'text-center product-price mt-2'>$ {$watch->price}</h6>".
                                "<p class="."'text-center mb-0'> Width: {$watch->strap_width}</p>
                            </div>
                        </div>".

                        "<div class="."'add_quick_wrapper d-flex'>".
                           
                            "<div class="."'product_add_to_cart text-center'>".
                                "<a href="."'add-to-cart/{ $watch->id }' data-id="."'{ $watch->id }'> Add to Cart</a>
                            </div>".
                            
                            "<div class="."'product_quick_view text-center'>".
                                "<a href="."'{$watch->id}/detail'> Quick View</a>
                            </div>
                        </div>
                    </div>
                </div>"
              ;
                $data.=$str;
            }
            return $data;
            
        }
        $categories = Category::all();
        $title = "Shop";

        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user

       return view('shop', compact('watches', 'categories', 'title', 'user', 'data'));
        
        
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
