<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

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
    public function Membership()
    {
        return view('pages.Membership');
    }
    
    //Startup Dash
    public function StartupSettings()
    {
        return view('pages.StartupSettings');
    }
    
     //Startup Dash
    public function startup()
    {
        //$details = Detail::orderBy('address','country','user_details','profile_image')->paginate(10);
        $details = Detail::all();
        //$users = Users::orderBy('name')->paginate(10);
        return view('dashboard')->with('details', $details);
    }
    
     //Investor Dash
    public function investor()
    {
        return view('InvestorDashboard');
    }
    
     //Admion Dash
    public function admin()
    {
        return view('adminDash');
    }
    

    //Testing routes for investor register
    //Investor Register
    /*public function investorRegister()
    {
        return view('auth.investorRegister');
    }*/
    
    
}
