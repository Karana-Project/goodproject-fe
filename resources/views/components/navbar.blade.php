<nav class="fixed top-0 left-0 w-full px-6 py-6 bg-transparent z-40">
    <div class="mx-[18px] md:mx-[80px] flex items-center justify-between">
        <!-- Logo -->
        <div class="text-3xl italic font-bold font-helvetica tracking-wider text-whitePrimary">
            GOOD
        </div>

        <!-- Hamburger menu mobile -->
        <button id="burger" class="md:hidden text-whitePrimary focus:outline-none text-3xl z-40">
            ☰
        </button>

        <!-- Navigation and Contact -->
        <div class="hidden md:flex items-center gap-6">
            <!-- Menu Group -->
            <ul class="flex bg-[#292929] bg-opacity-60 rounded-full px-8 py-3 gap-14">
                <li>
                    <a href="/"
                        class="text-white font-semibold underline underline-offset-4 decoration-2 decoration-white">
                        Cars
                    </a>
                </li>
                <li>
                    <a href="/wash"
                        class="text-white font-semibold underline underline-offset-4 decoration-2 decoration-white">
                        Wash
                    </a>
                </li>
                <li>
                    <a href="/media"
                        class="text-white font-semibold underline underline-offset-4 decoration-2 decoration-white">
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
            class="md:hidden hidden absolute top-full left-0 w-full bg-[#1e1e1e] bg-opacity-95 px-6 py-6 text-center">
            <ul class="flex flex-col gap-6">
                <li><a href="#cars" class="text-white text-lg font-medium">Cars</a></li>
                <li><a href="#wash" class="text-white text-lg font-medium">Wash</a></li>
                <li><a href="#media" class="text-white text-lg font-medium">Media</a></li>
                <li>
                    <a href="#contact"
                        class="bg-blackPrimary text-whitePrimary rounded-full px-6 py-3 font-medium hover:bg-zinc-700 transition inline-block">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
