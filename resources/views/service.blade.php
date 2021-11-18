<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Service Info required</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
        
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         <link rel ="stylesheet" href= "app.css">
    </head>
    <body class="antialiased bodyColor">
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Service Page
        </h2>
    </x-slot>


<form action ="service" method="POST"  enctype="multipart/form-data">
    @csrf
    <!--Image-->
    <div class= "form-group">
        <label for >Profile Photo</label>
        <input type ="file" name="file"> 
    </div>
    <div>
        <label name= "title">Enter service title</label>
        <input name ="title" placeholder ="enter title">

    </div>
    <div>
        <label name ="about" >About service</label>
        <textarea name= "about"></textarea>
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
        <label name="price">Price of service</label>
        <input type="number" name="price">
    </div>

    <div>
        <label for="discount">Discount Offered</label>
        <input type="number" name="discount" min="0" max="70">
        

    </div>
    <button type="submit">Submit</button>

    
</form>



</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                
                </body>
            </html>
            