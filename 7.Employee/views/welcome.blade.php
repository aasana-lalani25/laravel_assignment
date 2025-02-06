<DOCTYPE html>
    <htm>
        <head>
            <title>Employee Registration</title>
            <link rel="stylesheet" href="{{asset("css/style.css")}}">
        </head>
        <body>
            <header>
                <nav>
                    <a href="{{url('/')}}">employee</a>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                <p> 2025 Employee Registraion</p>
            </footer>
        </body>
    </htm>
</DOCTYPE>
