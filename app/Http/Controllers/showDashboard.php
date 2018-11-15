<?php

namespace App\Http\Controllers;
use DB;
use User;
use Auth;
use App\Order;
use Illuminate\Http\Request;

class showDashboard extends Controller
{
  public function index(){
      
      
      $customername=Auth::user()->name;
      
      $user= DB::table('users')->count();
      
      
        $ordercount = Order::where('customername', '=', $customername)->count();
         
      $transaction= DB::select('select * from orders where customername=?',[$customername]);
      
      
 return view ('cp.customerdashboard')->with('user',$user)->with('ordercount',$ordercount)
     ->with('transaction',$transaction);
      
  }
    
   
    
}
