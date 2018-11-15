<html>
    
    <head>
<title>Add Equipment</title>
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
            
          <p class="meden">Equipment Entry..</p>
        <form action="/insertequip" method="post" class="for" enctype="multipart/form-data">
            @csrf
            <br><br><br>
            
            <label class="label">Equipment Name:</label><br>
            <input type="text" class="text" required name="name"><br><br>
            <label class="label">Quantity:</label><br>
            <input type="text" class="text" required name="quantity"><br><br>
            <label class="label">Price:</label><br>
            <input type="text" class="text" required name="price"><br><br>
            <label class="label">Description:</label><br>
          <textarea required rows="5" name="description" cols="25" class="area"></textarea><br><br>
            <label class="label">Image:</label><br>
            <input type="file" accept="image/*" required class="tex" name="select_file">
            
            <br><br><br>
            <input type="submit" name="Upload" value="Enter" class="but">

            
            </form>


        </div>
    
    </div>
    
    </body>


</html>