
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>freelancer</title>

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
        {{$freelancer->name}}
        </h2>
    
        
    </x-slot>
    
    
        
<p>{{$freelancer->id}}</p>
<p>{{$freelancer->location}}</p>
<p>{{$freelancer->tagline}}</p>
<p>{{$freelancer->typeIn}}</p>

<p>{{$freelancer->experience}}</p>
<p>{{$freelancer->category}}</p>
<p>{{$freelancer->skills}}</p>
<p>{{$freelancer->travel}}</p>
<p>{{$freelancer->productUsed}}</p>
<p>{{$freelancer->prodilePhote}}</p>


   <h1 style="border : 2px solid black; padding: 10px ;width: 80px"><a href='/message'>Contact</a><h1>
   
                
  
       

    </x-app-layout>
                
    </body>
</html>