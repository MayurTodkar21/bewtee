<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Freelancer Info required</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel ="stylesheet" href= "../css/app.css">
        
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bodyColor">
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Information display
        </h2>
    

   
    @foreach($freelancers as $freelancer)
    
        <!--displaying data-->
        <div style="width: 300px; height: 400px; border:1px solid black; margin: 5px">
            <img src="
            "alt="no">
            <h3>'{{$freelancer['id']}}'</h3>
            <h3>{{$freelancer['name']}}</h3>
            <h3>tagline:</h3><p>{{$freelancer['tagline']}}</p>

            <h3>Location:</h3><p>{{$freelancer['location']}}</p>
            <h3>type of influencer:</h3><p>{{$freelancer['typeIn']}}</p>
            <h3>Rating:</h3><p>{{$freelancer['rating']}}</p>
            <h3>Location:</h3><p>{{$freelancer['location']}}</p>
            <h3>Skills: </h3><p>{{$freelancer['skills']}}</p>
            <h3>Travel: </h3><p>{{$freelancer['travel']}}</p>
            <a href='display/<?php echo $freelancer['id'] ?>' class="bg-primary " style="padding: 5px; color:aliceblue; border-radius:5px" > View </a>    

        </div>
        

       @endforeach
      
                
    </body>
</html>
       

      
       

        
        
        
    
  
