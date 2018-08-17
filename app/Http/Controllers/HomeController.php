<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_user()
    {
        return view('add_user');
    }
       
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function view_user_list()
    {
        return view('view_user_list');
    }
           
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function view_voucher_list()
    {
        return view('view_voucher_list');
    }
               
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function view_voucher()
    {
        return view('view_voucher');
    }
}
