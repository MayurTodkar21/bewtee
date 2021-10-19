<h1>Service Page<h1>

<form action ="service" method="POST">
    @csrf
    <div>
        <label name ="serviceImg">Enter image url</label>
        <input name = "serviceImg" placeholder="enter url">
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