@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section 
    class="h-screen w-full bg-cover bg-center flex items-center justify-end"
    style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"
  >
    <div class="absolute inset-0 bg-black/70 md:bg-black/50 z-10"></div>
    <div div class="hidden md:block absolute inset-0 bg-gradient-to-l from-black/60 to-transparent z-20"></div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-b from-transparent to-blackPrimary z-30"></div>

  <div class="relative z-20 flex items-center h-full">
    <div class="w-full max-w-screen mx-[10px] md:mx-[80px] flex md:justify-end px-6 py-6">
      <div class="text-center md:text-right w-full max-w-[1000px]">
        <h1 class="text-whitePrimary text-4xl md:text-6xl font-bold mb-2 md:mb-4 uppercase">Where Exceptional Cars Find New Owners</h1>
        <p class="text-whitePrimary font-light text-lg md:text-xl mb-6">Buy and sell luxury vehicles with confidence and ease</p>
        <x-button href="#Learn More" text="find now" color="outline" padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
      </div>
    </div>
  </section>
@endsection

@section('content')
<div class="relative mx-auto max-w-screen -mt-20 z-30 px-6">
  <div class="bg-whitePrimary rounded-3xl p-10 shadow-md">
    
  {{-- Why Choose Us --}}
    <div class="flex flex-col md:flex-row items-center md:items-center text-center md:text-left mt-10">
      <!-- Judul -->
      <h1 class="text-blackPrimary text-3xl md:text-4xl font-medium uppercase w-full md:w-1/3 mb-8 md:mb-0">
        Why choose<br>us
      </h1>

        
      <!-- Statistik -->
        <div class="flex flex-col sm:flex-row gap-6 md:gap-12 md:w-2/3 items-center justify-end w-full">
          <!-- Card 1 -->
          <div class="w-full pb-4 md:pb-0 border-b border-blackPrimary sm:border-b-0 sm:border-l sm:first:border-l-0 px-8">
            <h2 class="text-blackPrimary text-5xl md:text-[48px] md:mb-2 font-semibold">500+</h2>
            <p class="text-blackSecondary text-sm md:text-base">Listed Post</p>
          </div>

          <!-- Card 2 -->
          <div class="w-full pb-4 md:pb-0 border-b border-blackPrimary sm:border-b-0 sm:border-l sm:first:border-l-0 px-8">
            <h2 class="text-blackPrimary text-5xl md:text-[48px] md:mb-2 font-semibold">200+</h2>
            <p class="text-blackSecondary text-sm md:text-base">Happy Customers</p>
          </div>

          <!-- Card 3 -->
          <div class="w-full pb-4 md:pb-0 border-b border-blackPrimary sm:border-b-0 sm:border-l sm:first:border-l-0 px-8">
            <h2 class="text-blackPrimary text-5xl md:text-[48px] md:mb-2 font-semibold">5+</h2>
            <p class="text-blackSecondary text-sm md:text-base">Years Experience</p>
          </div>
        </div>
      </div>

      <!-- Deskripsi -->
      <div class="mt-6 md:mt-8 flex justify-end flex flex-col md:flex-row items-center">
        <p class="text-blackSecondary text-sm md:text-base text-center md:text-left max-w-3xl mx-auto md:mx-0">
          Good Cars menawarkan mobil bekas berkualitas dan mobil modifikasi yang siap digunakan, seluruh unit telah melalui proses inspeksi menyeluruh untuk memastikan kenyamanan, keamanan, dan performa optimal; tersedia berbagai metode pembayaran seperti cash, kredit, maupun tukar tambah, serta dilengkapi layanan towing untuk pengantaran langsung ke lokasi pelanggan, menjadikan proses pembelian mobil lebih praktis dan terpercaya.
        </p>
      </div>

{{-- Collections --}}
<div class="w-full mt-20 md:px-4">
  <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
    <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
      View Our<br>Collections
    </h2>
    <x-button href="#Learn More" text="view all" color="text" padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
  </div>
  <!-- Swiper -->
       <div class="relative">
          <!-- Swiper Container -->
          <div class="swiper collectionsSwiper">
            <div class="swiper-wrapper">
              @for ($i = 0; $i < 5; $i++)
                <div class="swiper-slide">
                  <x-car-card
                    image="images/hero-images-1.jpg"
                    name="Porsche 911"
                    brand="Porsche"
                    year="2024"
                    km="6000"
                    transmission="Automatic"
                    seats="2"
                    price="2000000000"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                  />
                </div>
              @endfor
            </div>
          </div>

          <!-- Scrollbar + Navigation satu baris di bawah slide -->
          <div class="flex items-center mt-6 px-2">
            {{-- Scrollbar: override posisi absolute Swiper --}}
            <div
              class="swiper-scrollbar collections-scrollbar flex-grow h-2 bg-gray-200 rounded-full"
              style="position: static; top: auto; left: auto; transform: none;"
            ></div>

            {{-- Spacer (jarak antara scrollbar dan tombol) --}}
            <div class="hidden md:w-14"></div>

            {{-- Tombol navigasi: override posisi absolute Swiper --}}
            <div class="hidden md:flex items-center gap-4">
              <button id="collections-prev" class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
              </button>
              <button id="collections-next" class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

<!-- buy or sell -->
<div class="w-full mt-20 md:px-4">
  <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
    <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
      Buy or sell, we've<br>Got you covered
    </h2>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Card 1 -->
    <div class="bg-whitePrimary rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-200">
      <h3 class="text-blackPrimary text-xl font-bold uppercase mb-1">Find Your Dream Car</h3>
      <p class="text-blackSecondary text-sm mb-14">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
      </p>
      <x-button href="#Learn More" text="Buy Car Now" color="text" padding="" />
    </div>
        <!-- Card 2 -->
    <div class="bg-whitePrimary rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-200">
      <h3 class="text-blackPrimary text-xl font-bold uppercase mb-1">Sell or Trade Your Car</h3>
      <p class="text-blackSecondary text-sm mb-14">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
      </p>
      <x-button href="#Learn More" text="Sell or Trade now" color="text" padding="" />
    </div>
</div>

<!-- reviews -->
<div class="w-full mt-20 md:px-4">
  <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
    <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
      Customer<br>reviews
    </h2>
  </div>
    <!-- Swiper -->
       <div class="relative">
          <!-- Swiper Container -->
          <div class="swiper reviewsSwiper">
            <div class="swiper-wrapper">
              @for ($i = 0; $i < 5; $i++)
                <div class="swiper-slide">
                  <x-review-card
                    name="John Doe" 
                    date="June 01, 2025" 
                    rating="5" 
                    comment="Pelayanan sangat memuaskan, mobil dalam kondisi prima dan sopirnya ramah sekali!"
                  />
                </div>
              @endfor
            </div>
          </div>

          <!-- Scrollbar + Navigation satu baris di bawah slide -->
          <div class="flex items-center mt-6 px-2">
            {{-- Scrollbar: override posisi absolute Swiper --}}
            <div
              class="swiper-scrollbar reviews-scrollbar flex-grow h-2 bg-gray-200 rounded-full"
              style="position: static; top: auto; left: auto; transform: none;"
            ></div>

            {{-- Spacer (jarak antara scrollbar dan tombol) --}}
            <div class="hidden md:w-14"></div>

            {{-- Tombol navigasi: override posisi absolute Swiper --}}
            <div class="hidden md:flex items-center gap-4">
              <button id="reviews-prev" class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
              </button>
              <button id="reviews-next" class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
</div>

<!-- other page -->
 <div class="w-full mt-20 md:px-4">
  <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
    <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
      Good<br>wash
    </h2>
  </div>
  <div class="flex flex-col md:flex-row items-end md:justify-between md:text-left mb-8">
    <div>
      <p class="text-blackPrimary font-bold text-sm md:text-base mb-2 uppercase">
        PREMIUM CAR WASH&nbsp;&nbsp;|&nbsp;&nbsp;DETAILING&nbsp;&nbsp;|&nbsp;&nbsp;INTERIOR
      </p>
      <p class="text-blackSecondary text-sm md:text-base mb-8">
        Experience top-tier car care with our premium wash and detailing services. We meticulously clean, polish, and protect every inch of your vehicle—inside and out.
      </p>
      <x-button href="#Learn More" text="Learn More" color="text" padding="" />
    </div>
    <div class="w-full rounded-lg overflow-hidden ml-8">
      <img
        src="{{ asset('images/car-wash.jpg') }}"
        alt="Good Wash"
        class="w-full h-full object-cover rounded-lg"
      />
    </div>
  </div>
</div>

<!-- Good media -->
<div class="w-full mt-20 md:px-4">
  <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
    <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
      Good<br>Media
    </h2>
    <x-button href="#Learn More" text="learn more" color="text" padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
  </div>

  <!-- Wrapper agar kotak besar dan kecil sejajar -->
  <div class="flex flex-col md:flex-row gap-4">
    <!-- Kotak besar kiri -->
    <div class="w-full md:w-2/3 h-[300px] md:h-[400px] rounded-xl overflow-hidden shadow-md">
      <iframe 
        class="w-full h-full"
        src="https://www.youtube.com/embed/y-r4ktDsasA?si=PrGZDiirv3CDbro5" 
        title="YouTube video"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>

    <!-- Dua kotak kecil kanan -->
    <div class="w-full md:w-1/3 flex flex-col gap-4">
      <!-- Thumbnail 1 -->
      <div class="h-[140px] md:h-[190px] rounded-xl overflow-hidden shadow-md">
      <iframe 
        class="w-full h-full"
        src="https://www.youtube.com/embed/_uHKUnALQXI?si=JoHrcIkIsNDBw2vB" 
        title="YouTube video"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
      </div>
      <!-- Thumbnail 2 -->
      <div class="h-[140px] md:h-[190px] rounded-xl overflow-hidden shadow-md">
      <iframe 
        class="w-full h-full"
        src="https://www.youtube.com/embed/_bZY4Z1cDFA?si=MoGORBWK-VIw9PDO" 
        title="YouTube video"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
      </div>
    </div>
  </div>
</div>

<!-- Frequently Asked Questions -->
<div class="w-full mt-20 md:px-4 mb-40">
  <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
    <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
      Frequently asked<br>questions
    </h2>
  </div>

  <!-- Accordion Container -->
  <div id="accordion-collapse" data-accordion="collapse" class="space-y-4">
    
    <!-- Item 1 -->
  <div class="rounded-xl shadow-md">
    <h2 id="accordion-collapse-heading-1">
      <button
        type="button"
        class="peer flex items-center justify-between w-full p-5 font-medium text-left border-b rounded-t-xl !bg-whitePrimary peer-aria-expanded:!bg-whiteSecondary !text-blackPrimary transition-all"
        data-accordion-target="#accordion-collapse-body-1"
        aria-expanded="false"
        aria-controls="accordion-collapse-body-1"
      >
        <span>What is Flowbite?</span>
        <svg 
          data-accordion-icon 
          class="w-3 h-3 transform rotate-0 transition-transform duration-300 shrink-0 peer-aria-expanded:rotate-180"
          aria-hidden="true" 
          xmlns="http://www.w3.org/2000/svg" 
          fill="none" 
          viewBox="0 0 10 6"
        >
          <path 
            stroke="currentColor" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" 
            d="M9 5 5 1 1 5"
          />
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
      <div class="p-5 border-t text-gray-600">
        Flowbite is an open-source library of interactive components built on top of Tailwind CSS.
      </div>
    </div>
  </div>

    <!-- Item 2 -->
  <div class="rounded-xl shadow-md">
    <h2 id="accordion-collapse-heading-2">
      <button
        type="button"
        class="peer flex items-center justify-between w-full p-5 font-medium text-left border-b rounded-t-xl !bg-whitePrimary peer-aria-expanded:!bg-whiteSecondary !text-blackPrimary transition-all"
        data-accordion-target="#accordion-collapse-body-2"
        aria-expanded="false"
        aria-controls="accordion-collapse-body-2"
      >
        <span>What is Flowbite?</span>
        <svg 
          data-accordion-icon 
          class="w-3 h-3 transform rotate-0 transition-transform duration-300 shrink-0 peer-aria-expanded:rotate-180"
          aria-hidden="true" 
          xmlns="http://www.w3.org/2000/svg" 
          fill="none" 
          viewBox="0 0 10 6"
        >
          <path 
            stroke="currentColor" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" 
            d="M9 5 5 1 1 5"
          />
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
      <div class="p-5 border-t text-gray-600">
        Flowbite is an open-source library of interactive components built on top of Tailwind CSS.
      </div>
    </div>
  </div>

    <!-- Item 3 -->
  <div class="rounded-xl shadow-md">
    <h2 id="accordion-collapse-heading-3">
      <button
        type="button"
        class="peer flex items-center justify-between w-full p-5 font-medium text-left border-b rounded-t-xl !bg-whitePrimary peer-aria-expanded:!bg-whiteSecondary !text-blackPrimary transition-all"
        data-accordion-target="#accordion-collapse-body-3"
        aria-expanded="false"
        aria-controls="accordion-collapse-body-3"
      >
        <span>What is Flowbite?</span>
        <svg 
          data-accordion-icon 
          class="w-3 h-3 transform rotate-0 transition-transform duration-300 shrink-0 peer-aria-expanded:rotate-180"
          aria-hidden="true" 
          xmlns="http://www.w3.org/2000/svg" 
          fill="none" 
          viewBox="0 0 10 6"
        >
          <path 
            stroke="currentColor" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" 
            d="M9 5 5 1 1 5"
          />
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
      <div class="p-5 border-t text-gray-600">
        Flowbite is an open-source library of interactive components built on top of Tailwind CSS.
      </div>
    </div>
  </div>
  </div>

</div>


<!-- SwiperJS -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
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
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
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
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
    });
  });
</script>

  </div>
</div>




@endsection