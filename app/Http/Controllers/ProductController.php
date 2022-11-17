<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\ProductEntity;
use App\Models\Products\ProductPrice;
use App\Models\Products\ProductAttribute;
use App\Models\Slug;
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
    $product->product_status = 0;
    $product->product_type = 0;
    $product->product_layout = 0;
    $product->product_created_by = Auth::id();
    $product->product_last_updated_by = Auth::id();
    $product->save();

    $slug = new Slug;
    $slug->slug_request = $request->url_key;
    $slug->slug_type = 0;
    $slug->slugmodel_id = $product->id;
    $slug->slugmodel_type = 'App\Models\Products\ProductEntity';
    $slug->save();

    return redirect('/admin/products');
  }

  public function edit($id){
    // dd($request);
    $product = ProductEntity::with('price', 'images', 'slug')->find($id);

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
    $product->product_type = 0;
    $product->product_layout = 0;
    $product->product_last_updated_by = Auth::id();

    $product->save();
    if(empty($product->price)){
      $product->price = new ProductPrice;
      $product->price->product_id = $id;
    }
    $product->price->product_price = $request->product_price;
    $product->price->product_discount_price = $request->product_discount_price;
    $product->price->save();


    if (isset($product->slug)) {
      $slug = $product->slug;
      $slug->slug_request = $request->product_url_key;
      $slug->slug_type = 0;
      $slug->save();
    }else{
      $slug = new Slug;
      $slug->slug_request = $request->product_url_key;
      $slug->slug_type = 0;
      $slug->slugmodel_id = $product->id;
      $slug->slugmodel_type = 'App\Models\Products\ProductEntity';
      $slug->save();
    }


    return back();
  }

}
