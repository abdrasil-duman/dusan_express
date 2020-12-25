<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartIndex(Request $request){
        $totalsum = 0;
        foreach ($request->session()->get('products', []) as $prod)
            $totalsum += $prod->price;
        return view('cart', compact('totalsum'));
    }
function addtocart(Request $request, $id){
        $value=$request->session()->get('products',[]);
        $value[$id]=Product::find($id);
        $request->session()->put('products',$value);
        return redirect()->back();
}
    function removecart(Request $request, $id){
        $value=$request->session()->get('products',[]);
        unset($value[$id]);
        $request->session()->put('products',$value);
        return redirect()->back();
    }


}
