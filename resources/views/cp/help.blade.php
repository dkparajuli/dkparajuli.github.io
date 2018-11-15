<html>
    
    <head>
<title>Help</title>
        <link href="{{ asset('/css/help.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
   @include('layouts.appp')
        
        <div class="helppage">
            <div class="helppagecontent">
          <h1 class="faqheading">Frequently Asked Question..</h1>
                
                <p class="questioncategory">Service Related::</p>
                
               <details class="det">
                <summary class="sum">How many days does it take to arrive ordered stuff?</summary>
                <p class="answer">Normally, if all things go as plan then depending upon location it takes not more than 3 days to reach delivery address.</p>
                </details>
                
                <details class="det">
                <summary class="sum">How can we claim warranty upon any farming equipments if it breaks or damaged?</summary>
                <p class="answer">A warranty form need to be filled and warranty card is required to claim the warranty.</p>
                </details>
                
                 <details class="det">
                <summary class="sum">In which days of week clinic remains closed?</summary>
                <p class="answer">We provide service to our clients everyday during office hour.</p>
                </details>
                
              <details class="det">
                <summary class="sum">In case of emergency, will we get home service?</summary>
                <p class="answer">Yes, Sometime animal might be seriously injured and could be difficult to bring it up here. Our doctors or assistanct are ready to help in that condition.</p>
                </details>
                
                  <details class="det">
                <summary class="sum">Do we have to pay extra charges for home delivery of any product.</summary>
                <p class="answer">Unfortunately, yes. We dont have any delivery boy so we outsource delivery task to local company that charges fees according to thier rates,</p>
                </details>
                
                  <details class="det">
                <summary class="sum">How can I contact to doctor or any assistant?</summary>
                <p class="answer">You can mail us any time. We usally get connected with clients through e-mail.</p>
                </details>
                
                <br>
                
                <p class="questioncategory">Accounts Related::</p>
                
                <br>
                  <details class="det">
                <summary class="sum">Do you share our personal Information with any one?</summary>
                <p class="answer">No. We beleive in privacy of any individual and we are aware about consequence that someone might face if we leak any confidential data.</p>
                </details>
                
                  <details class="det">
                <summary class="sum">What advantage we receive if we register?</summary>
                <p class="answer">Talking about advantages, you will be notified in every events we conduct and you can join our social work on caring animals.</p>
                </details>
                
                  <details class="det">
                <summary class="sum">How secure our account details are?</summary>
                <p class="answer">Your details are highly secured as we developed our system with reputed company.</p>
                </details>
                <br>
                <br>          
                <div class="socialimage">
                
                 <img class="img" src="{{ asset('/images/social.png') }}">
                </div>
                
                <div class="joinus">
                
                <h1 class="join">Join Our Community Forum To Get More Information..</h1>
                <p class="desc">Here More than thousand of farmers and people related to animal care and farming have joined. They discuss about their problem and concludes or suggest a best solution.</p>
                   <br> <a href="https://www.facebook.com">Join Now</a>
                </div>
                <div class="images" >
                    <h1>Customer Registration and Login</h1>
            <img class="img" src="{{ asset('/images/registerascustomer.png') }}">
            <img class="img" src="{{ asset('/images/customerlogin.png') }}">
                <h1>Ordering Medicine</h1>
                   <img class="img" src="{{ asset('/images/ordermedicine.png') }}">
            <img class="img" src="{{ asset('/images/orderform.png') }}"> 
                      <h1>Getting Appointment</h1>
                   <img class="img" src="{{ asset('/images/getappointment.png') }}">
            <img class="img" src="{{ asset('/images/getiingappointment.png') }}">    
                    
            </div>
           </div>
            
            
            
            
            
            <br><br>
        </div>
        
    </body>
</html>