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
    <div class="flex flex-col md:flex-row items-start md:items-center">
      <!-- Judul -->
      <h1 class="text-blackPrimary text-2xl md:text-4xl font-medium uppercase md:w-1/3">
        Why choose<br>us
      </h1>

        
      <!-- Statistik -->
        <div class="flex flex-col sm:flex-row gap-6 md:gap-12 md:w-2/3 items-center justify-end">
          <!-- Card 1 -->
          <div class="border-l-0 sm:border-l sm:first:border-l-0 sm:border-blackPrimary">
            <h2 class="text-blackPrimary text-2xl md:text-[48px] mb-2 font-semibold">500+</h2>
            <p class="text-blackSecondary text-sm md:text-base">Listed Post</p>
          </div>

          <!-- Card 2 -->
          <div class="px-8 border-l-0 sm:border-l sm:first:border-l-0 sm:border-blackPrimary">
            <h2 class="text-blackPrimary text-2xl md:text-[48px] mb-2 font-semibold">200+</h2>
            <p class="text-blackSecondary text-sm md:text-base">Happy Customers</p>
          </div>

          <!-- Card 3 -->
          <div class="px-8 border-l-0 sm:border-l sm:first:border-l-0 sm:border-blackPrimary">
            <h2 class="text-blackPrimary text-2xl md:text-[48px] mb-2 font-semibold">5+</h2>
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
  </div>
</div>

  {{-- Koleksi --}}
  
@endsection