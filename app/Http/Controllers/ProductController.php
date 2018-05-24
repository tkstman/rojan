<?php

namespace App\Http\Controllers;

use App\Product;
use App\Image_Photo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  protected $primaryKey = 'prod_id';
  protected $table = 'products';
//  private
    //
    public function postAddProduct(Request $request)
    {
      //return $request->file('app_file');
      //Validation
      $this->validate($request,[
        'inputProductName'=>'required|unique:products,prod_name',
        'inputDept'=>'required|exists:departments,dept_id',
        'inputDetails'=>'required',
        'inputDescription'=>'required'

      ]);
      //Validate Images Uploaded
      //return redirect()->back()->with(['msg'=>'Test Error Message','errorstatus'=>1]);

      if(count($request->file('app_file')) >5 || count($request->file('app_file')) <1 )
      {
        return redirect()->back()->with(['msg'=>'Invalid Number Of Files Supplied','errorstatus'=>1]);
      }

      $mimeTypes = ['image/jpeg','image/jpg','image/bmp','image/png','image/gif'];

      foreach ($request->file('app_file') as $file) {
        if( !in_array($file->getClientMimeType(),$mimeTypes) )
        {
          return redirect()->back()->with(['msg'=>'Invalid File Type Supplied! Please Use One Of These (gif,png,jpeg).','errorstatus'=>1]);
        }
      }

      //create post
      //try {

        $product = new Product();
        $product->prod_name = $request['inputProductName'];
        $product->dept_id = $request['inputDept'];
        $product->description = $request['inputDescription'];
        $product->details = $request['inputDetails'];
        $product->audit_user = $request->user()->user_id;
        $request->user()->products()->save($product);
        $img_phot = new Image_Photo();
        $img_phot->img_path='photos/'.$request->file('app_file')[0]->getClientOriginalName();
        $img_phot->img_name=$request->file('app_file')[0]->getClientOriginalName();
        $product->Image_Photo()->attach($img_phot);

        return redirect()->route('account')->with(['msg'=>'Successfully Added Product','errorstatus'=>0]);

      //} catch (\Exception $e) {
      //  return redirect()->route('account')->with(['msg'=>'Exception Caused Failure'. $e->getMessage(),'errorstatus'=>1]);
    //  }


    }
}
