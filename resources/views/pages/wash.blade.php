@extends('layouts.app')

@section('title', 'Good Wash')
<body class="bg-gray-100 text-gray-900">
  <!-- Section 1: Hero -->
  <section class="bg-cover bg-center text-white py-20 px-6 md:px-12" style="background-image: url('https://your-hero-image-url.jpg')">
    <div class="max-w-3xl">
      <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4">Revitalize Your Ride with <br />Good Wash</h1>
      <p class="mb-6">Layanan cuci mobil & motor terbaik, bersih maksimal dan harga terjangkau. Booking sekarang!</p>
      <a href="#" class="bg-white text-black px-6 py-3 rounded-full font-semibold">Book Now</a>
    </div>
  </section>

  <!-- Section 2: Intro Layanan -->
  <section class="py-12 px-4 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-xl font-semibold mb-2">CAR WASH, REDEFINED</h2>
      <p class="text-sm">Professional car wash | Detailing | Interior. Dikerjakan oleh tenaga ahli berpengalaman dengan hasil yang bersih, cepat, dan memuaskan. Tersedia paket reguler hingga detailing untuk kendaraan Anda.</p>
    </div>
  </section>

  <!-- Section 3: Excellence -->
  <section class="bg-white py-12 px-4 md:px-16">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="text-center">
        <img src="https://your-icon1.png" alt="Experience" class="mx-auto mb-2" />
        <p>Experienced & Trusted</p>
      </div>
      <div class="text-center">
        <img src="https://your-icon2.png" alt="Detailing" class="mx-auto mb-2" />
        <p>Detailing Quality</p>
      </div>
      <div class="text-center">
        <img src="https://your-icon3.png" alt="Fast" class="mx-auto mb-2" />
        <p>Quick Service</p>
      </div>
    </div>
  </section>

  <!-- Section 4: Car Wash Pricing -->
  <section class="bg-gray-50 py-12 px-4 md:px-16">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-bold mb-6">CAR WASH PRICING</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <img src="https://your-carwash-image.jpg" alt="Car Wash" class="mb-2 rounded" />
          <table class="w-full text-left">
            <tr><td>Size S</td><td class="text-red-600 font-bold">Rp.65.000</td></tr>
            <tr><td>Size M</td><td class="text-red-600 font-bold">Rp.65.000</td></tr>
            <tr><td>Size L</td><td class="text-red-600 font-bold">Rp.65.000</td></tr>
            <tr><td>Size XL</td><td class="text-red-600 font-bold">Rp.85.000</td></tr>
          </table>
        </div>
        <div>
          <img src="https://your-motorwash-image.jpg" alt="Moto Wash" class="mb-2 rounded" />
          <table class="w-full text-left">
            <tr><td>Moto 100-125cc</td><td class="text-red-600 font-bold">Rp.20.000</td></tr>
            <tr><td>Moto 150-250cc</td><td class="text-red-600 font-bold">Rp.30.000</td></tr>
            <tr><td>Moto 250cc ke atas</td><td class="text-red-600 font-bold">Rp.50.000</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Detailing Pricing -->
  <section class="bg-white py-12 px-4 md:px-16">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-bold mb-6">DETAILING PRICING</h2>
      <div class="grid md:grid-cols-3 gap-4">
        <div><h3 class="font-bold">Cars Autodetailing</h3><p>Size S: Rp.1.000.000</p><p>Size XL: Rp.2.000.000</p></div>
        <div><h3 class="font-bold">Premium Cars Poles</h3><p>Coating L: Rp.6.000.000</p><p>Coating XXL: Rp.7.000.000</p></div>
        <div><h3 class="font-bold">Moto Autodetailing</h3><p>Moto 100cc: Rp.750.000</p><p>Moto 500cc: Rp.1.500.000</p></div>
      </div>
      <div class="mt-6">
        <h3 class="font-bold">Other Services</h3>
        <p>Poles per panel: Rp.300.000</p>
        <p>Interior full detailing: Rp.1.000.000</p>
      </div>
    </div>
  </section>

  <!-- Section 6: Choose Your Car Care -->
  <section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6">
      <div>
        <h3 class="text-lg font-semibold mb-2">Premium Wash</h3>
        <p>Kilap tahan lama, tanpa water spot, bersih menyeluruh.</p>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-2">Detailing Service</h3>
        <p>Perlindungan eksterior dan interior lebih maksimal.</p>
      </div>
    </div>
  </section>

  <!-- Section 7: Location -->
  <section class="py-12 px-4 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-xl font-bold mb-4">Your Car’s Clean Destination</h2>
      <p class="mb-2">Jl. Tukad Badung No.165X, Renon, Denpasar</p>
      <img src="https://your-map-url.jpg" alt="Map" class="rounded" />
    </div>
  </section>

  <!-- Section 8: Customer Reviews -->
  <section class="bg-gray-50 py-12 px-4 md:px-16">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-bold mb-6">Customer Review</h2>
      <div class="grid md:grid-cols-3 gap-4">
        <div><h4 class="font-bold">BOBIX666</h4><p>⭐️⭐️⭐️⭐️⭐️</p><p>“Pelayanan sangat baik dan bersih maksimal.”</p></div>
        <div><h4 class="font-bold">BOBIX666</h4><p>⭐️⭐️⭐️⭐️⭐️</p><p>“Cepat dan kilap seperti baru.”</p></div>
        <div><h4 class="font-bold">BOBIX666</h4><p>⭐️⭐️⭐️⭐️⭐️</p><p>“Tempat rekomendasi banget!”</p></div>
      </div>
    </div>
  </section>

  <!-- Section 9: Good Car -->
  <section class="py-12 px-4 md:px-16 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6 items-center">
      <div>
        <h2 class="text-xl font-bold mb-2">Good Car</h2>
        <p>Buy and sell luxury vehicles with confidence and ease.</p>
      </div>
      <img src="https://your-car-image.jpg" class="rounded" />
    </div>
  </section>

  <!-- Section 10: Good Media -->
  <section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-xl font-bold mb-6">Good Media</h2>
      <div class="grid md:grid-cols-3 gap-4">
        <img src="https://your-media1.jpg" class="rounded" />
        <img src="https://your-media2.jpg" class="rounded" />
        <img src="https://your-media3.jpg" class="rounded" />
      </div>
    </div>
  </section>

  <!-- Section 11: FAQ -->
  <section class="py-12 px-4 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-xl font-bold mb-6">Frequently Asked Questions</h2>
      <details class="mb-4">
        <summary class="font-semibold cursor-pointer">Bagaimana cara booking layanan cuci atau detailing?</summary>
        <p class="mt-2">Langsung hubungi kami lewat WhatsApp.</p>
      </details>
      <details class="mb-4">
        <summary class="font-semibold cursor-pointer">Berapa lama waktu pengerjaan untuk detailing kendaraan?</summary>
        <p class="mt-2">Rata-rata 2–4 jam tergantung paket dan kondisi kendaraan.</p>
      </details>
    </div>
  </section>
</body>
</html>
