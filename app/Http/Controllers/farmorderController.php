<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipmentorder;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Sale;
use App\Report;



class farmorderController extends Controller
{
   
    public function index($id){
        echo "Succeed";
    }
  
    
    
    
    public function addorder(Request $request, $id){
        
          $this->validate($request,[
           'orderquantity' => 'numeric',          
           'contactnumber'=>'numeric'
       ]);
        
        $orders=new Equipmentorder;
        $sales=new Sale;
        $users = DB::select('select * from farms where id = ?',[$id]);

        foreach ($users as $user) 
          $itemname=$user->name;
         $customername=Auth::user()->name;
         $qu=$user->quantity;  
        $cost=$user->price;
       
        $orq=Input::get("orderquantity");
        
        if($orq>$qu){
//            echo "no";
             return redirect()->back()->with('message', 'Required Quantity is out of Stock!');
        }
            else
            {            
//            
                $dt = Carbon::now();
        $today=$dt->toDateString();
            $bill=$cost*Input::get("orderquantity");
            
            
            $orders->itemname=$itemname;
            $orders->customername=$customername;
             $orders->contact=Input::get("contactnumber");
            $orders->quantity=Input::get("orderquantity");
             $orders->deliveryaddress=Input::get("deliveryaddress");
            $orders->total=$bill;
            $orders->todaydate=$today;
            $orders->save();
                
                 $sales->itemname=$itemname;
            $sales->customername=$customername;
             $sales->contact=Input::get("contactnumber");
            $sales->quantity=Input::get("orderquantity");
             $sales->deliveryaddress=Input::get("deliveryaddress");
            $sales->total=$bill;
            $sales->todaydate=$today;
            $sales->save();
                
                 $getreport=DB::select('select * from reports where todaydate=?',[$today]);
    $count=DB::table('reports')->where('todaydate',$today)->exists();
    
    if($count>=1){
        foreach($getreport as $getreports)
      $amount=$getreports->total;
        $finalamount=$amount+$bill;
        DB::select('update reports set total=? where todaydate=?',[$finalamount,$today]);
    }
    else{
        $in=new Report;
        $in->todaydate=$today;
        $in->total=$bill;
        $in->save();
    }
                
                
                
             $new=$qu-$orq;
                DB::update('update farms set quantity = ?
      where id = ?',[$new,$id]);
//            
             return redirect('customerfarmview')->with('message', 'Your Order has been Placed!');
//            
//            
    }
 
        
    }
    
}
