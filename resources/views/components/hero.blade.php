
<section class="hero pt-40 pb-32 min-h-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-start">
            <!-- Text Content -->
            <div class="lg:w-2/3 mb-16 lg:mb-0 pr-8">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8 leading-tight">
                    Advanced User Management<br>
                    <span class="text-blue-800">Made Simple</span>
                </h1>
                <p class="text-xl text-gray-700 mb-12 max-w-2xl leading-relaxed">
                    Transform your user administration with our enterprise-grade platform.
                    Effortlessly manage permissions, roles, and access controls while
                    maintaining full security compliance.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="px-10 py-5 rounded-xl font-bold text-lg btn-primary">
                        Show more
                    </a>
                    <a href="{{route('login')}}" class="px-10 py-5 rounded-xl font-bold text-lg btn-secondary">
                        Log in →
                    </a>
                </div>
            </div>

            <!-- Active Users List -->
            <div class="lg:w-1/3 lg:pl-8 w-full mt-16 lg:mt-0 ">
                <div class="bg-white rounded-2xl shadow-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Active Users right now</h3>
                    <div class="space-y-6">
                        @props(['onlineUsers'])
                        @foreach($onlineUsers as $user)
                            <div class="flex items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors box-pro">
                                <div class="relative mr-4">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=2563eb&color=fff"
                                        class="w-14 h-14 rounded-full profile-status active">
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">{{ $user->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $user->role }}</p>
                                </div>
                                <span class="ml-auto text-sm font-medium text-green-600">Online</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
