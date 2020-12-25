<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;
use function React\Promise\all;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function welcome()
    {   $posts=Posts::all();
        $categories=Categories::all();
        $products=Product::orderBy('created_at')->take(12)->get();
        return view('welcome',
        ['categories'=>$categories,
            'products'=>$products,
            'posts'=>$posts,
            ]);
    }
    public function productbycategory(Request $request, $id){
        $products = Product::where('category_id', $id) -> get();
        return view('productbycategory', ['products'=>$products]);
    }
    public function about_us()
    {
        return view('about_us');
    }
    public function shop()
    {
        $categories=Categories::all();
        $brands=Brand::all();
        $products=Product::orderBy('created_at')->take(12)->get();
        return view('shop',[
            'categories'=>$categories,
            'brands'=>$brands,
            'products'=>$products,
        ]);
    }
    public function product_info($id){
        $product=Product::find($id);
        return view('product',['product'=>$product]);
    }
}
