<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use DB;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $users = user::login($username,$password);
        if($users){
            $user = (array)$users;
            $user['message'] = 'success';
            $user['status'] = 'true';    
           // $user['token'] = sha1($username . $password . "@%#XYaU12$");        
        }else{
            $user = array(
                'message' => 'this user is not found', 
                'status' => 'false');
        }

        return response()->json($user);
    }

    public function create(Request $request)
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
    
        $user = new user();
        $user->firstname = $request->get('firstname');     
        $user->lastname = $request->get('lastname');
        $user->username = $request->get('username');     
        $user->password = $request->get('password');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->gmail = $request->get('gmail');       
        $user->imageFileName = $imageFileName; 
        $user->usertypeID = 1;
        $user->save();                
        return response()->json(array(
            'message' => 'add a user successfully', 
            'status' => 'true'));  

    }
        
    public function view($id)
    {
        $sql="SELECT * FROM user WHERE user.userID='$id'";
        $user=DB::select($sql)[0];         
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {       
        //validate file uploading,  where image works for jpeg, png, bmp, gif, or svg
        $this->validate($request, ['file' => 'image']);

        $user = User::find($id);
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');        
        //$user->username = $request->get('username');
        $user->password = $request->get('password');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->gmail = $request->get('gmail');
        //$user->lineID = $request->get('lineID');
        $user->usertypeID = $request->get('usertypeID');        

        $file = $request->file('file');
        if(isset($file)){
            $file->move('imageFileName',$file->getClientOriginalName());
            $user->imageFileName = $file->getClientOriginalName();
        }        

        $user->save();

        return response()->json(array(
            'message' => 'update a user successfully', 
            'status' => 'true'));
    }

    public function delete($id)
    {
        //hard delete
        $user = User::find($id);
        $user->delete();

        //soft delete
        $user = User::find($id); 
        $user->save();      
   
        return response()->json(array(
            'message' => 'delete a user successfully', 
            'status' => 'true'));
    }         
}
