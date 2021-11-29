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
            <h1 class="display-5" style="text-align: center;">Set Your Freelancing Profile</h1>
       
            <section class="bg-light ">
            <form action="freelancer" style="margin-left: 400px; " method="post" enctype="multipart/form-data"> 
            @csrf
            
            <!--Image-->
            <div class="form-group pt-4">
               <label for="file">Profile Photo</label>
               <input type="file" name = "file" class="form-control-file" id="exampleFormControlFile1">
            </div>
           
           <!--Name-->
            <div class="form-group col-md-6">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value ="{{$user->name}}" disabled>
                <small id="nameHelp" class="form-text text-muted">Name remains the same you have entered when registering.</small>
            </div>

           

            <!--Tagline-->
            <div class="form-group col-md-6">
                <label for="tagline">Tagline:</label>
                <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Enter Tagline">
                <small id="taglineHelp" class="form-text text-muted">Add A catchy tagline to your profile</small>
            </div>

            <!--location-->
            <div class="form-group col-md-6">
                <label for="location">Tagline:</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                <small id="location" class="form-text text-muted">Enter the name of town or city residing</small>
            </div>

            <!--Influencer-->
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="typeIn">Type of influencer: </label>
                  <select name="typeIn" class="form-control">
                    <option name ="typeIn" value="freelancer" selected>Freelancers</option>
                    <option name ="typeIn" value="salon staff">Salon Staff</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="category">Category: </label>
                  <select name="category" class="form-control">
                    <option name ="category" value="1" selected>1</option>
                    <option name ="category" value="2">2</option>
                  </select>
                </div>
            </div>

            <h4 style="margin-top:50px"><strong>Add Some of Your Work</strong></h4>
            <div class= "form-group mt-2">
                <label> Work Sample 1:</label>
                <input type ="file" name="img1" placeholder="enter image url"> 
            </div>
             <div class= "form-group mt-2">
                <label>Work Sample 2:</label>
                <input type ="file" name="img2" placeholder="enter image url"> 
            </div> <div class= "form-group mt-2">
                <label>Work Sample 3:</label>
                <input type ="file" name="img3" placeholder="enter image url"> 
            </div>

            <!--About Freelancer-->
            <div class="form-group mt-2 col-md-6">
              <label for="desc">About:</label>
              <textarea class="form-control" name = "desc" rows="3" placeholder="description about freelancing"></textarea>
            </div>
 
        
        <!--skills-->
        
        <div class="form-group col-md-6">
          <label for="skills">skills: </label>
          <select name="skills" class="form-control">
            <option name ="skills" value="tech" selected>Tech</option>
            <option name ="skills" value="non-tech">Non-tech</option>
          </select>
        </div>

 
        <div class="form-group col-md-6">
            <label for="experiencen">Experience:</label>
            <input type="number" class="form-control" id="experience" name="experience" placeholder="experience in years">
   
        </div>
 
        <div class="form-group col-md-6">
          <label for="travel">Travel out of station: </label>
          <select name="travel" class="form-control" >
            <option name ="travel" value="yes" selected>yes</option>
            <option name ="travel" value="no">no</option>
          </select>
        </div>
  
        <div class="form-group col-md-6">
          <label for="productUsed">Product Used: </label>
          <select name="productUsed" class="form-control">
            <option name ="productUsed" value="1" selected>1</option>
            <option name ="productUsed" value="2">2</option>
          </select>
        </div>
 
        <div class="form-group mt-2 col-md-6">
              <label for="About">About you:</label>
              <textarea class="form-control" name = "About" rows="3" placeholder="description about your expertise , speciality and achievement"></textarea>
        </div>
 
        <div class="form-group col-md-6 mb-5">
            <label for="fnq">Add contact for any query:</label>
            <input type="text" class="form-control" id="fnq" name="fnq">
   
        </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block" >Submit</button>

            
        </form>
        </section>
               
    </body>
</html>
