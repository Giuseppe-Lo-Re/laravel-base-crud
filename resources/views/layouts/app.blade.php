<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-base-crud</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('comics-series.index') }}">Comics Series</a>
            </li>
        </ul>
    </header>
    
    @yield('main_content')
</body>
</html> 