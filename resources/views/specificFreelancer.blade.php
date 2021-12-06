<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$freelancer->name}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel ="stylesheet" href= "../css/app.css">
        
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bodyColor " style="background-color:white;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand logo" href="#">BEWTEE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              @if (Route::has('login'))
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item ">
                  <a class="text-sm text-gray-700 dark:text-gray-500 underline  menu-links" style="padding-right: 10px;" href ="/"> Home</a>
                  </li>

                  <li class="nav-item">
                  <a class="text-sm text-gray-700 dark:text-gray-500 underline menu-links" href ="/"> About Us</a>
                  </li>

                  <li class="nav-item ">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline menu-links">Dashboard</a>
                    
                  </li>
                  
                  <li class="nav-item">
                         @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline menu-links">Log in</a>
                  </li>
                  <li class="nav-item">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline menu-links">Register</a>
                        @endif
                    
                        
                  </li>
                  @endauth
                  
                </ul>
                @auth 
                <div class=" d-flex">
                  <a class="text-sm text-gray-700 dark:text-gray-500 underline menu-links" href ="/"> {{$user->name}}</a>
                </div>
                @endauth
                
               
                
                
              
              @endif
            </div>
            </nav>

            <section class="p-5">
              <div class="container">
                <div class="row">
                  <div class="col-8">
                      
                  
                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                       <div class="carousel-inner">
                         <div class="carousel-item active">
                           
                           <img class="d-block w-100 h" src="<?php echo asset('storage/freelancers/'.$freelancer->img1) ?>" alt="First slide" style="height:600px;width:800px">
                         </div>
                         <div class="carousel-item">
                           <img class="d-block w-100" src="<?php echo asset('storage/freelancers/'.$freelancer->img2) ?>" alt="Second slide" style="height:600px;width:800px">
                         </div>
                         <div class="carousel-item">
                           <img class="d-block w-100" src="<?php echo asset('storage/freelancers/'.$freelancer->img2) ?>" alt="Third slide" style="height:600px;width:800px">
                         </div>
                       </div>
                       <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                       </a>
                       <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                       </a>
                      </div>
                      <h2 style="font-size: 40px; ">
                            {{$freelancer->name}}
                      </h2>
                      <div >
                        
                        
                        

                        <div class="container m-0 p-0">
                        <h2 style ="font-size:20px;font-weight: bolder; padding-top:10px; padding-bottom:5px;">SERVICES</h2>
                        <hr>
                      
                        <!--@foreach ($services as $service)
                          <div class="row p-3">
                            
                            <div class="col-10 " style="font-weight: bolder;">{{$service->title}}</div>
                            <div class="col"><span>&#8377</span>{{$service->price}} <a class="btn-book"  href="<?php echo $service->id?>/booking"> Book</a></div>
                            
                          </div>
                          <hr>
                          @endforeach
                        </div>-->
                     
                      
                        @if ($services->count() > 0 )
                        @if(isset($services) && !empty($services))
                        @foreach($services as $key => $service)
                        <div class="row p-3">

                             <div class="col-10 " style="font-weight: bolder;">{{$service->title}}</div>
                            <div class="col"><span>&#8377</span>{{$service->price}} <a class="btn-book"  href="<?php echo $service->id?>/booking"> Book</a></div>

                          </div>
                            <hr>

                        @endforeach
                        @endif
                        @else
                        <p>error</p>
                        @endif
                        </div>

                      

                       
                        
                       
                        
                      </div>
                      

                  </div>

                  <div class="col-4" >
                    <div style="padding: 10px; background-color:#f3f4f6" >
                      



                      <img src="<?php echo asset('storage/freelancers/'.$freelancer->profilePhote) ?>" alt="" width="400px" >
                      <h1>{{$freelancer->name}}</h1>
                      <h1 style="font-weight:bolder;">About Us</h1>
                      <div style="width: 300px;">
                      <h1>{{$freelancer->about}}</h1>
                      <p>{{$freelancer->location}}</p>
                      {{$freelancer->id}}
                      <a href={{'/message/'.$freelancer['id']}}>
                        <div class=" contact-btn">Contact </div>
                      </a>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
           

          </section>
          <section class="m-5">
    <h1 style="font-size: 25px; font-weight:bold ; margin-bottom: 20px;">Reviews</h1>
      <form action ="/{id}/review" method="POST">
        @csrf
        <div>
            <label for="id" hidden>Freelancer id</label>
            <input name = 'id' type ="hidden" value={{$freelancer->id}}>
        </div>
        <div style="margin-bottom:0px">
            <label for="overall" hidden>Overall Rating</label>
            <fieldset class="starability-basic">
                <input type="radio" id="no-rate" class="input-no-rate" name="overall" value="0" checked aria-label="No rating." />
                <input type="radio" id="first-rate1" name="overall" value="1" />
                <label for="first-rate1" title="Terrible">1 star</label>
                <input type="radio" id="first-rate2" name="overall" value="2" />
                <label for="first-rate2" title="Not good">2 stars</label>
                <input type="radio" id="first-rate3" name="overall" value="3" />
                <label for="first-rate3" title="Average">3 stars</label>
                <input type="radio" id="first-rate4" name="overall" value="4" />
                <label for="first-rate4" title="Very good">4 stars</label>
                <input type="radio" id="first-rate5" name="overall" value="5" />
                <label for="first-rate5" title="Amazing">5 stars</label>
            </fieldset>
        </div>
        
        
            <label for="message" hidden>Message</label>
            <textarea name="message" id="message" cols="120" rows="1" class="review-input"></textarea>
            <button class="btn btn-review" style="margin-bottom: 50px" type="submit">Submit</button>
        
        
      </form>
    </section>
          <div  style="margin-bottom:60px;padding-top:80px; padding-left:60px; margin-left:30px">
               <h1 style="font-size: 25px; font-weight:bold ; margin-bottom: 20px;">Reviews</h1>
               @foreach ($reviews as $review) 
               <p class="starability-result" data-rating={{$review->overall}}></p>
               
               <p style=" font-weight : bold">{{$review->message}} </p>

              
               <hr>
               @endforeach
              
              <hr>    
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
                

        



   
   
       
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
        <script>
      $(function () {
          $(document).scroll(function () {
              var $nav = $("#mainNavbar");
              $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
          });
      });
  </script> 
                
    </body>
</html>
       


