@extends('layouts.app')

@section('title', 'Good Wash')

@section('hero')
    <section class="relative bg-cover bg-center text-white py-32 px-6"
        style="background-image: url('https://images.unsplash.com/photo-1592194996308-7b43878e84a6?fit=crop&w=1600&q=80');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                REVITALIZE YOUR RIDE WITH <br />GOOD WASH
            </h1>
            <p class="text-lg mb-6">
                Nikmati layanan cuci mobil & motor profesional dengan hasil maksimal dan kilap seperti baru.
            </p>
            <a href="#book" class="bg-white text-black px-6 py-3 rounded-full font-semibold shadow-md">BOOK NOW</a>
        </div>
    </section>

    <!-- Main Container for all sections except hero and footer -->
    <div class="container mx-auto px-4 md:px-6 bg-white">

        <!-- Redefined Section -->
        <section class="bg-white py-16">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 items-center gap-8">
                <div>
                    <h2 class="text-2xl font-bold mb-4">CAR WASH, REDEFINED</h2>
                    <p class="text-gray-700 text-sm">
                        Professional Car Wash | Detailing | Interior. Dikerjakan oleh tenaga ahli berpengalaman dengan hasil
                        yang bersih, cepat, dan memuaskan. Tersedia paket reguler hingga detailing untuk kendaraan Anda.
                    </p>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1606025932030-27ce4f2e8e92?fit=crop&w=800&q=80"
                        class="rounded-lg shadow" alt="carwash" />
                </div>
            </div>
        </section>

        <!-- Excellence Section -->
        <<section class=" py-20 px-6">
            <div class="max-w-7xl mx-auto">
                <h3 class="text-4xl font-bold text-black mb-12 uppercase">Excellence in Every Wash</h3>
                <div class="grid md:grid-cols-3 gap-6">

                    <!-- Card 1 -->
                    <div class="rounded-xl overflow-hidden bg-black shadow-lg border-2 border-blue-400">
                        <img src="/images/wash1.png" class="w-full h-auto object-cover" />
                        <div class="text-white text-center px-6 py-6">
                            <p class="text-xl font-extrabold mb-2">EXPERIENCED & TRUSTED</p>
                            <p class="text-sm leading-relaxed">
                                Handled by trained professionals with years of experience, ensuring careful and consistent
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
                                Flexible scheduling, quick service, and a commitment to your satisfaction make every visit
                                easy and worthwhile.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            </section>


            <!-- Pricing Section -->
            <section class="bg-white py-16 px-6">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-extrabold text-black mb-12 uppercase">Car Wash Pricing</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- CAR WASH -->
                        <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                            <div class="relative h-56">
                                <img src="/images/car-wash.png" alt="Car Wash" class="w-full h-full object-cover" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-6 flex flex-col justify-end">
                                    <h3 class="text-white text-xl font-bold">CAR WASH</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-6 py-6">
                                <table class="w-full text-sm mb-4">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2">Size S</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.65.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size M</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.65.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size L</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.65.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size XL</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.65.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size XXL</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.65.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-sm text-gray-700 font-medium">Additional Service</p>
                                <p class="text-sm font-bold text-black">PREMIUM WASH & WAX <span
                                        class="text-red-600">+Rp.30.000</span></p>
                            </div>
                        </div>

                        <!-- MOTO WASH -->
                        <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                            <div class="relative h-56">
                                <img src="/images/moto-wash.png" alt="Moto Wash" class="w-full h-full object-cover" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-6 flex flex-col justify-end">
                                    <h3 class="text-white text-xl font-bold">MOTO WASH</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-6 py-6">
                                <table class="w-full text-sm mb-4">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2">Size S</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.20.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size M</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.30.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size L</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.40.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size XL</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.50.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size XXL</td>
                                            <td class="py-2 text-right font-semibold text-red-600">Rp.95.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-sm text-gray-700 font-medium mb-1">Additional Service</p>
                                <p class="text-sm font-bold text-black">SMALL ENGINE WAX <span
                                        class="text-red-600">+Rp.15.000</span></p>
                                <p class="text-sm font-bold text-black">BIG ENGINE WAX <span
                                        class="text-red-600">+Rp.30.000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Detailing Section -->
            <section class="bg-white py-16 px-6">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-3xl font-extrabold text-black mb-12 uppercase">Detailing Pricing</h2>
                    <div class="grid md:grid-cols-3 gap-8">

                        <!-- CAR AUTO DETAILING -->
                        <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                            <div class="relative h-48">
                                <img src="/images/car-detailing.png" alt="Cars Autodetailing"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 flex flex-col justify-end">
                                    <h3 class="text-white text-xl font-bold">CARS AUTODETAILING</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-white px-6 py-4">
                                <table class="w-full text-sm">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2">Size S</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.1.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size M</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.1.250.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size L</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.1.500.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Size XL</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.2.000.000</td>
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
                                    <h3 class="text-white text-xl font-bold">PREMIUM CARS POLES</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-white px-6 py-4">
                                <table class="w-full text-sm">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2">Coating S</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.3.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Coating M</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.4.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Coating L</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.5.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Coating XXL</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.7.000.000</td>
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
                                    <h3 class="text-white text-xl font-bold">MOTO AUTODETAILING</h3>
                                    <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
                                        do</p>
                                </div>
                            </div>
                            <div class="bg-white px-6 py-4">
                                <table class="w-full text-sm">
                                    <tbody class="divide-y divide-gray-300">
                                        <tr>
                                            <td class="py-2">Moto 100cc – 125cc</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.750.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Moto 150cc – 200cc</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.950.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Moto 250cc – 500cc</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.1.000.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Moto &gt; 500cc</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.1.500.000</td>
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
                                            <td class="py-2">Fogging</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.100.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Poles per panel (hilangkan baret)</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.300.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Detailing lampu depan</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.300.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Engine detailing</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.350.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Poles kaca</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.600.000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Interior full detailing</td>
                                            <td class="py-2 text-right text-red-600 font-bold">Rp.1.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Choose Your Car Care -->
            <section class="py-16 ">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-xl font-semibold mb-4">CHOOSE YOUR CAR CARE</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl overflow-hidden shadow-md">
                            <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?fit=crop&w=800&q=80"
                                alt="Premium Wash" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg">PREMIUM WASH</h3>
                                <a href="https://wa.me/628123456789"
                                    class="mt-2 inline-block text-sm text-blue-500 hover:underline">CONTACT NOW →</a>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-md">
                            <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?fit=crop&w=800&q=80"
                                alt="Detailing Service" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg">DETAILING SERVICE</h3>
                                <a href="https://wa.me/628123456789"
                                    class="mt-2 inline-block text-sm text-blue-500 hover:underline">CONTACT NOW →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Your Car's Clean Destination -->
            <section class="py-16">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-xl font-semibold mb-4">YOUR CAR'S CLEAN DESTINATION</h2>
                    <a href="https://goo.gl/maps/XA1P2QziYoYct2eY9" target="_blank">
                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=-8.6705,115.2126&zoom=15&size=800x400&maptype=roadmap&markers=color:red%7C-8.6705,115.2126&key=YOUR_API_KEY"
                            alt="Location Map" class="rounded-lg shadow-lg w-full">
                    </a>
                    <p class="text-sm mt-2">Jl. Tukad Badung No.66X, Renon, Denpasar</p>
                </div>
            </section>

            <!-- Customers Review -->
            <section class="py-16">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-xl font-semibold mb-4">CUSTOMERS REVIEW</h2>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-xl shadow">
                            <p class="text-sm">"Pelayanan memuaskan, mobil saya kembali kinclong!"</p>
                            <p class="mt-2 font-bold text-sm">BOB1X686</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl shadow">
                            <p class="text-sm">"Detailing-nya sangat rapi dan bersih, recommended!"</p>
                            <p class="mt-2 font-bold text-sm">BOB1X686</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl shadow">
                            <p class="text-sm">"Sudah langganan disini, selalu puas dengan hasilnya."</p>
                            <p class="mt-2 font-bold text-sm">BOB1X686</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Good Car -->
            <section class="py-16">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="md:w-1/2 mb-4 md:mb-0">
                            <h2 class="text-xl font-semibold mb-2">GOOD CAR</h2>
                            <p class="text-sm">Our trusted platform connects discerning buyers and sellers, offering a
                                seamless
                                experience. Let us ensure you get the best value for your car.</p>
                        </div>
                        <div class="md:w-1/2">
                            <a href="/goodcar.html" class="block relative rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1494972308805-463bc619d34e?fit=crop&w=800&q=80"
                                    alt="Good Car" class="w-full">
                                <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-2">LEARN MORE →
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Good Media -->
            <section class="py-16">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-xl font-semibold mb-4">GOOD MEDIA</h2>
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
            <section class="py-16">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-xl font-semibold mb-4">FREQUENTLY ASKED QUESTIONS</h2>
                    <div class="space-y-2">
                        <details class="bg-white p-4 rounded-xl shadow">
                            <summary
                                class="flex justify-between items-center cursor-pointer [&::-webkit-details-marker]:hidden">
                                <span>Apakah ada promo atau paket langganan di Good Wash?</span>
                                <span class="transition-transform duration-200 group-open:rotate-180">▼</span>
                            </summary>
                            <p class="mt-2">Ya, kami memiliki berbagai promo menarik dan paket langganan bulanan.</p>
                        </details>
                        <details class="bg-white p-4 rounded-xl shadow">
                            <summary class="cursor-pointer font-medium">Berapa lama waktu pengerjaan untuk detailing
                                kendaraan?
                            </summary>
                            <p class="mt-2 text-sm">Rata-rata pengerjaan membutuhkan waktu 3-5 jam tergantung kondisi
                                kendaraan.</p>
                        </details>
                        <details class="bg-white p-4 rounded-xl shadow">
                            <summary class="cursor-pointer font-medium">Apakah ada promo atau paket langganan di Good Wash?
                            </summary>
                            <p class="mt-2 text-sm">Ya, kami memiliki berbagai promo menarik dan paket langganan bulanan.
                            </p>
                        </details>
                        <details class="bg-white p-4 rounded-xl shadow">
                            <summary class="cursor-pointer font-medium">Apakah Good Wash menggunakan produk pembersih
                                khusus?
                            </summary>
                            <p class="mt-2 text-sm">Kami menggunakan produk berkualitas premium yang aman untuk kendaraan
                                Anda.
                            </p>
                        </details>
                        <details class="bg-white p-4 rounded-xl shadow">
                            <summary class="cursor-pointer font-medium">Apakah bisa order jemput kendaraan untuk layanan
                                cuci
                                atau detailing?</summary>
                            <p class="mt-2 text-sm">Kami menyediakan layanan jemput kendaraan dalam radius tertentu,
                                hubungi
                                kami untuk detailnya.</p>
                        </details>
                    </div>
                </div>
            </section>

    </div> <!-- End of main container -->
@endsection
