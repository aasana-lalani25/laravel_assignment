<DOCTYPE html>
    <htm>
        <head>
            <title> Elctricity Bill </title>
            <link rel="stylesheet" href="{{asset("css/style.css")}}">
        </head>
        <body>
            <header>
                <nav>
                    <a href="{{url('/')}}">bill</a>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                <p> 2025 Electricity bill</p>
            </footer>
        </body>
    </htm>
</DOCTYPE>
