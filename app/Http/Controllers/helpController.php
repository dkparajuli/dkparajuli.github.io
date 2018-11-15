<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helpController extends Controller
{
    public function index(){
        
        return view('cp.help');
        
    }
}
