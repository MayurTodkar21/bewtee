
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           BEWTEE
        </h2>
        <div>
            <a href='/'>Home</a>
            
        </div>

    
    </x-slot>
    
    <?php
      $registered = TRUE;
    ?>
         <!--if you are a freelancer-->                        
        @if($user->preferrence =='freelancer') 
        <div>
            @foreach($freelancer as $person)
              @if($person->member_id == $user->id)
              <a href={{"edit/".$user['id']}}  style="border: 1px solid black; padding:1px">Edit</a>
              <?php $registered = FALSE;?>
              
              
              @endif
             

            @endforeach
            @if($registered == TRUE)

            <a href="freelancer" style="border: 1px solid black; padding:1px"  >Register as Freelancer</a>
            @endif
        
       
            <a href="viewjobs" style="border: 1px solid black; padding:1px"> view Jobs</a> 
            <a href='service' style = "border: 1px solid black; padding:1px">Post a Service</a>
            <a href="/viewmessage" style="border: 1px solid black; padding:1px"> view messages</a>
            <a href="/tips" style="border: 1px solid black; padding:1px"> Freelancing Tips</a>
            @foreach($freelancer as $person)
              @if($person->member_id == $user->id)
              <div class="py-12">
                 <h1>profile account: {{$person->name}}</h1>
                 <img src="
                    "alt="no">
                    <h3>tagline:{{$person->tagline}}</h3>

                    <h3>Location:{{$person->location}}</h3>
                    <h3>type of influencer:{{$person->typeIn}}</h3>
                   
                    <h3>Skills:{{$person->skills}} </h3>
                    <h3>Travel: {{$person->travel}}</h3>
                    <a href="#"> <h1>
                 <button><a href="/user/profile">Edit</button>
             </div>
              
              
              
              @endif
             

            @endforeach
             
             <div class="py-12">
                 <h1>Order Settings</h1>
                 <h3>Order History: </h3>
                 <h3> current Order Settings: </h3>
                 <h3> Cancel Order:</h3>
                 <h3>Current Oder Status:</h3>
                 <a href="/user/profile" style="border: 1px solid black; padding:5px">Edit</a>
             </div>
             <div class="py-12">
                 <h1>help</h1>
                 <br>
                 
                 <h3>Call us: 234567901-1</h3>
                 <div>
                    <h3>Chat with us:  </h3>
                    <br>
                    <p>email: this@gmail.com</p>
                    <p>telephhone:2832589205</p>

                 </div>

                 
             </div>
            
            
         </div>



         <!--if you are a client/employee-->
        @elseif($user->preferrence =='client')
        <div>
              


            <div class="container">
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col">
                        <section class="p-4" style="border: 1px solid grey; background-color:white">
                        <h1 class="display-3">Account details:</h1>
                         <h3>Name: {{$user->name}}</h3>
                         <h3>Email id:{{$user->email}} </h3>
                         <h3>Password: {{$user->password}}</h3>
                         <h3>Address:{{$user->address}} </h3>
                         
                         <h1>Order Settings</h1>
                         <h3>Order History: </h3>
                         <h3> current Order Settings: </h3>
                         <h3> Cancel Order:</h3>
                         <h3>Current Oder Status:</h3>
                         
                        </section>
                    </div>
                </div>
            </div>
            <div class="py-12">
            @foreach($service as $unique)
              @if($unique->member_id == $user->id)
              <a href={{"editservice/".$user['id']}} style="border: 1px solid black; padding:5px">Edit</a>
              <?php $registered = FALSE;?>
              
              
              @endif
              @endforeach
               
           
            <a href="job" style="border: 1px solid black; padding:5px"> Post a Job</a>

            
               
                
                <a href="display" style="border: 1px solid black; padding:5px">Hire Freelancers</a>
                <a href="display" style="border: 1px solid black; padding:5px">Find Beauty Service</a>
                <a href="/viewmessage" style="border: 1px solid black; padding:1px"> view messages</a>
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
