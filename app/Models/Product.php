<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'productID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['productID', 'productName', 'price', 'quantity', 'imageFileName'];

    
}
