<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';
    protected $primaryKey = 'userID';
    protected $fillable = [
        'firstname', 'lastname', 'username','password', 'address', 'phone','gmail',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'gmail_verified_at' => 'datetime',
    ];
    public $timestamps = false;
    const ADMIN_TYPE = 2;
    const DEFAULT_TYPE = 1;
    
    public function isAdmin(){
        return $this->type == ADMIN_TYPE;
    }

}
