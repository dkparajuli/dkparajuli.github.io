<html>
    
    <head>
<title>View Doctors</title>
        <link href="{{ asset('/css/viewmed.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
   @include('layouts.appp')
        
        
        <div class="main">
        <div class="ver">
        @include('admin.adminverticalnav')
    </div>
        <div class="med">
            
           
          <p class="meden">Available Doctors</p>
            
            
        
               <div class="medshow">
                   @if(Session::has('message'))
            <div class="alert alert-success">
            <p class="mes">
               <strong>Message:</strong>{{Session::get('message')}}
            </p>
            </div>@endif
            
                   <div class="items">
                   

         @foreach ($users as $user)
          <br><br>
              
              
           <p>ID: {{ $user->id}}</p> 
           <p>Name: {{ $user->name }}</p>
           <p>From: {{ $user->from}}</p>
               <p> To: {{ $user->to }}</p>
               
           <p>
                 <a href = 'doctoredit/{{ $user->id }}'><button class="crud">Update</button></a>
                 <a href = 'doctordelete/{{ $user->id }}'  > <button class="crud">Delete</button></a>
                 </p>
                   
                   <br><br>
         @endforeach
            <ul><p>{{$users->fragment('foo')->links()}}</p> </ul> 
  
            </div>
            
            
            <br><br>
            
            </div>

        </div>
    
    </div>
    
    </body>


</html>