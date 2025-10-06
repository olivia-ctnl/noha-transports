<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Noha Transports')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    {{-- Permet d'activer le CSS (TailwindCSS) et le JS--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full flex flex-col min-h-screen">
    <x-navigation />

    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />

    {{-- Animations --}}
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s ease-out both;
        }

        .animate-fadeInLeft {
            animation: fadeInLeft 0.8s ease-out both;
        }

        .animate-fadeInRight {
            animation: fadeInRight 0.8s ease-out both;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-600 {
            animation-delay: 0.6s;
        }
    </style>
</body>

</html>