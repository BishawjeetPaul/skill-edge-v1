@push('style')
@endpush

@push('script')
    <!-- MOBILE MENU SCRIPT -->
    <script>
        document.getElementById('menuBtn').addEventListener('click', function () {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
    </script>
@endpush

<!-- HEADER / NAVBAR -->
<header class="w-full bg-[#0b2348]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">

            <!-- LOGO -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/images/logo.png') }}"
                     alt="SkillEdge"
                     class="h-8 w-auto">
            </div>

            <!-- DESKTOP MENU -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="#" class="text-yellow-400 hover:text-yellow-300">Home</a>
                <a href="#" class="text-white hover:text-yellow-300">About Us</a>
                <a href="#" class="text-white hover:text-yellow-300">Courses</a>
                <a href="#" class="text-white hover:text-yellow-300">Latest Updates</a>
                <a href="#" class="text-white hover:text-yellow-300">Blog</a>
                <a href="#" class="text-white hover:text-yellow-300">Contact Us</a>
            </nav>

            <!-- SIGN IN BUTTON -->
            <div class="hidden md:block">
                <a href="#"
                   class="bg-yellow-400 text-black px-4 py-2 rounded-md text-sm font-semibold hover:bg-yellow-300 transition">
                    Sign in
                </a>
            </div>

            <!-- MOBILE MENU BUTTON -->
            <button id="menuBtn"
                    class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
         class="md:hidden hidden bg-[#0b2348] border-t border-blue-900">
        <nav class="flex flex-col px-4 py-4 space-y-3 text-sm">
            <a href="#" class="text-yellow-400">Home</a>
            <a href="#" class="text-white">About Us</a>
            <a href="#" class="text-white">Courses</a>
            <a href="#" class="text-white">Latest Updates</a>
            <a href="#" class="text-white">Blog</a>
            <a href="#" class="text-white">Contact Us</a>

            <a href="#"
               class="mt-3 bg-yellow-400 text-black px-4 py-2 rounded-md text-center font-semibold">
                Sign in
            </a>
        </nav>
    </div>
</header>



