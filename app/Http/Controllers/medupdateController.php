<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Medicine;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class medupdateController extends Controller
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
 $users = DB::select('select * from medicines');
      return view('admin.medupdate',['users'=>$users]);
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
        
        
        $users = DB::select('select * from medicines where id = ?',[$id]);
      return view('admin.medupdate',['users'=>$users]);
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
        
        
         $this->validate($request,[
           'select_file' => 'required|image|max:2048',
           'quantity'=>'numeric',
           'price'=>'numeric'
       ]);
        
        
        
          $quantity = $request->input('quantity');
        $price = $request->input('price');
        $description = $request->input('description');
        
        
         $image=$request->file('select_file');
        $new_name=$image->getClientOriginalName();
        $image->move(public_path("images"),$new_name);        
        
        

     DB::update('update medicines set quantity = ?, price = ?, 
      description = ?, imagepath = ?
      where id = ?',[$quantity,$price,$description,$new_name,$id]);
//      echo "Record updated successfully.<br/>";
        
        
         return redirect('admin/viewmed')->with('message', 'Medicine Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
