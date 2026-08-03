<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        li {
            background-color: red;
            margin: 10px;
            padding: 10px;
            list-style: none;
            gap: 20px;
        }

        li a {
            text-decoration: none;
            margin: 20px;
        }

        .footer {
           
            padding: 10px;
            background-color: green;
            margin-bottom: 0px;

        }
    </style>
</head>

<body>
    <header>
        <li>
            <ul>
                <a href="./home1">HOME</a>
                <a href="./about1">ABOUT</a>
                <a href="./login1">LOGIN</a>
                <a href="./home1">CONTACT US</a>
            </ul>
        </li>
    </header>
   {{$main}}
    <footer>
        <p class="footer">This Is Footer Text </p>
    </footer>
</body>

</html>