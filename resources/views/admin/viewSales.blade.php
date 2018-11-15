<html>
    
    <head>
<title>View Orders</title>
        <link href="{{ asset('/css/addmed.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
   @include('layouts.appp')
        
        
        <div class="main">
        <div class="ver">
        @include('admin.adminverticalnav')
    </div>
        <div class="med">
            
           
          <p class="meden">Sales</p>
            
            
        
               <div class="medshow">
                   @if(Session::has('message'))
            <div class="alert alert-success">
            <p class="mes">
               <strong>Message:</strong>{{Session::get('message')}}
            </p>
            </div>@endif
            <div>
            
          <br><br>
             
              
            
       
            
            <div class="customertable">
            
             <table class="tablecustomer">
         <tr class="rowcustomer">
            
            <td class="customerdata"> Item Name</td>
             <td class="customerdata">Customer Name</td>
              <td class="customerdata">Contact</td>
            <td class="customerdata">Quantity</td>
             <td class="customerdata">Delivery Address</td>
             <td class="customerdata">Total</td>
             <td class="customerdata">Order Date</td>
         </tr>
         @foreach ($users as $user)
                
                 
         <tr>
           
            <td>{{ $user->itemname }}</td>
             <td>{{ $user->customername}}</td>
              <td>{{ $user->contact}}</td>
            <td>{{ $user->quantity}}</td>
             <td>{{ $user->deliveryaddress}}</td>
             <td>{{ $user->total}}</td>
             <td>{{\Carbon\Carbon::parse($user->created_at)->format('d M Y')}}</td>
         </tr>
         @endforeach
      </table>
            </div>
        

            </div>
            <br><br>
            
            </div>

        </div>
    
    </div>
    
    </body>


</html>