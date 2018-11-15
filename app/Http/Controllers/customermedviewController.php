<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Medicine;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class customermedviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//      public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }
//    
    
    
    public function index()
    {
         $users = DB::select('select * from medicines');
       $users= Medicine::paginate(2);
      return view('cp.viewmed',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        
        
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
         DB::delete('delete from medicines where id = ?',[$id]);
         return redirect()->back()->with('message', 'Medicine Deleted Successfully!');
    }
    
       
    public function orderpage($id)
    {
        $users = DB::select('select * from medicines');
      
      return view('cp.medicineorder',['users'=>$users]);
        
        
       
    }
    
}
