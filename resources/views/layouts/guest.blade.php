<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .active-users-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .user-card {
            transition: all 400ms ease;
        }

        .user-card:hover {
            transform: scale(1.05);
            z-index: 10;
        }

        .active-users-grid:hover > .user-card:not(:hover) {
            filter: blur(2px);
            transform: scale(0.95);
        }

        .hero-section {
            min-height: calc(100vh - 4rem); /* Subtracting navbar height */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-sm h-16">
        <x-navbarauth />
    </nav>

    <!-- Main content -->
    <main>
        <!-- Hero Section with full height -->
        <div class="w-full hero-section">
            <x-hero />
        </div>

        <!-- Card Section under hero buttons -->
        <div class="container mx-auto px-4 -mt-32 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                <!-- First Card -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-purple-100">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-3 bg-purple-100 rounded-lg">
                            <i class="fas fa-users text-purple-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Community</h3>
                    </div>
                    <p class="text-gray-600">Join our thriving community of professionals and enthusiasts.</p>
                </div>

                <!-- Second Card -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-purple-100">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-3 bg-purple-100 rounded-lg">
                            <i class="fas fa-lightbulb text-purple-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Innovation</h3>
                    </div>
                    <p class="text-gray-600">Discover new ideas and innovative solutions together.</p>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="container mx-auto px-4 py-16">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
