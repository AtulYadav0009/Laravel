<form action="" method="POST">
    @csrf

    <h1>Registration Form</h1>

    <input type="text" name="name" placeholder="Enter Name">
    <br><br>

    <input type="email" name="email" placeholder="Enter Email">
    <br><br>

    <input type="tel" name="phone" placeholder="Enter Phone">
    <br><br>

    <button type="submit">Submit</button>
</form>