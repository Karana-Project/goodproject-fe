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
          <h1 class="text-whitePrimary text-4xl md:text-6xl font-bold mb-2 md:mb-4 uppercase">Kembalikan Pesona
            Kendaraan Anda Bersama Good Wash

          </h1>
          <p class="text-whitePrimary font-light text-lg md:text-xl mb-6">Di Good Wash, kami percaya setiap
            kendaraan berhak mendapatkan perawatan terbaik. Tim profesional kami siap mengubah penampilan mobil
            dan motor Anda melalui layanan cuci, detailing, dan restorasi interior yang teliti. Kami hadir untuk
            memberikan hasil maksimal yang mengutamakan kenyamanan dan kepuasan Anda.

          </p>
          <x-button href="#Learn More" text="book now" color="outline"
            padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
        </div>
      </div>
  </section>
@endsection

@section('content')
  <!-- Main Container for all sections except hero and footer -->
  <div class="relative mx-auto max-w-screen -mt-10 z-30 px-6">
    <div class="bg-whitePrimary rounded-3xl p-10 shadow-md">

      <!-- Redefined Section -->
      <section class="w-full mt-10 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-blackPrimary text-3xl md:text-4xl font-medium uppercase leading-tight">
            Good<br>wash
          </h2>
        </div>
        <div class="flex flex-col md:flex-row items-end md:justify-between md:text-left mb-8">
          <div>
            <p class="text-blackPrimary font-bold text-sm md:text-base mb-2 text-center md:text-left uppercase">
              PREMIUM CAR WASH&nbsp;&nbsp;|&nbsp;&nbsp;DETAILING&nbsp;&nbsp;|&nbsp;&nbsp;INTERIOR
            </p>
            <p class="text-blackSecondary text-sm md:text-base text-center md:text-left mb-8">
              Experience top-tier car care with our premium wash and detailing services. We meticulously clean, polish,
              and protect every inch of your vehicle—inside and out.
            </p>
            <div class="flex justify-center md:justify-start">
            </div>
          </div>
          <div class="w-full rounded-lg overflow-hidden ml-8 mt-8 md:mt-0">
            <img src="{{ asset('images/car-wash.jpg') }}" alt="Good Wash" class="w-full h-full object-cover rounded-lg" />
          </div>
        </div>
      </section>

      <!-- Excellence Section -->
      <div class="w-full mt-20 md:px-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
          <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
            Excellence in<br>Every Wash
          </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Card 1 -->
          <div class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
            <div class="absolute inset-0 bg-cover bg-center"
              style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="relative z-10 px-6 py-10 text-center flex flex-col items-center justify-end h-full">
              <h3 class="text-whitePrimary text-lg md:text-xl font-bold uppercase mb-1 mt-8">Experienced & Trusted</h3>
              <p class="text-whiteSecondary text-xs md:text-sm">
                Handled by trained professionals with years of experience, ensuring careful and consistent results every
                time.
              </p>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
            <div class="absolute inset-0 bg-cover bg-center"
              style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="relative z-10 px-6 py-10 text-center flex flex-col items-center justify-end h-full">
              <h3 class="text-whitePrimary text-lg md:text-xl font-bold uppercase mb-1 mt-8">Experienced & Trusted</h3>
              <p class="text-whiteSecondary text-xs md:text-sm">
                Handled by trained professionals with years of experience, ensuring careful and consistent results every
                time.
              </p>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
            <div class="absolute inset-0 bg-cover bg-center"
              style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="relative z-10 px-6 py-10 text-center flex flex-col items-center justify-end h-full">
              <h3 class="text-whitePrimary text-lg md:text-xl font-bold uppercase mb-1 mt-8">Experienced & Trusted</h3>
              <p class="text-whiteSecondary text-xs md:text-sm">
                Handled by trained professionals with years of experience, ensuring careful and consistent results every
                time.
              </p>
            </div>
          </div>
        </div>

        <!-- Pricing Section -->
        <section class="w-full mt-20 md:px-4">
          <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
            <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
              Harga<br>Cuci
            </h2>
          </div>
          <div class="grid md:grid-cols-2 gap-8">
            <!-- CAR WASH -->
            <div class="rounded-3xl overflow-hidden shadow-md border border-gray-200">
              <div class="relative h-56">
                <img src="/images/car-wash.jpg" alt="Car Wash" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/70 p-6 flex flex-col justify-end text-center md:text-start">
                  <h3 class="text-whitePrimary text-2xl md:text-3xl font-bold uppercase mb-1">CUCI MOBIL</h3>
                  <p class="text-whiteSecondary text-2xs md:text-sm">Perawatan cuci standar untuk mengembalikan kilau
                    mobil
                    Anda dan membersihkannya dari kotoran jalanan sehari-hari.</p>
                </div>
              </div>
              <div class="bg-whitePrimary px-6 py-6">
                <table class="w-full text-sm mb-4">
                  <tbody class="divide-y divide-whiteSecondary">
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size S</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size M</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size L</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size XL</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size XXL</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-6">
                  <p class="text-xs md:text-sm text-blackSecondary uppercase mb-2 text-center md:text-start">Layanan
                    Tambahan</p>
                  <div class="flex justify-between items-center">
                    <p class="text-sm md:text-lg text-black">Premium wash & wax</p>
                    <p class="text-xs md:text-lg font-bold text-right text-redPrimary">+Rp.30.000</p>
                  </div>
                </div>
                </p>
              </div>
            </div>

            <!-- MOTO WASH -->
            <div class="rounded-3xl overflow-hidden shadow-md border border-gray-200">
              <div class="relative h-56">
                <img src="/images/car-wash.jpg" alt="Car Wash" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/70 p-6 flex flex-col justify-end text-center md:text-start">
                  <h3 class="text-whitePrimary text-2xl md:text-3xl font-bold uppercase mb-1">CUCI motor</h3>
                  <p class="text-whiteSecondary text-2xs md:text-sm">Perawatan cuci standar untuk mengembalikan kilau
                    motor
                    Anda dan membersihkannya dari kotoran jalanan sehari-hari.</p>
                </div>
              </div>
              <div class="bg-whitePrimary px-6 py-6">
                <table class="w-full text-sm mb-4">
                  <tbody class="divide-y divide-whiteSecondary">
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size S</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size M</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size L</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size XL</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-lg md:text-xl font-semibold text-blackPrimary">Size XXL</td>
                      <td class="py-2 text-lg md:text-xl font-bold text-right text-redPrimary">Rp.65.000</td>
                    </tr>
                    <tr>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-6">
                  <p class="text-xs md:text-sm text-blackSecondary uppercase mb-2 text-center md:text-start">Layanan
                    Tambahan</p>
                  <div class="flex justify-between items-center">
                    <p class="text-sm md:text-lg text-black">Small Engine Wax</p>
                    <p class="text-xs md:text-lg font-bold text-right text-redPrimary">+Rp.30.000</p>
                  </div>
                  <div class="flex justify-between items-center">
                    <p class="text-sm md:text-lg text-black">Big Engine Wax</p>
                    <p class="text-xs md:text-lg font-bold text-right text-redPrimary">+Rp.30.000</p>
                  </div>
                </div>
                </p>
              </div>
            </div>
        </section>

        <!-- Detailing Section -->
        <section class="w-full mt-20 md:px-4">
          <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
            <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">Harga<br>Detailing
            </h2>
          </div>
          <div class="grid md:grid-cols-3 gap-8">

            <!-- CAR AUTO DETAILING -->
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-200">
              <div class="relative h-48">
                <img src="/images/car-wash.jpg" alt="Cars Autodetailing" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/70 p-4 flex flex-col justify-end">
                  <h3 class="text-whitePrimary text-xl md:text-2xl font-bold text-center md:text-start uppercase mb-1">
                    DETAILING MOBIL
                  </h3>
                  <p class="text-whiteSecondary text-2xs md:text-xs text-center md:text-start mb-2">Perawatan lengkap
                    untuk membersihkan dan meremajakan
                    eksterior serta interior mobil Anda.
                  </p>
                </div>
              </div>
              <div class="bg-whitePrimary px-6 py-4">
                <table class="w-full text-sm">
                  <tbody class="divide-y divide-whiteSecondary">
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Size S</td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.1.000.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Size M</td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.1.250.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Size L</td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.1.500.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Size XL</td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.2.000.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- PREMIUM CARS POLES -->
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-200">
              <div class="relative h-48">
                <img src="/images/car-wash.jpg" alt="Premium Cars Poles" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/70 p-4 flex flex-col justify-end">
                  <h3 class="text-whitePrimary text-xl md:text-2xl text-center md:text-start font-bold uppercase mb-1">
                    POLES & COATING PREMIUM
                  </h3>
                  <p class="text-whiteSecondary text-2xs md:text-xs text-center md:text-start mb-2">Memberikan lapisan
                    pelindung premium untuk kilau maksimal
                    dan proteksi cat jangka panjang.

                  </p>
                </div>
              </div>
              <div class="bg-whitePrimary px-6 py-6">
                <table class="w-full text-sm">
                  <tbody class="divide-y divide-gray-300">
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Coating S</td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.3.000.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Coating M</td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.4.000.000</td>
                    </tr>
                    <tr>
                      <td class="ppy-2 text-sm md:text-lg font-semibold text-blackPrimary">Coating L</td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.5.000.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Coating XXL</td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.7.000.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- MOTO AUTO DETAILING -->
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-200">
              <div class="relative h-48">
                <img src="/images/car-wash.jpg" alt="Moto Autodetailing" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/70 p-4 flex flex-col justify-end">
                  <h3 class="text-whitePrimary text-xl md:text-2xl text-center md:text-start font-bold uppercase mb-1">
                    DETAILING MOTOR
                  </h3>
                  <p class="text-whiteSecondary text-2xs md:text-xs text-center md:text-start mb-2">Perawatan detail
                    untuk membersihkan dan melindungi setiap
                    komponen motor Anda secara menyeluruh.

                  </p>
                </div>
              </div>
              <div class="bg-whitePrimary px-6 py-6">
                <table class="w-full text-sm">
                  <tbody class="divide-y divide-gray-300">
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Moto <span
                          class="text-xs font-light">100cc – 125cc</span></td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Moto <span
                          class="text-xs font-light">100cc – 125cc</span></td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Moto <span
                          class="text-xs font-light">100cc – 125cc</span></td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                    </tr>
                    <tr>
                      <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">Moto <span
                          class="text-xs font-light">> 500cc</span></td>
                      <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>

          <!-- OTHER SERVICES -->
          <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-200 mt-8 flex flex-col md:flex-row">
            <!-- Gambar di kiri -->
            <div class="relative md:w-1/2 h-48 md:h-auto">
              <img src="/images/car-wash.jpg" alt="Moto Autodetailing" class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-black/70 p-8 flex flex-col justify-end">
                <h3 class="text-whitePrimary text-xl md:text-3xl text-center md:text-start font-bold uppercase mb-1">
                  DETAILING
                </h3>
                <p class="text-whiteSecondary text-2xs md:text-sm text-center md:text-start mb-2">
                  Perawatan detail untuk membersihkan dan melindungi setiap komponen motor Anda secara menyeluruh.
                </p>
              </div>
            </div>

            <!-- Konten teks di kanan -->
            <div class="bg-whitePrimary px-6 py-6 md:w-1/2">
              <table class="w-full text-sm">
                <tbody class="divide-y divide-gray-300">
                  <tr>
                    <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">
                      Fogging
                    </td>
                    <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                  </tr>
                  <tr>
                    <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">
                      Poles per panel (hilangkan baret)
                    </td>
                    <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                  </tr>
                  <tr>
                    <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">
                      Detailing lampu depan
                    </td>
                    <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                  </tr>
                  <tr>
                    <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">
                      Engine detailing
                    </td>
                    <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                  </tr>
                  <tr>
                    <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">
                      Poles kaca
                    </td>
                    <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                  </tr>
                  <tr>
                    <td class="py-2 text-sm md:text-lg font-semibold text-blackPrimary">
                      Interior full detailing
                    </td>
                    <td class="py-2 text-sm md:text-lg font-bold text-right text-redPrimary">Rp.750.000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </section>

        <!-- car care -->
        <div class="w-full mt-20 md:px-4">
          <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
            <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
              Choose Your<br>Car Care
            </h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <div class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
              <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
              <div class="absolute inset-0 bg-black/70"></div>
              <div class="relative z-10 px-6 py-10">
                <h3 class="text-whitePrimary text-xl font-bold uppercase mb-1">Premium Wash</h3>
                <p class="text-whiteSecondary text-xs mb-14">
                  Get your car cleaned with top-tier care using gentle, pH-balanced products and spotless rinse
                  techniques.
                </p>
                <x-button href="/carCollections" text="Contact now" color="text" padding=""
                  class="text-white" />
              </div>
            </div>
            <!-- Card 2 -->
            <div class="relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-200">
              <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('images/hero-images-1.jpg') }}');"></div>
              <div class="absolute inset-0 bg-black/70"></div>
              <div class="relative z-10 px-6 py-10">
                <h3 class="text-whitePrimary text-xl font-bold uppercase mb-1">Detailing Service</h3>
                <p class="text-whiteSecondary text-xs mb-14">
                  Thorough inside-out treatment including waxing, polishing, and interior cleaning.
                </p>
                <x-button href="#Learn More" text="Contact Now" color="text" padding="" class="text-white" />
              </div>
            </div>
          </div>

          <!-- Redefined Section -->
          <section class="w-full mt-20 md:px-4">
            <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
              <h2 class="text-blackPrimary text-3xl md:text-4xl font-medium uppercase leading-tight">
                Your Car’s Clean<br>Destination
              </h2>
            </div>
            <div class="flex flex-col md:flex-row items-end md:justify-between md:text-left mb-8">
              <div>
                <p class="text-blackPrimary font-bold text-sm md:text-base mb-2 text-center md:text-left uppercase">
                  jl. tukad badung no.166x, renon, denpasar
                </p>
                <p class="text-blackSecondary text-sm md:text-base text-center md:text-left mb-10 md:mb-0">
                  Locate our premium car wash and detailing center with ease. We're just a tap away from spotless,
                  showroom-quality results and exceptional care for your vehicle.
                </p>
                <div class="flex justify-center md:justify-start">
                </div>
              </div>
              <div class="w-full rounded-lg overflow-hidden ml-8 mt-8 md:mt-0">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4478.0855223140825!2d115.2354476111144!3d-8.69136499132106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f2373c751c3%3A0x5cf2b27df13b6506!2sGood%20Wash%20Bali%20Auto%20Detailing!5e1!3m2!1sen!2sid!4v1749479019977!5m2!1sen!2sid"
                  width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </section>

          <!-- reviews -->
          <div class="w-full mt-20 md:px-4">
            <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
              <h2 class="text-black text-3xl md:text-4xl font-medium uppercase leading-tight">
                Customer<br>reviews
              </h2>
              <x-button href="/reviews" text="Write Review" color="text"
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
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
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
              Good<br>Car
            </h2>
          </div>
          <div class="flex flex-col md:flex-row items-end md:justify-between md:text-left mb-8">
            <div>
              <p class="text-blackPrimary font-bold text-sm md:text-base mb-2 text-center md:text-left uppercase">
                BUY&nbsp;&nbsp;|&nbsp;&nbsp;SELL&nbsp;&nbsp;|&nbsp;&nbsp;TRADE
              </p>
              <p class="text-blackSecondary text-sm md:text-base text-center md:text-left mb-8">
                Experience top-tier car care with our premium wash and detailing services. We meticulously clean, polish,
                and protect every inch of your vehicle—inside and out.
              </p>
              <div class="flex justify-center md:justify-start">
                <x-button href="/" text="Learn More" color="text" padding="" />
              </div>
            </div>
            <div class="w-full rounded-lg overflow-hidden ml-8 mt-8 md:mt-0">
              <img src="{{ asset('images/car-wash.jpg') }}" alt="Good Wash"
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
                What is Flowbite?
                <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="panel1" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
                aria-labelledby="accordion1">
                Flowbite is an open-source library of interactive components built on top of Tailwind CSS.
              </div>
            </div>

            <!-- Accordion 2 -->
            <div class="border rounded-xl shadow-md">
              <button aria-expanded="false" aria-controls="panel2" id="accordion2" onclick="toggleAccordion(this)"
                class="flex justify-between items-center w-full p-5 text-blackPrimary font-medium text-left bg-whitePrimary rounded-xl">
                Why use Flowbite?
                <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="panel2" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
                aria-labelledby="accordion2">
                It helps you build consistent UIs with accessible components.
              </div>
            </div>

            <!-- Accordion 3 -->
            <div class="border rounded-xl shadow-md">
              <button aria-expanded="false" aria-controls="panel3" id="accordion3" onclick="toggleAccordion(this)"
                class="flex justify-between items-center w-full p-5 text-blackPrimary font-medium text-left bg-whitePrimary rounded-xl">
                How to get started?
                <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="panel3" class="hidden p-5 text-blackPrimary font-base bg-whitePrimary rounded-b-xl"
                aria-labelledby="accordion3">
                You can get started by installing Tailwind CSS and Flowbite via npm or CDN.
              </div>
            </div>
          </div>
        </div>

        {{-- Swiper untuk Reviews --}}
        <script>
          document.addEventListener('DOMContentLoaded', function() {
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

      @endsection
