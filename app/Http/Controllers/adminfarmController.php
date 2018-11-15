<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farm;
use Illuminate\Support\Facades\Input;
use Session;

class adminfarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.adminfarm');
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
     
         $this->validate($request,[
           'select_file' => 'required|image',
           'quantity'=>'numeric',
           'price'=>'numeric'
       ]);
      $image=$request->file('select_file');
        $new_name=$image->getClientOriginalName();
        $image->move(public_path("images"),$new_name);
        
        $users= new Farm;
        $users->name=Input::get("name");
         $users->quantity=Input::get("quantity");
         $users->price=Input::get("price");
         $users->description=Input::get("description");
         $users->imagepath=$new_name;  
        
        
        $users->save();
        
        return redirect()->back()->with('message', 'Equipment Added Successfully!');
        
        
        
        
        
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
        //
    }
}
