<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bewtee</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type ="text/css" href="/css/app.css">
       <!-- Styles -->
        
       

    </head>
    <body class="bg-dark">

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
                
                <div class="dropdown">
                    <label class="menu-links"> I am looking for: </label>
                    <button class="btn btn-secondary btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Freelancers
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="display">Freelancers</a>
                        <a class="dropdown-item" href="serviceshow">Services</a>
                        
                    </div>
                </div>
                  
                </div>
              
              @endif
            </div>
    </nav>
    
    
    
    <!--
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
            
            
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <a class="text-sm text-gray-700 dark:text-gray-500 underline" href ="/"> About Us</a>
                    <a class="text-sm text-gray-700 dark:text-gray-500 underline" href ="/"> Home</a>
                    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    -->

        

    <section class="home-display">
        <div class="container">
            <div class="row " >
                <h4 class="heading">Hire expert freelancers </h4>
                <h4 class="heading-two">for any jobs,online</h4>
                <br>
                <h5 class = "sub-heading">For all your requirements after analyzing budget, location, <br>  skills and portfolio of best makeup artist in Delhi</h5>
            </div>
                <br>
            
            <div class="dropdown search-bar">
                    <label class="heading-three"> I am looking for: </label>
                    <button class="btn btn-secondary btn-light dropdown-toggle heading-three" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Freelancer/service
                    </button>
                    <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item heading-three" href="display">Freelancers</a>
                        <a class="dropdown-item heading-three" href="serviceshow">Services</a>
                        
                    </div>
                </div>
        </div>
   </section>

           


        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </body>
</html>
