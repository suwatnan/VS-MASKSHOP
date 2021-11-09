<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Basket extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'basket';
    
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'basketID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['basketID', 'basketnum', 'userID ', 'productID '];

    public $timestamps = false; 
}
