<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request){

        $page=$request->query("page");
        $size=$request->query("size");

        if(!$page)
            $page=1;

        if(!$size)
            $size=12;

        $order=$request->query('order');

        if(!$order)
            $order=-1;

        // $o_coloumn="";
        // $o_order="";

        switch($order){
           case 1:
                 $o_coloumn="created_at";
                 $o_order="DESC";
                 break;

            case 2:
                $o_coloumn="created_at";
                $o_order="ASC";
                break;

            case 3:
                $o_coloumn="regular_price";
                $o_order="ASC";
                break;

            case 4:
                $o_coloumn="regular_price";
                $o_order="DESC";
                break;

            default:
                $o_coloumn="id";
                $o_order="DESC";
                break;
        }


       //if(!$page) $page = 1; and if(!$size) $size = 12;: These lines check if the "page" and "size" parameters are not present in the query string. If they are not present, it sets default values. Here, the default page number is 1 and the default number of products per page is 12.

        $products=Product::orderBy('created_at','DESC')->orderBy($o_coloumn,$o_order)->paginate($size); // This method paginates the query results, meaning it splits the results into multiple pages to improve performance and user experience. The number 12 passed to the paginate() method specifies that each page should contain up to 12 products.
        return view('shop',compact('products','page','size','order'));
    }

    public function productDetails($slug){

        $product=Product::where('slug',$slug)->first();
        $rproducts=Product::where('slug','!=',$slug)->inRandomOrder()->get()->take(8);
        return view('details',compact('product','rproducts'));
    }
}
