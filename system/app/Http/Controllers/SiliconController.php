<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Category;
use App\Items;

class SiliconController extends Controller
{
	public function index()
    {
    	$tags = Tag::all();
    	$cats = Category::all();
    	$items = Items::all();
        return view('welcome')->with(compact(['tags','cats','items']));
    }
    public function product_detail($id)
    {
    	if (!is_numeric($id)) {
    		return redirect('/');
    	}
    	$getp = Items::find($id);
    	$cats = Category::all();
    	if (!$getp) {
    		return redirect('/');
    	}
    	return view('item-detail')->with(compact(['getp','cats']));
    }
    public function product_category($id)
    {
    	if (!is_numeric($id)) {
    		return redirect('/');
    	}
    	$tags = Tag::all();
    	$cats = Category::all();
    	$id = $id;
    	$getc = Items::where('category_id',$id)->orderBy('created_at','desc')->paginate();
    	if (!$getc) {
    		return redirect('/');
    	}
    	return view('item-category')->with(compact(['getc','tags','cats','id']));
    }
    public function product_tag($id)
    {
    	if (!is_numeric($id)) {
    		return redirect('/');
    	}
    	$tags = Tag::all();
    	$cats = Category::all();
    	$id = $id;
    	$getc = Items::where('tag_id',$id)->orderBy('created_at','desc')->paginate(20);
    	if (!$getc) {
    		return redirect('/');
    	}
    	return view('item-tag')->with(compact(['getc','tags','cats','id']));
    }
	public function cart_items()
	{
		$cats = Category::all();
		$cookie = isset($_COOKIE['cart_items_cookie']) ? $_COOKIE['cart_items_cookie'] : "";
        $cookie = stripslashes($cookie);
        $saved_cart_items = json_decode($cookie, true);
		return view('cart')->with(compact(['saved_cart_items','cats']));
	}
	public function remove_cart($id)
	{
		$cookie = $_COOKIE['cart_items_cookie'];
		$cookie = stripslashes($cookie);
		$saved_cart_items = json_decode($cookie, true);
		 
		// remove the item from the array
		unset($saved_cart_items[$id]);
		 
		// delete cookie value
		unset($_COOKIE["cart_items_cookie"]);
		 
		// empty value and expiration one hour before
		setcookie("cart_items_cookie", "", time() - 3600);
		 
		// enter new value
		$json = json_encode($saved_cart_items, true);
		setcookie("cart_items_cookie", $json, time() + (86400 * 30), '/'); // 86400 = 1 day
		$_COOKIE['cart_items_cookie']=$json;

		return back();
 
	}
    public function add_cart($id, $quantity = 1)
    {
		/*$page = isset($_GET['page']) ? $_GET['page'] : 1;*/
		 if (!is_numeric($id)) {
    		return back();
    	}
		// make quantity a minimum of 1
		$quantity=$quantity<=0 ? 1 : $quantity;
		 
		// add new item on array
		$cart_items[$id]=array(
		    'quantity'=>$quantity
		);
		 
		// read
		$cookie = isset($_COOKIE['cart_items_cookie']) ? $_COOKIE['cart_items_cookie'] : "";
		$cookie = stripslashes($cookie);
		$saved_cart_items = json_decode($cookie, true);
		 
		// if $saved_cart_items is null, prevent null error
		if(!$saved_cart_items){
		    $saved_cart_items=array();
		}
 
		// check if the item is in the array, if it is, do not add
		if(array_key_exists($id, $saved_cart_items)){
		    // redirect to product list and tell the user it was added to cart
		    return back();
		}
		 
		// else, add the item to the array
		else{
		    // if cart has contents
		    if(count($saved_cart_items)>0){
		        foreach($saved_cart_items as $key=>$value){
		            // add old item to array, it will prevent duplicate keys
		            $cart_items[$key]=array(
		                'quantity'=>$value['quantity']
		            );
		        }
		    }
 
		    // put item to cookie
		    $json = json_encode($cart_items, true);
		    setcookie("cart_items_cookie", $json, time() + (86400 * 30), '/'); // 86400 = 1 day
		    $_COOKIE['cart_items_cookie']=$json;
		 
		    // redirect to product list and tell the user it was added to cart
		    return redirect('/cart');
		}
    }
    public function update_cart(Request $request)
    {
    	// get the product id
		$id = $request->get('id');
		$quantity = $request->get('quantity');
    	if (!is_numeric($quantity)) {
    		return back();
    	}
		 
		// make quantity a minimum of 1
		$quantity=$quantity<=0 ? 1 : $quantity;
		 
		// read cookie
		$cookie = $_COOKIE['cart_items_cookie'];
		$cookie = stripslashes($cookie);
		$saved_cart_items = json_decode($cookie, true);
		 
		// remove the item from the array
		unset($saved_cart_items[$id]);
		 
		// delete cookie value
		setcookie("cart_items_cookie", "", time()-3600);
		 
		// add the item with updated quantity
		$saved_cart_items[$id]=array(
		    'quantity'=>$quantity
		);
		 
		// enter new value
		$json = json_encode($saved_cart_items, true);
		setcookie("cart_items_cookie", $json, time() + (86400 * 30), '/'); // 86400 = 1 day
		$_COOKIE['cart_items_cookie']=$json;
		 
		// redirect to product list and tell the user it was added to cart
		return redirect('/cart');
    }
    public function empty_cart()
    {
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

		return back();
    }
}
