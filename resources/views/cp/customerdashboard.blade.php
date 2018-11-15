<html>
    
    <head>
<title>Customer Homepage</title>
        <link href="{{ asset('/css/help.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
   @include('layouts.appp')
        
        
        <div class="main">
        <div class="ver">
        @include('cp.verticalnav')
    </div>
        </div>
            
        <div class="homebody">
            
        <p class="usercount">
            We are now {{$user}} in numbers.
            </p>
        
         <p class="usercount">
            You have ordered  {{$ordercount}} times.
            </p>
        
            
             <p class="usercount">
            Your Transactions::
            </p>
            
           
            
            <table class="tabletransaction">
            <tr class="tablerowss">
                 <td class="tablerow">ID</td>
                <td class="tablerow">Item Name</td>
                <td class="tablerow">Quantity</td>
                <td class="tablerow">Total Price</td>
                <td class="tablerow" >Ordered Date</td>
                </tr>
                
               
                 @foreach($transaction as $transactions)
                <tr>
                <td>{{ $transactions->id}}</td>
            <td>{{ $transactions->itemname}}</td>
                  <td>{{ $transactions->quantity}}</td>
                <td>{{ $transactions->total}}</td>
                <td>{{ $transactions->todaydate}}</td></tr>
                    @endforeach
            
                    
            </table>
          
            
            
            
        </div>
    </body>


</html>