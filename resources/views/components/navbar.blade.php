<nav class="fixed w-full z-50 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold logo-gradient">USERS.ON</span>
                <div class="hidden md:flex space-x-8 ml-10">
                    <a href="{{route('clients.index')}}" class="nav-link active">clients</a>
                    <a href="" class="nav-link">admins</a>
                    <a href="" class="nav-link">friends</a>
                </div>
            </div>
            <div class="flex items-center space-x-6">
                <div class="hidden lg:block">
                    <input type="text" placeholder="Search..." class="w-80 px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-200 bg-gray-50">
                </div>
                <div class="flex space-x-4">
                    <a href="{{route("login")}}" class="px-5 py-2 rounded-lg font-medium btn-secondary">Log In</a>
                    <a href="{{route('register')}}" class="px-5 py-2 rounded-lg font-medium btn-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</nav>
