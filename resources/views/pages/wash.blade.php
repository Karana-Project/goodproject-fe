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
                    <h1 class="text-whitePrimary text-4xl md:text-6xl font-bold mb-2 md:mb-4 uppercase">Where Exceptional
                        Cars Find New Owners</h1>
                    <p class="text-whitePrimary font-light text-lg md:text-xl mb-6">Buy and sell luxury vehicles with
                        confidence and ease</p>
                    <x-button href="#Learn More" text="find now" color="outline"
                        padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
                </div>
            </div>
    </section>
@endsection

@section('content')
    <!-- Main Container for all sections except hero and footer -->
    <div class="relative mx-auto max-w-screen -mt-20 z-30 px-6">
        <div class="bg-whitePrimary rounded-3xl p-10 shadow-md">

            <!-- Redefined Section -->
            <section class="py-16 px-6">
                <div class="grid md:grid-cols-2 items-center gap-8">
                    <div>
                        <h2 class="text-4xl mb-4 text-black">CAR WASH, REDEFINED</h2>
                        <p class="text-black  text-sm leading-relaxed">
                            Professional Car Wash | Detailing | Interior. Dikerjakan oleh tenaga ahli berpengalaman dengan
                            hasil yang bersih, cepat, dan memuaskan. Tersedia paket reguler hingga detailing untuk kendaraan
                            Anda.
                        </p>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1606025932030-27ce4f2e8e92?fit=crop&w=800&q=80"
                            class="rounded-xl shadow-lg w-full h-auto object-cover" alt="" />
                    </div>
                </div>
            </section>


            <!-- Excellence Section -->
            <section class=" py-16 px-6">
                <div class="max-w-7xl mx-auto">
                    <h3 class="text-4xl text-black mb-12 uppercase">Excellence in Every Wash</h3>
                    <div class="grid md:grid-cols-3 gap-6">

                        <!-- Card 1 -->
                        <div class="rounded-xl overflow-hidden bg-black shadow-lg border-2 border-blue-400">
                            <img src="/images/wash1.png" class="w-full h-auto object-cover" />
                            <div class="text-white text-center px-6 py-6">
                                <p class="text-xl font-extrabold mb-2">EXPERIENCED & TRUSTED</p>
                                <p class="text-sm leading-relaxed">
                                    Handled by trained professionals with years of experience, ensuring careful and
                                    consistent
                                    results every time.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="rounded-xl overflow-hidden bg-black shadow-lg">
                            <img src="/images/wash2.png" class="w-full h-auto object-cover" />
                            <div class="text-white text-center px-6 py-6">
                                <p class="text-xl font-extrabold mb-2">DETAILING QUALITY</p>
                                <p class="text-sm leading-relaxed">
                                    We use high-end products and techniques to restore and protect your car’s exterior and
                                    interior—down to the finest detail.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="rounded-xl overflow-hidden bg-black shadow-lg">
                            <img src="/images/wash3.png" class="w-full h-auto object-cover" />
                            <div class="text-white text-center px-6 py-6">
                                <p class="text-xl font-extrabold mb-2">QUICK SERVICE</p>
                                <p class="text-sm leading-relaxed">
                                    Flexible scheduling, quick service, and a commitment to your satisfaction make every
                                    visit
                                    easy and worthwhile.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Pricing Section -->
            <section class=" py-16 px-6">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-4xl text-black mb-12 uppercase">Car Wash Pricing</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- CAR WASH -->
                        <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                            <div class="relative h-56">
                                <img src="/images/car-wash.png" alt="Car Wash" class="w-full h-full object-cover" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-6 flex flex-col justify-end">
                                    <h3 class="text-white text-4xl font-bold">CAR WASH</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-6 py-6">
                                <table class="w-full text-sm mb-4">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2 text-xl text-black ">Size S</td>
                                            <td class="py-2 text-xl text-right text-red-600">Rp.65.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-xl text-black ">Size M</td>
                                            <td class="py-2 text-xl text-right  text-red-600">Rp.65.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-xl text-black">Size L</td>
                                            <td class="py-2 text-right text-xl text-red-600">Rp.65.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-xl text-black">Size XL</td>
                                            <td class="py-2 text-xl text-right text-red-600">Rp.65.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-xl text-black">Size XXL</td>
                                            <td class="py-2 text-xl text-right text-red-600">Rp.65.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-sm text-gray-700 ">Additional Service</p>
                                <p class="text-xl text-black">PREMIUM WASH & WAX <span
                                        class="text-xl text-red-600">+Rp.30.000</span></p>
                            </div>
                        </div>

                        <!-- MOTO WASH -->
                        <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                            <div class="relative h-56">
                                <img src="/images/moto-wash.png" alt="Moto Wash" class="w-full h-full object-cover" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-6 flex flex-col justify-end">
                                    <h3 class="text-white text-4xl font-bold">MOTO WASH</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-6 py-6">
                                <table class="w-full text-sm mb-4">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2 text-xl text-black">Size S</td>
                                            <td class="py-2 text-right text-xl text-red-600">Rp.20.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-xl text-black">Size M</td>
                                            <td class="py-2 text-right text-xl text-red-600">Rp.30.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-xl text-black">Size L</td>
                                            <td class="py-2 text-right text-xl text-red-600">Rp.40.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-xl text-black">Size XL</td>
                                            <td class="py-2 text-right text-xl text-red-600">Rp.50.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-xl text-black">Size XXL</td>
                                            <td class="py-2 text-right text-xl text-red-600">Rp.95.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-sm text-gray-700 mb-1">Additional Service</p>
                                <p class="text-xl text-black">SMALL ENGINE WAX <span class="text-red-600">+Rp.15.000</span>
                                </p>
                                <p class="text-xl  text-black">BIG ENGINE WAX <span class="text-red-600">+Rp.30.000</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Detailing Section -->
            <section class="py-16 px-6">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-4xl text-black mb-12 uppercase">Detailing Pricing</h2>
                    <div class="grid md:grid-cols-3 gap-8">

                        <!-- CAR AUTO DETAILING -->
                        <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                            <div class="relative h-48">
                                <img src="/images/car-detailing.png" alt="Cars Autodetailing"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 flex flex-col justify-end">
                                    <h3 class="text-white font-bold text-2xl ">CARS AUTODETAILING</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-white px-6 py-4">
                                <table class="w-full text-sm">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2 text-lg text-black">Size S</td>
                                            <td class="py-2 text-right text-red-600 text-lg ">Rp.1.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Size M</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.1.250.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Size L</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.1.500.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Size XL</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.2.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- PREMIUM CARS POLES -->
                        <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                            <div class="relative h-48">
                                <img src="/images/premium-poles.png" alt="Premium Cars Poles"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 flex flex-col justify-end">
                                    <h3 class="text-white text-2xl font-bold">PREMIUM CARS POLES</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-white px-6 py-4">
                                <table class="w-full text-sm">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2 text-lg text-black">Coating S</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.3.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Coating M</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.4.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Coating L</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.5.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Coating XXL</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.7.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- MOTO AUTO DETAILING -->
                        <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                            <div class="relative h-48">
                                <img src="/images/moto-detailing.png" alt="Moto Autodetailing"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 flex flex-col justify-end">
                                    <h3 class="text-white text-2xl font-bold">MOTO AUTODETAILING</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-white px-6 py-4">
                                <table class="w-full text-sm">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2 text-lg text-black">Moto 100cc – 125cc</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.750.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Moto 150cc – 200cc</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.950.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Moto 250cc – 500cc</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.1.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Moto &gt; 500cc</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.1.500.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- OTHER SERVICES -->
                    <div class="mt-16 relative rounded-2xl overflow-hidden">
                        <img src="/images/detailing-other.png" alt="Detailing" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-black/60 flex flex-col md:flex-row p-6 md:p-12">
                            <div class="md:w-1/2 text-white flex flex-col justify-end mb-6 md:mb-0">
                                <h3 class="text-2xl font-bold uppercase">Detailing</h3>
                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                            </div>
                            <div class="md:w-1/2 bg-white bg-opacity-90 rounded-xl p-6">
                                <table class="w-full text-sm text-black">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2 text-lg text-black">Fogging</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.100.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Poles per panel (hilangkan baret)</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.300.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Detailing lampu depan</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.300.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Engine detailing</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.350.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Poles kaca</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.600.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 text-lg text-black">Interior full detailing</td>
                                            <td class="py-2 text-right text-red-600 text-lg">Rp.1.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Choose Your Car Care -->
            <section class="py-16 px-6">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-4xl text-black mb-4">CHOOSE YOUR CAR CARE</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="relative rounded-xl overflow-hidden shadow-md h-64 bg-cover bg-center"
                            style="background-image: url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?fit=crop&w=800&q=80');">
                            <div class="absolute inset-0 bg-black/50"></div> <!-- Overlay untuk kontras -->
                            <div class="relative z-10 p-4 text-white flex flex-col justify-end h-full">
                                <h3 class="font-bold text-2xl">PREMIUM WASH</h3>
                                <p class="text-white text-xs">Get your car cleaned with top-tier care using gentle,
                                    pH-balanced products and spotless rinse techniques.</p>
                                <a href="https://wa.me/628123456789"
                                    class="mt-2 inline-block text-sm hover:underline">CONTACT NOW →</a>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden shadow-md h-64 bg-cover bg-center"
                            style="background-image: url('https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?fit=crop&w=800&q=80');">
                            <div class="absolute inset-0 bg-black/40"></div> <!-- Overlay gelap -->
                            <div class="relative z-10 p-4 text-white flex flex-col justify-end h-full">
                                <h3 class="font-bold text-2xl">DETAILING SERVICE</h3>
                                <p class="text-white text-xs">Thorough inside-out treatment including waxing, polishing,
                                    and interior cleaning.</p>
                                <a href="https://wa.me/628123456789"
                                    class="mt-2 inline-block text-sm hover:underline">CONTACT NOW →</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Your Car's Clean Destination -->
            <section class="py-16 px-6">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-4xl text-black mb-4">YOUR CAR'S CLEAN DESTINATION</h2>
                    <a href="https://goo.gl/maps/XA1P2QziYoYct2eY9" target="_blank">
                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=-8.6705,115.2126&zoom=15&size=800x400&maptype=roadmap&markers=color:red%7C-8.6705,115.2126&key=YOUR_API_KEY"
                            alt="Location Map" class="rounded-lg shadow-lg w-full">
                    </a>
                    <p class="text-base text-black mt-2">Jl. Tukad Badung No.66X, Renon, Denpasar</p>
                    <p class="text-base text-black mt-2">Locate our premium car wash and detailing center with ease. We're
                        just
                        a tap away
                        from spotless, showroom-quality results and exceptional care for your vehicle.</p>
                </div>
            </section>

            <!-- Customers Review -->
            <section class="w-full mt-20 md:px-4">
                <div class="flex flex-col md:flex-row items-center md:justify-between text-center md:text-left mb-8">
                    <h2 class="text-white text-3xl md:text-4xl font-medium uppercase leading-tight">
                        Customer<br>Reviews
                    </h2>
                </div>

                <div class="relative">
                    <!-- Swiper Container -->
                    <div class="swiper reviewsSwiper">
                        <div class="swiper-wrapper">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="swiper-slide">
                                    <div class="bg-white text-black p-6 rounded-xl shadow-md max-w-md">
                                        <p class="text-sm mb-4">"Pelayanan sangat memuaskan, mobil kembali bersih dan
                                            wangi!"
                                        </p>
                                        <p class="font-bold text-sm">BOB1X686</p>
                                        <p class="text-xs text-gray-500">01 Juni 2025</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Scrollbar + Navigation -->
                    <div class="flex items-center mt-6 px-2">
                        <div class="swiper-scrollbar reviews-scrollbar flex-grow h-2 bg-gray-300 rounded-full"
                            style="position: static;"></div>

                        <div class="hidden md:flex w-14"></div>

                        <div class="hidden md:flex items-center gap-4">
                            <button id="reviews-prev"
                                class="border rounded-xl px-4 py-2 bg-transparent border-white text-white transition hover:scale-110 disabled:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="white" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                                </svg>
                            </button>
                            <button id="reviews-next"
                                class="border rounded-xl px-4 py-2 bg-transparent border-white text-white transition hover:scale-110 disabled:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="white" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Good Car -->
            <section class="py-16 px-6">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="md:w-1/2 mb-4 md:mb-0">
                            <h2 class="text-4xl text-black mb-2">GOOD CAR</h2>
                            <p class="text-sm">Our trusted platform connects discerning buyers and sellers, offering a
                                seamless
                                experience. Let us ensure you get the best value for your car.</p>
                        </div>
                        <div class="md:w-1/2">
                            <a href="/goodcar.html" class="block relative rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1494972308805-463bc619d34e?fit=crop&w=800&q=80"
                                    alt="Good Car" class="w-full">
                                <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-2">LEARN MORE
                                    →
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Good Media -->
            <section class="py-16 px-6">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-4xl text-black mb-4">GOOD MEDIA</h2>
                    <div class="grid md:grid-cols-3 gap-4">
                        <a href="/media.html" class="relative rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1590845947676-fa2576f401d4?fit=crop&w=800&q=80"
                                alt="Video 1" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/148/148744.png" class="w-12">
                            </div>
                        </a>
                        <a href="/media.html" class="relative rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551818255-e6e10975bc17?fit=crop&w=800&q=80"
                                alt="Video 2" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/148/148744.png" class="w-12">
                            </div>
                        </a>
                        <a href="/media.html" class="relative rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551818255-e6e10975bc17?fit=crop&w=800&q=80"
                                alt="Video 3" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/148/148744.png" class="w-12">
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-16 px-6">
                <div class="max-w-6xl mx-auto px-4">
                    <h2 class="text-4xl text-black mb-6 uppercase">Frequently Asked Questions</h2>
                    <div class="space-y-4">
                        @php
                            $faqs = [
                                [
                                    'q' => 'Apakah ada promo atau paket langganan di Good Wash?',
                                    'a' => 'Ya, kami memiliki berbagai promo menarik dan paket langganan bulanan.',
                                ],
                                [
                                    'q' => 'Berapa lama waktu pengerjaan untuk detailing kendaraan?',
                                    'a' =>
                                        'Rata-rata pengerjaan membutuhkan waktu 3–5 jam tergantung kondisi kendaraan.',
                                ],
                                [
                                    'q' => 'Apakah Good Wash menggunakan produk pembersih khusus?',
                                    'a' =>
                                        'Kami menggunakan produk berkualitas premium yang aman untuk kendaraan Anda.',
                                ],
                                [
                                    'q' => 'Apakah bisa order jemput kendaraan untuk layanan cuci atau detailing?',
                                    'a' =>
                                        'Kami menyediakan layanan jemput kendaraan dalam radius tertentu, hubungi kami untuk detailnya.',
                                ],
                            ];
                        @endphp

                        @foreach ($faqs as $faq)
                            <details class="group bg-white text-black p-5 rounded-xl shadow transition-all">
                                <summary
                                    class="flex justify-between items-center cursor-pointer font-medium text-lg group-open:font-bold">
                                    <span>{{ $faq['q'] }}</span>
                                    <svg class="w-5 h-5 text-black transition-transform duration-300 group-open:rotate-180"
                                        fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </summary>
                                <p class="mt-3 text-sm leading-relaxed text-gray-700">{{ $faq['a'] }}</p>
                            </details>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
