<html>
    
    <head>
<title>Mail</title>
        <link href="{{ asset('/css/addmed.css') }}" rel="stylesheet">
    </head>
    
    
    <body class="mail">
   

        
        <div class="main">
   
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
            <div >
                @foreach($users as $user)
      
                <div class="mailbox">
                <form action="/sendmessage/<?php echo $users[0]->id; ?>" method="post">
                    @csrf
                <h1 class="mailhead"> Send Mail</h1>
                    <p class="maillabel">Receiver::&nbsp;&nbsp;<strong>{{$user->name}} </strong> </p>
                    <p class="maillabel">Email:: <input type="text" class="totext" name="totext" value="{{$user->email}}"> </p>
                
                    <p class="maillabel"> Message:</p>
                    <textarea rows="5" cols="35" class="textarea" name="message"></textarea><br><br>
                    
                    <input type="submit" value="Send" class="send">
                       </form>
           </div>
                @endforeach
            </div>
            
            
          
        
            
            
        </div>
    
    </div>
    
    </body>


</html>