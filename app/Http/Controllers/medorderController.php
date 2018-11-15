<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;


class medorderController extends Controller
{
   
    public function index($id){
        echo "Succeed";
    }
  
    
    
    
    public function addorder(Request $request, $id){
        
          $this->validate($request,[
           'orderquantity' => 'numeric',          
           'contactnumber'=>'numeric',
              'select_file' => 'required|image'
       ]);
  
      $image=$request->file('select_file');
        $new_name=$image->getClientOriginalName();
        $image->move(public_path("images"),$new_name);
        
        $orders=new Order;
        $users = DB::select('select * from medicines where id = ?',[$id]);

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
            $bill=$cost*Input::get("orderquantity");
            
            $dt = Carbon::now();

                    $today=$dt->toDateString();
                
                
            $orders->itemname=$itemname;
            $orders->customername=$customername;
             $orders->contact=Input::get("contactnumber");
            $orders->quantity=Input::get("orderquantity");
             $orders->deliveryaddress=Input::get("deliveryaddress");
            $orders->total=$bill;
            $orders->todaydate=$today;
                $orders->prescription=$new_name; 
            $orders->save();
                
             $new=$qu-$orq;
                DB::update('update medicines set quantity = ?
      where id = ?',[$new,$id]);
//            
             return redirect('customermedview')->with('message', 'Your Order has been Placed!');
//            
//            
    }
 
        
    }
    
}
