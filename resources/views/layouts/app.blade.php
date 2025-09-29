<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Noha Transports')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    {{-- Pour charger le CSS des fichiers style.css et responsive.css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navigation />

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>

</html>