<!DOCTYPE html>
<html>
    <head>
        <title> Library System</title>
        <link rel="stylesheet" href="{{("css/style.css")}}">
    </head>

    <body>
        <header>
            <nav>
                <a href="{{url('/')}}">library</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p> 2025 library system</p>
        </footer>
    </body>
</html>
