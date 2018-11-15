<html>
    
    <head>
<title>Customer Information</title>
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
            
          <p class="meden">Customer Information</p>
       
            
            <div class="customertable">
            
             <table class="tablecustomer">
         <tr class="rowcustomer">
            <td class="customerdata">ID</td>
            <td class="customerdata">Name</td>
             <td class="customerdata">Contact</td>
            <td class="customerdata">Address</td>
             <td class="customerdata">E-mail</td>
             <td class="customerdata">Send Message</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
             <td>{{ $user->contact}}</td>
            <td>{{ $user->address}}</td>
             <td>{{ $user->email}}</td>
             <td><a href="sendmail/{{$user->id}}" class="sendmessage">Message</a></td>
         </tr>
         @endforeach
      </table>
            </div>
        </div>
    </div>
    </body>
</html>