<DOCTYPE html>
    <html>
        <head>
            <title> Hotel Booking</title>
            <link rel="stylesheet" href="{{asset("css/style.css")}}">
        </head>

        <body>
            <header>
                <nav>
                    <a href="{{url("/")}}">hotel</a>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>

            <footer>
                <p> 2025 hotel booking</p>
            </footer>
        </body>
    </html>
</DOCTYPE>
