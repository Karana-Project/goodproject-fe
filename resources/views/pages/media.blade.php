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
                    <h1 class="text-whitePrimary text-4xl md:text-6xl font-bold mb-2 md:mb-4 uppercase">Aksi Otomotif dalam
                        Lensa Kreatif</h1>
                    <p class="text-whitePrimary font-light text-lg md:text-xl mb-6">Good Media adalah platform kreatif yang
                        menyajikan informasi seputar event mobil, video vlog otomotif, dan layanan video cinematic
                        profesional. Ingin update dunia otomotif atau butuh dokumentasi cinematic untuk mobil atau event
                        Anda? Good Media siap bantu wujudkannya!</p>
                    <x-button href="#Learn More" text="find now" color="outline"
                        padding="py-[0.5rem] px-[1rem] md:py-[1rem] md:px-[2rem]" />
                </div>
            </div>
    </section>
@endsection

@section('content')
    <div class="relative mx-auto max-w-screen -mt-20 z-30 px-6">
        <div class="bg-whitePrimary rounded-3xl p-10 shadow-md">
            <!-- THIS WEEK IN MOTION -->
            <section class="py-16 px-6">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl text-black mb-6">Kilas Balik Bulan Ini</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Large Left Card -->
                        <div class="relative rounded-xl overflow-hidden h-[300px] bg-black text-white p-6 flex flex-col justify-end"
                            style="background-image: url('/path-car1.jpg'); background-size: cover; background-position: center;">
                            <h3 class="text-3xl font-bold">HERE'S THE UPDATE OF THE DAY</h3>
                            <p class="text-sm mt-1">Lorem ipsum dolor sit amet...</p>
                            <a href="#" class="mt-2 underline text-sm">READ MORE</a>
                        </div>

                        <!-- Right Mini Cards -->
                        <div class="grid grid-rows-3 gap-4">
                            <div class="relative rounded-xl overflow-hidden h-[90px] bg-black text-white p-4 flex flex-col justify-end"
                                style="background-image: url('/car2.jpg'); background-size: cover;">
                                <h4 class="text-3xl font-bold">HERE’S THE UPDATE</h4>
                                <a href="#" class="text-sm underline">READ MORE</a>
                            </div>
                            <div class="relative rounded-xl overflow-hidden h-[90px] bg-black text-white p-4 flex flex-col justify-end"
                                style="background-image: url('/car3.jpg'); background-size: cover;">
                                <h4 class="text-3xl font-semibold">HERE’S THE UPDATE</h4>
                                <a href="#" class="text-sm underline">READ MORE</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- EVENT OF THE WEEK -->
            <section class=" py-16 px-6">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-4xl text-black mb-6 uppercase text-black">Event Pilihan Bulan Ini</h2>
                    <div class="flex overflow-x-auto space-x-6 pb-4">
                        <!-- Card 1 -->
                        <a href="/event/mandalika-track-day"
                            class="min-w-[300px] max-w-sm bg-white rounded-2xl shadow-lg overflow-hidden flex-shrink-0 hover:shadow-xl transition duration-300">
                            <div class="relative">
                                <img src="/images/event1.jpg" class="w-full h-48 object-cover" />
                                <div
                                    class="absolute top-3 right-3 bg-black text-white text-lg px-2 py-1 rounded text-right leading-tight">
                                    3 DAYS<br>TO GO
                                </div>
                            </div>
                            <div class="px-5 py-4">
                                <h3 class="font-bold text-2xl text-black">MANDALIKA TRACK DAY</h3>
                                <p class="text-sm text-black mb-2">ALL CARS ALLOWED</p>
                                <div class="flex items-center gap-2 text-xs text-sm mb-1">
                                    <span>📅 31 Mei 2025</span>
                                    <span>⏰ 08.00 WITA</span>
                                </div>
                                <div class="text-xs text-black mb-2">📍 Pertamina Mandalika Circuit, Lombok, NTB</div>
                                <p class="text-xs text-black mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-black">FREE TO JOIN</span>
                                    <button
                                        class="text-sm bg-black text-white px-4 py-2 rounded-full flex items-center gap-2">
                                        JOIN NOW →
                                    </button>
                                </div>
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="/event/euro-sunmori"
                            class="min-w-[300px] max-w-sm bg-white rounded-2xl shadow-lg overflow-hidden flex-shrink-0 hover:shadow-xl transition duration-300">
                            <div class="relative">
                                <img src="/images/event1.jpg" class="w-full h-48 object-cover" />
                                <div
                                    class="absolute top-3 right-3 bg-black text-white text-lg px-2 py-1 rounded text-right leading-tight">
                                    3 DAYS<br>TO GO
                                </div>
                            </div>
                            <div class="px-5 py-4">
                                <h3 class="font-bold text-2xl text-black">MANDALIKA TRACK DAY</h3>
                                <p class="text-sm text-black mb-2">ALL CARS ALLOWED</p>
                                <div class="flex items-center gap-2 text-xs text-sm mb-1">
                                    <span>📅 31 Mei 2025</span>
                                    <span>⏰ 08.00 WITA</span>
                                </div>
                                <div class="text-xs text-black mb-2">📍 Pertamina Mandalika Circuit, Lombok, NTB</div>
                                <p class="text-xs text-black mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-black">FREE TO JOIN</span>
                                    <button
                                        class="text-sm bg-black text-white px-4 py-2 rounded-full flex items-center gap-2">
                                        JOIN NOW →
                                    </button>
                                </div>
                            </div>
                        </a>

                        <!-- Card 3 -->
                        <a href="/event/mandalika-track-day-2024"
                            class="min-w-[300px] max-w-sm bg-white rounded-2xl shadow-lg overflow-hidden flex-shrink-0 hover:shadow-xl transition duration-300">
                            <div class="relative">
                                <img src="/images/event1.jpg" class="w-full h-48 object-cover" />
                                <div
                                    class="absolute top-3 right-3 bg-black text-white text-lg px-2 py-1 rounded text-right leading-tight">
                                    3 DAYS<br>TO GO
                                </div>
                            </div>
                            <div class="px-5 py-4">
                                <h3 class="font-bold text-2xl text-black">MANDALIKA TRACK DAY</h3>
                                <p class="text-sm text-black mb-2">ALL CARS ALLOWED</p>
                                <div class="flex items-center gap-2 text-xs text-sm mb-1">
                                    <span>📅 31 Mei 2025</span>
                                    <span>⏰ 08.00 WITA</span>
                                </div>
                                <div class="text-xs text-black mb-2">📍 Pertamina Mandalika Circuit, Lombok, NTB</div>
                                <p class="text-xs text-black mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-black">FREE TO JOIN</span>
                                    <button
                                        class="text-sm bg-black text-white px-4 py-2 rounded-full flex items-center gap-2">
                                        JOIN NOW →
                                    </button>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </section>

            <!-- WATCH THE RIDE -->
            <section class="py-16 px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-4xl text-black mb-6">Tonton Videonya</h2>
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
            <section class=" py-16 px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-4xl text-black mb-6">Rekam Aksi Terbaik Mobilmu</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white p-4 rounded-xl shadow text-center">
                            <img src="/capture1.jpg" alt="Single Package" class="rounded mb-2" />
                            <h3 class="text-2xl text-black font-bold">SINGLE PACKAGE</h3>
                            <p class="text-sm mt-2 text-gray-600">Sesi video sinematik eksklusif yang didedikasikan
                                sepenuhnya untuk menampilkan keindahan dan detail mobil Anda.</p>
                            <button class="mt-3 bg-black text-white px-4 py-2 rounded text-sm">HUBUNGI SEKARANG</button>
                        </div>
                        <div class="bg-white p-4 rounded-xl shadow text-center">
                            <img src="/capture2.jpg" alt="Group Package" class="rounded mb-2" />
                            <h3 class="text-2xl text-black font-bold">GROUP PACKAGE</h3>

                            <p class="text-sm mt-2 text-gray-600">Ideal untuk klub mobil atau acara kumpul bersama. Kami
                                abadikan setiap momen kebersamaan dan deretan mobil Anda secara epik.</p>
                            <button class="mt-3 bg-black text-white px-4 py-2 rounded text-sm">HUBUNGI SEKARANG</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- COMPLETE CAR EXPERIENCE -->
            <section class=" py-16 px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-4xl text-black mb-6">Untuk Mobil Impian dan Perawatannya</h2>
                    <<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="relative rounded-xl overflow-hidden shadow-md h-64 bg-cover bg-center"
                            style="background-image: url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?fit=crop&w=800&q=80');">
                            <div class="absolute inset-0 bg-black/50"></div> <!-- Overlay untuk kontras -->
                            <div class="relative z-10 p-4 text-white flex flex-col justify-end h-full">
                                <h3 class="font-bold text-2xl">GOOD CAR</h3>
                                <p class="text-white text-xs">Jual beli kendaraan mewah dengan penuh keyakinan dan
                                    kemudahan.</p>
                                <a href="https://wa.me/628123456789"
                                    class="mt-2 inline-block text-sm hover:underline">HUBUNGI SEKARANG →</a>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden shadow-md h-64 bg-cover bg-center"
                            style="background-image: url('https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?fit=crop&w=800&q=80');">
                            <div class="absolute inset-0 bg-black/40"></div> <!-- Overlay gelap -->
                            <div class="relative z-10 p-4 text-white flex flex-col justify-end h-full">
                                <h3 class="font-bold text-2xl">GOOD WASH</h3>
                                <p class="text-white text-xs">Layanan cuci premium dan detailing untuk menjaga kendaraan
                                    Anda selalu bersih berkilau.</p>
                                <a href="https://wa.me/628123456789"
                                    class="mt-2 inline-block text-sm hover:underline">HUBUNGI SEKARANG →</a>
                            </div>
                        </div>
                </div>
        </div>
        </section>
    </div>
    </div>
@endsection
