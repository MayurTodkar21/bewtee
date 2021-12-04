
<x-app-layout>
    <x-slot name="header" >

        <div>
            <a href='/'>Home</a>
            
        </div>

    
    </x-slot>
    
    <?php
      $registered = TRUE;
    ?>
         <!--if you are a freelancer-->                        
        @if($user->preferrence =='freelancer') 

           <div class="container" >
               <div class="row">
                 @foreach($freelancer as $person)
                 @if($person->member_id == $user->id)
                   <div class="col-3">
                     <a href={{"edit/".$user['id']}}>Edit</a>
                   </div>
                   <?php $registered = FALSE;?>
              
              
                @endif
                @endforeach
                @if($registered == TRUE)
             
                   <div class="col-3">
                        <a href="freelancer">Register as Freelancer</a>
                   </div>
                @endif
                   <div class="col-3">
                   <a href='service'>Add a Service</a>
                   </div>
                   <div class="col-3">
                   <a href="/viewmessage"> view messages</a>
                   </div>
                   <div class="col-3">
                   <a href="/tips"> Freelancing Tips</a>  
                   </div>
                   
               </div>
           </div>
    <div style="background-color: white;">
           
            @foreach($freelancer as $person)
              @if($person->member_id == $user->id)
              <div>
               <div class="container">
                   <div class="row">
                       <div class="col-4">
                       <img src="<?php echo asset('storage/freelancers/'.$person->profilePhote) ?>" alt="" width="400px" class="margin:0px">
                       </div>
                       <div class="col">
                            <h1 style="font-size:40px; font-weight:bold">Profile Account:</h>
                            <h1 style="font-size:20px"> {{$person->name}}</h1>

                             <h3 style="font-size:20px" >tagline:{{$person->tagline}}</h3>

                             <h3 style="font-size:20px">Location:{{$person->location}}</h3>
                             <h3 style="font-size:20px">type of influencer:{{$person->typeIn}}</h3>

                             <h3 style="font-size:20px">Skills:{{$person->skills}} </h3>
                             <h3 style="font-size:20px">Travel: {{$person->travel}}</h3>
                             
                     

                       </div>
                   </div>
               </div>
              

             </div>
              
              
              
              @endif
             

            @endforeach
             
             <div class="m-5" >
                 <h1 style="font-size:20px; font-weight:bold">Order Settings</h1>
                 <hr>

                 <strong class="p-3">Your Appointments: </strong>
                 <div class=" container p-3">
                     <div class="row" style="border: 1px solid gray;">
                         <strong class="col p-2 " style="border-right: 1px solid gray;">Service Name</strong>
                         <strong class="col p-2" style="border-right: 1px solid gray;">Client's Name</strong>
                         <strong class="col p-2" style="border-right: 1px solid gray;">Date and Time</strong>
                     </div>
                 @foreach( $freelancer_bookings as $bookings)
                    <div class="row" style="border: 1px solid gray;">
                        <div class="col p-2" style="border-right: 1px solid gray;">{{$bookings->servicename}}</div>
                        <div class="col p-2" style="border-right: 1px solid gray;">{{$bookings->username}}</div>
                        <div class="col p-2" style="border-right: 1px solid gray;">{{$bookings->dateNtime}}</div>
                    </div>
                 @endforeach
                </div>
                 
                 
             </div>
    <footer  style="background-color: black; color:white;">
        <div class="container">
            <div class="row">
                
                <div class="col">
                    <h1>help</h1>
                    <h3>Call us: 234567901-1</h3>
                </div>
                <div class="col">
                    <h3>Chat with us:  </h3>
                
                </div>
                <div class="col-2">
                
                    <p>email: this@gmail.com</p>
                    <p>telephhone:2832589205</p>
                </div>
            </div>
        </div>    
    </footer>

            
            
         </div>



         <!--if you are a client/employee-->
        @elseif($user->preferrence =='client')
        <div class="container">
            <div class="row">
                @foreach($service as $unique)
                @if($unique->member_id == $user->id)
              
                    <div class="col-3">
                        <a href={{"editservice/".$user['id']}} >Edit</a>
                     <div>
                    <?php $registered = FALSE;?>
              
              
                @endif
                @endforeach
                    <div class="col-3">
                        <a href="display" >Hire Freelancers</a>
                    </div> 
                    <div class="col-3">   
                        <a href="display" >Find Beauty Service</a>
                    </div>   
                    <div class="col-3"> 
                        <a href="/viewmessage"> view messages</a>
                    </div>
            </div>
        </div>
        

            <div class="container">
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col">
                        <section class="p-4" style="border: 1px solid grey; background-color:white">
                        <h1 class="display-3">Account details:</h1>
                         <h3>Name: {{$user->name}}</h3>
                         <h3>Email id:{{$user->email}} </h3>
                         
                         <h3>Address:{{$user->address}} </h3>
                         <div class="m-5">
                         <h1>Your Order</h1>
                        
                         @foreach($booking as $done)
                          <strong>Name of Service</strong> {{$done->servicename}} <br>
                          <strong>Date & Time</strong>
                          {{$done->dateNtime}}
                         @endforeach
                         
                         <h3> Cancel Order:</h3>
                         
                         </div>
                         
                        </section>
                    </div>
                </div>
            </div>
            
     <footer  style="background-color: black; color:white;">
        <div class="container">
            <div class="row">
                
                <div class="col">
                    <h1>help</h1>
                    <h3>Call us: 234567901-1</h3>
                </div>
                <div class="col">
                    <h3>Chat with us:  </h3>
                
                </div>
                <div class="col-2">
                
                    <p>email: this@gmail.com</p>
                    <p>telephhone:2832589205</p>
                </div>
            </div>
        </div>    
    </footer>

                 
    </div>
        
            
            
    </div>
    @endif
</div>
                        
</x-app-layout>
