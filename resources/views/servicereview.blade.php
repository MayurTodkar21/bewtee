<h1>Service Review</h1>
<form action ="review" method="POST">
    @csrf
    <div>
        <label for="overall">Overall Rating</label>
        <input type ="number"  name="overall" min="0" max = "5">
    </div>
    <div>
        <label for="onTime">on time service (%):</label>
        <input type ="number"  name="onTime" min="0" max = "100">
    </div>
    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <button type= "submit">Submit</button>

</form>