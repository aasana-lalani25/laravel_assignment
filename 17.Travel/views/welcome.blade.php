<DOCTYPE html>
    <htm>
        <head>
            <title> travel booking</title>
            <link rel="stylesheet" href="{{asset("css/style.css")}}">
        </head>
        <body>
            <header>
                <nav>
                    <a href="{{url('/')}}">travel</a>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                <p> 2025 Travel Pcakage booking</p>
            </footer>
        </body>
    </htm>
</DOCTYPE>
