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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color:white">
        Service Page
        </h2>
    </x-slot>

<section style="padding-left: 100px;">
<form action ="service" method="POST"  enctype="multipart/form-data">
    @csrf
  
     <!--Image-->
    <div class="form-group col-md-6">
        <label for="file">Add an image of your service:</label>
        <input type="file" name = "file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group col-md-6">
        <label for="title">Enter service title:</label>
        <input type="text" class="form-control" id="title" name="title">
        <small id="title" class="form-text text-muted">Name of your service</small>
    </div>
    <div class="form-group mt-2 col-md-6">
        <label for="about">About service:</label>
        <textarea class="form-control" name = "about" rows="3" placeholder=" write few line about your service"></textarea>
    </div>
    <div class="form-group col-md-6">
          <label for="servCat">Service Category: </label>
          <select name="servCat" class="form-control">
            <option name ="servCat" value="tech" selected>Tech</option>
            <option name ="servCat" value="non-tech">Non-tech</option>
          </select>
    </div>
    <div class="form-group col-md-6">
          <label for="location">Location: </label>
          <select name="location" class="form-control">
            <option name ="location" value="home" selected>Home</option>
            <option name ="location" value="salon">Saloon</option>
          </select>
    </div>
    <div class="form-group col-md-6">
          <label for="policy">Free Cancellation Policy: </label>
          <select name="policy" class="form-control">
            <option name="policy" value="1 month"> 1 month before book</option>
            <option name="policy" value="1 week "> 1 week before book</option>
            <option name="policy" value=" 1 day ">1 day before book</option>
          </select>
    </div>

    <div class="form-group col-md-6">
          <label for="product">Product Used:: </label>
          <select name="product" class="form-control">
            <option name ="product" value="1" selected>Product 1</option>
            <option name ="productn" value="2">Product  2</option>
          </select>
    </div>
    <div class="form-group col-md-6">
        <label for="price">price of service:</label>
        <input type="number" class="form-control" id="price" name="price" >
   
    </div>
    
    <div class="form-group col-md-6">
        <label for="discount">Discount Offered:</label>
        <input type="number" class="form-control"name="discount" min="0" max="70">
   
    </div>
   
    <button type="submit" class="btn btn-primary btn-lg" >Submit</button>

    
</form>
</section>



</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                
                </body>
            </html>
            