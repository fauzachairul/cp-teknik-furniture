<header class="bg-white py-5 shadow-md sticky top-0 left-0 right-0 z-50 border-b-2 lg:border-0 ">
    <div class="container flex justify-between items-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="logo">
            <a href="/">
                <h1 class="text-2xl font-bold text-white"><img src="{{ asset('img/logo2.png') }}" alt=""></h1>
            </a>
        </div>

        <nav id="mobile-nav"
            class="absolute top-full left-0 w-full flex-col py-10 gap-y-5 bg-white flex lg:hidden items-center transition-transform duration-300 px-5 -translate-y-[150%]">
            <a href="/"
                class="font-medium px-4 w-full text-center py-2 rounded {{ request()->is('/') ? 'bg-amber-300' : 'hover:bg-amber-300' }} transition duration-300 ease-in-out">
                Home
            </a>
            <a href="/about"
                class="font-medium px-4 w-full text-center py-2 rounded {{ request()->is('about') ? 'bg-amber-300' : 'hover:bg-amber-300' }} transition duration-300 ease-in-out">
                About
            </a>
            <a href="/portfolio"
                class="font-medium px-4 w-full text-center py-2 rounded {{ request()->is('portfolio') ? 'bg-amber-300' : 'hover:bg-amber-300' }} transition duration-300 ease-in-out">
                Portfolio
            </a>
            <a href="/contact"
                class="font-medium px-4 w-full text-center py-2 rounded {{ request()->is('contact') ? 'bg-amber-300' : 'hover:bg-amber-300' }} transition duration-300 ease-in-out">
                Contact
            </a>
        </nav>

        {{-- Menu Button --}}
        <button id="menu-btn" class="cursor-pointer lg:hidden">
            <i data-lucide="menu"></i>
        </button>

        {{-- Navbar Desktop --}}
        <nav class="hidden lg:flex gap-x-5 items-center">
            <a href="/"
                class="font-medium px-4 py-2 rounded {{ request()->is('/') ? 'bg-amber-300' : 'hover:bg-amber-300' }} transition duration-300 ease-in-out">Home</a>
            <a href="/about"
                class="font-medium px-4 py-2 rounded {{ request()->is('about') ? 'bg-amber-300' : 'hover:bg-amber-300' }} transition duration-300 ease-in-out">About</a>
            <a href="/portfolio"
                class="font-medium px-4 py-2 rounded {{ request()->is('portfolio') ? 'bg-amber-300' : 'hover:bg-amber-300' }} transition duration-300 ease-in-out">Portfolio</a>
            <a href="/contact"
                class="font-medium px-4 py-2 rounded {{ request()->is('contact') ? 'bg-amber-300' : 'hover:bg-amber-300' }} transition duration-300 ease-in-out">Contact</a>
        </nav>
    </div>
</header>
