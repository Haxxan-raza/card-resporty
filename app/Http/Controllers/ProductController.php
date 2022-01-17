<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\HelperClass;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }


    public function addToCart($id)
    {
       $addcart= Helpers::addToCart($id);
       dd($addcart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
       $allupdate= Helpers::update($request);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
               $allremove= Helpers::remove($request) ;      
            session()->flash('success', 'Product removed successfully');
        }
    
}
