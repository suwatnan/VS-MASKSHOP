<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use DB;

class PaymentController extends Controller
{
    public function AddPayment(Request $request)
    {
        //validate file uploading,  where image works for jpeg, png, bmp, gif, or svg
        //$this->validate($request, ['file' => 'imagebill']);

        //upload file
        $imagebill = "";        
        $file = $request->file('file');
        if(isset($file)){
            $file->move('images',$file->getClientOriginalName());
            $imagebill = $file->getClientOriginalName();
            
        }
        //echo $imagebill;die();
        $Payment = new Payment();
        $Payment->orderID = $request->get('orderID');      
        $Payment->imagebill = $imagebill; 
        $Payment->save();                
        return response()->json(array(
            'message' => 'add a Payment successfully', 
            'status' => 'true'));  

    }
    public function viewpayment()
    {
        $sql="SELECT * FROM payment";
        $payment=DB::select($sql);         
        return response()->json($payment);
    }
           
    public function delete($id)
    {
        //hard delete
        $Payment = Payment::find($id);
        $Payment->delete();

        //soft delete
        return response()->json(array(
            'message' => 'delete a payment successfully', 
            'status' => 'true'));
    }     
    
}