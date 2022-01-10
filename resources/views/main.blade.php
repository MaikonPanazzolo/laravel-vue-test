<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel test</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/reset.css') }}">
        <link rel="stylesheet" href="{{ mix('css/form.css') }}">
    </head>
    <body class="antialiased bg-gray-100">
        <div id="app">
            <app></app>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
