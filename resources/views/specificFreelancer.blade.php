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
    <body class="antialiased bodyColor " style="background-color:#e8e8e4;">
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
                  <div class="col-6">
                      <h2 style="font-size: 40px;">
                            {{$freelancer->name}}
                      </h2>



                      <img src="<?php echo asset('storage/freelancers/'.$freelancer->profilePhote) ?>" alt="">
                      <h1>{{$freelancer->location}}</h1>
                      <p>{{$freelancer->tagline}}</p>
                      <p>{{$freelancer->typeIn}}</
                      <p>{{$freelancer->experience}}</p>
                      <p>{{$freelancer->category}}</p>
                      <p>{{$freelancer->skills}}</p>
                      <p>{{$freelancer->travel}}</p>
                      <p>{{$freelancer->productUsed}}</p>
                      <p>{{$freelancer->prodilePhote}}</p>

                  </div>

                  <div class="col-6">
                     <h1 style="font-size: 20px; font-weight:bold; padding-bottom: 10px;">Some of {{$freelancer->name}}'s work</h1>
                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                       <div class="carousel-inner">
                         <div class="carousel-item active">
                           <img class="d-block w-100 h" src="<?php echo asset('storage/freelancers/'.$freelancer->img1) ?>" alt="First slide" style="height:300px;width:700px">
                         </div>
                         <div class="carousel-item">
                           <img class="d-block w-100" src="<?php echo asset('storage/freelancers/'.$freelancer->img2) ?>" alt="Second slide" style="height:300px;width:700px">
                         </div>
                         <div class="carousel-item">
                           <img class="d-block w-100" src="<?php echo asset('storage/freelancers/'.$freelancer->img2) ?>" alt="Third slide" style="height:300px;width:700px">
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
                      <div>
                        <p>{{$freelancer->about}}</p>
                      </div>

                  </div>
                </div>
              </div>
           

          </section>
                 

  <a href={{'/message/'.$freelancer['id']}}>
      <div class="bg-danger contact-btn m-5">
           Contact 
      </div>
  </a>
                        </div>
                        
                    
       </div>
                

        



   
   
       
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
                
    </body>
</html>
       


