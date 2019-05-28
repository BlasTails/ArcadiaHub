<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\User;
use App\Usertype;
use DB;

class RoleController extends Controller
{
    
    public function store(Request $request)
    {
        $role = new Usertype;
        $role->role_id = $request->input('account');
        $role->user_id = auth()->user()->id;
        $role->save();
    }
    

}
