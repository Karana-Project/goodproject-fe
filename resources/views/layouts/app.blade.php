<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Laravel')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Flowbite CSS & JS -->
    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        blackPrimary: '#151515',
                        whitePrimary: '#F1F1F1',
                        blackSecondary: '#4E4E4E',
                        whiteSecondary: '#D5D5D5',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-poppins text-black bg-blackPrimary text-whitePrimary">


    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Hero full layar tanpa container --}}
    @yield('hero')

    {{-- Content --}}
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @include('components.footer')

</body>

</html>
