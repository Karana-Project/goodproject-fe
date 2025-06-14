@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
  <section class="h-80 w-full bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/HERO-IMAGES-06.jpg') }}');">
    <div class="absolute h-80 inset-0 bg-black/70 md:bg-black/70 z-10"></div>
    <div
      class="absolute top-0 left-0 w-full h-80 bg-[linear-gradient(to_top,rgba(21,21,21,1),transparent)] z-10 pointer-events-none">
    </div>

    <div class="relative z-10 flex items-end mb-40 h-full">
      <div class="w-full max-w-screen mx-[10px] md:mx-[80px] flex px-6 py-6">
        <div class="text-center w-full max-w-[1000px]">
          <h2 class="text-whitePrimary text-2xl md:text-4xl font-bold mb-2 md:mb-4 uppercase">Ulasan yang membantu kami
          </h2>
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
              <a href="/" class="hover:underline text-blackSecondary font-light">Cars</a>
              <span class="mx-2">/</span>
            </li>
            <li class="text-blackSecondary font-medium">Tulis Ulasan</li>
          </ol>
        </nav>
        <!-- Title -->
        <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
          Nilai layanan kami
        </h2>
        <form>
          @csrf
          <div class="mt-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 mt-6">
              <div class="mb-4">
                <label for="name" class="block text-base font-medium text-blackPrimary uppercase">Nama</label>
                <input type="text" id="name" name="name" required
                  class="mt-1 p-4 block w-full rounded-2xl shadow-md text-blackPrimary" placeholder="Masukan nama Anda">
              </div>
              <div class="mb-4">
                <label for="email" class="block text-base font-medium text-blackPrimary uppercase">Email</label>
                <input type="text" id="email" name="email" required
                  class="mt-1 p-4 block w-full rounded-2xl shadow-md text-blackPrimary" placeholder="Masukan email Anda">
              </div>
              <div class="mb-4">
                <label for="services" class="block text-base font-medium text-blackPrimary uppercase">Layanan</label>
                <select id="services" name="services" required
                  class="mt-1 p-4 block w-full rounded-2xl shadow-md text-blackPrimary">
                  <option value="" disabled selected hidden class="text-gray-400">Layanan yang anda gunakan</option>
                  <option value="sedan">Good Cars</option>
                  <option value="suv">Good Wash</option>
                  <option value="hatchback">Good Media</option>
                </select>
              </div>

              <div class="mb-4">
                <label class="block text-base font-medium text-blackPrimary uppercase mb-2">Rating</label>
                <div id="star-rating" class="flex flex-row-reverse justify-end gap-2">
                  <!-- 5 Bintang -->
                  <!-- Ulangi bintang dari 5 ke 1 -->
                  <label>
                    <input type="radio" name="rating" value="5" class="hidden" />
                    <svg class="w-10 h-10 star text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.954a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.954c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.54-1.118l1.286-3.954a1 1 0 00-.364-1.118L2.073 9.38c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.954z" />
                    </svg>
                  </label>
                  <label>
                    <input type="radio" name="rating" value="4" class="hidden" />
                    <svg class="w-10 h-10 star text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.954a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.954c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.54-1.118l1.286-3.954a1 1 0 00-.364-1.118L2.073 9.38c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.954z" />
                    </svg>
                  </label>
                  <label>
                    <input type="radio" name="rating" value="3" class="hidden" />
                    <svg class="w-10 h-10 star text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.954a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.954c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.54-1.118l1.286-3.954a1 1 0 00-.364-1.118L2.073 9.38c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.954z" />
                    </svg>
                  </label>
                  <label>
                    <input type="radio" name="rating" value="2" class="hidden" />
                    <svg class="w-10 h-10 star text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.954a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.954c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.54-1.118l1.286-3.954a1 1 0 00-.364-1.118L2.073 9.38c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.954z" />
                    </svg>
                  </label>
                  <label>
                    <input type="radio" name="rating" value="1" class="hidden" />
                    <svg class="w-10 h-10 star text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.954a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.954c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.54-1.118l1.286-3.954a1 1 0 00-.364-1.118L2.073 9.38c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.954z" />
                    </svg>
                  </label>
                </div>
              </div>

            </div>
            <div class="mb-8">
              <label for="comment" class="block text-base font-medium text-blackPrimary uppercase">Komentar</label>
              <textarea id="comment" name="comment" rows="4"
                class="mt-1 p-4 block w-full rounded-2xl shadow-md text-blackPrimary" placeholder="Tulis komentar anda"></textarea>
            </div>
            <div class="flex justify-center md:justify-end">
              <x-button type="submit" text="submit" color="" size="md"
                class="w-full justify-between md:w-auto" />
            </div>
          </div>
        </form>

      </div>

    </div>
  </div>


  <script>
    const stars = document.querySelectorAll('#star-rating input');
    const svgs = document.querySelectorAll('#star-rating .star');

    stars.forEach((star) => {
      star.addEventListener('change', () => {
        const rating = parseInt(star.value);

        svgs.forEach((svg, index) => {
          if (4 - index < rating) {
            svg.classList.remove('text-gray-300');
            svg.classList.add('text-yellow-400');
          } else {
            svg.classList.add('text-gray-300');
            svg.classList.remove('text-yellow-400');
          }
        });
      });
    });
  </script>

@endsection
