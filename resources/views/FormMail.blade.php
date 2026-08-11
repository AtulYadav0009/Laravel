<div>
    <h1>Send Mail From Form</h1>
    <form action="./formmail" method="post">
        @csrf
        <input type="text" name="to" id="" placeholder="Enter Mail Address">
        <br><br>
        <input type="text" name="subject" id="" placeholder="Enter Subject">
        <br><br>
        <input type="text" name="message" id="" placeholder="Enter Message">
        <br><br>
        <button>Send Mail</button>
    </form>
</div>