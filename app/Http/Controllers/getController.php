<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;
use DB;
use Carbon\Carbon;
use Farm;
use Medicine;
use App\Order;
use App\Sale;
use App\Report;

class getController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
//    
//     public function create()
//    {
//        $users= Auth::user()->name;
//         return view('cp.nav')->with('user',$users);
//         
//    }
    
    public function getcustomer(){
        

    $users = DB::select('select * from users');
      return view('admin.customerinformation',['users'=>$users]);
     }
    
    public function getOrder(){
        
         $dt = Carbon::now();
        $today=$dt->toDateString();
        
        
        $users=DB::select('select * from equipmentorders where todaydate=?',[$today] );
        return view('admin.vieworder',['users'=>$users]);
        
    }
        public function getSales(){
        
         $dt = Carbon::now();
        $today=$dt->toDateString();
        
        
        $users=DB::select('select * from sales ' );
        return view('admin.viewSales',['users'=>$users]);
        
    }
    public function adminhomepage(){
         $user= DB::table('users')->count();
            $medicine= DB::table('medicines')->count();
            $equipment= DB::table('farms')->count();
        
        
         $dt = Carbon::now();
        $today=$dt->toDateString();
        
        $sold=DB::table('orders')
            ->where('todaydate',$today)
            ->max('quantity');
        
        $total=DB::table('orders')
            ->where('todaydate',$today)
            ->sum('total');

        $totalitem=DB::table('orders')
                        ->where('todaydate',$today)
                        ->count('id');
        
        
        if($sold==null){
            $sold="0";
            $total="0";
            $totalitem="0";
                   return view('admin.adminhomepage')->with('user',$user)->with('medicine',$medicine)
            ->with('equipment',$equipment)->with('sold',$sold)->with('total',$total)
                       ->with('totalitem',$totalitem);
            
        }
        else{
         
            
            
                   return view('admin.adminhomepage')->with('user',$user)->with('medicine',$medicine)
            ->with('equipment',$equipment)->with('sold',$sold)->with('total',$total)
            ->with('totalitem',$totalitem);
        }
        

    }
    
     public function approveorderpage(){
        
        $approves=DB::select('select * from orders');
         $approves= Order::paginate(2);
      return view('admin.approveorder',['approves'=>$approves]);
    }
    
public function insertintosales($id){
    $get=DB::select('select * from orders where id=?',[$id]);
    foreach($get as $gets)
    $customername=$gets->customername;
    $itemname=$gets->itemname;
    $contact=$gets->contact;
        $quantity=$gets->quantity;
        $deliveryaddress=$gets->deliveryaddress;
    
    
    $med=DB::select('select * from medicines where name=?',[$itemname]);
    foreach($med as $meds)
        $price=$meds->price;
    
         $dt = Carbon::now();
        $today=$dt->toDateString();
    
    $sale=new Sale;
    $tot=$quantity*$price;
    
    $sale->itemname=$itemname;
    $sale->customername=$customername;
    $sale->contact=$contact;
    $sale->quantity=$quantity;
    $sale->deliveryaddress=$deliveryaddress;
    $sale->total=$tot;
    $sale->todaydate=$today;
   $sale->save();
    
    $getreport=DB::select('select * from reports where todaydate=?',[$today]);
    $count=DB::table('reports')->where('todaydate',$today)->exists();
    
    if($count>=1){
        foreach($getreport as $getreports)
      $amount=$getreports->total;
        $finalamount=$amount+$tot;
        DB::select('update reports set total=? where todaydate=?',[$finalamount,$today]);
        
         return redirect ('admin/approve');
    }
    else{
        $in=new Report;
        $in->todaydate=$today;
        $in->total=$tot;
        $in->save();
    }
      
    
}
    public function deletefrom($id){
        DB::select('delete from orders where id=?',[$id]);
        return redirect ('admin/approve');
        
    }
    
    public function generate(){
        

      return view('cp.rp');  
      
       
    
    }


}
