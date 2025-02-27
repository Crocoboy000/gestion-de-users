<nav class="fixed w-full z-50 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-20 items-center">
        <!-- Left Section: Logo & Nav Links -->
        <div class="flex items-center">
          <span class="text-2xl font-bold logo-gradient">USERS.ON</span>
          <div class="hidden md:flex space-x-8 ml-10">
            <a href="{{ route('clients.index')}}" class="nav-link active">Clients</a>
            <a href="" class="nav-link">Admins</a>
            <a href="}" class="nav-link">Friends</a>
          </div>
        </div>
        <!-- Right Section: Search & Auth Area -->
        <div class="flex items-center space-x-6">
          <div class="hidden lg:block">
            <input type="text" placeholder="Search..." class="w-80 px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-200 bg-gray-50">
          </div>
          <div class="flex items-center space-x-4">
            @auth
              <!-- Notifications Icon -->
              <!-- User Profile Dropdown -->
              <div class="relative">
                <button class="flex items-center space-x-2 focus:outline-none" id="user-menu-button">
                  @php
                    $name = Auth::user()->name;
                    $nameParts = explode(' ', $name);
                    $initials = '';
                    foreach($nameParts as $index => $part){
                        if ($index < 2) {
                            $initials .= strtoupper(substr($part, 0, 1));
                        }
                    }
                  @endphp
                  <div class="w-10 h-10 flex items-center justify-center bg-blue-500 rounded-full text-white font-bold">
                    {{ $initials }}
                  </div>
                  <span class="text-gray-800 font-medium"></span>
                  <i class="fas fa-chevron-down text-gray-600"></i>
                </button>
                <!-- Dropdown Menu -->
                <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white border rounded shadow-lg">
                  <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
                  <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Settings</a>
                  <form method="POST" action="{{ route('logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</button>
                  </form>
                </div>
              </div>
            @else
              <a href="" class="px-5 py-2 rounded-lg font-medium btn-secondary">Log In</a>
              <a href="" class="px-5 py-2 rounded-lg font-medium btn-primary">Sign Up</a>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </nav>

  @push('scripts')
  <script>
    // Toggle user dropdown menu if it exists
    const userMenuButton = document.getElementById('user-menu-button');
    if (userMenuButton) {
      userMenuButton.addEventListener('click', function () {
        document.getElementById('user-menu').classList.toggle('hidden');
      });
    }
  </script>
  @endpush
