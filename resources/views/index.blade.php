<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite('resources/css/app.css')
    </head>

    <body class="bg-black">
        <div class="container grid max-w-full mx-auto">
            <div class="justify-self-center">
                <img alt="Logo" class="scale-75" src="{{ Vite::asset('resources/images/logo.png') }}">
            </div>

            <div class="bg-white lg:px-24 lg:py-16 lg:text-5xl px-12 py-8 text-center">
                Mantenha as etiquetas das suas roupas online com uma explicação clara das instruções de lavagem, secagem, como passar, etc.
            </div>
        </div>
    </body>
</html>
