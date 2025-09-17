<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Noha Transports')</title>
</head>

<body>
    <x-navigation />

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>

</html>