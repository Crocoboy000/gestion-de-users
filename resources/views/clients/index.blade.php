<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clients Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    /* Base Layer */
    @layer base {
        :root {
            --background: 0 0% 100%;
            --foreground: 222.2 84% 4.9%;
            --card: 0 0% 100%;
            --card-foreground: 222.2 84% 4.9%;
            --primary: 262.1 83.3% 57.8%;
            --ring: 262.1 83.3% 57.8%;
            --radius: 0.5rem;
        }

        * { @apply border-border; }
        body { @apply bg-background text-foreground; }
    }

    /* Animations */
    @keyframes gradient {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }

    /* Utility Classes */
    .animate-gradient {
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }

    .animate-fade-in {
        animation: fade-in 0.8s ease-out forwards;
    }

    .animate-fade-in-delayed {
        animation: fade-in 0.8s ease-out 0.2s forwards;
        opacity: 0;
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    /* Card Animations */
    .cards .card-pro {
        cursor: pointer;
        transition: 400ms;
    }

    .cards .card-pro:hover {
        transform: scale(1.1, 1.1);
    }

    .cards:hover > .card-pro:not(:hover) {
        filter: blur(1.1px);
        transform: scale(0.9, 0.9);
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }
    @keyframes pulse {
        50% { opacity: .5; }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .loading-cards {
        opacity: 0;
        transition: opacity 0.3s ease-out;
    }

    .cards {
        opacity: 0;
        transition: opacity 0.3s ease-out;
    }

    .cards.loaded {
        opacity: 1;
    }
    .notifications-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 320px;
        z-index: 1000;
        display: none;
    }

    .success {
        padding: 1rem;
        border-radius: 0.375rem;
        background-color: rgb(240 253 244);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .success-prompt-heading {
        font-weight: bold;
        color: rgb(22 101 52);
    }

    .success-prompt-prompt {
        margin-top: 0.5rem;
        color: rgb(21 128 61);
    }

    .success-button-container {
        display: flex;
        margin-top: 0.875rem;
        gap: 0.75rem;
    }

    .success-button-main, .success-button-secondary {
        padding: 0.375rem 0.75rem;
        font-size: 0.875rem;
        border-radius: 0.375rem;
        border: none;
        transition: all 0.2s;
    }

    .success-button-main {
        background-color: #ECFDF5;
        color: rgb(22 101 52);
        font-weight: bold;
    }

    .success-button-main:hover {
        background-color: #D1FAE5;
    }

    .success-button-secondary {
        background-color: #ECFDF5;
        color: #065F46;
    }

    .success-button-secondary:hover {
        background-color: #D1FAE5;
    }
</style>
</head>
<body class="">
    <x-navbarauth/>
    <div class="bg-white w-full min-h-screen p-4 relative overflow-hidden">

        <div class="absolute inset-0 bg-gradient-to-br py-10 from-blue-50 to-purple-100 animate-gradient">
            <!-- Animated blobs -->
            <div class="absolute -bottom-16 -left-16 w-80 h-80 rounded-full bg-purple-200 opacity-30 animate-float-slow"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="container mx-auto px-4 mt-10 relative z-10">
                <div class="bg-transparent rounded-xl p-6 shadow-lg ">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <!-- Search Bar -->
                        <div class="relative">
                            <input type="text"
                                   placeholder="Search clients..."
                                   class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>

                        <!-- Role Filter -->
                        <div class="relative">
                            <select class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all appearance-none">
                                <option value="">Filter by Role</option>
                                <option value="admin">Admin</option>
                                <option value="client">Client</option>
                                <option value="user">User</option>
                            </select>
                            <i class="fas fa-user-tag absolute left-3 top-3 text-gray-400"></i>
                            <i class="fas fa-chevron-down absolute right-3 top-3 text-gray-400 pointer-events-none"></i>
                        </div>

                        <!-- Status Filter -->
                        <div class="relative">
                            <select class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all appearance-none">
                                <option value="">Filter by Status</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                            <i class="fas fa-circle absolute left-3 top-3 text-gray-400"></i>
                            <i class="fas fa-chevron-down absolute right-3 top-3 text-gray-400 pointer-events-none"></i>
                        </div>

                        <!-- Sort By -->
                        <div class="relative">
                            <select class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all appearance-none">
                                <option value="">Sort by</option>
                                <option value="name">Name</option>
                                <option value="date">Join Date</option>
                                <option value="status">Status</option>
                            </select>
                            <i class="fas fa-sort absolute left-3 top-3 text-gray-400"></i>
                            <i class="fas fa-chevron-down absolute right-3 top-3 text-gray-400 pointer-events-none"></i>
                        </div>
                    </div>

                    <!-- Active Filters -->
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                            {{-- <button class="ml-1 text-purple-600 hover:text-purple-800">
                                <i class="fas fa-times"></i>
                            </button> --}}
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            {{-- <button class="ml-1 text-blue-600 hover:text-blue-800">
                                <i class="fas fa-times"></i>
                            </button> --}}
                        </span>
                    </div>
                </div>
                <div id="loadingCards" class="mt-10 animation-fade-in grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-12">
                    @for ($i = 0; $i < count($clients); $i++)
                    <div class="card-pro animation-fade-in-delayed bg-white rounded-lg shadow-sm p-6 duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-12 w-12 rounded-full bg-slate-300 animate-pulse"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="h-4 w-3/4 bg-slate-300 rounded animate-pulse mb-2"></div>
                                <div class="h-3 w-1/2 bg-slate-300 rounded animate-pulse"></div>
                            </div>
                        </div>

                        <div class="mt-4 flex gap-2">
                            <div class="h-5 w-20 bg-slate-300 rounded-full animate-pulse"></div>
                            <div class="h-5 w-20 bg-slate-300 rounded-full animate-pulse"></div>
                        </div>

                        <div class="mt-4 flex gap-2">
                            <div class="flex-1 h-9 bg-slate-300 rounded-md animate-pulse"></div>
                            @auth
                            @if (Auth::user()->role === 'admin')
                            <div class="h-9 w-9 bg-slate-300 rounded-md animate-pulse"></div>
                            @endif
                            @endauth
                            <div class="h-9 w-9 bg-slate-300 rounded-md animate-pulse"></div>
                        </div>
                    </div>
                    @endfor
                </div>
                <!-- Existing clients grid -->
                <div id="clientCards" class="cards mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-12 animate-fade-in" style="display: none;">
                    @foreach($clients as $client)
                    <div class="card-pro animate-fade-in-delayed bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                        <div class="p-6">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ $client->avatar ?? 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . $client->name }}"
                                         alt="{{ $client->name }}"
                                         class="h-12 w-12 rounded-full">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        {{ $client->name }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                        {{ $client->email }}
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4 flex gap-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                    {{ $client->status === 'online' ? 'bg-green-100 text-green-800' :
                                       ($client->status === 'offline' ? 'bg-gray-100 text-gray-800' :
                                       'bg-yellow-100 text-yellow-800') }}">
                                    <i class="fas fa-circle text-xs mr-1"></i>
                                    {{ ucfirst($client->status) }}
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    <i class="fas fa-user text-xs mr-1"></i>
                                    {{ ucfirst($client->role) }}
                                </span>
                            </div>

                            <!-- In your clients grid section -->
                            <div class="mt-4 flex gap-2">
                                <button onclick="showProfile({{ $client->id }})"
                                        class="flex-1 inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 rounded-md">
                                    View Profile
                                </button>
                                @if(auth()->user()->role === 'admin')
                                    <button onclick="editClient({{ $client->id }})"
                                            class="inline-flex items-center p-2 text-blue-600 hover:text-blue-700 bg-blue-50 rounded-md">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="deleteClient({{ $client->id }}"
                                            class="inline-flex items-center p-2 text-red-600 hover:text-red-700 bg-red-50 rounded-md">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                @else
                                <button onclick="addFriend({{ $client->id }})"
                                    id="addFriendBtn_{{ $client->id }}"
                                    class="inline-flex items-center p-2 text-green-600 hover:text-green-700 bg-green-50 rounded-md">
                                <i class="fas fa-user-plus"></i>
                            </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="profileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
                    <div class="relative w-full max-w-4xl mx-4">
                        <div id="profileContent" class="relative w-full bg-white rounded-xl shadow-2xl overflow-hidden">
                            <!-- Content will be loaded dynamically -->
                        </div>
                    </div>
        </div>
        <!-- First, update the notification container position -->
        <div class="notifications-container" id="notificationContainer" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
            <div class="success">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="succes-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="success-prompt-wrap">
                        <p class="success-prompt-heading">Invitation Sent</p>
                        <div class="success-prompt-prompt">
                            <p>Your friendship invitation has been sent successfully. We'll notify you when they respond to your request.</p>
                        </div>
                        <div class="success-button-container">
                            <button type="button" class="success-button-main" onclick="cancelInvitation()">Regret</button>
                            <button type="button" class="success-button-secondary" onclick="dismissNotification()">Dismiss</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
        </div>
    </div>

    <script>
        function showProfile(clientId) {
            fetch(`/clients/${clientId}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(client => {
                const profileContent = document.getElementById('profileContent');
                const profileModal = document.getElementById('profileModal');

                if (profileContent && profileModal) {
                    // Sanitize client data
                    const sanitizedClient = {
                        name: sanitizeHTML(client.name),
                        email: sanitizeHTML(client.email),
                        status: sanitizeHTML(client.status),
                        role: sanitizeHTML(client.role),
                        phone: sanitizeHTML(client.phone || 'Not provided'),
                        location: sanitizeHTML(client.location || 'Not provided'),
                        website: sanitizeHTML(client.website || 'Not provided'),
                        occupation: sanitizeHTML(client.occupation || 'Not provided'),
                        bio: sanitizeHTML(client.bio || 'No bio available.'),
                        joinDate: sanitizeHTML(client.joinDate || 'Not available'),
                        avatar: client.avatar || `https://api.dicebear.com/7.x/avataaars/svg?seed=${encodeURIComponent(client.name)}`
                    };

                    profileContent.innerHTML = `
                        <div class="relative overflow-hidden">
                            <!-- Your existing profile modal content using sanitizedClient -->
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-purple-100 animate-gradient"></div>
                            <div class="absolute -bottom-16 -left-16 w-64 h-64 rounded-full bg-purple-200 opacity-30 animate-float-slow"></div>
                        <div class="absolute -top-20 -right-20 w-80 h-80 rounded-full bg-blue-200 opacity-30 animate-float-slower"></div>

                        <!-- Content -->
                        <div class="relative z-10 p-8">
                            <div class="flex justify-between items-start mb-6">
                                <div class="flex items-center space-x-6 animate-fade-in">
                                    <img src="${client.avatar || `https://api.dicebear.com/7.x/avataaars/svg?seed=${client.name}`}"
                                         class="w-24 h-24 rounded-full ring-4 ring-white shadow-lg"
                                         alt="${client.name}">
                                    <div>
                                        <h2 class="text-3xl font-bold text-gray-900">${client.name}</h2>
                                        <div class="flex items-center mt-2 space-x-3">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                                ${client.status === 'active' ? 'bg-green-100 text-green-800' :
                                                (client.status === 'inactive' ? 'bg-gray-100 text-gray-800' :
                                                'bg-yellow-100 text-yellow-800')}">
                                                <i class="fas fa-circle text-xs mr-2"></i>
                                                ${client.status.charAt(0).toUpperCase() + client.status.slice(1)}
                                            </span>
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                                <i class="fas fa-user text-xs mr-2"></i>
                                                ${client.role.charAt(0).toUpperCase() + client.role.slice(1)}
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
                                            <span>${client.email}</span>
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-phone w-5 mr-3 text-purple-500"></i>
                                            <span>${client.phone || 'Not provided'}</span>
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-map-marker-alt w-5 mr-3 text-purple-500"></i>
                                            <span>${client.location || 'Not provided'}</span>
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-globe w-5 mr-3 text-purple-500"></i>
                                            <span>${client.website || 'Not provided'}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Professional Info -->
                                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Professional Info</h3>
                                    <div class="space-y-4">
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-briefcase w-5 mr-3 text-purple-500"></i>
                                            <span>${client.occupation || 'Not provided'}</span>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-900 mb-2">About</h4>
                                            <p class="text-gray-600">${client.bio || 'No bio available.'}</p>
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-calendar w-5 mr-3 text-purple-500"></i>
                                            <span>Joined ${client.joinDate || 'Not available'}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 flex justify-end space-x-4 animate-fade-in-delayed">
                                @auth
                                @if (Auth::user()->role === 'admin')
                                <a href="">
                                <button onclick="editClient(${client.id})"
                                        class="px-6 py-2 bg-purple-600 text-white rounded-lg font-medium shadow-lg hover:bg-purple-700 transition-colors">
                                    Edit Profile
                                </button>
                                </a>
                                @endif
                                @endauth
                                <button onclick="closeProfile()"
                                        class="px-6 py-2 bg-white text-purple-600 border border-purple-600 rounded-lg font-medium hover:bg-purple-50 transition-colors">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>

                        </div>
                    `;

                    profileModal.classList.remove('hidden');
                    profileModal.classList.add('flex');
                }
            })
            .catch(error => {
                console.error('Error fetching profile:', error);
                // Optional: Show error message to user
                alert('Failed to load profile. Please try again later.');
            });
        }

        function closeProfile() {
            const profileModal = document.getElementById('profileModal');
            if (profileModal) {
                profileModal.classList.add('hidden');
                profileModal.classList.remove('flex');
            }
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            const profileModal = document.getElementById('profileModal');
            if (profileModal && event.target === profileModal) {
                closeProfile();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Loading animation
            setTimeout(() => {
                document.getElementById('loadingCards').style.display = 'none';
                document.getElementById('clientCards').style.display = 'grid';
                document.getElementById('clientCards').classList.add('loaded');
            }, 1500);

            // Filter functionality
            document.querySelectorAll('select, input').forEach(element => {
                element.addEventListener('change', function() {
                    filterClients(this.value, this.getAttribute('placeholder') || this.options[0].text);
                });
            });
        });

        function filterClients(value, filterType) {
            const cards = document.querySelectorAll('#clientCards .card-pro');
            cards.forEach(card => {
                const matches = shouldShowCard(card, value, filterType);
                card.style.display = matches ? 'block' : 'none';
            });
        }

        function shouldShowCard(card, value, filterType) {
            if (!value) return true;

            const text = card.textContent.toLowerCase();
            value = value.toLowerCase();

            switch(filterType) {
                case 'Search clients...':
                    return text.includes(value);
                case 'Filter by Role':
                    return card.querySelector('[class*="bg-blue-100"]').textContent.toLowerCase().includes(value);
                case 'Filter by Status':
                    return card.querySelector('[class*="rounded-full"]:first-child').textContent.toLowerCase().includes(value);
                case 'Sort by':
                    // Implement sorting logic here
                    return true;
                default:
                    return true;
            }
        }

        function addFriend(clientId) {
            const notificationContainer = document.getElementById('notificationContainer');
            const addButton = document.getElementById(`addFriendBtn_${clientId}`);

            if (notificationContainer && addButton) {
                // Show notification
                notificationContainer.style.display = 'block';

                // Disable button
                addButton.disabled = true;
                addButton.classList.add('opacity-50');

                // Auto hide after 5 seconds
                setTimeout(dismissNotification, 5000);
            }
        }

        function dismissNotification() {
            const notificationContainer = document.getElementById('notificationContainer');
            if (notificationContainer) {
                notificationContainer.style.display = 'none';
            }
        }

        function cancelInvitation() {
            // Re-enable all friend buttons
            document.querySelectorAll('[id^="addFriendBtn_"]').forEach(button => {
                button.disabled = false;
                button.classList.remove('opacity-50');
            });
            dismissNotification();
        }

        // Sanitize HTML to prevent XSS
        function sanitizeHTML(str) {
            const div = document.createElement('div');
            div.textContent = str;
            return div.innerHTML;
        }
    </script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
