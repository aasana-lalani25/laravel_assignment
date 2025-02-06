<!DOCTYPE html>
<html>
<head>
    <title> Student registration </title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <header>
        <nav>
            <a href="{{url('/')}}">register</a>
        </nav>
    </header>
    <main>
    @yield('content')
    </main>
    <footer>
        <p> &copy; 2025 Student imformation </p>
    </footer>
</body>
</html>
