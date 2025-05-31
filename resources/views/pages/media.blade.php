@extends('layouts.app')

@section('title', 'Good Wash')

<section class="bg-cover bg-center text-white py-24 px-6" style="background-image: url('/path-to-your-hero-image.jpg')">
    <div class="max-w-6xl mx-auto text-center">
      <h1 class="text-4xl md:text-5xl font-bold leading-tight">YOUR WINDOW INTO THE <br /> CAR SCENE</h1>
      <p class="mt-6 max-w-xl mx-auto">Good Media adalah platform kreatif yang menyajikan informasi seputar event mobil, video vlog otomotif, dan layanan video cinematic profesional.</p>
      <button class="mt-6 bg-white text-black px-6 py-2 rounded-full font-semibold">EXPLORE NOW</button>
    </div>
  </section>

  <!-- THIS WEEK IN MOTION -->
  <section class="bg-white py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-semibold mb-6">THIS WEEK IN MOTION</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-black text-white p-6 rounded-lg flex flex-col justify-end" style="background-image: url('/path-car1.jpg'); background-size: cover; height: 300px">
          <h3 class="text-lg font-bold">HERE'S THE UPDATE OF THE DAY</h3>
          <p class="text-sm mt-1">Lorem ipsum dolor sit amet...</p>
          <a href="#" class="mt-2 underline text-sm">READ MORE</a>
        </div>
        <div class="grid grid-rows-3 gap-4">
          <div class="bg-gray-200 p-4 rounded-lg">HERE'S THE UPDATE</div>
          <div class="bg-gray-200 p-4 rounded-lg">HERE'S THE UPDATE</div>
          <div class="bg-gray-200 p-4 rounded-lg">HERE'S THE UPDATE</div>
        </div>
      </div>
    </div>
  </section>

  <!-- EVENT OF THE WEEK -->
  <section class="bg-gray-100 py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-semibold mb-6">EVENT OF THE WEEK</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow p-4">
          <img src="/event1.jpg" alt="event" class="rounded-md mb-2" />
          <h3 class="font-bold">MANDALIKA TRACK DAY</h3>
          <p class="text-sm">ALL CARS ALLOWED</p>
          <p class="text-xs mt-2">13 Dec | 08:00 WITA</p>
          <button class="mt-2 bg-black text-white px-4 py-2 rounded">JOIN NOW</button>
        </div>
        <!-- Card 2 & 3 similar structure -->
      </div>
    </div>
  </section>

  <!-- WATCH THE RIDE -->
  <section class="bg-white py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-semibold mb-6">WATCH THE RIDE</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-black rounded-lg overflow-hidden relative">
          <img src="/video1.jpg" alt="BMW video" class="w-full" />
          <button class="absolute inset-0 m-auto w-16 h-16 bg-white text-black rounded-full">▶</button>
        </div>
        <div class="grid grid-rows-3 gap-4">
          <div class="relative bg-gray-300 rounded-md">VIDEO 1</div>
          <div class="relative bg-gray-300 rounded-md">VIDEO 2</div>
          <div class="relative bg-gray-300 rounded-md">VIDEO 3</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CAPTURE YOUR CAR IN MOTION -->
  <section class="bg-gray-100 py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-semibold mb-6">CAPTURE YOUR CAR IN MOTION</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-4 rounded shadow text-center">
          <img src="/capture1.jpg" alt="Single Package" class="rounded mb-2" />
          <h3 class="font-bold">SINGLE PACKAGE</h3>
          <p class="text-red-600">Rp.1.000.000</p>
          <p class="text-sm mt-2">Lorem ipsum dolor sit amet...</p>
          <button class="mt-3 bg-black text-white px-4 py-2 rounded">CONTACT NOW</button>
        </div>
        <!-- Repeat for GROUP PACKAGE -->
      </div>
    </div>
  </section>

  <!-- COMPLETE CAR EXPERIENCE -->
  <section class="bg-white py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-semibold mb-6">COMPLETE CAR EXPERIENCE: BUY OR CARE</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-gray-200 rounded-md p-6">
          <h3 class="font-bold">GOOD CAR</h3>
          <p class="text-sm">Buy and sell luxury vehicles...</p>
          <a href="#" class="mt-2 inline-block underline">LEARN MORE</a>
        </div>
        <div class="bg-gray-200 rounded-md p-6">
          <h3 class="font-bold">GOOD WASH</h3>
          <p class="text-sm">Premium car wash & detailing...</p>
          <a href="#" class="mt-2 inline-block underline">LEARN MORE</a>
        </div>
      </div>
    </div>
  </section>
