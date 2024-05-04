<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Cart; // imports the Cart facade.

class CartController extends Controller
{
    public function index(){

        $cartItems=Cart::instance('cart')->content();//Cart is the facade, and instance() and content() are methods provided by the facade to interact with the shopping cart service.

        return view('cart',compact('cartItems'));
    }

    public function addToCart(Request $request,$id)
    {
        $product = Product::find($id);
        $price = $product->sale_price ? $product->sale_price : $product->regular_price;//If the product has a sale price ($product->sale_price is not null or empty), it uses the sale price; otherwise, it falls back to the regular price ($product->regular_price).
        Cart::instance('cart')->add($product->id,$product->name,$request->quantity,$price)->associate('App\Models\Product');// This line adds the product to the shopping cart using the Laravel Shopping Cart package (or similar).
        //, the ('cart') inside the brackets is simply an argument passed to the instance() method to specify which cart instance you want to work with. This identifier is used internally by the Cart class to manage and differentiate between different instances of the cart.
        // $product->id, $product->name, $request->quantity, $price: These are the details of the product being added to the cart. It includes the product's ID, name, the quantity the user wants to add (which comes from the user's input), and the price.
       // After adding the item to the cart, the associate() method is called. This method associates the added item with a specific model class. In this case, it associates the item with the Product model, which helps in retrieving the product details later.


        return redirect()->back()->with('message','Success ! Item has been added successfully!');
    }

    public function updateCart(Request $request){

        Cart::instance('cart')->update($request->rowId,$request->quantity);

    // Inside the method, it's using Laravel's Cart facade (presumably from a package like Laravel Shopping Cart) to update the cart. It's updating the item with the specified row ID ($request->rowId) to the new quantity provided ($request->quantity). The instance('cart') method is likely used to specify a particular instance of the cart.
        return redirect()->route('cart.index');

    }

   
}



///vendor\hardevine\shoppincart has  all the functions writen(migrations,contracts,facades,exceptions,service provider).CHeck it


//In Laravel 10, a Cart instance is an object that represents an e-commerce shopping cart.
// It provides methods to add items to the cart, remove items from the cart, update the quantity of items,
//  calculate the total cost of items in the cart, and even apply discounts to the total cost.
//  The Cart instance can be accessed using the Cart facade or by instantiating a new instance of the CartController.