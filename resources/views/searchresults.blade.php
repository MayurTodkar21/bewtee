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
        <link rel ="stylesheet" href= "../css/app.css">
        
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class=" bg-gray-100 dark:bg-gray-500">
    <div class="relative flex items-top  bg-gray-100 dark:bg-gray-500 sm:items-center py-4 sm:pt-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-start">
                Freelancer
            </h2>
            
    
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
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
    </div>
    
    
    <!--displaying data-->
    <div class ="container">
        <div class="row"> 
            @foreach ($freelancer as $result)
            <div class ="col-sm-6" style="width: 300px; height: 250px; border:1px solid black; margin: 5px">
                <img src="storage/{{$result->profilePhote}}" alt="">
                <h3>{{$result->id}}</h3>
                <h3>{{$result->name}}</h3>
                <h3>tagline: {{$result->tagline}}</h3>
                <h3>Location:{{$result->location}}</h3>
                <h3>Type of influencer: {{$result->typeIn}}</h3>
                <h3>Rating:</h3>
                <h3>Skills:{{$result->skills}}</h3>
                <h3>Travel:{{$result->travel}}</h3>
                <a href='display/<?php echo $result->id ?>' class="bg-primary " style="padding: 5px; color:aliceblue; border-radius:5px" > View </a>
                    
            </div>
            @endforeach
        </div>
    
    
</body>
</html>