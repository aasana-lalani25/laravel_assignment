<!DOCTYPE html>
<html>
    <head>
        <title> Customer registration </title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <header>
            <nav>
                <a href="{{url('/')}}">customer</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p> 2025 customer Registration </p>
        </footer>
    </body>
</html>
