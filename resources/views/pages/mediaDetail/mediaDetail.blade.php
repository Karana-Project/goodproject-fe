@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section class="h-80 w-full bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');">
    <div class="absolute h-80 inset-0 bg-black/70 md:bg-black/70 z-10"></div>
    <div class="absolute top-0 left-0 w-full h-80 bg-gradient-to-b from-transparent to-blackPrimary z-30"></div>

    <div class="relative z-10 flex items-end mb-40 h-full">
      <div class="w-full max-w-screen mx-[10px] md:mx-[80px] flex px-6 py-6">
        <div class="text-center w-full max-w-[1000px]">
          <h2 class="text-whitePrimary text-2xl md:text-4xl font-bold mb-2 md:mb-4 uppercase">Your Next Car is Just a Click
            Away</h2>
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
                <img id="mainImage" src="" alt="Main car"
                  class="absolute top-0 left-0 w-full h-full object-cover" />
              </div>
              <!-- Thumbnails -->
              <div class="flex gap-0 md:gap-4 mt-2 md:mt-4">
                <div
                  class="thumb w-full max-w-xs rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer aspect-[16/9]"
                  data-src="/images/car-wash.jpg">
                  <img src="/images/car-wash.jpg" alt="Thumb 1" class="w-full h-full object-cover" />
                </div>
                <div
                  class="thumb w-full max-w-xs rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer aspect-[16/9]"
                  data-src="/images/hero-images-1.jpg">
                  <img src="/images/hero-images-1.jpg" alt="Thumb 2" class="w-full h-full object-cover" />
                </div>
                <div
                  class="thumb w-full max-w-xs rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer aspect-[16/9]"
                  data-src="/images/hero-images-1.jpg">
                  <img src="/images/hero-images-1.jpg" alt="Thumb 3" class="w-full h-full object-cover" />
                </div>
              </div>
            </div>

            <!-- Detail Sidebar -->
            <aside class="hidden md:block md:col-span-1">
              <h1 class="text-blackPrimary text-lg md:text-2xl font-medium uppercase leading-tight mb-4">
                Another Update
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
                      <x-button href="/mediaDetail" text="read more" color="text" padding="" class="text-white" />
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
                      <x-button href="/mediaDetail" text="read more" color="text" padding="" class="text-white" />
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
        const mainImage = document.getElementById('mainImage');
        const thumbnails = document.querySelectorAll('.thumb');
        let currentIndex = 0;
        let interval;

        function setMainImage(index) {
          const newSrc = thumbnails[index].getAttribute('data-src');

          // Tambahkan efek fade
          mainImage.classList.remove('opacity-100');
          mainImage.classList.add('opacity-0');

          setTimeout(() => {
            mainImage.setAttribute('src', newSrc);
            mainImage.classList.remove('opacity-0');
            mainImage.classList.add('opacity-100');
          }, 300);

          thumbnails.forEach(t => t.classList.remove('border-blackPrimary'));
          thumbnails[index].classList.add('border-blackPrimary');

          currentIndex = index;
        }

        // Inisialisasi gambar pertama
        if (thumbnails.length > 0) {
          setMainImage(0);
        }

        // Event klik thumbnail
        thumbnails.forEach((thumb, index) => {
          thumb.addEventListener('click', () => {
            clearInterval(interval); // reset auto-slide
            setMainImage(index);
            startAutoSlide(); // restart
          });
        });

        // Auto-slide setiap 5 detik
        function startAutoSlide() {
          interval = setInterval(() => {
            let nextIndex = (currentIndex + 1) % thumbnails.length;
            setMainImage(nextIndex);
          }, 5000);
        }

        startAutoSlide();
      </script>


    </div>




  @endsection
