<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orderdetail;
use DB;

class OrderDetailController extends Controller
{
    public function AddOrderDetail(Request $request)
    {
        $Orderdetail= new Orderdetail();
        $Orderdetail->productID  = $request->get('productID');
        $Orderdetail->quantity = $request->get('quantity');    
        $Orderdetail->price = $request->get('price');       
        $Orderdetail->orderID = $request->get('orderID');
        $Orderdetail->save();                
        return response()->json(array(
            'message' => 'add a Orderdetail successfully', 
            'status' => 'true'));  

    }
    

    
}