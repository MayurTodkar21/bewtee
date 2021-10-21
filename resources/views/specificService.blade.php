

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Service</title>

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
        {{$service['title']}}
        </h2>
    </x-slot>
        <div>
        <?php echo $service['id'] ?>
            <img src="<?php echo $service['serviceImg']?>" alt="something">
            <h3>service Category </h3><p>{{$service['serveCat']}}</p>
            <h3>Location:</h3><p>{{$service['location']}}</p>
            <h3>About:</h3><p>{{$service['about']}}</p>
            <h3>policy:</h3><p>{{$service['policy']}}</p>
            <h3>product:</h3><p>{{$service['product']}}</p>
            <h3>price:</h3><p>{{$service['price']}}</p> 
            
        </div>
        <hr>
        
        <div>
             <h1>Review </h1>
             @if($review['id'] ==  $service['id'])
             <p>overall rating: {{$review['overall']}}</p>
             <p>on time: {{$review['onTime']}}</p>
             <p>message: {{$review['message']}}</p>
             @elseif($review['id'] == NULL)
             <p>No reviews</p>
             @endif


        </div>
     
        <hr>
        <h3>Please leave a review</h3>
        <button><a href= "/<?php echo $service['id'] ?>/review">Click Me!!</a></button>
        


   
   
       </x-app-layout>
       
                
    </body>
</html>
       
