@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section class="h-80 w-full bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/HERO-IMAGES-07.jpg') }}');">
    <div class="absolute h-80 inset-0 bg-black/70 md:bg-black/70 z-10"></div>
    <div
      class="absolute top-0 left-0 w-full h-80 bg-[linear-gradient(to_top,rgba(21,21,21,1),transparent)] z-10 pointer-events-none">
    </div>

    <div class="relative z-10 flex items-end mb-40 h-full">
      <div class="w-full max-w-screen mx-[10px] md:mx-[80px] flex px-6 py-6">
        <div class="text-center w-full max-w-[1000px]">
          <h2 class="text-whitePrimary text-2xl md:text-4xl font-bold mb-2 md:mb-4 uppercase">Informasi Terbaru Hanya di
            Good Media</h2>
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
              <a href="/media" class="hover:underline text-blackSecondary font-light">Media</a>
              <span class="mx-2">/</span>
            </li>
            <li class="text-blackSecondary font-medium">Media Detail</li>
          </ol>
        </nav>

        <div class="container mx-auto">
          <h2 class="text-black text-3xl md:text-5xl font-bold uppercase leading-tight mb-4">
            HERE’S THE UPDATE OF THE DAY
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

            <!-- Left side: Car image + thumbnails + specs -->
            <div class="md:col-span-3">
              <!-- Main car image -->
              <div class="relative w-full rounded-2xl overflow-hidden" style="padding-top: 56.25%;">
                <img id="mainImage" src="/images/car-wash.jpg" alt="Main car"
                  class="absolute top-0 left-0 w-full h-full object-cover" />
              </div>
              <!-- Thumbnails -->
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
            </div>

            <!-- Detail Sidebar -->
            <aside class="hidden md:block md:col-span-1">
              <h1 class="text-blackPrimary text-lg md:text-2xl font-medium uppercase leading-tight mb-4">
                Informasi Lainnya
              </h1>
              <div class="w-full flex flex-col gap-4">
                <!-- Thumbnail 1 -->
                <div class="h-[140px] md:h-[190px] rounded-xl overflow-hidden shadow-md">
                  <div
                    class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200 h-full">
                    <div class="absolute inset-0 bg-cover bg-center"
                      style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-black/70"></div>
                    <div class="relative z-10 p-6 h-full flex flex-col justify-between">
                      <div>
                        <h3 class="text-whitePrimary text-lg md:text-xl font-bold uppercase leading-tight"
                          style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">
                          Find Your Dream Car</h3>
                        <p class="text-whiteSecondary text-xs md:text-xs font-light leading-tight"
                          style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                      </div>
                      <x-button href="/mediaDetail" text="Baca Selengkapnya" color="text" padding=""
                        class="text-white" />
                    </div>
                  </div>
                </div>
                <!-- Thumbnail 2 -->
                <div class="h-[140px] md:h-[190px] rounded-xl overflow-hidden shadow-md">
                  <div
                    class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200 h-full">
                    <div class="absolute inset-0 bg-cover bg-center"
                      style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-black/70"></div>
                    <div class="relative z-10 p-6 h-full flex flex-col justify-between">
                      <div>
                        <h3 class="text-whitePrimary text-lg md:text-xl font-bold uppercase leading-tight"
                          style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">
                          Find Your Dream Car</h3>
                        <p class="text-whiteSecondary text-xs md:text-xs font-light leading-tight"
                          style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                      </div>
                      <x-button href="/mediaDetail" text="Baca Selengkapnya" color="text" padding=""
                        class="text-white" />
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>

        {{-- Detail --}}
        <div class="w-full mt-10 mb-40">
          <!-- Car specs detail -->
          <div class="bg-white p-6 rounded-2xl shadow-md">
            <p class="text-blackPrimary text-sm md:text-base font-light">Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit
              amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, </p>
          </div>
        </div>
      </div>

      <script>
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


    </div>




  @endsection
