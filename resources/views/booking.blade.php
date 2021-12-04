<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Booking</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel ="stylesheet" href= "../css/app.css">
        <link rel="stylesheet" type ="text/css" href="/css/app.css">
        
        

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

            <div class="container">
                <div class="row">
                <div class="col-3">

                </div>
                <div class="col">
                  
                     <div class="booking">
                       <div class="b-appointment">
                      <h3  >Schedule your appointment</h3>
                      </div>
                      <h3 class="b-appointment">{{$service->title}}</h3>
                        <form action="/book" method="POST" >
                            @csrf
                            <div><input type="hidden" name = "userid" value={{$user->id}}></div>
                            <div><input type="hidden" name ="username" value={{$user->name}}></div>
                            <div><input type="hidden" name= "serviceid" value={{$service->id}}></div>
                            <div><input type="hidden" name= "member_id" value={{$service->member_id}}></div>
                            <div><input type="hidden" name= "servicename" value={{$service->title}}></div>
                          <div style="padding-bottom:50px">
                            <label for="appointment">Select appointment :</label>
                            <input type="datetime-local" id="appointment" name="appointment">
                          </div>
                          <div style="padding-bottom: 50px;">
                            <label > Service Included: {{$service->title}}</label>
                            <br>

                            <label for="price">Price:</label>
                            <br>
                            <div style="border: 1px solid black">
                            <span>&#8377</span><input style="border:none" type="text"name="price" value={{$service->price}}>
          </div>
                          </div>
                          
                            <button class ="btn btn-large btn-block btn-view" type="submit">Book</button>

                        </form>


                    </div>

                </div>
                <div class="col-5">

                </div>
                </div>
            </div>

</body>
</html>