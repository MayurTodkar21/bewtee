<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Services</title>

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
            <div class="container p-0">
                <div class="row">
                    <div class="col-3" style="border-right: 1px solid black;"></div>

                    <div class="col" style="background-color: white;">
                        <h2 class=" p-5" style="font-size: 40px;">
                        {{$service['title']}}
                        </h2>
    
    
                        <div class="p-5"  style="border-bottom: 1px solid black;">
                            <?php echo $service['id'] ?>
                                <img src="<?php echo $service['serviceImg']?>" alt="something">
                                <p>service Category{{$service['serveCat']}}</p>
                                <p>Location:{{$service['location']}}</p>
                                <p>About:{{$service['about']}}</p>
                                <p>policy:{{$service['policy']}}</p>
                                <p>produc:{{$service['product']}}</p>
                                <p>price:{{$service['price']}}</p>
                                <a class="bg-primary " style="padding: 5px; color:aliceblue; border-radius:5px ; " href="<?php echo $service['id']?>/booking">Book Now</a>
            
                        </div>
                        <div style="padding-top:80px;">
                             <h1 style="font-size: 25px; font-weight:bold ; margin-bottom: 20px;">Reviews</h1>
                             @foreach ($reviews as $review) 
                             <p class="starability-result" data-rating={{$review->overall}}></p> 

                             <p style=" font-weight : bold">{{$review->message}}</p>
                             <p>On Time : {{$review->onTime}}%</p>
                             <hr>
                             @endforeach


                            </div>

                            <hr>
                            <h3 style="margin-bottom: 30px;">Please leave a review</h3>
                            <a class="bg-danger " style="padding: 5px; margin-top:30px; border-radius:5px ; color:white; " href= "/<?php echo $service['id'] ?>/review">Click to leave a review</a>

        
                        </div>
                    <div class="col-3" style="border-left: 1px solid black;"></div>
                </div>
            </div>

        



   
   
       
       
                
    </body>
</html>
       
