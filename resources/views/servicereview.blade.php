<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Services</title>

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
    <body class="antialiased bodyColor " style="background-color:#e8e8e4;">
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col">
                <section class="review-box">
                    <h1 class="review-heading">Service Review</h1>

                    <form action ="/{id}/review" method="POST">
                        @csrf
                        <div>
                            <label for="id" hidden>Service id</label>
                            <input name = 'id' type ="hidden" value= {{$service->id}}>
                        </div>
                        <div>
                            <label for="overall">Overall Rating</label>

                            <fieldset class="starability-basic">

                                <input type="radio" id="no-rate" class="input-no-rate" name="overall" value="0" checked aria-label="No rating." />
                                <input type="radio" id="first-rate1" name="overall" value="1" />
                                <label for="first-rate1" title="Terrible">1 star</label>
                                <input type="radio" id="first-rate2" name="overall" value="2" />
                                <label for="first-rate2" title="Not good">2 stars</label>
                                <input type="radio" id="first-rate3" name="overall" value="3" />
                                <label for="first-rate3" title="Average">3 stars</label>
                                <input type="radio" id="first-rate4" name="overall" value="4" />
                                <label for="first-rate4" title="Very good">4 stars</label>
                                <input type="radio" id="first-rate5" name="overall" value="5" />
                                <label for="first-rate5" title="Amazing">5 stars</label>
                            </fieldset>
                        </div>
                        <div>
                            <label for="onTime">on time service (%):</label>
                            <input type ="number"  name="onTime" min="0" max = "100">
                        </div>
                        <div>
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-danger btn-lg btn-block" type= "submit">Submit</button>

                    </form>
                    </section>


            </div>
            <div class="col-4">

            </div>

        </div>
    </div>

</body>
</html>