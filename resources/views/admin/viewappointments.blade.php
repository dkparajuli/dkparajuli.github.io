<html>
    
    <head>
<title>View Appointments</title>
        <link href="{{ asset('/css/viewmed.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
   @include('layouts.appp')
        
        
        <div class="main">
        <div class="ver">
        @include('admin.adminverticalnav')
    </div>
        <div class="med">
            
           
          <p class="meden">Available Equipment</p>
            
            
        
               <div class="medshow">
                 
            
                   <div class="items">
                   

         @foreach ($app as $appo)
          <br><br>
             
              
           <p>Doctor Name: {{ $appo->doctorname}}</p> 
           <p>Customer Name: {{ $appo->customername}}</p>
           <p>Time:  {{ $appo->date}}</p>
             
         @endforeach
            <ul><p>{{$app->fragment('foo')->links()}}</p> </ul> 
  
            </div>
            
            
            <br><br>
            
            </div>

        </div>
    
    </div>
    
    </body>


</html>