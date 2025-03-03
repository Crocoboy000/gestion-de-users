

<x-app-layout>
    @auth
    <div class="hero-gradient min-h-screen py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- User Profile Section -->
            <div class="mb-8 bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg">
                <div class="flex items-center space-x-6">
                    <div class="relative">
                        <img src="{{ Auth::user()->avatar ?? 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . Auth::user()->name }}"
                             class="w-24 h-24 rounded-full ring-4 ring-white shadow-lg"
                             alt="{{ Auth::user()->name }}">
                        <span class="absolute bottom-0 right-0 h-4 w-4 rounded-full bg-green-400 border-2 border-white"></span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Welcome back, {{ Auth::user()->name }}!</h1>
                        <p class="text-gray-500">{{ Auth::user()->email }}</p>
                        <div class="mt-2 flex items-center space-x-3">
                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                <i class="fas fa-user-shield mr-1"></i>{{ ucfirst(Auth::user()->role) }}
                            </span>
                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-xs mr-1"></i>Online
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Friends Stats -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Friends</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalFriends }}</p>
                        </div>
                        <div class="p-3 bg-blue-500 rounded-full text-white">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Pending Requests</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $pendingRequests }}</p>
                        </div>
                        <div class="p-3 bg-yellow-500 rounded-full text-white">
                            <i class="fas fa-user-clock text-xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Account Status -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Account Status</p>
                            <p class="text-2xl font-bold text-green-500">Active</p>
                        </div>
                        <div class="p-3 bg-green-500 rounded-full text-white">
                            <i class="fas fa-shield-alt text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 shadow-lg">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Recent Activities</h2>
                <div class="space-y-4">
                    @foreach($recentActivities as $activity)
                        <div class="flex items-center space-x-4 p-4 bg-white/50 rounded-lg">
                            <img src="{{ $activity->user->avatar ?? 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . $activity->user->name }}"
                                 class="w-10 h-10 rounded-full"
                                 alt="{{ $activity->user->name }}">
                            <div class="flex-1">
                                <p class="text-sm text-gray-900">
                                    <span class="font-medium">{{ $activity->user->name }}</span>
                                    {{ $activity->status === 'pending' ? 'sent a friend request to' : 'became friends with' }}
                                    <span class="font-medium">{{ $activity->friend->name }}</span>
                                </p>
                                <p class="text-xs text-gray-500">{{ $activity->created_at->diffForHumans() }}</p>
                            </div>
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium
                                {{ $activity->status === 'accepted' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ ucfirst($activity->status) }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endauth
</x-app-layout>
