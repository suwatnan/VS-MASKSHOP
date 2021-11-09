<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Orderdetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orderdetail';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'orderdetailID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['orderdetailID', 'productID', 'quantity', 'price', 'orderID'];

    
}
