@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section class="relative h-screen w-full bg-cover bg-center flex items-center justify-end"
    style="background-image: url('{{ asset('images/HERO-IMAGES-01.jpg') }}');">

    <div class="absolute inset-0 bg-black/70 md:bg-black/40 z-10"></div>
    <!-- Gradient bawah -->
    <div
      class="absolute -bottom-1 left-0 w-full h-32 bg-[linear-gradient(to_top,rgba(21,21,21,1),transparent)] z-20 pointer-events-none">
    </div>

    <!-- Gradient kanan -->
    <div
      class="hidden md:block absolute inset-0 bg-[linear-gradient(to_left,rgba(21,21,21,0.8),transparent)] z-20 pointer-events-none">
    </div>


    <div class="relative z-30 flex items-center h-full">
      <div class="w-full max-w-screen mx-[10px] md:mx-[80px] flex md:justify-end px-6 py-6">
        <div class="text-center md:text-right w-full max-w-[1000px]">
          <h1 class="text-whitePrimary text-3xl md:text-6xl font-bold mb-2 md:mb-4 uppercase">Solusi Jual Beli Mobil
            Berkualitas, Aman dan Nyaman</h1>
          <p class="text-whitePrimary font-light text-md md:text-xl mb-6">Mengapa Memilih Kami Pilihan Mobil, Pelanggan
            Puas, Tahun Pengalaman
          </p>
          <x-button href="/carCollections" text="cari sekarang" color="outline"
            padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
        </div>
      </div>
  </section>
@endsection

@section('content')
  <div class="relative mx-auto max-w-screen -mt-20 z-30 px-6">
    <div class="bg-whitePrimary rounded-3xl p-10 shadow-md">

      {{-- Why Choose Us --}}
      <div class="flex flex-col md:flex-row items-center md:items-center text-center md:text-left mt-10 px-4">
        <!-- Judul -->
        <h1 class="text-blackPrimary text-3xl md:text-4xl font-medium uppercase w-full md:w-1/3 mb-10 md:mb-0">
          Mengapa Memilih<br>Kami
        </h1>


        <!-- Statistik -->
        <div class="flex flex-col sm:flex-row gap-6 md:gap-12 md:w-2/3 items-center justify-end w-full">
          <!-- Card 1 -->
          <div
            class="w-full pb-4 md:pb-0 border-b border-blackPrimary sm:border-b-0 sm:border-l sm:first:border-l-0 px-8">
            <h2 class="text-blackPrimary text-5xl md:text-[48px] md:mb-2 font-semibold">10+</h2>
            <p class="text-blackSecondary text-sm md:text-base">Koleksi Mobil</p>
          </div>

          <!-- Card 2 -->
          <div
            class="w-full pb-4 md:pb-0 border-b border-blackPrimary sm:border-b-0 sm:border-l sm:first:border-l-0 px-8">
            <h2 class="text-blackPrimary text-5xl md:text-[48px] md:mb-2 font-semibold">50+</h2>
            <p class="text-blackSecondary text-sm md:text-base">Pelanggan bahagia</p>
          </div>

          <!-- Card 3 -->
          <div
            class="w-full pb-4 md:pb-0 border-b border-blackPrimary sm:border-b-0 sm:border-l sm:first:border-l-0 px-8">
            <h2 class="text-blackPrimary text-5xl md:text-[48px] md:mb-2 font-semibold">5+</h2>
            <p class="text-blackSecondary text-sm md:text-base">Tahun Pengalaman</p>
          </div>
        </div>
      </div>

      <!-- Deskripsi -->
      <div class="mt-6 md:mt-8 flex justify-end flex flex-col md:flex-row items-center">
        <p class="text-blackSecondary text-sm md:text-base text-center md:text-left max-w-3xl mx-auto md:mx-0">
          Good Cars menawarkan mobil bekas berkualitas dan mobil modifikasi yang siap digunakan, seluruh unit telah
          melalui proses inspeksi menyeluruh untuk memastikan kenyamanan, keamanan, dan performa optimal; tersedia
          berbagai metode pembayaran seperti cash, kredit, maupun tukar tambah, serta dilengkapi layanan towing untuk
          pengantaran langsung ke lokasi pelanggan, menjadikan proses pembelian mobil lebih praktis dan terpercaya.
        </p>
      </div>

      {{-- Collections --}}
      <div class="w-full mt-20 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8 md:mb-4">
          <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
            Lihat Koleksi<br>Kami
          </h2>
          <x-button href="/carCollections" text="lihat koleksi" color="text"
            padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem] mt-4" />
        </div>
        <!-- Swiper -->
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

      <!-- buy or sell -->
      <div class="w-full mt-20 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
            Jual Beli, Serahkan<br>Pada Kami
          </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Card 1 -->
          <div onclick="window.location='/mediaDetail'"
            class="cursor-pointer relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
            <div class="absolute inset-0 bg-cover bg-center"
              style="background-image: url('{{ asset('images/CARD-CARS-01.jpg') }}');"></div>
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="relative z-10 px-6 py-10">
              <h3 class="text-whitePrimary text-xl font-bold text-center md:text-start uppercase mb-1">Temukan Mobil
                Impian Anda
              </h3>
              <p class="text-whiteSecondary text-xs md:text-sm text-center md:text-start mb-14">
                Jelajahi koleksi mobil terbaik kami yang telah terinspeksi dan siap menemani perjalanan Anda.
              </p>
              <div class="text-center md:text-start">
                <x-button href="/carCollections" text="Beli Sekarang" color="text" padding="" class="text-white" />
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div onclick="window.location='/mediaDetail'"
            class="cursor-pointer relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
            <div class="absolute inset-0 bg-cover bg-center"
              style="background-image: url('{{ asset('images/CARD-CARS-02.jpg') }}');"></div>
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="relative z-10 px-6 py-10">
              <h3 class="text-whitePrimary text-xl font-bold text-center md:text-start uppercase mb-1">Jual atau Tukar
                Tambah</h3>
              <p class="text-whiteSecondary text-xs md:text-sm text-center md:text-start mb-14">
                Dapatkan penawaran terbaik untuk mobil Anda dengan proses yang cepat, transparan, dan mudah.
              </p>
              <div class="text-center md:text-start">
                <x-button href="#Learn More" text="Jual atau tukar tambah" color="text" padding=""
                  class="text-white" />
              </div>
            </div>
          </div>
        </div>

        <!-- reviews -->
        <div class="w-full mt-20 md:px-4">
          <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
            <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
              Ulasan<br>Pelanggan
            </h2>
            <x-button href="/reviews" text="Tulis Ulasan" color="text"
              padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem] mt-4" />
          </div>
          <!-- Swiper -->
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
      </div>

      <!-- other page -->
      <div class="w-full mt-20 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-blackPrimary text-3xl md:text-4xl font-medium uppercase leading-tight">
            Good<br>wash
          </h2>
        </div>
        <div class="flex flex-col md:flex-row items-end md:justify-between md:text-left mb-8">
          <div>
            <p class="text-blackPrimary font-bold text-sm md:text-base mb-2 text-center md:text-left uppercase">
              PREMIUM WASH&nbsp;&nbsp;|&nbsp;&nbsp;DETAILING&nbsp;&nbsp;|&nbsp;&nbsp;INTERIOR
            </p>
            <p class="text-blackSecondary text-sm md:text-base text-center md:text-left mb-8">
              Cuci kendaraan Premium dengan Sentuhan Profesional. Bikin Mobil Kinclong, Tanpa Ribet
            </p>
            <div class="flex justify-center md:justify-start">
              <x-button href="/wash" text="lihat selengkapnya" color="text" padding="" />
            </div>
          </div>
          <div class="w-full rounded-lg overflow-hidden ml-8 mt-8 md:mt-0">
            <img src="{{ asset('images/CARD-CARS-03.jpg') }}" alt="Good Wash"
              class="w-full h-full object-cover rounded-lg" />
          </div>
        </div>
      </div>

      <!-- Good media -->
      <div class="w-full mt-20 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight mb-8 md:mb-0">
            Good<br>Media
          </h2>
          <x-button href="/media" text="Lihat selengkapnya" color="text"
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
              <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
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
              <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
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
              <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
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
              <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
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
              <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div id="panel5" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
              aria-labelledby="accordion2">
              Ya, harga masih bisa dinegosiasikan langsung sesuai kondisi unit dan kesepakatan. Jangan ragu untuk bertanya
              kepada tim kami untuk mendapatkan penawaran terbaik.
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
      </script>

    </div>
  </div>




@endsection
