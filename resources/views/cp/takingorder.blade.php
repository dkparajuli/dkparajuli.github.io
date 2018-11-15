<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('/css/viewmed.css') }}" >
<body>
    @include('layouts.app')
    @include('cp.verticalnav')
    
    <div class="full">
        
        @if(Session::has('message'))
            <div class="alert alert-success">
            <p class="mes">
               <strong>Message:</strong>{{Session::get('message')}}
            </p>
            </div>@endif
            
            
            
             @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li class="err">{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
        
          <br>
         <br>
         <br>
    <div class="hed">
    <p class="ordr">Order Form</p>
    </div>
    
    
      
        
        
<form action="/orderequipment/<?php echo $users[0]->id; ?>" method="post">
    @csrf
    
<!--
     @foreach ($users as $user)
    
    @endforeach
-->
    <p class="orderlabel">Please Provide Required Quantity:</p>
    <p><input type="text" class="ordertext" name="orderquantity" required></p>
    
     <p class="orderlabel">Please Provide Delivery Address:</p>
    <p><input type="text" class="ordertext" name="deliveryaddress" required></p>
    
     <p class="orderlabel">Please Provide Contact Number:</p>
    <p><input type="text" class="ordertext" name="contactnumber" required></p>
    
    
    <div class="sub">
    <p class="ordsub"><input type="submit" value="Complete Order"></p>
    </div>
    
    </form>
    </div>
    
    
            
</body>
</html>