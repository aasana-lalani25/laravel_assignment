<DOCTYPE html>
    <htm>
        <head>
            <title>Gym Membership</title>
            <link rel="stylesheet" href="{{asset("css/style.css")}}">
        </head>
        <body>
            <header>
                <nav>
                    <a href="{{url('/')}}">gym</a>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                <p> 2025 Gym Membership</p>
            </footer>
        </body>
    </htm>
</DOCTYPE>
