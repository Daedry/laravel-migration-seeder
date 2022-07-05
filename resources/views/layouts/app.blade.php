<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body>
 
        <header>
            <nav>
                <ul class="p-4">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="px-4"><a href="{{route('travels')}}">Viaggi</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; 2022</p>
        </footer>

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
