<div>
    <h1>Login</h1>
    <form action="/loginsubmit" method="post">
        @csrf
        <p>UserID</p>
        <input type="text" name="UserID" id="">
        <br>
        <p>Password</p>

        <input type="password" name="Password" id="">
        <br>
        <br>
        <button type="submit">Login Now</button>

    </form>
</div>