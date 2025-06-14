<div class="bg-white rounded-3xl shadow-md overflow-hidden w-full mx-auto sm:max-w-full">
  <a href="/carDetail" class="block">
    <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
      <div class="flex items-center justify-between mb-2">
        <div>
          <h3 class="text-lg font-bold text-black uppercase">{{ $name }}</h3>
          <p class="text-gray-500 text-xs uppercase mb-1">{{ $brand ?? 'PORSCHE' }}</p>
        </div>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black"
            class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
          </svg>
        </a>

      </div>
      <div class="flex-col items-center  mb-2">
        <p class="text-xs text-gray-400 uppercase text-end">START FROM</p>
        <p class="text-red-800 font-bold text-lg md:text-xl text-end">Rp{{ number_format($price, 0, ',', '.') }}</p>
      </div>
      <div
        class="grid grid-cols-2 gap-x-4 gap-y-2 md:flex md:flex-wrap md:justify-between md:gap-x-0 md:gap-y-2 text-gray-500 text-xs mb-3 border-y border-gray-200 py-2">
        <div class="flex items-center gap-x-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-5 h-5 shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
          </svg>
          <span>{{ $year }}</span>
        </div>
        <div class="flex items-center gap-x-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-gauge-icon lucide-gauge w-5 h-5 shrink-0">
            <path d="m12 14 4-4" />
            <path d="M3.34 19a10 10 0 1 1 17.32 0" />
          </svg>
          <span>{{ $km }} km</span>
        </div>
        <div class="flex items-center gap-x-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-server-cog-icon lucide-server-cog w-5 h-5 shrink-0">
            <path d="m10.852 14.772-.383.923" />
            <path d="M13.148 14.772a3 3 0 1 0-2.296-5.544l-.383-.923" />
            <path d="m13.148 9.228.383-.923" />
            <path d="m13.53 15.696-.382-.924a3 3 0 1 1-2.296-5.544" />
            <path d="m14.772 10.852.923-.383" />
            <path d="m14.772 13.148.923.383" />
            <path d="M4.5 10H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-.5" />
            <path d="M4.5 14H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-.5" />
            <path d="M6 18h.01" />
            <path d="M6 6h.01" />
            <path d="m9.228 10.852-.923-.383" />
            <path d="m9.228 13.148-.923.383" />
          </svg>
          <span>{{ $transmission }}</span>
        </div>
        <div class="flex items-center gap-x-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-users-icon lucide-users w-5 h-5 md:w-5 md:h-5">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
            <path d="M16 3.128a4 4 0 0 1 0 7.744" />
            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
            <circle cx="9" cy="7" r="4" />
          </svg>
          <span>{{ $seats }} Seats</span>
        </div>
      </div>
      <p class="text-gray-400 text-xs line-clamp-1 md:line-clamp-3">{{ $description }}</p>
      <div class="mt-3 md:mt-5 flex justify-center md:justify-end z-10">
        <x-button href="#Learn More" text="ask this car" color="primary" size="sm"
          class="w-full justify-between md:w-auto" />
      </div>
    </div>
  </a>
</div>
