<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    protected $table='user';//Ignore automatically add "s" into class name to be table name    
    protected $primaryKey='userID'; //Ignore automatically query with id as primary key
    public $timestamps = false; // Ignore automatically add create_at/update_at fields into tabl 

    public static function index($query="",$userTypeID="")
    {
        $sql="SELECT * FROM user 
        INNER JOIN user_type ON user_type.usertypeID=users.useryypeID
        WHERE 1 ";
        if($query!=""){
            $sql.="AND (user.firstName LIKE '%$query%' OR 
                        user_type.user_type LIKE '%$query%')";
        }

        if($UserTypeID!=""){            
            $sql.="AND user.usertypeID=$usertypeID ";   
            //$sql.="AND product.brandID=$brandID ";            
        } 
        
        $sql.="users BY usertype.UserTypeID ASC ";
        //echo $sql;die();
         return DB::select($sql);
    }

    public static function login($username,$password)
    {
        return DB::table('user')
                ->select('*')
                ->where('username', $username)
                ->Where('password', $password)
                ->first();
    }
}
