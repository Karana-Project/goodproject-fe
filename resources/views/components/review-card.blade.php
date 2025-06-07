<div class="bg-white rounded-2xl shadow-md overflow-hidden max-w-xs mx-auto sm:max-w-full p-4">
  <!-- Header: Name and Date -->
  <div class="flex items-center justify-between">
    <h3 class="text-lg font-bold text-black">{{ $name }}</h3>
    <div class="flex items-center mb-3">
      @php
        // Pastikan rating dalam 0..5
        $fullStars = floor($rating);
        $halfStar = $rating - $fullStars >= 0.5;
        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
      @endphp

      {{-- Full Stars --}}
      @for ($i = 0; $i < $fullStars; $i++)
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
          <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.954a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.954c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.54-1.118l1.286-3.954a1 1 0 00-.364-1.118L2.073 9.38c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.954z" />
        </svg>
      @endfor

      {{-- Half Star --}}
      @if ($halfStar)
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
          <defs>
            <linearGradient id="halfGrad">
              <stop offset="50%" stop-color="currentColor" />
              <stop offset="50%" stop-color="transparent" />
            </linearGradient>
          </defs>
          <path fill="url(#halfGrad)"
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.954a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.954c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.54-1.118l1.286-3.954a1 1 0 00-.364-1.118L2.073 9.38c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.954z" />
        </svg>
      @endif

      {{-- Empty Stars --}}
      @for ($i = 0; $i < $emptyStars; $i++)
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
          <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.954a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.954c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.54-1.118l1.286-3.954a1 1 0 00-.364-1.118L2.073 9.38c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.954z" />
        </svg>
      @endfor
    </div>
  </div>

  <!-- Rating Stars -->
  <div class="flex items-center mb-3">
    <span class="text-gray-500 text-xs">{{ $date }}</span>
  </div>

  <!-- Comment Text -->
  <p class="text-gray-600 text-sm line-clamp-3">{{ $comment }}</p>
</div>
