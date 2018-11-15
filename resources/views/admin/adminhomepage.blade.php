<html>
    
    <head>
<title>Admin Dashboard</title>
        <link href="{{ asset('/css/help.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
   @include('layouts.appp')
        
        
        <div class="main">
        <div class="ver">
        @include('admin.adminverticalnav')
    </div>
        <div class="med">
            
           <div class="boxone">
            <p class="boxhead">Total Users</p>
               <p class="numbers">{{$user}}</p>
            </div>
          <div class="boxtwo">
            <p class="boxhead">Total Sales</p>
               <p class="numbers">{{$total}}</p>
            </div>
    <div class="boxthree">
            <p class="boxhead">Highest Sold Item Today</p>
               <p class="numbers">{{$sold}}</p>
            </div>
          <div class="boxfour">
            <p class="boxhead">Total Number of Item Sold Today</p>
               <p class="numbers">{{$totalitem}}</p>
            </div>
            
             <div class="boxfive">
            <p class="boxhead">Total Number of Medicine</p>
               <p class="numbers">{{$medicine}}</p>
            </div>
          <div class="boxsix">
            <p class="boxhead">Total Number of Equipment</p>
               <p class="numbers">{{$equipment}}</p>
            </div>  
            
    </div>
        </div>
    </body>


</html>