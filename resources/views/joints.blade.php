<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://bulma.io/css/bulma-docs.min.css?v=202003140727">
        <title>JoFashion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div id="app">
            <home></home>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
