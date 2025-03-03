<nav class="fixed w-full z-50 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center space-x-8">
                <span class="text-2xl font-bold logo-gradient">USERS.ON</span>

                <div role="tablist" class="tabs flex space-x-2">
                    <a role="tab" class="tab px-4 py-2 font-medium text-gray-600 hover:text-blue-600 relative transition-colors duration-300 ease-in-out cursor-pointer
                        after:content-[''] after:absolute after:h-0.5 after:w-0 after:bg-blue-500 after:bottom-0 after:left-0
                        after:transition-all after:duration-300 hover:after:w-full">Clients</a>
                    <a role="tab" class="tab px-4 py-2 font-medium text-blue-600 relative transition-colors duration-300 ease-in-out cursor-pointer
                        after:content-[''] after:absolute after:h-0.5 after:w-full after:bg-blue-500 after:bottom-0 after:left-0">Admins</a>
                    <a role="tab" class="tab px-4 py-2 font-medium text-gray-600 hover:text-blue-600 relative transition-colors duration-300 ease-in-out cursor-pointer
                        after:content-[''] after:absolute after:h-0.5 after:w-0 after:bg-blue-500 after:bottom-0 after:left-0
                        after:transition-all after:duration-300 hover:after:w-full">Friends</a>
                </div>
                <!-- Tabs content -->
            </div>
            <div class="flex items-center space-x-6">
                <div class="flex items-center space-x-6">
                    <div class="input-wrapper">
                        <button class="icon">
                          <svg
                            width="25px"
                            height="25px"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"
                              stroke="#fff"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                            <path
                              d="M22 22L20 20"
                              stroke="#fff"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </svg>
                        </button>
                        <input type="text" name="text" class="input" placeholder="search.." />
                      </div>

                <div class="flex space-x-4">
                    <a
                        href="{{route('login')}}"
                        class="px-5 py-2 rounded-lg font-medium border border-blue-500 text-blue-500 hover:bg-blue-50 transition-all duration-300"
                    >
                        Log In
                    </a>
                    <a
                        href="{{route('register')}}"
                        class="px-5 py-2 rounded-lg font-medium bg-blue-500 text-white hover:bg-blue-600 transition-colors duration-300 shadow-md hover:shadow-lg"
                    >
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
