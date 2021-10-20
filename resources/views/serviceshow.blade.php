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
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Services display
        </h2>
    </x-slot>

   
    @foreach($services as $service)
    <div style="width: 300px; height: 650px; border:1px solid black; margin: 10px">
        <h3>title</h3><p>{{$service['title']}}</p>
        <img src="<?php echo $service['serviceImg']?>" alt="something">
        <h3>service Category </h3><p>{{$service['serveCat']}}</p>
        <h3>Location:</h3><p>{{$service['location']}}</p>
        <h3>About:</h3><p>{{$service['about']}}</p>
        <h3>policy:</h3><p>{{$service['policy']}}</p>
        <h3>product:</h3><p>{{$service['product']}}</p>
        <h3>price:</h3><p>{{$service['price']}}</p>  
        <h3>Please leave a review</h3>
        <?php echo $service['serviceImg']?>
        <br>
        <a href='serviceshow/<?php echo $service['id'] ?>' class="bg-primary " style="padding: 5px; color:aliceblue; border-radius:5px" > View </a>
        <button><a href= "review">Click Me!!</a></button>


    </div>
  
       
        
        
        
    
    @endforeach
    
    </x-app-layout>
                
    </body>
</html>