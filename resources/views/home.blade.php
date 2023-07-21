<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        
    </head>
    <body class="antialiased">
        <!-- riprendisamo i dati dell'array associativo sottofoRma di variabili php nel DOM -->
        <h1>{{$title}}</h1>
        <p>{{$Text}}</p>
    </body>
</html>
