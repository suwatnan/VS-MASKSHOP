<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use DB;

class ReportController extends Controller
{
    //ยอดการสั่งซื้อรายเดือน (บาท)    
    public function monthlySale()    
    {
        //$year=date("Y");
        $year="";
        $sql = "SELECT SUBSTRING(`order`.created_at,6,2) AS month, 
                    SUM(orderdetail.quantity*orderdetail.price) AS totalAmount 
                FROM product 
                    INNER JOIN orderdetail ON product.productID=orderdetail.productID
                    INNER JOIN `order` ON orderdetail.orderID=`order`.orderID ";
                
             

                $sql .=" GROUP BY SUBSTRING(`order`.created_at,6,2)
                ORDER BY SUBSTRING(`order`.created_at,6,2) ASC";        
        return response()->json( DB::select($sql) );
    }

    //สินค้าที่มียอดการสั่งซื้อ 5 อันดับแรก (บาท)
    public function topFiveProduct()
    {
       // $year=date("Y");
       $year="";
        $sql = "SELECT product.productID, productName, 
                        SUM(orderdetail.quantity*orderdetail.price) AS totalAmount 
                FROM product 
                    INNER JOIN orderdetail ON product.productID=orderdetail.productID
                    INNER JOIN `order` ON orderdetail.orderID=`order`.orderID ";

                $sql .="GROUP BY product.productID, productName 
                ORDER BY SUM(orderdetail.quantity*orderdetail.price) DESC LIMIT 5";
        return response()->json( DB::select($sql) );
    }
 
}