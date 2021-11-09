<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $sql="SELECT * FROM product";
        $user=DB::select($sql);         
        return response()->json($user);
    }


    
    public function  create(Request $request)
    {
        //validate file uploading,  where image works for jpeg, png, bmp, gif, or svg
        $this->validate($request, ['file' => 'imageFileName']);

        //upload file
        $imageFileName = "";        
        $file = $request->file('file');
        if(isset($file)){
            $file->move('imageFileName',$file->getClientOriginalName());
            $imageFileName = $file->getClientOriginalName();

        }
    
        $user = new Product();
        $user->productID = $request->get('productID');
        $user->productName = $request->get('productName');     
        $user->price = $request->get('price');
        $user->quantity = $request->get('quantity');     
        $user->imageFileName = $imageFileName; 
        $user->save();                
        return response()->json(array(
            'message' => 'add a user successfully', 
            'status' => 'true'));  

    }

    public function updatestok(Request $request, $id)
    {       
        $Product = Product::find($id);
        $Product->	quantity = $request->get('quantity'); 
        $Product->save();

        return response()->json(array(
            'message' => 'update a Product successfully', 
            'status' => 'true'));
    }
    public function checkstock()
    {
        $sql="SELECT * FROM product";
        $user=DB::select($sql);         
        return response()->json($user);
    }

}