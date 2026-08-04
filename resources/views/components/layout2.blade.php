<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h1>This is Header</h1>
    </header>

    @section('main')
    @show

    <footer>
        <h1>This is Footer</h1>
    </footer>
</body>

</html>