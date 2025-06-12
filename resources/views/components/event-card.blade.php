<div class="bg-white rounded-3xl shadow-md overflow-hidden w-full mx-auto sm:max-w-full">
  <a class="block">
    <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
      <h3 class="text-lg font-bold text-black uppercase">{{ $name }}</h3>
      <p class="text-gray-500 text-xs uppercase mb-1">{{ $regulation }}</p>
      <div class="flex flex-wrap justify-between text-gray-500 text-xs mb-3 border-y border-gray-200 py-2">
        <div class="flex items-center space-x-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
          </svg>
          <span>{{ $date }}</span>
        </div>
        <div class="flex items-center space-x-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-clock-icon lucide-clock">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg>
          <span>{{ $time }}</span>
        </div>
        <div class="flex items-center space-x-1">
          <div class="shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-map-pinned-icon lucide-map-pinned">
              <path
                d="M18 8c0 3.613-3.869 7.429-5.393 8.795a1 1 0 0 1-1.214 0C9.87 15.429 6 11.613 6 8a6 6 0 0 1 12 0" />
              <circle cx="12" cy="8" r="2" />
              <path
                d="M8.714 14h-3.71a1 1 0 0 0-.948.683l-2.004 6A1 1 0 0 0 3 22h18a1 1 0 0 0 .948-1.316l-2-6a1 1 0 0 0-.949-.684h-3.712" />
            </svg>
          </div>
          <div class="leading-snug max-w-[150px]"
            style="
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    ">
            Pertamina Mandalika Circuit, Lombok, NTB
          </div>
        </div>

      </div>
      <p class="text-gray-400 text-xs line-clamp-1 md:line-clamp-3">{{ $description }}</p>
      <div class="mt-3 md:mt-5 flex justify-center md:justify-between z-10">
        <p class="text-blackPrimary uppercase">{{ $ticket }}</p>
        <x-button href="#Learn More" text="join now" color="primary" size="sm"
          class="w-full justify-between md:w-auto" />
      </div>
    </div>
  </a>
</div>
