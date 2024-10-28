<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="ie=edge" http-equiv="X-UA-Compatible">

        <title>Laravel Job Board</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body
        class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-100 from-10% via-sky-100 via-30% to-emerald-100 to-90% text-slate-700">
        {{ $slot }}
    </body>

</html>
