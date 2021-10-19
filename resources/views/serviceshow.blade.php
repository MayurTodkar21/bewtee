<h1>Services display</h1>
   
    @foreach($services as $service)
    <div style="width: 300px; height: 650px; border:1px solid black; margin: 10px">
        <h3>title</h3><p>{{$service['title']}}</p>
        <h3>service Category </h3><p>{{$service['serveCat']}}</p>
        <h3>Location:</h3><p>{{$service['location']}}</p>
        <h3>About:</h3><p>{{$service['about']}}</p>
        <h3>policy:</h3><p>{{$service['policy']}}</p>
        <h3>product:</h3><p>{{$service['product']}}</p>
        <h3>price:</h3><p>{{$service['price']}}</p>  
        <h3>Please leave a review</h3>
        <button><a href= "review">Click Me!!</a></button>

    </div>
  
       
        
        
        
    
    @endforeach
    