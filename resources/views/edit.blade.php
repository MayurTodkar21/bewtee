<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    @foreach( $freelancer as $person )
    <form action="">
        <div>
            <label for="name">Name:</label>
            <input name="name" type="text" value={{$person->name}}>
        </div>
        <div>
            <label for="tagline">Tagline:</label>
            <input name= "tagline" type="text" value={{$person->tagline}}>
        </div>

    </form>
    
    @endforeach
    {{$freelancer}}
    <a href='/dashboard'>Back</a>
    
</body>
</html>