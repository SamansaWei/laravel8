<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function add(Request $request){
        $product = Product::find($request->id);
        \Cart::add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->qty,
                'attributes' => array()
            ));
            return 'success';
    }


    public function content(){
        dd(\Cart::getContent());
    }

    public function clear(){
        \Cart::clear();
        return 'clear';
    }

    public function step01(){
        return view('front.shopping-cart.step01');
    }


}
