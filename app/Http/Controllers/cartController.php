<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Overtrue\LaravelShoppingCart\Cart;


class cartController extends Controller
{
    public function index(){
        $cartItems=\Overtrue\LaravelShoppingCart\Facade::all();
        return view('cart.index',compact('cartItems'));
    }
    public function addItems($id){
        $product=Product::findOrFail($id);
        \Overtrue\LaravelShoppingCart\Facade::add($id,$product->pro_name,1,$product->pro_price,['img'=>$product->image,'stock'=>$product->stock]);
        return back();
    }
}
