@extends('layouts.app')

@section('title', 'Good Wash')

@section('hero')

    <section class="bg-cover bg-center text-white py-24 px-6" style="background-image: url('/path-to-your-hero-image.jpg')">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">YOUR WINDOW INTO THE <br /> CAR SCENE</h1>
            <p class="mt-6 max-w-xl mx-auto">Good Media adalah platform kreatif yang menyajikan informasi seputar event
                mobil, video vlog otomotif, dan layanan video cinematic profesional.</p>
            <button class="mt-6 bg-white text-black px-6 py-2 rounded-full font-semibold">EXPLORE NOW</button>
        </div>
    </section>
    <div class="container mx-auto px-4 md:px-6 bg-white">

        <!-- THIS WEEK IN MOTION -->
        <section class="bg-white py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-xl font-semibold mb-6">THIS WEEK IN MOTION</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Large Left Card -->
                    <div class="relative rounded-xl overflow-hidden h-[300px] bg-black text-white p-6 flex flex-col justify-end"
                        style="background-image: url('/path-car1.jpg'); background-size: cover; background-position: center;">
                        <h3 class="text-lg font-bold">HERE'S THE UPDATE OF THE DAY</h3>
                        <p class="text-sm mt-1">Lorem ipsum dolor sit amet...</p>
                        <a href="#" class="mt-2 underline text-sm">READ MORE</a>
                    </div>

                    <!-- Right Mini Cards -->
                    <div class="grid grid-rows-3 gap-4">
                        <div class="relative rounded-xl overflow-hidden h-[90px] bg-black text-white p-4 flex flex-col justify-end"
                            style="background-image: url('/car2.jpg'); background-size: cover;">
                            <h4 class="text-sm font-semibold">HERE’S THE UPDATE</h4>
                            <a href="#" class="text-xs underline">READ MORE</a>
                        </div>
                        <div class="relative rounded-xl overflow-hidden h-[90px] bg-black text-white p-4 flex flex-col justify-end"
                            style="background-image: url('/car3.jpg'); background-size: cover;">
                            <h4 class="text-sm font-semibold">HERE’S THE UPDATE</h4>
                            <a href="#" class="text-xs underline">READ MORE</a>
                        </div>
                        <div class="relative rounded-xl overflow-hidden h-[90px] bg-black text-white p-4 flex flex-col justify-end"
                            style="background-image: url('/car4.jpg'); background-size: cover;">
                            <h4 class="text-sm font-semibold">HERE’S THE UPDATE</h4>
                            <a href="#" class="text-xs underline">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EVENT OF THE WEEK -->
        <section class=" py-16 px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-2xl font-bold mb-6 uppercase text-black">Event of the Month</h2>

                <div class="flex overflow-x-auto space-x-6 pb-4">

                    <!-- Card 1 -->
                    <a href="/event/mandalika-track-day"
                        class="min-w-[300px] max-w-sm bg-white rounded-2xl shadow-lg overflow-hidden flex-shrink-0 hover:shadow-xl transition duration-300">
                        <div class="relative">
                            <img src="/images/event1.jpg" class="w-full h-48 object-cover" />
                            <div
                                class="absolute top-3 right-3 bg-black text-white text-xs px-2 py-1 rounded text-right leading-tight">
                                3 DAYS<br>TO GO
                            </div>
                        </div>
                        <div class="px-5 py-4">
                            <h3 class="font-bold text-lg text-black">MANDALIKA TRACK DAY</h3>
                            <p class="text-xs text-gray-500 mb-2">ALL CARS ALLOWED</p>
                            <div class="flex items-center gap-2 text-xs text-gray-600 mb-1">
                                <span>📅 31 Mei 2025</span>
                                <span>⏰ 08.00 WITA</span>
                            </div>
                            <div class="text-xs text-gray-600 mb-2">📍 Pertamina Mandalika Circuit, Lombok, NTB</div>
                            <p class="text-xs text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs font-semibold text-black">FREE TO JOIN</span>
                                <button class="text-xs bg-black text-white px-4 py-2 rounded-full flex items-center gap-2">
                                    JOIN NOW →
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="/event/euro-sunmori"
                        class="min-w-[300px] max-w-sm bg-white rounded-2xl shadow-lg overflow-hidden flex-shrink-0 hover:shadow-xl transition duration-300">
                        <div class="relative">
                            <img src="/images/event2.jpg" class="w-full h-48 object-cover" />
                            <div
                                class="absolute top-3 right-3 bg-black text-white text-xs px-2 py-1 rounded text-right leading-tight">
                                7 DAYS<br>TO GO
                            </div>
                        </div>
                        <div class="px-5 py-4">
                            <h3 class="font-bold text-lg text-black">EURO SUNMORI</h3>
                            <p class="text-xs text-gray-500 mb-2">EUROPE CARS ONLY</p>
                            <div class="flex items-center gap-2 text-xs text-gray-600 mb-1">
                                <span>📅 8 Juni 2025</span>
                                <span>⏰ 07.00 WITA</span>
                            </div>
                            <div class="text-xs text-gray-600 mb-2">📍 Pertamina Gatsu, Denpasar, Bali</div>
                            <p class="text-xs text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs font-semibold text-black">FREE TO JOIN</span>
                                <button class="text-xs bg-black text-white px-4 py-2 rounded-full flex items-center gap-2">
                                    JOIN NOW →
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 3 -->
                    <a href="/event/mandalika-track-day-2024"
                        class="min-w-[300px] max-w-sm bg-white rounded-2xl shadow-lg overflow-hidden flex-shrink-0 hover:shadow-xl transition duration-300">
                        <div class="relative">
                            <img src="/images/event3.jpg" class="w-full h-48 object-cover" />
                        </div>
                        <div class="px-5 py-4">
                            <h3 class="font-bold text-lg text-black">MANDALIKA TRACK DAY</h3>
                            <p class="text-xs text-gray-500 mb-2">ALL CARS ALLOWED</p>
                            <div class="flex items-center gap-2 text-xs text-gray-600 mb-1">
                                <span>📅 31 Mei 2024</span>
                                <span>⏰ 08.00 WITA</span>
                            </div>
                            <div class="text-xs text-gray-600 mb-2">📍 Pertamina Mandalika Circuit, Lombok, NTB</div>
                            <p class="text-xs text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs font-semibold text-black">PAID EVENT</span>
                                <button class="text-xs bg-black text-white px-4 py-2 rounded-full flex items-center gap-2">
                                    JOIN NOW →
                                </button>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </section>


        <!-- WATCH THE RIDE -->
        <section class="bg-white py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-xl font-semibold mb-6">WATCH THE RIDE</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Left Large Video -->
                    <div class="relative rounded-xl overflow-hidden">
                        <img src="/video1.jpg" alt="BMW video" class="w-full" />
                        <button
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white text-black rounded-full text-2xl shadow-lg">▶</button>
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4 text-white">
                            <h3 class="font-bold text-lg">NEW STORIES FROM BMW</h3>
                        </div>
                    </div>

                    <!-- Right Smaller Videos -->
                    <div class="grid grid-rows-3 gap-4">
                        <div class="relative rounded-xl overflow-hidden h-[90px]">
                            <img src="/thumb1.jpg" alt="" class="w-full h-full object-cover" />
                            <button
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-white text-black rounded-full text-sm">▶</button>
                        </div>
                        <div class="relative rounded-xl overflow-hidden h-[90px]">
                            <img src="/thumb2.jpg" alt="" class="w-full h-full object-cover" />
                            <button
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-white text-black rounded-full text-sm">▶</button>
                        </div>
                        <div class="relative rounded-xl overflow-hidden h-[90px]">
                            <img src="/thumb3.jpg" alt="" class="w-full h-full object-cover" />
                            <button
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-white text-black rounded-full text-sm">▶</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CAPTURE YOUR CAR IN MOTION -->
        <section class="bg-gray-100 py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-xl font-semibold mb-6">CAPTURE YOUR CAR IN MOTION</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white p-4 rounded-xl shadow text-center">
                        <img src="/capture1.jpg" alt="Single Package" class="rounded mb-2" />
                        <h3 class="font-bold">SINGLE PACKAGE</h3>
                        <p class="text-red-600 text-sm">Rp.1.000.000 /car</p>
                        <p class="text-xs mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur...</p>
                        <button class="mt-3 bg-black text-white px-4 py-2 rounded text-sm">CONTACT NOW</button>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow text-center">
                        <img src="/capture2.jpg" alt="Group Package" class="rounded mb-2" />
                        <h3 class="font-bold">GROUP PACKAGE</h3>
                        <p class="text-red-600 text-sm">Rp.2.000.000 /car</p>
                        <p class="text-xs mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur...</p>
                        <button class="mt-3 bg-black text-white px-4 py-2 rounded text-sm">CONTACT NOW</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- COMPLETE CAR EXPERIENCE -->
        <section class="bg-white py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-xl font-semibold mb-6">COMPLETE CAR EXPERIENCE: BUY OR CARE</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative rounded-xl overflow-hidden">
                        <img src="/car-experience1.jpg" alt="Good Car" class="w-full h-40 object-cover rounded" />
                        <div class="p-4">
                            <h3 class="font-bold">GOOD CAR</h3>
                            <p class="text-sm">Buy and sell luxury vehicles with confidence</p>
                            <a href="#" class="mt-2 inline-block underline text-sm">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden">
                        <img src="/car-experience2.jpg" alt="Good Wash" class="w-full h-40 object-cover rounded" />
                        <div class="p-4">
                            <h3 class="font-bold">GOOD WASH</h3>
                            <p class="text-sm">Premium car wash & detailing services</p>
                            <a href="#" class="mt-2 inline-block underline text-sm">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
