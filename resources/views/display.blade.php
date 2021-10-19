<h1>Information display</h1>
   
    @foreach($freelancers as $freelancer)
    
        <!--displaying data-->
        <div style="width: 300px; height: 600px; border:1px solid black">
            <img src="
            "alt="no">
            <h3>tagline:</h3><p>{{$freelancer['tagline']}}</p>

            <h3>Location:</h3><p>{{$freelancer['location']}}</p>
            <h3>type of influencer:</h3><p>{{$freelancer['typeIn']}}</p>
            <h3>Rating:</h3><p>{{$freelancer['rating']}}</p>
            <h3>Location:</h3><p>{{$freelancer['location']}}</p>
            <h3>Skills: </h3><p>{{$freelancer['skills']}}</p>
            <h3>Travel: </h3><p>{{$freelancer['travel']}}</p>
       <a href=`{{$freelancer['name']}}`> <h1>{{$freelancer['name']}}</h1></a>

        </div>

       @endforeach

        
        
        
    
  
