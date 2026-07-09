<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Add New User</h2>

    <h4>User Skill</h4>

    <form action="submithardform" method="post">

        @csrf

        <input type="checkbox" name="skill[]" id="php" value="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" id="Node" value="Node">
        <label for="Node">NODE</label>
        <input type="checkbox" name="skill[]" id="Python" value="Python">
        <label for="Python">Python</label>

        <h4>Gender</h4>

        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>

        <h4>City</h4>

        <select name="city">
            <option value="" disabled selected>Select City</option>
            <option value="delhi">Delhi</option>
            <option value="lko">LKO</option>
            <option value="bbk">BBK</option>
        </select>

        <h5>Age</h5>

        <input type="range" name="age" min="18" max="100">
        <label for="age">Age</label>
        <br>
        <button type="submit">Submit</button>

    </form>



</body>

</html>