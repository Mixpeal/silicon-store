<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Excel;
use App\Items;
use App\Category;
use App\Account;
use App\Tag;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tags = Tag::all();
        $cats = Category::all();
        $items = Items::all();
        return view('home')->with(compact(['tags','cats','items']));
    }
    public function show_profile()
    {
        return view('profile');
    }
    public function success()
    {
        $cats = Category::all();
        return view('success')->with(compact(['cats']));
    }
    public function check_out_now(Request $request)
    {
        $cat = User::find($request->get('id'));
        $cat->name = $request->get('name');
        $cat->email = $request->get('email');
        $cat->address = $request->get('address');
        $cat->city = $request->get('city');
        $cat->state = $request->get('state');
        $cat->phone = $request->get('phone');
        $cat->save();
        $ac = new Account();
        $ac->user_id = $request->get('id');
        $ac->price = $request->get('price');
        $ac->checkout_id = $request->get('checkout_id');
        $ac->quantity = $request->get('quantity');
        $ac->save();
        $cookie = $_COOKIE['cart_items_cookie'];
        $cookie = stripslashes($cookie);
        $saved_cart_items = json_decode($cookie, true);
         
        // remove the item from the array
        foreach ($saved_cart_items as $key => $value) {
            unset($saved_cart_items[$key]);
        }
        // delete cookie value
        unset($_COOKIE["cart_items_cookie"]);
         
        // empty value and expiration one hour before
        setcookie("cart_items_cookie", "", time() - 3600);
         
        // enter new value
        $json = json_encode($saved_cart_items, true);
        setcookie("cart_items_cookie", $json, time() + (86400 * 30), '/'); // 86400 = 1 day
        $_COOKIE['cart_items_cookie']=$json;


        $data = "Successfully Added To Database";
        return redirect('/success')->with($data);
    }
    public function check_out()
    {
        $cats = Category::all();
        $cookie = isset($_COOKIE['cart_items_cookie']) ? $_COOKIE['cart_items_cookie'] : "";
        $cookie = stripslashes($cookie);
        $saved_cart_items = json_decode($cookie, true);
        return view('check-out')->with(compact(['saved_cart_items','cats']));
    }
    public function admin_index()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
            $items = Items::orderBy('created_at','desc')->paginate(8);
            return view('admin.dashboard')->with(compact(['items']));
    }
    public function products()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $tags = Tag::all();
        $cat = Category::all();
        $items = Items::orderBy('created_at','desc')->paginate(10);
        return view('admin.products.list')->with(compact(['items','tags','cat']));
    }
    public function add_product()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $tags = Tag::all();
        $cat = Category::all();
        return view('admin.products.add_product')->with(compact(['tags','cat']));
    }
    public function store_product(Request $request)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $cat = new Items();
        $cat->product_name = $request->get('product_name');
        $cat->description = $request->get('description');
        $cat->price = $request->get('price');
        $cat->quantity = $request->get('quantity');
        $cat->category_id = $request->get('category');
        $cat->tag_id = $request->get('tag');
        $file = $request->file('image');
        $name = "siliconstore";
        $destinationPath = 'images/products';
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).$name.'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName);
        $cat->photo = $fileName; // upload path
        $cat->save();
        $data = "Record Successfully Added";
        return back()->with($data);
    }
    public function remove_product($id)
    {

        $rem = Items::where('id',$id)->first();
        if ($rem) {
            $rem->delete();
            $data = "Success";
        }
        else{

        $data = "Failed";
        return back();
        }
        return back()->with($data);
    }
    public function update_product(Request $request)
    {
        $cat = Items::find($request->get('id'));
        $cat->product_name = $request->get('product_name');
        $cat->description = $request->get('description');
        $cat->price = $request->get('price');
        $cat->quantity = $request->get('quantity');
        $cat->category_id = $request->get('category');
        $cat->tag_id = $request->get('tag');
        $file = $request->file('image');
        if ($file) {
            $name = "siliconstore";
            $destinationPath = 'images/products';
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).$name.'.'.$extension; // renameing image
            $request->file('image')->move($destinationPath, $fileName);
            $cat->photo = $fileName; // upload path
        }
        $cat->save();
        $data = "Record Successfully Added";
        return back()->with($data);
    }
    public function add_bulk_product()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $tags = Tag::all();
        $cat = Category::all();
        return view('admin.products.add_bulk_product')->with(compact(['tags','cat']));
    }
    public function store_bulk_product(Request $request)
    {
        $file = $request->file('file');
        if($file){
            $path = $file->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $cat = new Items();
                    $cat->product_name = $value->product_name;
                    $cat->description = $value->description;
                    $cat->price = $value->price;
                    $cat->quantity = $value->quantity;
                    $cat->category_id = $request->get('category');
                    $cat->tag_id = $value->tag;
                    $cat->photo = $value->image;
                    $cat->save();
                }
            }
        }
        $data = "Record Successfully Added";
        return back()->with($data);
    }
    public function income()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $income = Account::orderBy('created_at','desc')->paginate(5);
        return view('admin.income')->with(compact(['income']));
    }
    public function general_setting()
    {
        # code...
    }
    public function payment_setting()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        return view('admin.payment_setting');
    }
    public function categories()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $items = Category::orderBy('created_at','desc')->paginate(5);
        return view('admin.products.category')->with(compact(['items']));
    }
    public function add_category(Request $request)
    {
        $cat = new Category();
        $cat->name = $request->get('name');
        $cat->slug = str_slug($request->get('name'));
        $cat->save();
        $data = "Successfully Added To Database";
        return back()->with($data);
    }
    public function update_category(Request $request)
    {
        $cat = Category::find($request->get('id'));
        $cat->name = $request->get('name');
        $cat->slug = str_slug($request->get('name'));
        $cat->save();
        $data = "Successfully Added To Database";
        return back()->with($data);
    }
    public function remove_category($id)
    {
        $rem = Category::where('id',$id)->first();
        $cat = Items::where('category_id',$id)->first();
        if ($rem && !$cat) {
            $rem->delete();
            $data = "Success";
        }
        else{

        $data = "Failed";
        return back();
        }
        return back()->with($data);
    }
    public function tags()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $items = Tag::orderBy('created_at','desc')->paginate(15);
        $cat = Category::all();
        return view('admin.products.tags')->with(compact(['items','cat']));
    }
    public function add_tag(Request $request)
    {
        $cat = new Tag();
        $cat->name = $request->get('name');
        $cat->category_id = $request->get('category');
        $cat->slug = str_slug($request->get('name'));
        $cat->save();
        $data = "Successfully Added To Database";
        return back()->with($data);
    }
    public function update_tag(Request $request)
    {
        $cat = Tag::find($request->get('id'));
        $cat->name = $request->get('name');
        $cat->category_id = $request->get('category');
        $cat->slug = str_slug($request->get('name'));
        $cat->save();
        $data = "Successfully Added To Database";
        return back()->with($data);
    }
    public function remove_tag($id)
    {
        $rem = Tag::where('id',$id)->first();
        $cat = Items::where('tag_id',$id)->first();
        if ($rem && !$cat) {
            $rem->delete();
            $data = "Success";
        }
        else{

        $data = "Failed";
        return back();
        }
        return back()->with($data);
    }
    public function system_users()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $items = User::orderBy('created_at','desc')->paginate(5);
        return view('admin.products.users')->with(compact(['items']));
    }
    public function add_user(Request $request)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/');
        }
        $cat = new User();
        $cat->name = $request->get('name');
        $cat->slug = str_slug($request->get('name'));
        $cat->save();
        $data = "Successfully Added To Database";
        return back()->with($data);
    }
    public function update_user(Request $request)
    {
        $cat = User::find($request->get('id'));
        $cat->name = $request->get('name');
        $cat->slug = str_slug($request->get('name'));
        $cat->save();
        $data = "Successfully Added To Database";
        return back()->with($data);
    }
    public function remove_user($id)
    {
        $rem = User::where('id',$id)->first();
        if ($rem && !$cat) {
            $rem->delete();
            $data = "Success";
        }
        else{

        $data = "Failed";
        return back();
        }
        return back()->with($data);
    }
}
