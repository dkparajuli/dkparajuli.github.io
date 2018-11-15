<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }
    public function what(){
        return view('admin.adminfarm');
    }
    
     public function addmedicine(){
        return view('admin.adminmed');
    }
    
     public function viewmedicine(){
        return view('admin.viewmed');
    }
    
      public function adddoctor(){
        return view('admin.doctor');
    }
    
    
}

