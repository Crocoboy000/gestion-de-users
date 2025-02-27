<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <style>
            .login-container {
                background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #bae6fd 100%);
            }
            .glass-card {
                background: rgba(255, 255, 255, 0.9);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
            }
            .input-icon {
                @apply w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2;
            }
            .input-field:focus ~ .input-icon {
                @apply text-blue-600;
            }
            .logo-gradient {
background-image: linear-gradient(45deg, #3b82f6, #1e40af, #000000);
-webkit-background-clip: text;
background-clip: text;
color: transparent;
}
        </style>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

            <body class="font-sans antialiased min-h-screen login-container">
                <div class="min-h-screen flex items-center justify-center p-4">
                    <div class="glass-card w-full max-w-md rounded-2xl shadow-2xl p-8 transition-all hover:shadow-3xl">
                        <!-- Header -->
                        <div class="text-center mb-8">
                            <span class="text-2xl font-bold logo-gradient">USERS.ON</span>
                            <p class="text-gray-600 font-medium">Secure Access Portal</p>
                        </div>
                            {{ $slot }}
                        </div>
                    </div>
            </body>
</html>
