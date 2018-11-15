<html>
    
    <head>
<title>Update Doctor Time</title>
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
            
          <p class="meden">Doctor Schedule Update..</p>
        <form action="/doctoredit/<?php echo $users[0]->id; ?>" method="post" class="for" enctype="multipart/form-data">
<!--            {{ method_field('PUT') }}-->
            @csrf
            <br><br><br>
            @foreach($users as $user)
            <p class="updateitem">Schedule to be updated of: <strong> {{ $user->name }}</strong></p> 
          @endforeach
            <br><br>
            <label class="label">From:</label><br>
            <input type="time" class="text" required name="from"><br><br>
            <label class="label">To:</label><br>
            <input type="time" class="text" required name="to"><br><br>
            <input type="submit" name="Upload" value="Update" class="but">

            
            </form>


        </div>
    
    </div>
    
    </body>


</html>