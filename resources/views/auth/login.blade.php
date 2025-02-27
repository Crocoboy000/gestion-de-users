<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In - USERS.ON</title>
  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-center text-3xl font-bold text-gray-800 mb-6">Sign In to USERS.ON</h2>
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
      @csrf
      <!-- Email Input -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
        <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden">
          <!-- Icon Container with Right Border -->
          <div class="p-3 border-r border-gray-300">
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
            </svg>
          </div>
          <!-- Input Field -->
          <input type="email" name="email" placeholder="name@company.com" required autocomplete="email"
                 class="w-full p-3 focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
        </div>
      </div>

      <!-- Password Input -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
        <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden">
          <!-- Icon Container with Right Border -->
          <div class="p-3 border-r border-gray-300">
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
          </div>
          <!-- Input Field -->
          <input type="password" name="password" placeholder="••••••••" required autocomplete="current-password"
                 class="w-full p-3 focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
        </div>
      </div>
      @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <!-- Actions -->
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember" type="checkbox" name="remember"
                 class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
          <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
        </div>
        <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-800">Forgot password?</a>
      </div>

      <!-- Submit Button -->
      <button type="submit"
              class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-lg transition-all hover:from-blue-700 hover:to-blue-800 shadow-md">
        Sign In
      </button>

      <!-- Social Login -->
      <div class="relative mt-8">
        <div class="absolute inset-0 flex items-center">
          <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-center">
          <span class="px-4 bg-white text-gray-500 text-sm">Or continue with</span>
        </div>
      </div>

      <div class="grid grid-cols-3 gap-3 mt-6">
        <!-- Google -->
        <button type="button" class="p-2.5 flex justify-center items-center border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
          <svg class="w-5 h-5" viewBox="0 0 24 24">
            <path fill="#EA4335" d="M5.266 9.765A7.077 7.077 0 0112 4.909c1.69 0 3.218.6 4.418 1.582L19.91 3C17.782 1.145 15.055 0 12 0 7.27 0 3.198 2.698 1.24 6.65l4.026 3.115z"/>
            <path fill="#34A853" d="M16.04 18.013c-1.09.703-2.474 1.078-4.04 1.078a7.077 7.077 0 01-6.723-4.823l-4.04 3.067A11.965 11.965 0 0012 24c2.933 0 5.735-1.043 7.834-3l-3.793-2.987z"/>
            <path fill="#FBBC05" d="M19.834 21c2.195-2.048 3.62-5.096 3.62-9 0-.71-.109-1.473-.272-2.182H12v4.637h6.436c-.317 1.559-1.17 2.766-2.395 3.558L19.834 21z"/>
            <path fill="#4285F4" d="M5.277 14.268A7.12 7.12 0 014.909 12c0-.782.125-1.533.357-2.235L1.24 6.65A11.934 11.934 0 000 12c0 1.92.445 3.73 1.237 5.335l4.04-3.067z"/>
          </svg>
        </button>

        <!-- GitHub -->
        <button type="button" class="p-2.5 flex justify-center items-center border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
          <svg class="w-5 h-5" viewBox="0 0 24 24">
            <path fill="#181717" d="M12 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.6.113.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
          </svg>
        </button>

        <!-- LinkedIn -->
        <button type="button" class="p-2.5 flex justify-center items-center border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
          <svg class="w-5 h-5" viewBox="0 0 24 24">
            <path fill="#0A66C2" d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zM8 19H5V8h3v11zM6.5 6.732a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM20 19h-3v-5.604c0-3.368-4-3.113-4 0V19h-3V8h3v1.765c1.396-2.586 7-2.777 7 2.476V19z"/>
          </svg>
        </button>
      </div>

      <!-- Registration Link -->
      <p class="text-center text-sm text-gray-600 mt-8">
        Not a member?
        <a href="{{ route('register') }}" class="text-blue-600 font-medium hover:text-blue-800">Register now</a>
      </p>
    </form>
  </div>
</body>
</html>
