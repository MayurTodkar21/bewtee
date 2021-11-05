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
                
                <div class=" d-flex">
                  <a class="text-sm text-gray-700 dark:text-gray-500 underline menu-links" href ="/"> {{$user->name}}</a>
        </div>
                
                
              
              @endif
            </div>
    </nav>
               <form class="form-inline my-2 my-lg-0" action='/' method="POST">
                     @csrf
                    <input type="search" class="form-control mr-sm-2" style="width: 350px ; height : 25px;" name="search" placeholder="search by name, location, type of influencer">
                    <button class="btn btn-outline-primary btn-inline my-2 my-sm-0"  type="submit">Search</button>
                </form>
                
                
    
    <div >
    
    

    </div>
    
    
        

   
 
    
        <!--displaying data-->
        <div class ="container">
            <div class="row"> 
            @foreach($freelancers as $freelancer)
                <div class ="col-sm-6" style="width: 300px; height: 250px; border:1px solid black; margin: 5px">
                    <img src =<?php echo asset('storage/app/'.$freelancer->profilePhote)?>>
                    {{asset('storage/app/'.$freelancer->profilePhote)}}
                    <h3>'{{$freelancer['id']}}'</h3>
                    <h3>{{$freelancer['name']}}</h3>
                    <h3>tagline:{{$freelancer['tagline']}}</h3>

                    <h3>Location:{{$freelancer['location']}}</h3>
                    <h3>type of influencer:{{$freelancer['typeIn']}}</h3>
                    <h3>Rating:{{$freelancer['rating']}}</h3>
                    <h3>Location:{{$freelancer['location']}}</h3>
                    <h3>Skills: {{$freelancer['skills']}}</h3>
                    <h3>Travel: {{$freelancer['travel']}}</h3>
                    <a href='display/<?php echo $freelancer['id'] ?>' class="bg-primary " style="padding: 5px; color:aliceblue; border-radius:5px" > View </a>    

                </div>
                @endforeach
            </div>v
        </div>
 
        

   
      
                
    </body>
</html>
       

      
       

        
        
        
    
  
