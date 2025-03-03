<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admins Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    @keyframes text-shimmer {
    0% { background-position: -200% center; }
    100% { background-position: 200% center; }
}

.animate-text-shimmer {
    background: linear-gradient(
        90deg,
        theme('colors.purple.600') 0%,
        theme('colors.blue.500') 25%,
        theme('colors.purple.600') 50%,
        theme('colors.blue.500') 75%,
        theme('colors.purple.600') 100%
    );
    background-size: 200% auto;
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    animation: text-shimmer 8s linear infinite;
}
.cards .card-pro {
  cursor: pointer;
  transition: 400ms;
}


 .cards .card-pro:hover {
  transform: scale(1.1, 1.1);
}

.cards:hover > .card-pro:not(:hover) {
  filter: blur(0.5px);
  transform: scale(0.9, 0.9);
}

</style>
</head>
<body class="bg-white w-full min-h-screen relative overflow-hidden">
    <x-navbarauth/>
    <div class="hero-gradient min-h-screen py-12">
        <div class="container mx-auto px-4 relative z-10">
            <div class="container mx-auto px-4 py-10 my-10">

                <div class="cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-12 z-10">
                    @foreach($admins as $admin)
                    <div class="card-pro bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                        <div class="p-6">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ $admin->avatar ?? 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . $admin->name }}"
                                         alt="{{ $admin->name }}"
                                         class="h-12 w-12 rounded-full">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        {{ $admin->name }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                        {{ $admin->email }}
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4 flex gap-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                    {{ $admin->status === 'online' ? 'bg-green-100 text-green-800' :
                                       ($admin->status === 'offline' ? 'bg-gray-100 text-gray-800' :
                                       'bg-yellow-100 text-yellow-800') }}">
                                    <i class="fas fa-circle text-xs mr-1"></i>
                                    {{ ucfirst($admin->status) }}
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    <i class="fas fa-user text-xs mr-1"></i>
                                    {{ ucfirst($admin->role) }}
                                </span>
                            </div>

                            <!-- In your admins grid section -->
                            <div class="mt-4 flex gap-2">
                                <button onclick="showProfile({{ $admin->id }})"
                                        class="flex-1 inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 rounded-md">
                                    View Profile
                                </button>
                                @if(auth()->user()->role === 'admin')
                                    <button onclick="editadmin({{ $admin->id }})"
                                            class="inline-flex items-center p-2 text-blue-600 hover:text-blue-700 bg-blue-50 rounded-md">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="deleteadmin({{ $admin->id }})"
                                            class="inline-flex items-center p-2 text-red-600 hover:text-red-700 bg-red-50 rounded-md">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                @else
                                    <button onclick="addFriend({{ $admin->id }})"
                                            class="inline-flex items-center p-2 text-green-600 hover:text-green-700 bg-green-50 rounded-md">
                                        <i class="fas fa-user-plus"></i>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Profile Modal -->
                <!-- Update the profile modal section -->
                <div id="profileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
                    <div class="relative w-full max-w-4xl mx-4">
                        <div id="profileContent" class="relative w-full bg-white rounded-xl shadow-2xl overflow-hidden">
                            <!-- Content will be loaded dynamically -->
                        </div>
                    </div>
        </div>
    </div>
        </div>

        <!-- Update the showProfile function in your script section -->
        <script>
        function showProfile(adminId) {
            fetch(`/admins/${adminId}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(admin => {
                document.getElementById('profileContent').innerHTML = `
                    <div class="relative overflow-hidden">
                        <!-- Animated gradient background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-purple-100 animate-gradient"></div>

                        <!-- Decorative elements -->
                        <div class="absolute -bottom-16 -left-16 w-64 h-64 rounded-full bg-purple-200 opacity-30 animate-float-slow"></div>
                        <div class="absolute -top-20 -right-20 w-80 h-80 rounded-full bg-blue-200 opacity-30 animate-float-slower"></div>

                        <!-- Content -->
                        <div class="relative z-10 p-8">
                            <div class="flex justify-between items-start mb-6">
                                <div class="flex items-center space-x-6 animate-fade-in">
                                    <img src="${admin.avatar || `https://api.dicebear.com/7.x/avataaars/svg?seed=${admin.name}`}"
                                         class="w-24 h-24 rounded-full ring-4 ring-white shadow-lg"
                                         alt="${admin.name}">
                                    <div>
                                        <h2 class="text-3xl font-bold text-gray-900">${admin.name}</h2>
                                        <div class="flex items-center mt-2 space-x-3">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                                ${admin.status === 'active' ? 'bg-green-100 text-green-800' :
                                                (admin.status === 'inactive' ? 'bg-gray-100 text-gray-800' :
                                                'bg-yellow-100 text-yellow-800')}">
                                                <i class="fas fa-circle text-xs mr-2"></i>
                                                ${admin.status.charAt(0).toUpperCase() + admin.status.slice(1)}
                                            </span>
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                                <i class="fas fa-user text-xs mr-2"></i>
                                                ${admin.role.charAt(0).toUpperCase() + admin.role.slice(1)}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <button onclick="closeProfile()" class="text-gray-400 hover:text-gray-500 transition-colors">
                                    <i class="fas fa-times text-xl"></i>
                                </button>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 animate-fade-in-delayed">
                                <!-- Contact Information -->
                                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Contact Information</h3>
                                    <div class="space-y-4">
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-envelope w-5 mr-3 text-purple-500"></i>
                                            <span>${admin.email}</span>
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-phone w-5 mr-3 text-purple-500"></i>
                                            <span>${admin.phone || 'Not provided'}</span>
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-map-marker-alt w-5 mr-3 text-purple-500"></i>
                                            <span>${admin.location || 'Not provided'}</span>
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-globe w-5 mr-3 text-purple-500"></i>
                                            <span>${admin.website || 'Not provided'}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Professional Info -->
                                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Professional Info</h3>
                                    <div class="space-y-4">
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-briefcase w-5 mr-3 text-purple-500"></i>
                                            <span>${admin.occupation || 'Not provided'}</span>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-900 mb-2">About</h4>
                                            <p class="text-gray-600">${admin.bio || 'No bio available.'}</p>
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-calendar w-5 mr-3 text-purple-500"></i>
                                            <span>Joined ${admin.joinDate || 'Not available'}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 flex justify-end space-x-4 animate-fade-in-delayed">
                                <button onclick="editadmin(${admin.id})"
                                        class="px-6 py-2 bg-purple-600 text-white rounded-lg font-medium shadow-lg hover:bg-purple-700 transition-colors">
                                    Edit Profile
                                </button>
                                <button onclick="closeProfile()"
                                        class="px-6 py-2 bg-white text-purple-600 border border-purple-600 rounded-lg font-medium hover:bg-purple-50 transition-colors">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;

                document.getElementById('profileModal').classList.remove('hidden');
                document.getElementById('profileModal').classList.add('flex');
            });
        }

        function closeProfile() {
            document.getElementById('profileModal').classList.add('hidden');
            document.getElementById('profileModal').classList.remove('flex');
        }
        </script>
    </div>
    </div>
    </div>
        <!-- ... rest of your layout content ... -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
