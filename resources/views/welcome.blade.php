@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section 
    class="h-screen w-full bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"
  >
    <div class="bg-black bg-opacity-50 p-8 rounded max-w-xl text-center mx-4">
      <h1 class="text-white text-4xl md:text-6xl font-bold mb-4">Welcome to Our Coffee Shop</h1>
      <p class="text-white text-lg md:text-xl mb-6">Discover the best coffee experience with us</p>
      <a href="#menu" class="inline-block bg-white text-black font-semibold py-3 px-6 rounded hover:bg-gray-200 transition">Explore Menu</a>
    </div>
  </section>
@endsection

@section('content')
  {{-- Konten halaman lain --}}
@endsection