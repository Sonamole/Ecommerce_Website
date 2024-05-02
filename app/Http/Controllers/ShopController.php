<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){

        $products=Product::orderBy('created_at','DESC')->paginate(12); // This method paginates the query results, meaning it splits the results into multiple pages to improve performance and user experience. The number 12 passed to the paginate() method specifies that each page should contain up to 12 products.
        return view('shop',compact('products'));
    }
}
