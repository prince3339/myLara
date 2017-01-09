<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link href="{{elixir('css/app.css')}}" rel="stylesheet">
    @yield('header')
</head>
<body>
    <div id="app">

        @yield('content')
        
        @yield('footer')
    </div>
</body>
</html>
