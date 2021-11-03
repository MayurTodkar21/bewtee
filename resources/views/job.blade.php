
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>post job</title>

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
        post job

        </h>
    </x-slot>
    Job Portal
    
<form action="/job" method="POST">
    @csrf 
    Job Description
    <div>
        <label hidden for="username">user name</label>
        <input  type="hidden" name ="username" value ={{$user->name}}>
    </div>
    <div>
        
        <input type="hidden" name ="userid" value ={{$user->id}} >
    </div>
    <div>
        <label for="title">Job Title</label>
        
        <input type="text" name ="title">
    </div>
    <div>
        <label for="level">Select Project level</label>
        <select name="level" id="">
            <option name ="level" value ="Basic">Basic level</option>
            <option name ="level" value ="Expensive">Expensive level</option>
            <option name ="level" value ="Middle">Middle Level</option>
        </select>

    </div>

    <div>
        <label for="duration">Job duration</label>
        <select name="duration"" id="">
            <option name ="duration" value ="1 to 3 m">1 to 3 months</option>
            <option name ="duration" value ="1 to 5 d">1 to 5 days</option>
            <option name ="duration" value ="3 to 6 m">3 to 6 months</option>
            <option name ="duration" value ="less than 1 m">Less than a month</option>
            <option name ="duration" value ="less than 1 w">Less than a week</option>
            <option name ="duration" value ="1 d">one day</option>
            <option name ="duration" value ="more than 1 w">More than one week</option>
        </select>

    </div>

    <div>
        <label for="type">Freelancer Type</label>
        <select name="type" id="">
            <option name ="type" value ="Independent">Independent Freelancer</option>
            <option name ="type" value ="New Rising">New Rising Talent</option>
            <option name ="type" value ="Salon">Salon Freelancers</option>
        </select>

    </div>

    <div>
        <label for="EnglishLevel">Select English level</label>
        <select name="EnglishLevel" id="">
            <option name ="EnglishLevel" value ="Basic">Basic level</option>
            <option name ="EnglishLevel" value ="Fluent">Fluent level</option>
            <option name ="EnglishLevel" value ="Pro">Professional Level</option>
        </select>

    </div>
    <div>
        <label for="Location">Select Location</label>
        <select name="Location" id="">
            <option name ="Location" value ="Onsite">Onsite</option>
            <option name ="Location" value ="Offsite">Offsite</option>
            <option name ="Location" value ="remote">remote</option>
        </select>

    </div>
    <h1>Prices</h1>
    
    <div>
        <label for="jobType">Select Job Tyoe</label>
        <select name="jobType" id="">
            <option name ="jobType" value ="Fixed">Fixed</option>
            <option name ="jobType" value ="Offsite">Hourly</option>
            
        </select>

    </div>
    <div>
        <label for="minPrice">Minimum price(Rs.)</label>
       <input type="text" name="minPrice">

    </div>
    <div>
        <label for="maxPrice">Maximum price(Rs.)</label>
       <input type="text" name="maxPrice">

    </div>
    <div>
        <label for="detail" >Give details of Jobs</label>
        <textarea name="detail" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="Submit">Submit</button>
        
</form>
</x-app-layout>
                
                </body>
            </html>