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
    
 
    
    //Membership
    public function Membership()
    {
        return view('pages.Membership');
    }
    public function StartupSettings()
    {
        return view('pages.StartupSettings');
    }
    public function StartupContacts()
    {
        return view('pages.StartupContacts');
    }
}