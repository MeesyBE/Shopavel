<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductEntity;
use App\Models\ProductPrice;
use App\Models\ProductAttribute;
use Auth;

class ProductController extends Controller
{
  public function __construct()
  {

  }

  public function list(){
    $products = ProductEntity::where('product_status', '!=', '-1')->get();
    return view('products.list', ['products' => $products]);
  }

  public function new(){

    return view('products.new');
  }

  public function create(Request $request){
    // dd($request);
    $product = new productEntity;

    $product->product_name = $request->product_name;
    $product->product_url_key = $request->url_key;
    $product->product_status = 0;
    $product->product_type = 0;
    $product->product_layout = 0;
    $product->product_created_by = Auth::id();
    $product->product_last_updated_by = Auth::id();

    $product->save();
    return redirect('/admin/products');
  }

  public function edit($id){
    // dd($request);
    $product = ProductEntity::with('price')->find($id);

    return view('products.edit', ['product' => $product]);
  }

  public function save(Request $request, $id){
    // dd($request);
    $product = ProductEntity::find($id);

    if ($request->product_enable == "on") {
      $product->product_status = 1;
    }else{
      $product->product_status = 0;
    }

    $product->product_name = $request->product_name;
    $product->product_url_key = $request->url_key;
    $product->product_type = 0;
    $product->product_layout = 0;
    $product->product_created_by = Auth::id();
    $product->product_last_updated_by = Auth::id();

    $product->save();
    if(empty($product->price)){
      $product->price = new ProductPrice;
      $product->price->product_id = $id;
    }
    $product->price->product_price = $request->product_price;
    $product->price->product_discount_price = $request->product_discount_price;
    $product->price->save();

    return back();
  }

}
