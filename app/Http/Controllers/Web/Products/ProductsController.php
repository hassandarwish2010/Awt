<?php

namespace App\Http\Controllers\Web\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Carbon\Carbon;
use App\ProductImages;

class ProductsController extends Controller
{
    /**
     * Show product page
     *
     * @return response
     */
    public function landing($id,Request $request){

        $products=Product::select("products.*")->
        join('categories',"categories.id","=","products.category_id")->where('categories.id',$id)->orderBy('id','desc')->get();
        $cat=Category::where('id',$id)->first();
//dd($products);
        return view('web.products.category',compact('products','cat','page'));
    }

//    =====================================
    public function index($permalink) {
        $product = Product::where('permalink', $permalink)->first();
        //dd($permalink);
        if ($product) {
            $product->full_image = asset('public/uploads/' . $product->image);
            $product->image = asset('public/uploads/thumbs2/' . $product->image);
            $images=ProductImages::where('product_id',$product->id)->get();
        }




        return $product ? view('web.products.product', compact('product','images')) : view('web.errors.notfound');
    }
}
