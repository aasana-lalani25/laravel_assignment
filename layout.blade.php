<!DOCTYPE html>
<html>
<head>
    <title>basic laravel website </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body> 
    <header>
        <nav>
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/about')}}">about</a>
            <a href="{{url('/contact')}}">contact</a>
            <a href="{{url('/blog')}}">bolg</a>
        </nav>
    </header>
    <main>
    @yield('content')
    </main>
    <footer>
        <p> &copy; 2025 basic laravel website</p>
    </footer>
</body>
</html>