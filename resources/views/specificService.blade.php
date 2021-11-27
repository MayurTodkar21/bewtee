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

    <section class="m-5">
    <h1 style="font-size: 25px; font-weight:bold ; margin-bottom: 20px;">Reviews</h1>
      <form action ="/{id}/review" method="POST">
        @csrf
        <div>
            <label for="id" hidden>Service id</label>
            <input name = 'id' type ="hidden" value= {{$service->id}}>
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


    <div style=" padding-left:40px">
        
         @foreach ($reviews as $review) 
         <p class="starability-result" data-rating={{$review->overall}}>
         <p style=" font-weight : bold">{{$review->message}}</p>
         
         <hr>
         @endforeach
        <hr>
        
       
    </div>
      
   </div>
  </div>

        



   
   
       
       
                
    </body>
</html>
       
