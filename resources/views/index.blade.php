<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Etketa: {{ ('Guarde as suas etiquetas') }}
        </title>

        <x-favicon />

        @vite('resources/css/app.css')
    </head>

    <body class="bg-black">
        <header>
            <div class="container grid max-w-full mx-auto">
                <x-header.logo />
                <x-header.title />
            </div>
        </header>
    </body>
</html>
