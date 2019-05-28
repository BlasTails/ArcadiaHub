<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class Role extends Model
{
    //Table Name
    protected $table = 'role_user';
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
