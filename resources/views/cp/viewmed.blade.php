<html>
    
    <head>
<title>View Medicine</title>
        <link href="{{ asset('/css/viewmed.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
   @include('layouts.appp')
        
        
        <div class="main">
        <div class="ver">
        @include('cp.verticalnav')
    </div>
        <div class="med">
            
           
          <p class="meden">Available Medicine</p>
            
            
        
               <div class="medshow">
                   @if(Session::has('message'))
            <div class="alert alert-success">
            <p class="mes">
               <strong>Message:</strong>{{Session::get('message')}}
            </p>
            </div>@endif
            <div>
            @foreach ($users as $user)
          <br><br>
              <p><img src="/images/{{$user->imagepath}}" class="related"></p>
              
           <p>ID: {{ $user->id}}</p> 
           <p>Name: {{ $user->name }}</p>
           <p>Quantity  {{ $user->quantity}}</p>
               <p> Price: Rs.{{ $user->price }}</p>
               <p> Description: {{ $user->description }}</p> 
           <p>
                  <a href = 'buymedicine/{{ $user->id }}' id="id01"><button class="crud">Order</button></a></p>
                
                   
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