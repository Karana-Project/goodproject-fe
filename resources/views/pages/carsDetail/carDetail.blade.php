@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section 
    class="h-80 w-full bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"
  >
    <div class="absolute h-80 inset-0 bg-black/70 md:bg-black/70 z-10"></div>
    <div class="absolute top-0 left-0 w-full h-80 bg-gradient-to-b from-transparent to-blackPrimary z-30"></div>

  <div class="relative z-10 flex items-end mb-40 h-full">
    <div class="w-full max-w-screen mx-[10px] md:mx-[80px] flex px-6 py-6">
      <div class="text-center w-full max-w-[1000px]">
        <h2 class="text-whitePrimary text-2xl md:text-4xl font-bold mb-2 md:mb-4 uppercase">Your Next Car is Just a Click Away</h2>
      </div>
    </div>
  </section>
@endsection

@section('content')
<div class="relative mx-auto max-w-screen -mt-20 z-30 px-6">
    <div class="bg-whitePrimary rounded-3xl p-10 shadow-md">
        <div class="w-full px-4 md:px-10 mt-6 mb-10">
        <!-- Breadcrumb -->
        <nav class="text-sm text-whiteSecondary mb-4" aria-label="Breadcrumb">
            <ol class="list-reset flex">
            <li>
                <a href="/" class="hover:underline text-blackSecondary font-light">Cars</a>
                <span class="mx-2">/</span>
            </li>
            <li>
                <a href="/carCollections" class="hover:underline text-blackSecondary font-light">Cars Collections</a>
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
        <img
            src="/images/hero-images-1.jpg"
            alt="Main car"
            class="absolute top-0 left-0 w-full h-full object-cover"
        />
        </div>

      <!-- Thumbnails -->
<div class="flex gap-4 mt-4">

  <div class="w-full max-w-xs rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer aspect-[16/9]">
    <img
      src="/images/car-wash.jpg"
      alt="Thumb 1"
      class="w-full h-full object-cover"
    />
  </div>

  <div class="w-full max-w-xs rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer aspect-[16/9]">
    <img
      src="/images/hero-images-1.jpg"
      alt="Thumb 2"
      class="w-full h-full object-cover"
    />
  </div>

  <div class="w-full max-w-xs rounded-2xl overflow-hidden border-2 border-transparent hover:border-blackPrimary cursor-pointer aspect-[16/9]">
    <img
      src="/images/hero-images-1.jpg"
      alt="Thumb 3"
      class="w-full h-full object-cover"
    />
  </div>

</div>







      <!-- Car specs detail -->
      <div class="mt-8 bg-white p-6 rounded-2xl shadow">
        <h2 class="text-2xl font-semibold text-blackPrimary mb-4">Car Specifications</h2>
        <ul class="space-y-3 text-blackSecondary font-light">
          <li><strong>Make:</strong> Toyota</li>
          <li><strong>Model:</strong> Camry</li>
          <li><strong>Year:</strong> 2022</li>
          <li><strong>Engine:</strong> 2.5L 4-cylinder</li>
          <li><strong>Transmission:</strong> Automatic</li>
          <li><strong>Fuel Type:</strong> Gasoline</li>
          <li><strong>Mileage:</strong> 10,000 km</li>
          <li><strong>Color:</strong> Black</li>
        </ul>
      </div>
    </div>

            <!-- Filter Sidebar -->
            <aside class="md:col-span-1">
            <div class="sticky top-24 bg-white p-4 rounded-2xl shadow">
                <h2 class="text-xl text-blackPrimary font-semibold uppercase border-b border-blackPrimary border-l first:border-l-0 pb-4 mb-6">Filter</h2>
                <!-- Filter form / checkboxes / dropdown -->
                <form>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-blackPrimary uppercase">type</label>
                    <div class="mt-2 space-y-1 text-blackSecondary font-light">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox bg-whitePrimary accent-blackPrimary" />
                        <span>Sedan</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox bg-whitePrimary accent-blackPrimary" />
                        <span>SUV</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox bg-whitePrimary accent-blackPrimary" />
                        <span>Hacthback</span>
                    </label>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-blackPrimary uppercase">year</label>
                        <div class="flex items-center space-x-2 mt-2">
                            <input
                            type="number"
                            placeholder="Min"
                            class="text-blackSecondary w-full px-3 py-1.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blackSecondary"
                            />
                            <span class="text-blackSecondary">-</span>
                            <input
                            type="number"
                            placeholder="Max"
                            class="text-blackSecondary w-full px-3 py-1.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blackSecondary"
                            />
                        </div>
                </div>
                    <!-- Buttons -->
                        <button
                        type="reset"
                        class="w-full py-2 px-4 bg-white font-medium text-sm text-blackPrimary uppercase border border-blackPrimary rounded-xl hover:bg-gray-100 transition mt-4 mb-2"
                        >
                        Reset
                        </button>
                        <button
                        type="submit"
                        class="w-full py-3 px-4 font-medium text-sm text-blackPrimary uppercase bg-blackPrimary text-white rounded-xl hover:bg-black transition"
                        >
                        Apply filter
                        </button>
                </form>
            </div>
            </aside>
        </div>
        </div>

{{-- other Collections --}}
<div class="w-full mt-20 md:px-4">
  <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
    <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
      Other<br>Collections
    </h2>
  </div>
    <main class="md:col-span-3">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @for ($i = 0; $i < 3; $i++)
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
        @endfor
      </div>
    </main>
      </div>

    </div>
</div>

@endsection