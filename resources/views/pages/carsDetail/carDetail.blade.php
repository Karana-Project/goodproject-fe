@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section class="h-80 w-full bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/HERO-IMAGES-05.jpg') }}');">
    <div class="absolute h-80 inset-0 bg-black/70 md:bg-black/70 z-10"></div>
    <div
      class="absolute top-0 left-0 w-full h-80 bg-[linear-gradient(to_top,rgba(21,21,21,1),transparent)] z-10 pointer-events-none">
    </div>

    <div class="relative z-10 flex items-end mb-40 h-full">
      <div class="w-full max-w-screen mx-[10px] md:mx-[80px] flex px-6 py-6">
        <div class="text-center w-full max-w-[1000px]">
          <h2 class="text-whitePrimary text-2xl md:text-4xl font-bold mb-2 md:mb-4 uppercase">Mobil Impian hanya untuk anda
          </h2>
        </div>
      </div>
  </section>
@endsection

@section('content')
  <div class="relative mx-auto max-w-screen -mt-20 z-30 px-6">
    <div class="bg-whitePrimary rounded-3xl py-10 px-6 shadow-md">
      <div class="w-full md:px-4 mt-6 mb-10">
        <!-- Breadcrumb -->
        <nav class="hidden md:block text-sm text-whiteSecondary mb-4" aria-label="Breadcrumb">
          <ol class="list-reset flex">
            <li>
              <a href="/" class="hover:underline text-blackSecondary font-light">Cars</a>
              <span class="mx-2">/</span>
            </li>
            <li>
              <a href="/carCollections" class="hover:underline text-blackSecondary font-light">Koleksi</a>
              <span class="mx-2">/</span>
            </li>
            <li class="text-blackSecondary font-medium">Porsche 911</li>
          </ol>
        </nav>

        <div class="container mx-auto">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

            <!-- Left side: Car image + thumbnails + specs -->
            <div class="md:col-span-3">
              <!-- Main car image -->
              <div class="relative w-full rounded-2xl overflow-hidden" style="padding-top: 56.25%;">
                <img id="mainImage" src="/images/car-wash.jpg" alt="Main car"
                  class="absolute top-0 left-0 w-full h-full object-cover" />
              </div>
              <!-- Wrapper carousel -->
              <div class="relative mt-4">
                <!-- Left arrow -->
                <button id="prevBtn"
                  class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-whitePrimary text-blackPrimary px-4 py-2 rounded-xl shadow-md hidden md:block">
                  &#8592;
                </button>
                <!-- Thumbnails container (mask viewport) -->
                <div class="overflow-hidden">
                  <!-- Thumbnails scrollable wrapper -->
                  <div id="thumbnailCarousel"
                    class="flex md:gap-4 overflow-x-auto scrollbar-hide px-1 md:px-0 scroll-smooth snap-x snap-mandatory">
                    <!-- Repeatable Thumbnail Items -->
                    <div
                      class="thumb min-w-[33.3333%] max-w-[33.3333%] snap-start aspect-[16/9] rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer"
                      data-src="/images/car-wash.jpg">
                      <img src="/images/car-wash.jpg" class="w-full h-full object-cover" />
                    </div>
                    <div
                      class="thumb min-w-[33.3333%] max-w-[33.3333%] snap-start aspect-[16/9] rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer"
                      data-src="/images/hero-images-1.jpg">
                      <img src="/images/hero-images-1.jpg" class="w-full h-full object-cover" />
                    </div>
                    <div
                      class="thumb min-w-[33.3333%] max-w-[33.3333%] snap-start aspect-[16/9] rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer"
                      data-src="/images/hero-images-1.jpg">
                      <img src="/images/hero-images-1.jpg" class="w-full h-full object-cover" />
                    </div>
                    <div
                      class="thumb min-w-[33.3333%] max-w-[33.3333%] snap-start aspect-[16/9] rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer"
                      data-src="/images/hero-images-1.jpg">
                      <img src="/images/hero-images-1.jpg" class="w-full h-full object-cover" />
                    </div>
                    <div
                      class="thumb min-w-[33.3333%] max-w-[33.3333%] snap-start aspect-[16/9] rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer"
                      data-src="/images/hero-images-1.jpg">
                      <img src="/images/hero-images-1.jpg" class="w-full h-full object-cover" />
                    </div>
                  </div>
                </div>
                <!-- Right arrow -->
                <button id="nextBtn"
                  class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-whitePrimary text-blackPrimary px-4 py-2 rounded-xl shadow-md hidden md:block">
                  &#8594;
                </button>
              </div>


              <!-- Car specs detail -->
              <div class="mt-8 bg-white p-6 rounded-2xl shadow">
                <h2 class="text-2xl font-bold text-blackPrimary text-center md:text-left uppercase mb-4">Spesifikasi mobil
                </h2>
                <div
                  class="grid grid-cols-2 md:grid-cols-6 gap-y-2 justify-between text-blackSecondary text-xs border-b border-t border-whiteSecondary pt-2 pb-2 mb-4">
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <span>2024</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                      fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-gauge-icon lucide-gauge size-6">
                      <path d="m12 14 4-4" />
                      <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                    </svg>
                    <span>3000 km</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                      fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-server-cog-icon lucide-server-cog size-6">
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
                    <span>Automatic</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                      fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-users-icon lucide-users size-6">
                      <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                      <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                      <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                      <circle cx="9" cy="7" r="4" />
                    </svg>
                    <span>2 Seats</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                      fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-fuel-icon lucide-fuel size-6">
                      <line x1="3" x2="15" y1="22" y2="22" />
                      <line x1="4" x2="14" y1="9" y2="9" />
                      <path d="M14 22V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v18" />
                      <path d="M14 13h2a2 2 0 0 1 2 2v2a2 2 0 0 0 2 2a2 2 0 0 0 2-2V9.83a2 2 0 0 0-.59-1.42L18 5" />
                    </svg>
                    <span>Petrol</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                      fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-palette-icon lucide-palette size-6">
                      <path
                        d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z" />
                      <circle cx="13.5" cy="6.5" r=".5" fill="currentColor" />
                      <circle cx="17.5" cy="10.5" r=".5" fill="currentColor" />
                      <circle cx="6.5" cy="12.5" r=".5" fill="currentColor" />
                      <circle cx="8.5" cy="7.5" r=".5" fill="currentColor" />
                    </svg>
                    <span>Frosted Black</span>
                  </div>
                </div>
                <div
                  class="grid grid-cols-1 md:grid-cols-2 gap-y-1 md:gap-y-2 gap-x-24 justify-between text-blackSecondary text-xs md:text-base mb-8">
                  <div class="grid grid-cols-1 gap-y-2 text-blackSecondary mb-4">
                    <div class="flex items-center space-x-1 justify-between">
                      <span class="font-light text-blackSecondary">Brand</span>
                      <span class="font-semibold text-blackPrimary">Porsche</span>
                    </div>
                    <div class="flex items-center space-x-1 justify-between">
                      <span class="font-light text-blackSecondary">Model</span>
                      <span class="font-semibold text-blackPrimary">911 GT3 RS</span>
                    </div>
                    <div class="flex items-center space-x-1 justify-between">
                      <span class="font-light text-blackSecondary">Tipe</span>
                      <span class="font-semibold text-blackPrimary">Sport Car</span>
                    </div>
                  </div>
                  <div class="grid grid-cols-1 gap-y-2 text-blackSecondary mb-4">
                    <div class="flex items-center space-x-1 justify-between">
                      <span class="font-light text-blackSecondary">Tahun Mobil</span>
                      <span class="font-semibold text-blackPrimary">2024</span>
                    </div>
                    <div class="flex items-center space-x-1 justify-between">
                      <span class="font-light text-blackSecondary">Kapasitas Mesin</span>
                      <span class="font-semibold text-blackPrimary">3.996 cc</span>
                    </div>
                    <div class="flex items-center space-x-1 justify-between">
                      <span class="font-light text-blackSecondary">Bahan Bakar</span>
                      <span class="font-semibold text-blackPrimary">Petrol RON 98</span>
                    </div>
                  </div>
                </div>
                <div>
                  <h2 class="text-2xl font-bold text-center md:text-left text-blackPrimary uppercase mb-4">Modifikasi
                  </h2>
                  <ul class="list-disc pl-5 mb-8 text-sm md:text-base text-blackSecondary">
                    <li>High-performance exhaust system for improved sound and power delivery.</li>
                    <li>Upgraded suspension components for better handling and ride comfort.</li>
                    <li>Custom aerodynamic body kit to reduce drag and increase downforce.</li>
                    <li>Lightweight alloy wheels for reduced unsprung weight and improved acceleration.</li>
                    <li>Performance tires for enhanced grip and cornering capabilities.</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Floating Bottom Mobile Detail -->
            <div x-data="{ open: false }"
              class="fixed bottom-0 inset-x-0 bg-white border-t border-gray-200 px-10 py-6 rounded-2xl md:hidden shadow-xl z-50">
              <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                <div>
                  <h2 class="text-xl font-bold text-blackPrimary">PORSCHE 911</h2>
                  <p class="text-xs text-blackSecondary">{{ $brand ?? 'PORSCHE' }}</p>
                </div>
                <div>
                  <p class="text-blackSecondary font-light text-xs text-right">Tap for details</p>
                  <p class="text-red-800 font-bold text-base">Rp2.000.000.000</p>
                </div>
              </div>

              <!-- Detail Hidden/Shown on Toggle -->
              <div x-show="open" x-transition class="mt-4 text-sm text-blackSecondary space-y-3">
                <div
                  class="flex flex-row justify-between items-center text-xs border-b border-t border-whiteSecondary first:border-l-0 pb-3 pt-3">
                  <div class="flex items-center space-x-1">
                    <!-- Icon + Year -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="size-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <span>2024</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-gauge-icon lucide-gauge size-5">
                      <path d="m12 14 4-4" />
                      <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                    </svg>
                    <span>3000 km</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <!-- Icon + Year -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="size-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <span>2024</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <!-- Icon + Year -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="size-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <span>2024</span>
                  </div>
                  <!-- Add others here -->
                </div>
                <p class="text-xs border-b border-whiteSecondary pb-6">Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua..</p>

                <x-button href="#Learn More" text="I’M READY TO BUY" color="primary" size="md"
                  class="w-full justify-between" />
                <div class="flex flex-row justify-between">
                  <p class="text-[8px] italic">*Harga negotiable</p>
                  <p class="text-[8px] italic">Anda akan diarahkan ke WhatsApp</p>
                </div>
              </div>
            </div>

            <!-- Detail Sidebar -->
            <aside class="hidden md:block md:col-span-1">
              <div class="sticky top-8 bg-white p-4 rounded-2xl shadow">
                <div class="flex items-center justify-between border-b border-whiteSecondary first:border-l-0 pb-3 mb-4">
                  <div>
                    <h2 class="text-xl text-blackPrimary font-bold uppercase">PORSCHE 911</h2>
                    <p class="text-blackSecondary text-xs uppercase">
                      {{ $brand ?? 'PORSCHE' }}</p>
                  </div>
                  <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="black" class="size-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                    </svg>
                  </a>
                </div>
                <div
                  class="grid grid-cols-2 gap-y-2 gap-x-4 justify-between text-blackSecondary text-xs border-b border-whiteSecondary pb-4 mb-4">
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="size-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <span>2024</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-gauge-icon lucide-gauge size-5">
                      <path d="m12 14 4-4" />
                      <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                    </svg>
                    <span>3000 km</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-server-cog-icon lucide-server-cog size-5">
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
                    <span>Automatic</span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-users-icon lucide-users size-5">
                      <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                      <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                      <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                      <circle cx="9" cy="7" r="4" />
                    </svg>
                    <span>2 Seats</span>
                  </div>
                </div>
                <div class="flex-col text-start mb-2">
                  <p class="text-xs text-blackSecondary uppercase">Mulai Dari</p>
                  <p class="text-red-800 font-bold text-lg md:text-xl">Rp2.000.000.000</p>
                  <p class="text-2xs text-blackSecondary mb-4">Negotiable | Cash & Credit</p>
                  <p class="text-xs text-blackPrimary border-b border-whiteSecondary first:border-l-0 pb-4 mb-4">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
                </div>
                <div class="flex-col w-full text-start">
                  <x-button href="#Learn More" text="I’M READY TO BUY" color="primary" size="md"
                    class="w-full justify-between" />
                  <p class="text-[8px] italic text-blackSecondary mt-1 mb-4">Anda akan diarahkan ke WhatsApp</p>
                </div>
            </aside>
          </div>
        </div>

        {{-- other Collections --}}
        <div class="w-full mt-20 md:px-4">
          <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
            <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
              Koleksi<br>Lainnya
            </h2>
          </div>
          <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper collectionsSwiper">
              <div class="swiper-wrapper">
                @for ($i = 0; $i < 5; $i++)
                  <div class="swiper-slide">
                    <x-car-card image="images/hero-images-1.jpg" name="Porsche 911" brand="Porsche" year="2024"
                      km="6000" transmission="Automatic" seats="2" price="2000000000"
                      description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
                  </div>
                @endfor
              </div>
            </div>

            <!-- Scrollbar + Navigation satu baris di bawah slide -->
            <div class="flex items-center mt-6 px-2">
              {{-- Scrollbar: override posisi absolute Swiper --}}
              <div class="swiper-scrollbar collections-scrollbar flex-grow h-2 bg-gray-200 rounded-full"
                style="position: static; top: auto; left: auto; transform: none;">
              </div>

              {{-- Spacer (jarak antara scrollbar dan tombol) --}}
              <div class="hidden md:flex w-14"></div>

              {{-- Tombol navigasi: override posisi absolute Swiper --}}
              <div class="hidden md:flex items-center gap-4">
                <button id="collections-prev"
                  class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="black" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                  </svg>
                </button>
                <button id="collections-next"
                  class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="black" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full mt-20 md:px-4">
          <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
            <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
              Ulasan<br>Pelanggan
            </h2>
          </div>
          <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper reviewsSwiper">
              <div class="swiper-wrapper">
                @for ($i = 0; $i < 5; $i++)
                  <div class="swiper-slide">
                    <x-review-card name="John Doe" date="June 01, 2025" rating="5"
                      comment="Pelayanan sangat memuaskan, mobil dalam kondisi prima dan sopirnya ramah sekali!" />
                  </div>
                @endfor
              </div>
            </div>

            <!-- Scrollbar + Navigation satu baris di bawah slide -->
            <div class="flex items-center mt-6 px-2">
              {{-- Scrollbar: override posisi absolute Swiper --}}
              <div class="swiper-scrollbar reviews-scrollbar flex-grow h-2 bg-gray-200 rounded-full"
                style="position: static; top: auto; left: auto; transform: none;"></div>

              {{-- Spacer (jarak antara scrollbar dan tombol) --}}
              <div class="hidden md:flex w-14"></div>

              {{-- Tombol navigasi: override posisi absolute Swiper --}}
              <div class="hidden md:flex items-center gap-4">
                <button id="reviews-prev"
                  class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="black" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                  </svg>
                </button>
                <button id="reviews-next"
                  class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="black" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Frequently Asked Questions -->
        <div class="w-full mt-20 md:px-4 mb-10">
          <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
            <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
              Frequently asked<br>questions
            </h2>
          </div>

          <!-- Accordion Container -->
          <div class="space-y-4">
            <!-- Accordion 1 -->
            <div class="border rounded-xl shadow-md">
              <button aria-expanded="false" aria-controls="panel1" id="accordion1" onclick="toggleAccordion(this)"
                class="flex justify-between items-center w-full p-5 text-blackPrimary font-medium text-left bg-whitePrimary rounded-xl">
                Apakah mobil yang dijual di Good Cars sudah diperiksa kondisinya?
                <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="panel1" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
                aria-labelledby="accordion1">
                Ya. Semua mobil yang kami jual telah melalui proses inspeksi menyeluruh, termasuk kondisi mesin, interior,
                eksterior, dan dokumen kendaraan. Kami memastikan mobil dalam keadaan siap pakai dan layak jalan.
              </div>
            </div>

            <!-- Accordion 2 -->
            <div class="border rounded-xl shadow-md">
              <button aria-expanded="false" aria-controls="panel2" id="accordion2" onclick="toggleAccordion(this)"
                class="flex justify-between items-center w-full p-5 text-blackPrimary font-medium text-left bg-whitePrimary rounded-xl">
                Apakah bisa membeli mobil secara kredit?
                <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="panel2" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
                aria-labelledby="accordion2">
                Tentu! Kami menyediakan opsi pembayaran tunai (cash), kredit/leasing, dan tukar tambah. Tim kami siap
                membantu proses pengajuan kredit agar lebih mudah dan cepat
              </div>
            </div>

            <!-- Accordion 3 -->
            <div class="border rounded-xl shadow-md">
              <button aria-expanded="false" aria-controls="panel3" id="accordion3" onclick="toggleAccordion(this)"
                class="flex justify-between items-center w-full p-5 text-blackPrimary font-medium text-left bg-whitePrimary rounded-xl">
                Apakah bisa tukar tambah mobil lama saya?
                <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="panel3" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
                aria-labelledby="accordion3">
                Bisa. Kami menerima tukar tambah mobil lama Anda dengan unit yang tersedia di Good Cars. Tim kami akan
                membantu proses pengecekan dan penawaran harga terbaik.
              </div>
            </div>
            <!-- Accordion 4 -->
            <div class="border rounded-xl shadow-md">
              <button aria-expanded="false" aria-controls="panel4" id="accordion4" onclick="toggleAccordion(this)"
                class="flex justify-between items-center w-full p-5 text-blackPrimary font-medium text-left bg-whitePrimary rounded-xl">
                Apakah Good Cars melayani pengantaran mobil ke luar kota?
                <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="panel4" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
                aria-labelledby="accordion2">
                Ya. Kami menyediakan layanan towing/pengiriman mobil ke area lokal maupun luar kota sesuai kesepakatan.
                Biaya pengiriman akan diinformasikan terlebih dahulu.
              </div>
            </div>
            <!-- Accordion 5 -->
            <div class="border rounded-xl shadow-md">
              <button aria-expanded="false" aria-controls="panel5" id="accordion5" onclick="toggleAccordion(this)"
                class="flex justify-between items-center w-full p-5 text-blackPrimary font-medium text-left bg-whitePrimary rounded-xl">
                Apakah harga mobil bisa nego?
                <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="panel5" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
                aria-labelledby="accordion2">
                Ya, harga masih bisa dinegosiasikan langsung sesuai kondisi unit dan kesepakatan. Jangan ragu untuk
                bertanya kepada tim kami untuk mendapatkan penawaran terbaik.
              </div>
            </div>

          </div>
        </div>
      </div>


      <!-- SwiperJS -->
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          // Swiper untuk Collections
          new Swiper('.collectionsSwiper', {
            slidesPerView: 1.1,
            spaceBetween: 16,
            grabCursor: true,
            loop: false,
            navigation: {
              nextEl: '#collections-next',
              prevEl: '#collections-prev',
            },
            scrollbar: {
              el: '.collections-scrollbar',
              hide: false,
              draggable: true,
            },
            breakpoints: {
              640: {
                slidesPerView: 2
              },
              1024: {
                slidesPerView: 3
              },
            },
          });

          // Swiper untuk Reviews
          new Swiper('.reviewsSwiper', {
            slidesPerView: 1.1,
            spaceBetween: 16,
            grabCursor: true,
            loop: false,
            navigation: {
              nextEl: '#reviews-next',
              prevEl: '#reviews-prev',
            },
            scrollbar: {
              el: '.reviews-scrollbar',
              hide: false,
              draggable: true,
            },
            breakpoints: {
              640: {
                slidesPerView: 2
              },
              1024: {
                slidesPerView: 3
              },
            },
          });
        });

        function toggleAccordion(clickedButton) {
          const allButtons = document.querySelectorAll('button[aria-controls]');
          allButtons.forEach(button => {
            const panelId = button.getAttribute('aria-controls');
            const panel = document.getElementById(panelId);
            const svg = button.querySelector('svg');

            if (button === clickedButton) {
              // Toggle clicked button
              const isExpanded = button.getAttribute('aria-expanded') === 'true';
              if (isExpanded) {
                // Close this
                button.setAttribute('aria-expanded', 'false');
                panel.classList.add('hidden');
                svg.style.transform = 'rotate(0deg)';
              } else {
                // Open this
                button.setAttribute('aria-expanded', 'true');
                panel.classList.remove('hidden');
                svg.style.transform = 'rotate(180deg)';
              }
            } else {
              // Close all others
              button.setAttribute('aria-expanded', 'false');
              panel.classList.add('hidden');
              svg.style.transform = 'rotate(0deg)';
            }
          });
        }

        const carousel = document.getElementById('thumbnailCarousel');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const mainImage = document.getElementById('mainImage');
        const thumbnails = document.querySelectorAll('#thumbnailCarousel .thumb');

        const scrollAmount = carousel.offsetWidth / 3;

        nextBtn.addEventListener('click', () => {
          carousel.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
          });
        });

        prevBtn.addEventListener('click', () => {
          carousel.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
          });
        });

        // Ganti gambar utama saat thumbnail diklik
        thumbnails.forEach((thumb) => {
          thumb.addEventListener('click', () => {
            const newSrc = thumb.getAttribute('data-src');
            mainImage.setAttribute('src', newSrc);
          });
        });
      </script>


    @endsection
