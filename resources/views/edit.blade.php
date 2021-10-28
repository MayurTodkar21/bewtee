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
    @foreach( $freelancer as $person )
    <form action="/edit/edit" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="id" value ={{$person->id}}>

                    <!--Image-->
        <div class= "form-group">
            <label>Profile Photo</label>
            <input type ="file" name="file"> 
        </div>
        <div>
            <label for="name">Name:</label>
            <input name="name" type="text" value={{$person->name}}>
        </div>
        <div>
            <label for="tagline">Tagline:</label>
            <input name= "tagline" type="text" value={{$person->tagline}}>
        </div>
                    
        <!--location-->
        <div class= "form-group">
            <label>Location:</label>
            <input type="text" name="location" value={{$person->location}}>
        </div>
        

         <!--Influencer-->
         <div class= "form-group">
                <label >type of influencer: </label>
                <select name="typeIn">
                    <option name ="typeIn" value="freelancer">Freelancers</option>
                    <option name ="typeIn" value="salon staff">Salon Staff</option>
                </select>
            </div>
            <div class= "form-group">
                <label >Category</label>
                <select name ="category">
                    <option name="category" value="1">1</option>
                    <option name="category" value="2">2</option>
                </select>

            </div>

            <div class= "form-group">
                <label name ="skills">Skills</label>
                <select name="skills">
                    <option name ="skills" value="tech">tech</option>
                    <option name="skills" value="non-tech">non tech</option>


                </select>
            </div>
            <div class= "form-group">
                <label>Experience</label>
                <input type="number" name= "experience" value={{$person->experience}}>

            </div>

            <div class= "form-group">
                <label> Travel out of Station</label>
                <select name= "travel" type ="checkbox">
                    <option name ="travel" value="yes">yes</option>
                    <option name= "travel" value="no">no</option>
                </select>
            </div>
            <div class= "form-group">
                <label>Product used</label>
                <select name="productUsed">
                    <option name ="productUsed" value="1">1</option>
                    <option name ="productUsed" value="2">2</option>

                </select>
            </div>

            <!--Bewtee Score-->
            <div class= "form-group ">
                <label>Overall rating</label>
                <select name="rating">
                    <option name = "rating" value="1">1</option>
                    <option name = "rating" value="2">2</option>
                    <option name = "rating" value="3">3</option>
                    <option name = "rating" value="4">4</option>
                    <option name = "rating" value="5">5</option>
                </select>
            </div>
            <div class= "form-group">
                <label>on time service</label>
                <input name ="onTime" type="percentage" value={{$person->onTime}}> 
            </div>
            <div>
                work quality
            </div>
            <div class= "form-group">
                budget
            </div>
            <!--
            <div>
                <label for="photos[]">Upload your portfolio images</label>
                <input type="file" name="photos[]" multiple>
            </div>-->
            <div class= "form-group">
                <label>Profile F&Qs</label>
                <input type="text" name='fnq' value={{$person->fnq}}>
            </div>
            <div>reviews by clients</div>
            <div>Revies by clients</div>
            <button class="btn btn-primary" type ="submit">Submit</button>


    </form>
    
    @endforeach
    
    <a href='/dashboard'>Back</a>
    
    </x-app-layout>
                
                </body>
</html>