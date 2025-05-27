@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section 
    class="h-screen w-full bg-cover bg-center flex items-center justify-end"
    style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"
  >
    <div class="absolute inset-0 bg-black/40 z-10"></div>
    <div div class="absolute inset-0 bg-gradient-to-l from-black/60 to-transparent z-20"></div>

  <div class="relative z-20 flex items-center h-full">
    <div class="w-full max-w-screen mx-[80px] flex justify-end px-6 py-6">
      <div class="text-right w-full max-w-[1000px]">
        <h1 class="text-whitePrimary text-4xl md:text-6xl font-bold mb-4 uppercase">Where Exceptional Cars Find New Owners</h1>
        <p class="text-whitePrimary font-light text-lg md:text-xl mb-6">Buy and sell luxury vehicles with confidence and ease</p>
        <a href="#menu" class="inline-block bg-white text-black font-semibold py-3 px-6 rounded hover:bg-gray-200 transition">Explore Menu</a>
      </div>
    </div>
  </section>
@endsection

@section('content')
  {{-- Konten halaman lain --}}
@endsection