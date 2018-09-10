<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Image_Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  protected $primaryKey = 'prod_id';
  protected $table = 'products';
  public $main = 'photos/';
//  private
    //
    public function postAddProduct(Request $request)
    {
      //return count($request->file('app_file'));
      //Validation
      $this->validate($request,[
        'inputProductName'=>'required|unique:products,prod_name',
        'inputDept'=>'required|exists:departments,dept_id',
        'inputDetails'=>'required',
        'inputDescription'=>'required',
        'inputManufacturer'=>'required'

      ]);
      //Validate Images Uploaded
      //return redirect()->back()->with(['msg'=>'Test Error Message','errorstatus'=>1]);

      if(count($request->file('app_file')) >5 || count($request->file('app_file')) <1 )
      {
        return redirect()->back()->with(['msg'=>'Invalid Number Of Files Supplied','errorstatus'=>1]);
      }

      $mimeTypes = ['image/jpeg','image/jpg','image/bmp','image/png','image/gif'];

      //Check if Image Mimetypes are in the provided list
      foreach ($request->file('app_file') as $file) {
        if( !in_array($file->getClientMimeType(),$mimeTypes) )
        {
          return redirect()->back()->with(['msg'=>'Invalid File Type Supplied! Please Use One Of These (gif,png,jpeg).','errorstatus'=>1]);
        }
      }

      //create post
      //try {

        //STEPS
        //Create PRODUCT
        //Save Product
        //Create IMAGE
        //Save Image
        //Save in Image_Photo

        $product = new Product();
        $product->prod_name = $request['inputProductName'];
        $product->dept_id = $request['inputDept'];
        $product->description = $request['inputDescription'];
        $product->details = $request['inputDetails'];
        $product->manufacturer = $request['inputManufacturer'];



        $user_id= DB::table('users')->where('user_id', Auth::user()->user_id)->value('user_id');
        $user = User::find($user_id);

        $product->audit_user = Auth::user()->user_id;
        $product->save();


        for ($cnter=0; $cnter < count($request->file('app_file')); $cnter++ ) {
          $img_phot = new Image_Photo();

          $appDestinationPath = $this->main;
          $appFile = $request->file('app_file')[$cnter];
          $appFileName = $request->file('app_file')[$cnter]->getClientOriginalName();
          $appFileSaveLoc = rand(111111, 999999). $appFileName;
          $appFile->move($appDestinationPath, $appFileSaveLoc);

          $img_phot->img_path=$appFileSaveLoc;//=$this->main . $request->file('app_file')[0]->getClientOriginalName();
          $img_phot->img_name=$request->file('app_file')[$cnter]->getClientOriginalName();
          $img_phot->audit_user = Auth::user()->user_id;

          $img_phot->save();
          $product->Image_Photo()->attach($img_phot,['priority' => $cnter+1,'audit_user' => $product->audit_user]);
        }
        return redirect()->route('account')->with(['msg'=>'Successfully Added Product','errorstatus'=>0]);

      //} catch (\Exception $e) {
      //  return redirect()->route('account')->with(['msg'=>'Exception Caused Failure'. $e->getMessage(),'errorstatus'=>1]);
    //  }


    }

    public function getProduct($proid)
    {
      try
      {

        $selectedProd = Product::find($proid);
        //$prodimgs = $selectedProd->Image_Photo;

        //return $selectedImgs;
        return view('productDisplay', ['product'=>$selectedProd]);

      } catch (\Exception $e) {

      }
    }

    public function getProductData($proid)
    {
      try
      {
        $selectedProd = Product::find($proid);
        if(count($selectedProd))
        {
          $selectedProd->load('Image_Photo');
          return response()->json($selectedProd);
        }
        return "{}";

      } catch (\Exception $e) {

      }
    }
}
