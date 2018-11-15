<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;
use Illuminate\Support\Facades\Input;
use Session;
use App\Appointment;
use DB;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    
    public function index()
    {
        return view('admin.doctor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $this->validate($request,[
           
       ]);
    
        
        $users= new Doctor;
        $users->name=Input::get("name");
         $users->from=Input::get("fromtime");
             $users->to=Input::get("totime");
  
        
        
        $users->save();
        
        return redirect()->back()->with('message', 'Doctor Added Successfully!');
        


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
       DB::delete('delete from doctors where id = ?',[$id]);
         return redirect('/admin/viewdoctor')->with('message', 'Doctor Details Deleted Successfully!');
    }
       public function doctorview()
    {
         $users = DB::select('select * from doctors');
       $users= Doctor::paginate(2);
      return view('admin.viewdoctor',['users'=>$users]);
    }
    
    public function viewdoctorupdate($id){
        $users = DB::select('select * from doctors');
        return view('admin.updatedoctor',['users'=>$users]);
    }

    public function updatedoctor(Request $request, $id){
        
        $from = $request->input('from');
        $to  = $request->input('to');

     DB::update('update doctors set `from`= ?, `to`=?
      where id = ?',[$from,$to,$id]);
      
   return redirect('/admin/viewdoctor')->with('message', 'Doctor Schedule Updated Successfully!');
        
    }
    
    public function getAppointments(){
        $app=DB::select('select * from appointments');
        $app= Appointment::paginate(3);
            return view('admin.viewappointments',['app'=>$app]);
        
    }
    
    }


