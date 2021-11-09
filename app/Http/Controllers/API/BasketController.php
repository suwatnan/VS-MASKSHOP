<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basket;
use DB;

class BasketController extends Controller
{
    public function index($id)
    {
        $sql="SELECT basket.basketID,basket.productID,basket.userID,basket.basketnum,product.quantity,product.price,product.imageFileName
        ,SUM(product.price *basket.basketnum) as total FROM basket 
        INNER JOIN product ON basket.productID = product.productID
        WHERE userID=$id 
        GROUP BY basket.basketID,basket.productID,basket.userID,basket.basketnum,product.quantity,product.price,product.imageFileName";
        $cart=DB::select($sql);         
        return response()->json($cart);
    }
    public function create(Request $request)
    {

        $cart = new Basket();
        //     database                     
        $cart->basketnum = $request->get('basketnum');     
        $cart->userID  = $request->get('userID');
        $cart->productID= $request->get('productID');     
        $cart->save();                
        return response()->json(array(
            'message' => 'add a cart successfully', 
            'status' => 'true'));  

    }
    
    public function delete($id)
    {
        //hard delete
        $cart = Basket::find($id);
        $cart->delete();

        //soft delete

   
        return response()->json(array(
            'message' => 'delete a Basket successfully', 
            'status' => 'true'));
    }    
    
    public function deleteall($id)
    {
        //hard delete
        $sql="DELETE FROM basket WHERE userID = $id ";
        $cart=DB::select($sql);    

        //soft delete
        return response()->json($cart);
    }  
    

        

}