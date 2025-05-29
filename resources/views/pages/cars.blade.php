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
    <div class="flex flex-col md:flex-row items-center md:items-center text-center md:text-left">
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
<div class="w-full mt-20 px-4">
  <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
    <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">View Our<br>Collections</h2>
      <x-button href="#Learn More" text="view all" color="text" padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
  </div>
  
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
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
</div>


  </div>
</div>


  
  
@endsection