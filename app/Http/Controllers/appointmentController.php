<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use DB;
use Illuminate\Support\Facades\Input;
use Auth;



class appointmentController extends Controller
{
   
    public function index($id){
        echo "Succeed";
    }
  
    public function viewappointment($id){
        $users = DB::select('select * from doctors');
      
      return view('cp.makingappointment',['users'=>$users]);
        
    }
    
    public function addappointment(Request $request, $id){
        

        
        $appoints=new Appointment;
        $users = DB::select('select * from doctors where id = ?',[$id]);

        foreach ($users as $user) 
          $doctorname=$user->name;
         $customername=Auth::user()->name;
         
        $date=Input::get('appointdate');
        

        
        
        $count = Appointment::where('date', '=', $date)->count();
     
        if($count<6){      
            $appoints->doctorname=$doctorname;
            $appoints->customername=$customername;
            $appoints->date=$date;
            
            $appoints->save();
            
            return redirect('/customerdoctorview')->with('message', 'You got an appointment!');
    
        }
            else
            {         
                return redirect('/customerdoctorview')->with('message', 'Sorry No Appointment today Please try tomorrow!');
            }
//            $bill=$cost*Input::get("orderquantity");
//            
//            
//            $orders->itemname=$itemname;
//            $orders->customername=$customername;
//             $orders->contact=Input::get("contactnumber");
//            $orders->quantity=Input::get("orderquantity");
//             $orders->deliveryaddress=Input::get("deliveryaddress");
//            $orders->total=$bill;
//            
//            $orders->save();
//                
//             $new=$qu-$orq;
//                DB::update('update farms set quantity = ?
//      where id = ?',[$new,$id]);
////            
//             return redirect('customerfarmview')->with('message', 'Your Order has been Placed!');
////            
////            
//    }
 
        
    }
    
}
