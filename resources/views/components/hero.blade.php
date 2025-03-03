{{--
<section class="hero pt-40 pb-20 min-h-350">
    <div class="max-w-7xl my-20 mx-auto px-4 sm:px-6 lg:px-8">
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

<button href="#" class="button-show" style="--clr: #7808d0">
    <span class="button__icon-wrapper">
      <svg
        viewBox="0 0 14 15"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        class="button__icon-svg"
        width="10"
      >
        <path
          d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
          fill="currentColor"
        ></path>
      </svg>

      <svg
        viewBox="0 0 14 15"
        fill="none"
        width="10"
        xmlns="http://www.w3.org/2000/svg"
        class="button__icon-svg button__icon-svg--copy"
      >
        <path
          d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
          fill="currentColor"
        ></path>
      </svg>
    </span>
    Show more
  </button>


                    <a href="{{route('login')}}">
                        <button class="Btn">

                        <div class="sign"><svg viewBox="0 0 512 512"><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path></svg></div>

                        <div class="text">
                                login
                            </div>

                      </button>
                      </a>
                </div>
            </div>


            <div class="lg:w-1/3 lg:pl-8 w-full mt-16 lg:mt-0 ">
                <div class="bg-white rounded-2xl shadow-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Active Users right now</h3>
                    <div class="cards">
                        @props(['onlineUsers'])
                        @foreach($onlineUsers as $user)
                            <div class="card-pro">
                                <div class="relative mr-4">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=2563eb&color=fff"
                                        class="w-14 h-14 rounded-full profile-status active">
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 tip">{{ $user->name }}</p>
                                    <p class="text-sm text-gray-500 second-text">{{ $user->role }}</p>
                                </div>
                                <span class="ml-auto text-sm font-medium text-green-600">Online</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{$slot}}
</section> --}}
<style>

@layer base {
  :root {
    --background: 0 0% 100%;
    --foreground: 222.2 84% 4.9%;
    --card: 0 0% 100%;
    --card-foreground: 222.2 84% 4.9%;
    --popover: 0 0% 100%;
    --popover-foreground: 222.2 84% 4.9%;
    --primary: 262.1 83.3% 57.8%;
    --primary-foreground: 210 40% 98%;
    --secondary: 210 40% 96.1%;
    --secondary-foreground: 222.2 47.4% 11.2%;
    --muted: 210 40% 96.1%;
    --muted-foreground: 215.4 16.3% 46.9%;
    --accent: 210 40% 96.1%;
    --accent-foreground: 222.2 47.4% 11.2%;
    --destructive: 0 84.2% 60.2%;
    --destructive-foreground: 210 40% 98%;
    --border: 214.3 31.8% 91.4%;
    --input: 214.3 31.8% 91.4%;
    --ring: 262.1 83.3% 57.8%;
    --radius: 0.5rem;
  }

  .dark {
    --background: 222.2 84% 4.9%;
    --foreground: 210 40% 98%;
    --card: 222.2 84% 4.9%;
    --card-foreground: 210 40% 98%;
    --popover: 222.2 84% 4.9%;
    --popover-foreground: 210 40% 98%;
    --primary: 262.1 83.3% 57.8%;
    --primary-foreground: 210 40% 98%;
    --secondary: 217.2 32.6% 17.5%;
    --secondary-foreground: 210 40% 98%;
    --muted: 217.2 32.6% 17.5%;
    --muted-foreground: 215 20.2% 65.1%;
    --accent: 217.2 32.6% 17.5%;
    --accent-foreground: 210 40% 98%;
    --destructive: 0 62.8% 30.6%;
    --destructive-foreground: 210 40% 98%;
    --border: 217.2 32.6% 17.5%;
    --input: 217.2 32.6% 17.5%;
    --ring: 262.1 83.3% 57.8%;
  }
}

@layer base {
  * {
    @apply border-border;
  }
  body {
    @apply bg-background text-foreground;
  }
}

@layer utilities {
  .animate-gradient-x {
    background-size: 200% 200%;
    animation: gradient-x 15s ease infinite;
  }

  @keyframes gradient-x {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }

  .animate-blob {
    animation: blob 7s infinite;
  }

  .animation-delay-2000 {
    animation-delay: 2s;
  }

  .animation-delay-4000 {
    animation-delay: 4s;
  }

  @keyframes blob {
    0% {
      transform: translate(0px, 0px) scale(1);
    }
    33% {
      transform: translate(30px, -50px) scale(1.1);
    }
    66% {
      transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
      transform: translate(0px, 0px) scale(1);
    }
  }
}


</style>

<section class="w-full min-h-screen relative overflow-hidden">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-purple-100 animate-gradient">
        <!-- Decorative elements -->
        <div class="absolute -bottom-16 -left-16 w-80 h-80 rounded-full bg-purple-200 opacity-30 animate-float-slow"></div>
        <div class="absolute -top-20 -right-20 w-80 h-52 rounded-full bg-blue-200 opacity-30 animate-float-slower"></div>
    </div>

    <div class="container mx-auto min-h-screen px-1 flex lg:flex-row items-center justify-around relative z-10">
        <!-- Left side with text -->
        <div class="w-full lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left animate-fade-in">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Connect with
                <span class="block mt-2 text-purple-600 animate-text-color">
                    Amazing People
                </span>
            </h1>
            <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-lg mx-auto lg:mx-0">
                Join our community of professionals and enthusiasts. Build
                connections, share ideas, and grow together.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <!-- Keep your existing buttons -->
                <button href="#" class="button-show" style="--clr: #7808d0">
                    <span class="button__icon-wrapper">
                        <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                            <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                        </svg>
                        <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                            <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                        </svg>
                    </span>
                    Show more
                </button>

                <a href="{{route('login')}}">
                    <button class="Btn">
                        <div class="sign">
                            <svg viewBox="0 0 512 512"><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path></svg>
                        </div>
                        <div class="text">login</div>
                    </button>
                </a>
            </div>
        </div>

        <!-- Right side with active users -->
        <div class="w-5 lg:w-1/3 animate-fade-in-delayed">
            <div class="w-full max-w-md mx-auto bg-white rounded-xl shadow-xl p-6">
                <h3 class="text-xl font-bold mb-4">Active Users</h3>
                <div class="space-y-4 cards">
                    @props(['activeUsers'])
                    @foreach($activeUsers as $user)
                    <div class="card-pro flex items-center justify-around space-x-4 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                        <img src="{{ $user->avatar ?? 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . $user->name }}"
                             alt="{{ $user->name }}"
                             class="h-10 w-10 rounded-full">
                        <div class="flex-1">
                            <h4 class="text-sm font-medium">{{ $user->name }}</h4>
                            <div class="flex gap-2">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium
                                    {{ $user->status === 'online' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    <i class="fas fa-circle text-xs mr-1"></i>
                                    {{ ucfirst($user->status) }}
                                </span>
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </div>
                        </div>
                        <a href="{{route("login")}}">
                            <button onclick="addFriend({{ $user->id }})"
                                class="inline-flex items-center p-2 text-green-600 hover:text-green-700 bg-green-50 rounded-md">
                            <i class="fas fa-user-plus"></i>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    @keyframes float-slower {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(15px); }
    }

    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-gradient {
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }

    .animate-float-slower {
        animation: float-slower 7s ease-in-out infinite;
    }

    .animate-fade-in {
        animation: fade-in 0.8s ease-out forwards;
    }

    .animate-fade-in-delayed {
        animation: fade-in 0.8s ease-out 0.2s forwards;
        opacity: 0;
    }

    .animate-text-color {
        transition: color 0.5s ease;
    }
</style>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
