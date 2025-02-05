<!DOCTYPLE html>
<html>
    <head>
        <title>Product Site</title>
        <link rel ="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <header>
            <nav>
                <a href="{{url('/')}}">product Site</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>  $copy; 2025 Product Information </p>
        </footer>
    </body>
</html>
