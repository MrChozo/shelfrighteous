<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <title>Shelf-Righteous - @yield('title')</title>

        <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Expletus+Sans:400,500,500i,700" rel="stylesheet">
        <!-- Styles -->
       <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>

    <body>
        <div class="site">
            @include('elements.header')

            {{--@include('elements.navigation')--}} {{-- aside --}}

            @yield('content'){{-- h1/main --}}

            @include('elements.footer')
        </div>
    </body>
</html>
