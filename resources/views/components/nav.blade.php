<nav x-data="{ open: false }"
     @keydown.escape.window="open = false"
     class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">

            {{-- Logo + teks --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('storage/logo/New_Logo_STAIN_Teungku_Dirundeng_Meulaboh.png') }}"
                     alt="Logo STAIN Teungku Dirundeng"
                     class="h-10 w-auto object-contain">
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-bold leading-tight tracking-tight text-gray-600">
                        Satgas PPKS
                    </span>
                    <span class="text-xs font-semibold leading-tight tracking-tight text-gray-600">
                        STAIN Teungku Dirundeng
                    </span>
                </div>
            </a>

            {{-- Menu desktop --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                   class="text-sm font-medium {{ request()->routeIs('home') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Beranda</a>
                <a href="{{ route('articles') }}"
                   class="text-sm font-medium {{ request()->routeIs('articles') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Artikel</a>
                <a href="{{ route('categories') }}"
                   class="text-sm font-medium {{ request()->routeIs('categories') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Kategori</a>
                <a href="{{ route('about') }}"
                   class="text-sm font-medium {{ request()->routeIs('about') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Tentang</a>
                <a href="{{ route('lapor.choose') }}"
                   class="text-sm font-medium {{ request()->routeIs('lapor.*') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Lapor</a>
                <button class="bg-black text-white px-6 py-2 text-sm font-medium hover:bg-gray-800 transition">Subscribe</button>
            </div>

            {{-- Tombol mobile: Lapor + hamburger --}}
            <div class="md:hidden flex items-center gap-4">
                <button @click="open = !open"
                        :aria-expanded="open.toString()"
                        aria-label="Buka menu"
                        class="p-1 text-gray-700 focus:outline-none">
                    {{-- Ikon hamburger --}}
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    {{-- Ikon close --}}
                    <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Menu mobile --}}
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         @click.outside="open = false"
         class="md:hidden border-t border-gray-100 bg-white shadow-lg">
        <div class="px-6 py-4 flex flex-col">
            <a href="{{ route('home') }}"
               class="py-3 text-sm font-medium border-b border-gray-100 {{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Beranda</a>
            <a href="{{ route('articles') }}"
               class="py-3 text-sm font-medium border-b border-gray-100 {{ request()->routeIs('articles') ? 'text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Artikel</a>
            <a href="{{ route('categories') }}"
               class="py-3 text-sm font-medium border-b border-gray-100 {{ request()->routeIs('categories') ? 'text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Kategori</a>
            <a href="{{ route('about') }}"
               class="py-3 text-sm font-medium border-b border-gray-100 {{ request()->routeIs('about') ? 'text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Tentang</a>
            <a href="{{ route('lapor.choose') }}"
               class="py-3 text-sm font-medium border-b border-gray-100 {{ request()->routeIs('lapor.*') ? 'text-blue-600' : 'text-gray-700 hover:text-blue-600' }}">Lapor</a>
            <button class="mt-4 w-full bg-black text-white px-6 py-3 text-sm font-medium hover:bg-gray-800 transition">
                Subscribe
            </button>
        </div>
    </div>
</nav>
