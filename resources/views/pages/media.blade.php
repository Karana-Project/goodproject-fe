@extends('layouts.app')

@section('title', 'Good Wash')

@section('hero')
  <section class="h-screen w-full bg-cover bg-center flex items-center justify-end"
    style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');">
    <div class="absolute inset-0 bg-black/70 md:bg-black/50 z-10"></div>
    <div div class="hidden md:block absolute inset-0 bg-gradient-to-l from-black/60 to-transparent z-20"></div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-b from-transparent to-blackPrimary z-30"></div>

    <div class="relative z-20 flex items-center h-full">
      <div class="w-full max-w-screen mx-[10px] md:mx-[80px] flex md:justify-end px-6 py-6">
        <div class="text-center md:text-right w-full max-w-[1000px]">
          <h1 class="text-whitePrimary text-4xl md:text-6xl font-bold mb-2 md:mb-4 uppercase">Your Window Into the Car
            Scene

          </h1>
          <p class="text-whitePrimary font-light text-lg md:text-xl mb-6">Good Media adalah platform kreatif yang
            menyajikan informasi seputar event mobil, video vlog otomotif, dan layanan video cinematic profesional. Ingin
            update dunia otomotif atau butuh dokumentasi cinematic untuk mobil atau event Anda? Good Media siap bantu
            wujudkannya!

          </p>
          <x-button href="#Learn More" text="explore now" color="outline"
            padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
        </div>
      </div>
  </section>
@endsection

@section('content')
  <!-- Main Container for all sections except hero and footer -->
  <div class="relative mx-auto max-w-screen -mt-20 z-30 px-6">
    <div class="bg-whitePrimary rounded-3xl p-10 shadow-md">

      <section class="w-full mt-10 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-blackPrimary text-3xl md:text-4xl font-medium uppercase leading-tight">
            This Month in<br>motion
          </h2>
        </div>
        <div class="flex flex-col md:flex-row gap-4">
          <!-- Kotak besar kiri -->
          <div onclick="window.location='/mediaDetail'" class="cursor-pointer w-full md:w-2/3 h-[300px] md:h-[400px] rounded-xl overflow-hidden shadow-md">
            <div
              class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200 h-full">
              <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
              <div class="absolute inset-0 bg-black/70"></div>
              <div class="relative z-10 p-8 md:p-10 h-full flex flex-col justify-between">
                <div>
                  <h3 class="text-whitePrimary text-xl md:text-3xl font-bold uppercase">Find Your Dream Car</h3>
                  <p class="text-whiteSecondary text-sm mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                  </p>
                </div>
                <x-button href="/mediaDetail" text="read more" color="text" padding="" class="text-white" />
              </div>
            </div>
          </div>


          <!-- Dua kotak kecil kanan -->
          <div class="w-full md:w-1/3 flex flex-col gap-4">
            <!-- Thumbnail 1 -->
            <div onclick="window.location='/mediaDetail'" class="cursor-pointer h-[140px] md:h-[190px] rounded-xl overflow-hidden shadow-md">
              <div
                class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200 h-full">
                <div class="absolute inset-0 bg-cover bg-center"
                  style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
                <div class="absolute inset-0 bg-black/70"></div>
                <div class="relative z-10 p-6 md:p-8 h-full flex flex-col justify-between">
                  <div>
                    <h3 class="text-whitePrimary text-lg md:text-xl font-bold uppercase">Find Your Dream Car</h3>
                    <p class="text-whiteSecondary text-2xs md:text-xs mb-6">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>
                  <x-button href="/mediaDetail" text="read more" color="text" padding="" class="text-white" />
                </div>
              </div>
            </div>
            <!-- Thumbnail 2 -->
            <div onclick="window.location='/mediaDetail'" class="cursor-pointer h-[140px] md:h-[190px] rounded-xl overflow-hidden shadow-md">
              <div
                class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200 h-full">
                <div class="absolute inset-0 bg-cover bg-center"
                  style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
                <div class="absolute inset-0 bg-black/70"></div>
                <div class="relative z-10 p-6 md:p-8 h-full flex flex-col justify-between">
                  <div>
                    <h3 class="text-whitePrimary text-lg md:text-xl font-bold uppercase">Find Your Dream Car</h3>
                    <p class="text-whiteSecondary text-2xs md:text-xs mb-6">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>
                  <x-button href="/mediaDetail" text="read more" color="text" padding="" class="text-white" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- event --}}
      <div class="w-full mt-20 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8 md:mb-4">
          <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
            event of the<br>month
          </h2>
        </div>
        <!-- Swiper -->
        <div class="relative">
          <!-- Swiper Container -->
          <div class="swiper eventsSwiper">
            <div class="swiper-wrapper">
              @for ($i = 0; $i < 5; $i++)
                <div class="swiper-slide">
                  <x-event-card image="images/hero-images-1.jpg" name="Mandalika Track Day" regulation="all cars allowed"
                    date="31 May 2025" time="08.00 WITA" location="Pertamina Mandalika Circuit, Lombok, NTB"
                    ticket="FREE ENTRY"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
                </div>
              @endfor
            </div>
          </div>

          <!-- Scrollbar + Navigation satu baris di bawah slide -->
          <div class="flex items-center mt-6 px-2">
            {{-- Scrollbar: override posisi absolute Swiper --}}
            <div class="swiper-scrollbar events-scrollbar flex-grow h-2 bg-gray-200 rounded-full"
              style="position: static; top: auto; left: auto; transform: none;">
            </div>

            {{-- Spacer (jarak antara scrollbar dan tombol) --}}
            <div class="hidden md:flex w-14"></div>

            {{-- Tombol navigasi: override posisi absolute Swiper --}}
            <div class="hidden md:flex items-center gap-4">
              <button id="events-prev"
                class="border rounded-xl px-4 py-2 bg-transparent border-blackPrimary transition transform duration-200 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="black" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
              </button>
              <button id="events-next"
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

      <!-- youtube -->
      <div class="w-full mt-20 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight mb-8 md:mb-0">
            Good<br>Media
          </h2>
          <x-button href="#Learn More" text="learn more" color="text"
            padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
        </div>

        <!-- Wrapper agar kotak besar dan kecil sejajar -->
        <div class="flex flex-col md:flex-row gap-4">
          <!-- Kotak besar kiri -->
          <div class="w-full md:w-2/3 h-[300px] md:h-[400px] rounded-xl overflow-hidden shadow-md">
            <iframe class="w-full h-full" src="https://www.youtube.com/embed/y-r4ktDsasA?si=PrGZDiirv3CDbro5"
              title="YouTube video" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>

          <!-- Dua kotak kecil kanan -->
          <div class="w-full md:w-1/3 flex flex-col gap-4">
            <!-- Thumbnail 1 -->
            <div class="h-[140px] md:h-[190px] rounded-xl overflow-hidden shadow-md">
              <iframe class="w-full h-full" src="https://www.youtube.com/embed/_uHKUnALQXI?si=JoHrcIkIsNDBw2vB"
                title="YouTube video" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
            </div>
            <!-- Thumbnail 2 -->
            <div class="h-[140px] md:h-[190px] rounded-xl overflow-hidden shadow-md">
              <iframe class="w-full h-full" src="https://www.youtube.com/embed/_bZY4Z1cDFA?si=MoGORBWK-VIw9PDO"
                title="YouTube video" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
      </div>

      {{-- video package --}}
      <div class="w-full mt-20 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-blackPrimary text-3xl md:text-4xl font-medium uppercase leading-tight">
            Capture Your Car<br>in Motion
          </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          {{-- card 1 --}}
          <div class="bg-white rounded-3xl shadow-md overflow-hidden w-full mx-auto sm:max-w-full">
            <img src="images/hero-images-1.jpg" alt="" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
              <h3
                class="text-lg font-bold text-black uppercase border-b border-whiteSecondary border-l first:border-l-0 pb-2 mb-2">
                Single PACKAGE</h3>
              <p class="text-blackSecondary text-xs">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="mt-3 md:mt-5 p-4 flex justify-center md:justify-between items-center z-10">
              <p class="text-blackSecondary font-light text-2xs md:text-xs">*Contact us for the price</p>
              <x-button href="#Learn More" text="ask the price" color="primary" size="sm"
                class="w-full justify-between md:w-auto" />
            </div>
          </div>
          {{-- card 2 --}}
          <div class="bg-white rounded-3xl shadow-md overflow-hidden w-full mx-auto sm:max-w-full">
            <img src="images/hero-images-1.jpg" alt="" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
              <h3
                class="text-lg font-bold text-black uppercase border-b border-whiteSecondary border-l first:border-l-0 pb-2 mb-2">
                Group PACKAGE</h3>
              <p class="text-blackSecondary text-xs">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="mt-3 md:mt-5 p-4 flex justify-center md:justify-between items-center z-10">
              <p class="text-blackSecondary font-light text-2xs md:text-xs">*Contact us for the price</p>
              <x-button href="#Learn More" text="ask the price" color="primary" size="sm"
                class="w-full justify-between md:w-auto" />
            </div>
          </div>
        </div>
      </div>

      <!-- car & wash -->
      <div class="w-full mt-20 md:px-4 mb-10">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
            Complete Car Experience:<br>Buy or Care
          </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Card 1 -->
          <div class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
            <div class="absolute inset-0 bg-cover bg-center"
              style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="justify between">
              <div class="relative z-10 px-6 py-10 justify between">
                <h3 class="text-whitePrimary text-xl font-bold uppercase mb-1">good car</h3>
                <p class="text-whiteSecondary text-sm mb-14">
                  Buy and sell luxury vehicles with confidence and ease.
                </p>
                <div>
                  <x-button href="#Learn More" text="learn more" color="text" padding="" class="text-white" />
                </div>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
            <div class="absolute inset-0 bg-cover bg-center"
              style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="justify between">
              <div class="relative z-10 px-6 py-10 justify between">
                <h3 class="text-whitePrimary text-xl font-bold uppercase mb-1">good wash</h3>
                <p class="text-whiteSecondary text-sm mb-14">
                  Premium Car Wash & Detailing Services to Keep Your Vehicle Spotless.
                </p>
                <div>
                  <x-button href="#Learn More" text="learn more" color="text" padding="" class="text-white" />
                </div>
              </div>
            </div>
          </div>
        </div>



        <!-- SwiperJS -->
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            // Swiper untuk Collections
            new Swiper('.eventsSwiper', {
              slidesPerView: 1.1,
              spaceBetween: 16,
              grabCursor: true,
              loop: false,
              navigation: {
                nextEl: '#events-next',
                prevEl: '#events-prev',
              },
              scrollbar: {
                el: '.events-scrollbar',
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
        </script>

      </div>
    </div>


  @endsection
