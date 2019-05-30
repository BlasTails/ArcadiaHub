<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Usertype extends Model
{
    //Table Name
   protected $table = 'role_user';
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
