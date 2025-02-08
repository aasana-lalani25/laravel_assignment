<!DOCTYPE html>
<html>
    <head>
        <title> Movie Ticket</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>

    <body>
        <header>
            <nav>
                <a href="{{url('/')}}">Ticket booking</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p > 2025 Movie ticket booking system</p>
        </footer>
    </body>
</html>
