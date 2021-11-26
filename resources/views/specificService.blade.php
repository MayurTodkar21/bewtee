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
          <h2 style="font-size: 40px; ">
              {{$service->title}}
          </h2>
          <img src="<?php echo asset('storage/services/'.$service->serviceImg)?>" style="height:600px;width:800px" alt="something">
          </div>
        
        <div class="col-4">
        <div style="padding: 60px; " >
          <h1 style="font-size: 30px; font-weight: bold">{{$service->title}}</h1>
          <hr>
          <h1 style="font-weight:bolder;">Service Info</h1>
          <div style="width: 300px;">
          <h1>Product Used: {{$service->product}}</h1>
          <h1> Service Category: {{$service->serveCat}}</h1>
          <h1>Location: {{$service->location}}</h1>
          <p>Policy: {{$service->policy}}</p>
          <p>Price: {{$service->price}}</p>
          <p>Discount Offered:{{$service->discount}}%</p>
          <a class="btn btn-view " href="<?php echo $service['id']?>/booking">Book Now</a>
       </div>
        </div>
        </div>
      </div>
    </section>
    <div style="padding-top:80px; padding-left:60px">
                 <h1 style="font-size: 25px; font-weight:bold ; margin-bottom: 20px;">Reviews</h1>
                 @foreach ($reviews as $review) 
                 <p class="starability-result" data-rating={{$review->overall}}>
                 <p style=" font-weight : bold">{{$review->message}}</p>
                 <p>On Time : {{$review->onTime}}%</p>
                 <hr>
                 @endforeach
                <hr>
                <h3 style="margin-bottom: 30px;">Please leave a review</h3>
                <a class="btn-review " style="padding: 5px; margin-top:30px; border-radius:5px ; color:white; " href= "/<?php echo $service['id'] ?>/review">Click to leave a review</a>
      </div>
      <div class="col-3" style="border-left: 1px solid black;"></div>
      </div>
       </div>

        



   
   
       
       
                
    </body>
</html>
       
