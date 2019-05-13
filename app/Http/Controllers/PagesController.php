<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Homepage
    public function index()
    {
        return view('pages.index');
    }
    
    //sign in
    public function sign()
    {
        return view('pages.sign');
    }
    
    //Startup Dash
    public function StartupDash()
    {
        return view('pages.StartupDash');
    }
    
    
    
}
