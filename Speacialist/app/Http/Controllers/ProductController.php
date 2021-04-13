<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Product;

class ProductsController extends Controller
{
  public function index()
  {
      $products = Product::orderBy('id', 'desc')->paginate(9);
      return view('product.index')->with('products', $products);
  }
  public function show($slug)
  {
      $product = Product::where('slug', $slug)->first();
      if (!is_null($product)) {
        return view('product.show', compact('product'));
      }else {
        session()->flash('errors', 'Sorry !! There is no product by this URL..');
        return redirect()->route('products');
      }
  }
}
