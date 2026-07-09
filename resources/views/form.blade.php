<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .form-box {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <!-- @if($errors->any)
    @foreach($errors->all() as $error)
    <div>
        {{$error}}
    </div>
    @endforeach
    @endif -->
    <div class="form-box">
        <h2>Login Form</h2>

        <form action="/submitform" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter Name">
            @error('name')
            <p>{{$message}}</p>
            @enderror
            <input type="email" name="email" placeholder="Enter Email">
            @error('email')
            <p>{{$message}}</p>
            @enderror
            <input type="password" name="password" placeholder="Enter Password">
            @error('password')
            <p>{{$message}}</p>
            @enderror

            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>