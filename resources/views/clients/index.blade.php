<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Clients Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Bootstrap CSS for modal (optional, for smooth profile display) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <x-navbarauth />
  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Clients Dashboard</h1>

    <!-- Display Success Message -->
    @if(session('success'))
      <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
      </div>
    @endif

    <!-- Filter Form -->
    <form method="GET" action="{{ route('clients.index') }}" class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
      <div class="mb-2 sm:mb-0">
        <input type="text" name="search" placeholder="Search clients..." value="{{ request('search') }}"
          class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <div>
        <select name="status"
          class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
          <option value="">All</option>
          <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
          <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
      </div>
      <div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
          Filter
        </button>
      </div>
    </form>

    <!-- Clients List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach($users as $user)
      <div class="bg-white p-4 rounded-lg shadow hover:shadow-xl transition duration-200 cursor-pointer relative">
        <div class="flex items-center">
          @if($user->avatar)
            <img src="{{ $user->avatar }}" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
          @else
            @php
              $nameParts = explode(' ', $user->name);
              $initials = '';
              foreach($nameParts as $index => $part){
                if($index < 2) {
                  $initials .= strtoupper(substr($part, 0, 1));
                }
              }
            @endphp
            <div class="w-12 h-12 rounded-full bg-blue-500 text-white flex items-center justify-center mr-4 font-bold">
              {{ $initials }}
            </div>
          @endif
          <div>
            <h2 class="font-semibold text-lg">{{ $user->name }}</h2>
            <p class="text-gray-500 text-sm">{{ $user->email }}</p>
          </div>
        </div>
        <!-- Delete Button with Confirmation Prompt -->
        <form action="{{ route('clients.destroy', $user->id) }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete {{ $user->name }}? This action cannot be undone.');"
              class="absolute top-2 right-2">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-500 hover:text-red-600 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </form>
        <!-- View Profile Button: Triggers Modal -->
        <button type="button" class="mt-4 px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
          data-bs-toggle="modal" data-bs-target="#clientModal{{ $user->id }}">
          View Profile
        </button>
      </div>

      <!-- Modal for Client Profile (One per client) -->
      <div class="modal fade" id="clientModal{{ $user->id }}" tabindex="-1" aria-labelledby="clientModalLabel{{ $user->id }}" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="clientModalLabel{{ $user->id }}">{{ $user->name }}'s Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="flex items-center mb-4">
                  @php
                    $nameParts = explode(' ', $user->name);
                    $initials = '';
                    foreach($nameParts as $index => $part){
                      if($index < 2) {
                        $initials .= strtoupper(substr($part, 0, 1));
                      }
                    }
                  @endphp
                  <div class="w-16 h-16 rounded-full bg-blue-500 text-white flex items-center justify-center mr-4 font-bold text-xl">
                    {{ $initials }}
                  </div>
                <div>
                  <h2 class="text-xl font-bold">{{ $user->name }}</h2>
                  <p class="text-gray-500">{{ $user->email }}</p>
                </div>
              </div>
              <p>{{ $user->bio ?? 'No additional information available.' }}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Bootstrap JS for modal functionality -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
