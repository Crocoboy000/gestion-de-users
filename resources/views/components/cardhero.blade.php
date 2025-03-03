<div class="card bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105">
    <svg class="w-8 h-8 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}" />
    </svg>
    <div class="card__content">
        <p class="card__title text-xl font-bold mb-2">{{ $title }}</p>
        <p class="card__description text-gray-600">{{ $content }}</p>
    </div>
</div>
