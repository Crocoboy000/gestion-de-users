
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS.ON - Professional User Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Navbar Animation */
        .nav-scroll {
            @apply bg-white/90 backdrop-blur-md shadow-lg;
            animation: slideDown 0.5s ease-in-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Link Hover Effects */
        .nav-link {
            position: relative;
            @apply text-gray-700 hover:text-blue-600 transition-colors duration-300;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            @apply bg-blue-600;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Active Link */
        .nav-link.active {
            @apply text-blue-600;
        }

        .nav-link.active::after {
            width: 100%;
        }

        /* Dropdown Animation */
        .dropdown-content {
            transform-origin: top;
            animation: dropdownSlide 0.3s ease-out;
        }

        @keyframes dropdownSlide {
            from {
                opacity: 0;
                transform: translateY(-10px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Button Hover Effect */
        .nav-button {
            @apply relative overflow-hidden transition-all duration-300;
        }

        .nav-button::before {
            content: '';
            @apply absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20 opacity-0 transition-opacity duration-300;
        }

        .nav-button:hover::before {
            @apply opacity-100;
        }

        /* Logo Animation */
        .logo-animate {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div x-data="{ scrolled: false }"
         x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 20 })"
         class="min-h-screen bg-gray-100">

        <nav :class="{ 'nav-scroll': scrolled }"
             class="fixed w-full top-0 z-50 transition-all duration-300">
            <x-navbarauth />
        </nav>

        <main class="pt-16">
            {{ $slot }}
        </main>
    </div>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
