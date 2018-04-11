<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  protected $primaryKey = 'prod_id';
  protected $table = 'products';
    //
    public function postAddProduct(Request $request)
    {
      //Validation

      //create post
      $product = new Product();
      $product->prod_name = $request['inputProductName'];
      $product->dept_id = $request['inputDept'];
      $product->description = $request['inputDescription'];
      $product->details = $request['inputDetails'];
      $request->user()->products()->save($product);
    }
}
