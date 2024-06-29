<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <x-favicon />

        @vite('resources/css/app.css')
    </head>

    <body class="bg-black">
        <div class="container grid max-w-full mx-auto">
            <x-logo />

            <div class="bg-white lg:px-24 lg:py-16 lg:text-5xl px-12 py-8 text-center">
                {{ __('Mantenha as suas etiquetas online com uma explicação clara das instruções de lavagem,
                    secagem, como passar, etc.') }}
            </div>
        </div>
    </body>
</html>
