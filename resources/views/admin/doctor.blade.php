<html>
    
    <head>
<title>Add Doctor</title>
        <link href="{{ asset('/css/addmed.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
    @include('layouts.appp')
        
        
        <div class="main">
        <div class="ver">
        @include('admin.adminverticalnav')
    </div>
        <div class="med">
            
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
            
          <p class="meden">Doctor Entry..</p>
        <form action="/insertdoctor" method="post" class="for" enctype="multipart/form-data">
            @csrf
            <br><br><br>
            
            <label class="label">Doctor Name:</label><br>
            <input type="text" class="text" required name="name"><br><br>
            <label class="label">Available From:</label><br>
            <input type="time" class="text" required name="fromtime"><br><br>
            <label class="label">Available To:</label><br>
         <input type="time" class="text" required name="totime"><br><br>
            
            
            <br><br><br>
            <input type="submit" name="Upload" value="Enter" class="but">

            
            </form>


        </div>
    
    </div>
    
    </body>


</html>