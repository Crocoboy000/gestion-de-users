<!-- resources/views/components/navbar.blade.php -->
<style>
/* From Uiverse.io by Yaya12085 */
.input-container {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap:5px
}

.input {
  width: 40px;
  height: 40px;
  border-radius: 10px;
  border: none;
  outline: none;
  padding: 18px 16px;
  background-color: transparent;
  cursor: pointer;
  transition: all .5s ease-in-out;
}

.input::placeholder {
  color: transparent;
}

.input:focus::placeholder {
  color: rgb(131, 128, 128);
}

.input:focus,.input:not(:placeholder-shown) {
  background-color: #fff;
  border: 1px solid rgb(98, 0, 255);
  width: 290px;
  cursor: none;
  padding: 18px 16px 18px 40px;
}

.icon {
  position: absolute;
  left: 0;
  top: 0;
  height: 40px;
  width: 40px;
  background-color: #fff;
  border-radius: 10px;
  z-index: -1;
  fill: rgb(98, 0, 255);
  border: 1px solid rgb(98, 0, 255);
}

.input:hover + .icon {
  transform: rotate(360deg);
  transition: .2s ease-in-out;
}

.input:focus + .icon,.input:not(:placeholder-shown) + .icon {
  z-index: 0;
  background-color: transparent;
  border: none;
}
.logo-gradient {
background-image: linear-gradient(45deg, #3b82f6, #1e40af, #000000);
-webkit-background-clip: text;
background-clip: text;
color: transparent;
}
.group:hover i {
    transform: scale(1.1);
}

.group:hover i.fa-cog {
    transform: rotate(180deg);
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-3px); }
}

.group:hover i.fa-question-circle {
    animation: bounce 0.5s ease infinite;
}
.dropdown-link {
    @apply flex items-center justify-between px-3 py-3.5 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition-all duration-200;
}

.dropdown-link i:first-child {
    @apply w-5 text-lg;
}

.dropdown-link:hover {
    @apply bg-blue-50/80 text-blue-600;
}
.menu-item {
    @apply flex items-center justify-between px-4 py-2.5 text-sm text-blue-500 hover:bg-blue-50 rounded-lg transition-all duration-200 w-full;
}

.menu-item i {
    @apply text-lg transition-all duration-300;
}

.menu-item:hover i {
    @apply scale-110 rotate-180;
}

[x-cloak] {
    display: none !important;
}

[x-cloak] {
    display: none !important;
}
</style>
<nav
  x-data="{
    userMenuOpen: false,
    notificationsOpen: false,
    isScrolled: false
  }"
  x-init="
    window.addEventListener('scroll', () => { isScrolled = window.scrollY > 10 });
  "
  :class="isScrolled ? 'bg-white/90 backdrop-blur-md shadow-md' : 'bg-transparent'"
  class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
  <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="{{route("dashboard")}}" class="flex items-center">
            <span class="text-2xl font-bold logo-gradient">USERS.ON</span>
        </a>
      </div>

      <!-- Navigation Links - Responsive -->
      <div class="hidden sm:flex items-center space-x-10 justify-between">
          <!-- Admins Dropdown -->
          @auth
          @if(Auth::user()->role === 'admin')
          <div class="relative" x-data="{ open: false }" @click.away="open = false">
              <button @click="open = !open"
                      class="nav-button {{ request()->routeIs('admin.*') ? 'active' : '' }}">
                  <i class="fas fa-shield-alt h-5 w-5 text-blue-900"></i>
                  <span class="text-violet-700 font-bold">Admins</span>
                  <i class="fas fa-chevron-down text-blue-900 h-4 w-4 transition-transform duration-200"
                     :class="{'rotate-180': open}"></i>
              </button>
              <div x-show="open"
              x-cloak
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              class="absolute top-full left-0 w-56 space-y-4 py-4 px-2 mt-1 flex flex-col bg-transparent backdrop-blur-md rounded-xl shadow-lg border border-gray-100">
             <a href="" class="dropdown-link group gap-4">
                 <i class="fas fa-users text-blue-500 group-hover:scale-110 transition-transform duration-200"></i>
                 <span class="text-violet-500">View All Admins</span>
                 <i class="fas fa-chevron-right text-violet-900 group-hover:translate-x-1 transition-transform duration-200 ml-auto"></i>
             </a>
             <a href="" class="dropdown-link group">
                 <i class="fas fa-user-plus text-green-500 group-hover:scale-110 transition-transform duration-200"></i>
                 <span class="text-violet-500">Add New Admin</span>
                 <i class="fas fa-chevron-right text-violet-900 group-hover:translate-x-1 transition-transform duration-200 ml-auto"></i>
                </a>
            </div>
        </div>
        @endif
        @endauth
        <!-- Clients Dropdown -->
        <div class="relative" x-data="{ open: false }" @click.away="open = false">
            <button @click="open = !open"
              class="nav-button {{ request()->routeIs('clients.*') ? 'active' : '' }}">
              <i class="fas fa-users h-5 w-5 text-blue-900"></i>
                  <span class="text-violet-700 font-bold">Clients</span>
                  <i class="fas fa-chevron-down text-blue-900 h-4 w-4 transition-transform duration-200"
                  :class="{'rotate-180': open}"></i>
                </button>

                <div x-show="open"
                x-cloak
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                class="absolute top-full left-0 w-56 space-y-4 py-4 px-2 mt-1 flex flex-col bg-transparent backdrop-blur-md rounded-xl shadow-lg border border-gray-100">
                <a href="{{ route('clients.index') }}" class="dropdown-link group">
                    <i class="fas fa-users mr-2 text-blue-500 group-hover:scale-110 transition-transform duration-200"></i>
                    <span class="text-violet-500">View All Clients</span>
                    <i class="fas fa-chevron-right text-violet-900 group-hover:translate-x-1 transition-transform duration-200 ml-auto"></i>
                </a>
                @auth
                @if (Auth::user()->role === 'admin')
                <a href="" class="dropdown-link group">
                    <i class="fas fa-user-plus mr-4 text-green-500 group-hover:scale-110 transition-transform duration-200"></i>
                    <span class="text-violet-500">Add New Client</span>
                    <i class="fas fa-chevron-right text-violet-900 group-hover:translate-x-1 transition-transform duration-200 ml-auto"></i>
                </a>
                @endif
                @endauth
            </div>
          </div>

          <!-- Friends Dropdown -->
          <div class="relative" x-data="{ open: false }" @click.away="open = false">
              <button @click="open = !open"
                      class="nav-button {{ request()->routeIs('friends.*') ? 'active' : '' }}">
                  <i class="fas text-blue-900 fa-user-plus h-5 w-5"></i>
                  <span class="text-violet-700 font-bold">Friends</span>
                  <i class="fas text-blue-900 fa-chevron-down h-4 w-4 transition-transform duration-200"
                     :class="{'rotate-180': open}"></i>
              </button>

              <div x-show="open"
              x-cloak
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              class="absolute top-full left-0 w-56 space-y-4 py-4 px-2 mt-1 flex flex-col bg-transparent backdrop-blur-md rounded-xl shadow-lg border border-gray-100">
             <a href="{{ route('clients.index') }}" class="dropdown-link group">
                 <i class="fas fa-users mr-4 text-blue-500 group-hover:scale-110 transition-transform duration-200"></i>
                 <span class="text-violet-500">View All Friends</span>
                 <i class="fas fa-chevron-right text-violet-900 group-hover:translate-x-1 transition-transform duration-200 ml-auto"></i>
             </a>
             <a href="" class="dropdown-link group">
                 <i class="fas fa-user-plus mr-4 text-green-500 group-hover:scale-110 transition-transform duration-200"></i>
                 <span class="text-violet-500">Add New Friend</span>
                 <i class="fas fa-chevron-right text-violet-900 group-hover:translate-x-1 transition-transform duration-200 ml-auto"></i>
             </a>
         </div>
          </div>
      </div>

      <!-- Right Section: Search, Notifications & Auth -->
      <div class="flex items-center space-x-4">
        <!-- Search Bar -->
<div class="input-container">
    <input placeholder="Search something..." class="input" name="text" type="text">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <rect fill="white"></rect> <path d="M7.25007 2.38782C8.54878 2.0992 10.1243 2 12 2C13.8757 2 15.4512 2.0992 16.7499 2.38782C18.06 2.67897 19.1488 3.176 19.9864 4.01358C20.824 4.85116 21.321 5.94002 21.6122 7.25007C21.9008 8.54878 22 10.1243 22 12C22 13.8757 21.9008 15.4512 21.6122 16.7499C21.321 18.06 20.824 19.1488 19.9864 19.9864C19.1488 20.824 18.06 21.321 16.7499 21.6122C15.4512 21.9008 13.8757 22 12 22C10.1243 22 8.54878 21.9008 7.25007 21.6122C5.94002 21.321 4.85116 20.824 4.01358 19.9864C3.176 19.1488 2.67897 18.06 2.38782 16.7499C2.0992 15.4512 2 13.8757 2 12C2 10.1243 2.0992 8.54878 2.38782 7.25007C2.67897 5.94002 3.176 4.85116 4.01358 4.01358C4.85116 3.176 5.94002 2.67897 7.25007 2.38782ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
  </div>


        @auth
          <!-- Notifications -->
          <div class="relative" x-data="{ open: false }" @click.away="open = false">
            <button
              @click="open = !open"
              class="p-1 rounded-full text-gray-600 hover:text-purple-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
            >
              <span class="sr-only">View notifications</span>
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                  <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <!-- Notification Badge -->
                <span class="absolute -top-1 -right-1 h-4 w-4 text-xs flex items-center justify-center rounded-full bg-red-500 text-white">3</span>
              </div>
            </button>

            <!-- Notifications Dropdown -->
            <div
              x-show="open"
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 mt-2 w-80 sm:w-96 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
              style="display: none;"
            >
              <div class="py-1 max-h-96 overflow-y-auto">
                <div class="px-4 py-3 border-b border-gray-100">
                  <h3 class="text-sm font-medium text-gray-900">Notifications</h3>
                </div>
                <!-- Notification Items -->
                <a href="" class="block px-4 py-3 border-b border-gray-100 hover:bg-gray-50">
                  <div class="flex items-start">
                    <div class="flex-shrink-0 pt-0.5">
                      <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=John+Smith&background=6366f1&color=fff" alt="">
                    </div>
                    <div class="ml-3 w-0 flex-1">
                      <p class="text-sm font-medium text-gray-900">John Smith</p>
                      <p class="text-sm text-gray-500">Mentioned you in a comment</p>
                      <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                    </div>
                  </div>
                </a>
                <a href="" class="block px-4 py-3 border-b border-gray-100 hover:bg-gray-50">
                  <div class="flex items-start">
                    <div class="flex-shrink-0 pt-0.5">
                      <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                          <polyline points="14 2 14 8 20 8"></polyline>
                          <line x1="16" y1="13" x2="8" y2="13"></line>
                          <line x1="16" y1="17" x2="8" y2="17"></line>
                          <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                      </div>
                    </div>
                    <div class="ml-3 w-0 flex-1">
                      <p class="text-sm font-medium text-gray-900">New document shared</p>
                      <p class="text-sm text-gray-500">Project proposal has been shared with your team</p>
                      <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                    </div>
                  </div>
                </a>
                <div class="px-4 py-3 text-center text-sm">
                  <a href="" class="text-purple-600 hover:text-purple-800 font-medium">View all notifications</a>
                </div>
              </div>
            </div>
          </div>

          <!-- User Profile Dropdown -->
          <div class="relative" x-data="{ open: false }" @click.away="open = false">
              <button @click="open = !open"
                      class="flex items-center space-x-3 focus:outline-none group"
                      type="button">
                  <div class="relative">
                      <div class="flex-shrink-0 transition duration-300 group-hover:ring-4 group-hover:ring-blue-100 rounded-full">
                          <img src="{{ Auth::user()->avatar ?? 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . Auth::user()->name }}"
                               alt="{{ Auth::user()->name }}"
                               class="h-10 w-10 rounded-full object-cover">
                      </div>
                      <span class="absolute -bottom-0.5 -right-0.5 block h-3 w-3 rounded-full bg-green-400 ring-2 ring-white"></span>
                  </div>
                  <span class="hidden sm:flex text-sm font-bold text-blue-500 group-hover:text-violet-600">
                      {{ Str::limit(Auth::user()->name, 12) }}
                  </span>
                  {{-- <i class="fas fa-chevron-down text-sm text-gray-400 transition-transform duration-200"
                     :class="{'rotate-180': open}"></i> --}}
              </button>

              <!-- Dropdown Menu -->
              <div x-show="open"
                   x-cloak
                   x-transition:enter="transition ease-out duration-200"
                   x-transition:enter-start="opacity-0 scale-95"
                   x-transition:enter-end="opacity-100 scale-100"
                   x-transition:leave="transition ease-in duration-75"
                   x-transition:leave-start="opacity-100 scale-100"
                   x-transition:leave-end="opacity-0 scale-95"
                   class="absolute right-0 mt-3 w-72 rounded-xl shadow-lg py-2 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50">

                  <!-- User Info -->
                  <div class="px-4 py-3 border-b border-gray-100">
                      <div class="flex items-center space-x-3">
                          <img src="{{ Auth::user()->avatar ?? 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . Auth::user()->name }}"
                               class="h-12 w-12 rounded-full">
                          <div class="flex-1">
                              <p class="text-lg font-bold text-violet-900">{{ Auth::user()->name }}</p>
                              <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                          </div>
                      </div>
                  </div>

                  <!-- Menu Items -->
                  <div class="px-2 py-2 space-y-1 flex flex-col justify-center items-center">
                      <a href="#" class="menu-item p-2 hover:bg-red-50 rounded-lg">
                          <i class="fas fa-user-circle text-blue-500 mr-5"></i>
                          <span class="font-semibold text-blue-500">View Profile</span>
                      </a>
                      <a href="#" class="menu-item space-x-3 p-2 hover:bg-red-50 rounded-lg">
                          <i class="fas fa-cog text-indigo-500 mr-8"></i>
                          <span class="font-semibold text-blue-500">Settings</span>
                      </a>
                      <a href="#" class="menu-item p-2 hover:bg-red-50 rounded-lg">
                          <i class="fas fa-moon text-purple-500 mr-5"></i>
                          <span class="font-semibold text-blue-500">Dark Mode</span>
                      </a>
                  </div>

                  <!-- Logout -->
                  <div class="border-t border-gray-100 px-2 py-2 text-center">
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit" class="menu-item p-2 text-red-600 hover:bg-red-50 group space-x-3">
                              <i class="fas fa-sign-out-alt mr-6 group-hover:rotate-180 transition-transform duration-300"></i>
                              <span class="font-semibold">Sign out</span>
                          </button>
                      </form>
                  </div>
              </div>
          </div>

          <style>
          </style>
            </div>
          </div>
        @else
          <!-- Auth Buttons -->
          <div class="flex items-center space-x-3">
            <a href="{{route("login")}}" class="px-4 py-2 rounded-md border border-purple-500 text-purple-600 hover:bg-purple-50 hover:text-purple-700 transition-colors text-sm font-medium">
              Sign In
            </a>
            <a href="{{route('register')}}" class="px-4 py-2 rounded-md bg-gradient-to-r from-purple-600 to-blue-500 hover:from-purple-700 hover:to-blue-600 text-white transition-colors text-sm font-medium shadow-sm">
              Sign Up
            </a>
          </div>
        @endauth
      </div>
    </div>
  </div>

  <!-- Mobile Navigation Menu - Always visible on small screens -->
  <div class="sm:hidden py-2 bg-white shadow-md border-t border-gray-100">
    <div class="grid grid-cols-3 text-center">
      <a href="" class="py-2 text-sm font-medium text-gray-700 hover:text-purple-600">
        Admins
      </a>
      <a href="" class="py-2 text-sm font-medium text-gray-700 hover:text-purple-600">
        Clients
      </a>
      <a href="" class="py-2 text-sm font-medium text-gray-700 hover:text-purple-600">
        Friends
      </a>
    </div>
  </div>
</nav>


<style>

  .nav-link {
    @apply px-4 py-2 text-sm font-medium relative overflow-hidden transition-all duration-300;
    font-family: 'Inter', sans-serif;
  }

  .nav-link::before {
    content: '';
    @apply absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-purple-600 to-blue-500 transform scale-x-0 transition-transform duration-300 origin-left;
  }

  .nav-link:hover::before,
  .nav-link.active::before {
    transform: scaleX(1);
  }

  .nav-link:hover {
    @apply text-purple-600;
    transform: translateY(-1px);
  }

  .nav-link.active {
    @apply text-purple-600 font-semibold;
  }

  /* Add subtle glow effect on hover */
  .nav-link:hover::after {
    content: '';
    @apply absolute inset-0 bg-purple-500/5 rounded-lg -z-10;
  }

  /* Dropdown Item Styles */
  .dropdown-item {
    @apply flex items-center px-4 py-2 text-sm hover:bg-gradient-to-r from-purple-50 to-blue-50 hover:text-purple-600 transition-colors duration-200 font-medium;
    font-family: 'Inter', sans-serif;
  }

  .dropdown-icon {
    @apply mr-3 h-4 w-4 text-gray-500 transition-colors duration-200;
  }

  /* Mobile navigation styles */
  .mobile-nav-link {
    @apply block w-full py-3 text-center text-sm font-medium text-gray-700 hover:text-purple-600 transition-colors duration-200;
    font-family: 'Inter', sans-serif;
  }
</style>

<!-- Add Alpine.js to make the menu work properly -->
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
@endpush
