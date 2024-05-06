<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
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

 //   //if(!$page) $page = 1; and if(!$size) $size = 12;: These lines check if the "page" and "size" parameters are not present in the query string. If they are not present, it sets default values. Here, the default page number is 1 and the default number of products per page is 12.

        $order=$request->query('order');

        if(!$order)
            $order=-1;

        $o_coloumn="";
        $o_order="";

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

        $brands=Brand::orderBy("name",'ASC')->get(); //This line retrieves all brands from the database and orders them by their names in ascending order (ASC).
        $q_brands=$request->query("brands");//$q_brands retrieves the value of the query parameter named "brands" from the incoming HTTP request. This parameter likely contains a comma-separated list of brand IDs selected by the user.


        //This part filters the products based on the selected brands. If $q_brands is not empty (meaning the user has selected some brands),
        // it applies a whereIn clause to the query, filtering the products by their brand_id. It uses explode(',', $q_brands) to split the comma-separated list of brand IDs into an array.
        //  This code uses Laravel's when method, which conditionally adds clauses to the query based on the truthiness of the first argument ($q_brands in this case).


        $products = Product::when($q_brands, function ($query) use ($q_brands) {
            $query->whereIn('brand_id', explode(',', $q_brands));
        })

        ->orderBy('created_at', 'DESC')
        ->orderBy($o_coloumn, $o_order)
        ->paginate($size);

     // This method paginates the query results, meaning it splits the results into multiple pages to improve performance and user experience. The number 12 passed to the paginate() method specifies that each page should contain up to 12 products.
        return view('shop',compact('products','page','size','order','brands','q_brands'));
    }

    public function productDetails($slug){

        $product=Product::where('slug',$slug)->first();
        $rproducts=Product::where('slug','!=',$slug)->inRandomOrder()->get()->take(8);
        return view('details',compact('product','rproducts'));
    }
}
