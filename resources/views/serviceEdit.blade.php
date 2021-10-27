<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Profile</title>

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
        Your Profile:
    </x-slot>
    Edit
    
    @foreach($service as $new)
    <form action="/editservice" method="POST" enctype="multipart/form-data">
        @csrf
        <!--Image-->
        <div class= "form-group">
            <label for >Profile Photo</label>
            <input type ="file" name="file"> 
        </div>

        <input type="hidden" name="id" value ={{$new->id}}>
        <div>
            <label for="title">title</label>
            <input type="text " name ="title" value ={{$new ->title}}>
        </div>
        <div>
            <label name ="about" >About service</label>
            <textarea name= "about" >{{$new->about}}</textarea>
        </div>
        <div>
        <label name="price">Price of service</label>
        <input type="number" name="price" value ={{$new -> price}}>
        </div>
        <div>
        <label name = "servCat"> Service Category</label>
        <select name= "servCat">
            <option name="servCat" value="tech">tech</option>
            <option name="serCat" value= "nontech"> Non tech</option>
        </select>

    </div>

    <div>
        <label name= "location">Location</label>
        <select name="location">
            <option name="location" value=" home"> home</option>    
            <option name="location" value="salon"> salon</option>
        </select>
    </div>

    <div>
        <label name="policy">Free Cancellation Policy</label>
        <select name="policy">
            <option name="policy" value="1 month"> 1 month before book</option>
            <option name="policy" value="1 week "> 1 week before book</option>
            <option name="policy" value=" 1 day ">1 day before book</option>

        </select>
    </div>

    <div>
        <label name="product">Product Used:</label>
        <select name ="product">
            <option value="1" name="product"> product1</option>
            <option value="2" name = "product"> product 2</option>
        </select>

    </div>

    

    <div>
        <label for="discount">Discount Offered</label>
        <input type="number" name="discount" min="0" max="70">
        

    </div>
    <button type="submit">update</button>
    </form>
    
    @endforeach
    
    
    </x-app-layout>
                
    </body>
</html>