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
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <link rel="stylesheet" type ="text/css" href="/css/app.css">
        
        
        

        
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
                @auth 
                <div class=" d-flex">
                  <a class="text-sm text-gray-700 dark:text-gray-500 underline menu-links" href ="/"> {{$user->name}}</a>
                </div>
                @endauth
                
               
                
                
              
              @endif
            </div>
    </nav>

 
    

  
                
   <section style="background-color: #d8e2dc;" >
        <form class="form-inline my-2 my-lg-0" action='/' method="POST">
          @csrf
          <div class="container">
            <div class="row">
              <div class="col">
                <input type="search" class="form-control mr-sm-2 input-box" name="search" placeholder="search by name, location, type of influencer">
                
              </div>
              <div class="col">
              <button class="btn btn-primary btn-default my-2 my-sm-0"  type="submit">Search</button>
              </div>
            </div>
          </div>
         
         
        </form>

   </section>
   <div class="container">
   @foreach($data as $freelancer)
   <div class="row">
     <div class="col-4">
       <img class="card-img" src="<?php echo asset('storage/freelancers/'.$freelancer->profilePhote) ?>" alt="Card image cap">
     </div>
     <div class="col">
      <h1 style="font-size: 30px; font-weight:bold ; margin-top:20px">{{$freelancer['name']}}</h1>
     
      <h1 style="font-size: 20px;">{{$freelancer['location']}}</h1>
      <hr>
      <p style="font-size:20px ; margin-bottom :20px;">{{$freelancer['tagline']}}</p>
   
      <p style = "font-size:15px">{{$freelancer['about']}}</p>

      
      <p><p style="font-weight: bold;">Travel:</p> {{$freelancer['travel']}}</p>
        

      <p><p style="font-weight: bold;">Skills:</p>{{$freelancer['skills']}}</p>
      
      <p style ="font-weight:bold">{{$freelancer['experience']}} years of Experience</p>
      <a href='display/<?php echo $freelancer['id'] ?>' class="btn btn-view">View</a>

     </div>
    </div>     
  @endforeach  

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
   
        
 
        

   
      

   
    
    </body>
</html>
       

      
       

        
        
        
    
  
