<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    
      use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
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
        //'contact'=>'bail|required|min:1',
        // 'username'=>'bail|required|min:1',
            'email' => 'required|string|email|max:255|unique:users',
         'password'=>'required|same:confirm|min:1'
      ]);
        
        
        
        
      $users= new User;
        $users->name=Input::get("name");
         $users->address=Input::get("address");
//         $users->contact=Input::get("contact");
         $users->email=Input::get("email");
        
//        $users->gender=Input::get("gender");
        //$users->username=Input::get("username");
        $users->password=bcrypt(Input::get("password"));
       // $users->confirm=Input::get(Hash::make("confirm"));
        $users->save();
        return view('auth.login');    
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
