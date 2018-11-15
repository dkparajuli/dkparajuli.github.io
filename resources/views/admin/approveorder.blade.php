<html>
    
    <head>
<title>Approve Order</title>
        <link href="{{ asset('/css/addmed.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
    @include('layouts.appp')
        
        
        <div class="main">
        <div class="ver">
        @include('admin.adminverticalnav')
    </div>
        <div class="med">
            
           
              <div class="orderitem">
            @foreach ($approves as $approve)
          <br><br>
              <p><img src="/images/{{$approve->prescription}}" class="ordereditem"></p>
              
           <p>ID: {{ $approve->id}}</p> 
           <p>Name: {{ $approve->itemname }}</p>
           <p>Customer Name:  {{ $approve->customername}}</p>
               <p>Ordered Date: {{ $approve->todaydate}}</p> 
           <p>

                 <a href = 'approvemedicine/{{ $approve->id }}' id="id01"><button class="crud"> Approve Order</button></a>
                  
                    <a href = 'deleteorders/{{ $approve->id }}' id="id01"><button class="crud"> Cancel Order</button></a></p>
                   
                   <br><br>
         @endforeach
            <ul><p>{{$approves->fragment('foo')->links()}}</p> </ul> 
            </div>
            
            
             
            
          

        </div>
    
    </div>
    
    </body>


</html>