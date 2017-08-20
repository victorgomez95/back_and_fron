<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\MerchType;
use DB;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $types  = MerchType::all();
    $products = Product::where('created_at','!=',null)
               ->orderBy('id','DESC')
               ->get();
    return view('welcome',['products' => $products, 'types' => $types]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Product::create($request->all());
    $types  = MerchType::all();
    $products = Product::where('created_at','!=',null)
               ->orderBy('id','DESC')
               ->get();
    return view('welcome',['products' => $products, 'types' => $types]);
  }

  public function showProduct($type)
  {
    $types  = MerchType::all();
    if ($type == "ALL") {
      $products = DB::table('products')
                 ->where('created_at','!=',null)
                 ->orderBy('id','DESC')
                 ->get();
    }
    else {
      $merchtype = DB::table('merchtypes')
                 ->where('name','=',$type)
                 ->get();
      foreach ($merchtype as $merch) {
        $type_id = $merch->id;
      }
      $products = DB::table('products')
                 ->where('type_id','=',$type_id)
                 ->orderBy('id','DESC')
                 ->get();
    }
    return view('welcome',['products' => $products, 'types' => $types]);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Product::destroy($id);
    $types  = MerchType::all();
    $products = Product::where('created_at','!=',null)
               ->orderBy('id','DESC')
               ->get();
    return view('welcome',['products' => $products, 'types' => $types]);
  }
  public function show_details(Request $request,$id){
    if ($request->ajax()) {
      $product = Product::find($id);
      $types  = MerchType::all();
      return response()->json(['product' => $product, 'types' => $types]);
    }
  }
}
