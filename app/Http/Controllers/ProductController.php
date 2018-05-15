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
      $this->validate($request,[
        'inputProductName'=>'required|unique:products,prod_name',
        'inputDept'=>'required',
        'inputDetails'=>'required',
        'inputDescription'=>'required'

      ]);
      //create post
      try {

        $product = new Product();
        $product->prod_name = $request['inputProductName'];
        $product->dept_id = $request['inputDept'];
        $product->description = $request['inputDescription'];
        $product->details = $request['inputDetails'];
        $product->audit_user = $request->user()->user_id;
        $request->user()->products()->save($product);

        return redirect()->route('account')->with('state');

      } catch (\Exception $e) {
        return redirect()->route('account')->withError('state');
      }


    }
}
