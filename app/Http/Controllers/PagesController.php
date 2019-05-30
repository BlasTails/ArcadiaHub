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
        return view('dashboard');
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
