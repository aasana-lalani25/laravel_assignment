<!DOCTYPE html>
<html>
    <head>
        <title> Job portal </title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <header> 
            <nav> 
                <a href="{{url('/')}}">Home </a>
                <a href="{{url('/jobs')}}">Jobs </a>
                <a href="{{url('/apply')}}">Apply </a>
            </nav>
        </header>
        <main> 
            @yield('content')
        </main>
        <footer> 
            <p> 2025 JOB PORTAL <p>
         </footer>
    </body>
</html>