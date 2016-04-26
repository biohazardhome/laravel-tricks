<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">

        <style>
            body {
                font-family: 'Lato';
            }
        </style>
    </head>
    <body>
        <header>
            
        </header>

        <main class="container">
            <div class="row">
                @yield('content')
            </div>
        </main>

        <footer>
            
        </footer>
        
        <script src="/js/jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>