<div class="bg-white rounded-3xl shadow-md overflow-hidden max-w-xs mx-auto sm:max-w-full">
  <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-48 object-cover rounded-t-lg">
  <div class="p-4">
    <h3 class="text-lg font-bold text-black">{{ $name }}</h3>
    <p class="text-gray-500 text-xs uppercase mb-1">{{ $brand ?? 'PORSCHE' }}</p>
    <div class="flex-col items-center  mb-2">
       <p class="text-xs text-gray-400 uppercase text-end">START FROM</p>
      <p class="text-red-800 font-bold text-xl text-end">Rp{{ number_format($price, 0, ',', '.') }}</p>
    </div>
    <div class="flex flex-wrap justify-between text-gray-500 text-xs mb-3 border-y border-gray-200 py-2">
      <div class="flex items-center space-x-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/></svg>
        <span>{{ $year }}</span>
      </div>
      <div class="flex items-center space-x-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h16"/></svg>
        <span>{{ $km }} km</span>
      </div>
      <div class="flex items-center space-x-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"/></svg>
        <span>{{ $transmission }}</span>
      </div>
      <div class="flex items-center space-x-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
        <span>{{ $seats }} Seats</span>
      </div>
    </div>
    <p class="text-gray-400 text-xs mb-4 line-clamp-3">{{ $description }}</p>
    <div class="mt-5 flex justify-end z-10">
      <x-button href="#Learn More" text="ask this car" color="primary" size="sm"/>
    </div>
</div>
</div>
