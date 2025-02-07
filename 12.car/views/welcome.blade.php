<DOCTYPE html>
    <htm>
        <head>
            <title> Car Rental </title>
            <link rel="stylesheet" href="{{asset("css/style.css")}}">
        </head>
        <body>
            <header>
                <nav>
                    <a href="{{url('/')}}">car</a>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                <p> 2025 Car Rental System</p>
            </footer>
        </body>
    </htm>
</DOCTYPE>
