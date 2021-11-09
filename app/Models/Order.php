<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order';
    
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'orderID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['orderID', 'status', 'userID'];

    
}
