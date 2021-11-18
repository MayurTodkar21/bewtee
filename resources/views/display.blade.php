<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Freelancers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type ="text/css" href="/css/app.css">
        
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class=" bg-gray-100 dark:bg-gray-500">
    <section class="f-page">
    <nav class="navbar navbar-expand-lg navbar-dark shadow-1-strong">
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
    <h1 class="heading">Search Freelancer Makeup</h1>
    <h1 class="heading" style=" padding-left:600px">Artists</h1>
    <h2 class = "sub-heading" style=" padding-left:450px">Home/Search Freelancer Makeup Artists</h2>

    </section>
               
                
    
    <div >
    
    

    </div>

        <div class="container">
            <div class="row">
                <div class="col-4 " style="border-right: 2px solid black;">
                   
                   <section >
                        <form class="form-inline my-2 my-lg-0" action='/' method="POST">
                          @csrf
                         <input type="search" class="form-control mr-sm-2" style="width: 350px ; height : 25px;" name="search" placeholder="search by name, location, type of influencer">
                         <button class="btn btn-outline-primary btn-inline my-2 my-sm-0"  type="submit">Search</button>
                        </form>
                
                   </section>
                    
                </div>
                <div class="col">
                    <div class="container display">
                        <div class="row">
                        
         
                             <div class ="col">
                             @foreach($data as $freelancer)
                                <div class="f-info">
                                    <img src ="<?php echo asset('storage/freelancers/'.$freelancer->profilePhote) ?>">           
                                    
                                    <h1 class="f-name">{{$freelancer['name']}}</h1>
                                    <h1 class="f-tag">tagline:{{$freelancer['tagline']}}</h3>

                                    <!--<h1 class="f-tag">Location:{{$freelancer['location']}}</h3>
                                    <h3>type of influencer:{{$freelancer['typeIn']}}</h3>-->
                                    <h3>Rating:{{$freelancer['rating']}}</h3>

                                    <a href='display/<?php echo $freelancer['id'] ?>' class="bg-primary view-button"> View </a>  

                                </div>
                                   
                             @endforeach
                             </div>    
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
 
        

   
      
                
    </body>
</html>
       

      
       

        
        
        
    
  
