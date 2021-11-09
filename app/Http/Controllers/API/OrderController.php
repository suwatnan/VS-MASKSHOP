<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $order= new Order();
        $order->save();                
        return response()->json(array(
            'message' => 'add a order successfully', 
            'status' => 'true'));  

    }
    public function SelectIDOrder()
    {
        $sql="SELECT * FROM `order` WHERE 1 ORDER BY orderID DESC ";
        
        $order=DB::select($sql)[0];         
        return response()->json($order);

    }
    public function update(Request $request, $id)
    {       
        $order = order::find($id);
        $order->status = $request->get('status');    
        $order->userID = $request->get('userID');         
        $order->save();

        return response()->json(array(
            'message' => 'update a order successfully', 
            'status' => 'true'));
    }

    public function updatestatus(Request $request, $id)
    {       
        $order = Order::find($id);
        $order->status = $request->get('status');       
        $order->save();

        return response()->json(array(
            'message' => 'update a order successfully', 
            'status' => 'true'));
    }

    public function view($id)
    {
        $sql="SELECT * FROM order
        INNER JOIN orderdetail ON order.orderID  = orderdetail.orderID
        INNER JOIN product ON orderdetail.productID  = product.productID
        WHERE order.status = 1 AND order.userID =$id";
        $order=DB::select($sql);         
        return response()->json($order);
    }

    public function viewOrderPay($id)
    {
        $sql="SELECT * FROM order
        INNER JOIN orderdetail ON order.orderID  = orderdetail.orderID
        INNER JOIN product ON orderdetail.productID  = product.productID
        WHERE order.statusID = 2 AND order.userID =$id";
        $order=DB::select($sql);         
        return response()->json($order);
    }
    public function viewOrderUser($id)
    {
        $sql="SELECT * FROM order
        INNER JOIN payments ON order.orderID = payment.orderID 
        WHERE order.userID =$id";
        $order=DB::select($sql);         
        return response()->json($order);
    }

    public function orderviiiiiii($id)
    {
        $sql="SELECT SUM(orderdetail.price) as total, `order`.*,SUM(orderdetail.quantity) as totalquantity FROM `order`
        INNER JOIN orderdetail ON orderdetail.orderID = order.orderID
        WHERE order.userID = $id 
        GROUP BY `order`.orderID ,`order`.`status`,`order`.userID,`order`.created_at,
        `order`.updated_at,`order`.delete_at";
        
        $order=DB::select($sql);         
        return response()->json($order);

    }
    public function create($id)
    {

        $order = new order();
        //     database                     
       // $order->created_at =  date('Y-m-d ');  
        $order->status  = 1;
        $order->userID= $id;    
        $order->save();                
        return response()->json(array(
            'message' => 'add a order successfully', 
            'status' => 'true'));  

    }
    public function delete($id)
    {
        //hard delete
        $order = Order::find($id);
        $order->delete();

        //soft delete
        return response()->json(array(
            'message' => 'delete a Order successfully', 
            'status' => 'true'));
    }  
    
    public function addorder(Request $request)
    {

        $order = new Order();
        //     database                     
        $order->productID= $request->get('userID');      
        $order->status  = 1;
        $order->orderDate = $request->get("Y-m-d");    
        $order->save();                
        return response()->json(array(
            'message' => 'add a order successfully', 
            'status' => 'true'));  

    }
    public function GetOrderID($id){
        $sql="SELECT `orderID` FROM `order` WHERE userID = $id ORDER BY orderID DESC";
        $sql=DB::Select($sql)[0];
        return response()->json($order);

    }

    
}