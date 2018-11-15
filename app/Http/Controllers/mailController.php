<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use DB;
class mailController extends Controller
{
        public function __construct(){
             $this->middleware('auth:admin');
        }
    public function send($id){

        $us=DB::select('select * from users where id=?',[$id]);
        foreach($us as $uss)
        $usmail=$uss->email;
      Mail::to($usmail)
          ->send(new SendMail($usmail));
           
    }    
        
        
   public function email($id)
{
    
          $users=DB::select('select * from users where id= ?',[$id]);
       
         
        return view('admin.email',['users'=>$users]);
   }
}
