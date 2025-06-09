<nav class="absolute top-0 left-0 w-full px-6 py-6 bg-transparent z-40">
  <div class="mx-[18px] md:mx-[80px] flex items-center justify-between">
    <!-- Logo -->
    <a href="/" class="text-3xl italic font-bold font-helvetica tracking-wider text-whitePrimary">
      GOOD
    </a>

    <!-- Hamburger menu mobile -->
    <button id="burger" class="md:hidden text-whitePrimary focus:outline-none text-3xl z-40">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-menu-icon lucide-menu">
        <path d="M4 12h16" />
        <path d="M4 18h16" />
        <path d="M4 6h16" />
      </svg>
    </button>

    <!-- Navigation and Contact -->
    <div class="hidden md:flex items-center gap-6">
      <!-- Menu Group -->
      <ul class="flex bg-[#292929] bg-opacity-60 rounded-full px-8 py-3 gap-14">
        <li>
          <a href="/" class="text-white font-semibold underline underline-offset-4 decoration-2 decoration-white">
            Cars
          </a>
        </li>
        <li>
          <a href="/wash" class="text-zinc-300 hover:text-white transition">
            Wash
          </a>
        </li>
        <li>
          <a href="/media" class="text-zinc-300 hover:text-white transition">
            Media
          </a>
        </li>
      </ul>

      <!-- Contact Button -->
      <a href="#contact"
        class="bg-blackPrimary text-whitePrimary rounded-full px-8 py-3 font-medium hover:bg-zinc-700 transition">
        Contact Us
      </a>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
      class="md:hidden fixed bottom-0 left-0 z-40 w-full h-screen bg-blackPrimary px-6 py-6 text-center rounded-t-xl
    transform translate-y-full transition-transform duration-300 ease-in-out overflow-auto">

      <div id="closeMenu" class="absolute top-8 right-8 cursor-pointer text-whitePrimary mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-x-icon lucide-x">
          <path d="M18 6 6 18" />
          <path d="m6 6 12 12" />
        </svg>
      </div>


      <ul class="flex flex-col gap-8">
        <li class="border-t border-gray-600 pt-8 mt-10"><a href="/"
            class="text-whitePrimary text-lg font-medium">Car</a></li>
        <li><a href="#wash" class="text-whitePrimary text-lg font-medium">Wash</a></li>
        <li><a href="#media" class="text-whitePrimary text-lg font-medium">Media</a></li>
        <li class="border-t border-gray-600 pt-8">
          <a href="#contact"
            class="w-full bg-whitePrimary text-blackPrimary rounded-full px-6 py-3 font-medium hover:bg-zinc-700 transition inline-block">
            Contact Us
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<script>
  const burger = document.getElementById('burger');
  const mobileMenu = document.getElementById('mobileMenu');
  const closeMenu = document.getElementById('closeMenu');

  let isOpen = false;

  burger.addEventListener('click', () => {
    isOpen = true;
    mobileMenu.classList.add('translate-y-0');
    mobileMenu.classList.remove('translate-y-full');
  });

  closeMenu.addEventListener('click', () => {
    isOpen = false;
    mobileMenu.classList.add('translate-y-full');
    mobileMenu.classList.remove('translate-y-0');
  });

  // Tutup menu saat link diklik
  document.querySelectorAll('#mobileMenu a').forEach(link => {
    link.addEventListener('click', () => {
      isOpen = false;
      mobileMenu.classList.add('translate-y-full');
      mobileMenu.classList.remove('translate-y-0');
    });
  });
</script>
