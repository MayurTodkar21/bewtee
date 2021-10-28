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
    
    {{$user->name}}
    <form action ="/message" method="POST">
    @csrf
        <div>
            <label for="name" hidden>freelancer's name</label>
            <input name = "name"  value={{$freelancer->name}} >

        </div>

        <div>
            <label for="freelancer_id" hidden>freelancer's id</label>
            <input name = "freelancer_id"  value={{$freelancer->id}} >

        </div>
        <div>
            <label for="freelancer_id" hidden>freelancer's id</label>
            <input name = "client_id"  value={{$user->id}} >

        </div>
       

        <label for="message">Send {{$freelancer->name}} a Project Offer:</label>
        <br>
        <textarea name="message"  cols="30" rows="10" placeholder="Type message"></textarea>
        <br>
        <small>Click the button to send the offer to this freelancer</small>
        <br>
        <button type="submit" class="btn btn-danger"> Submit </button>
    </form>
    </x-app-layout>
    

    
</body>
</html>