<?php 
?>

@extends('includes.layout')

@section('title')
    Home
@endsection

@push('script')
    <script>
        // ------AUTO SCROLL TICKER------//
        const ticker = document.getElementById('ticker');
        let scrollSpeed = 0.5; // speed control
        let position = 0;

        function scrollTicker() {
            position -= scrollSpeed;

            if (Math.abs(position) >= ticker.scrollWidth / 2) {
                position = 0;
            }

            ticker.style.transform = `translateX(${position}px)`;
            requestAnimationFrame(scrollTicker);
        }

        scrollTicker();

        // Pause on hover
        ticker.addEventListener('mouseenter', () => scrollSpeed = 0);
        ticker.addEventListener('mouseleave', () => scrollSpeed = 0.5);

        // ------SLIDER------//
        const slider = document.getElementById('slider');

        function slideLeft() {
        slider.scrollBy({ left: -300, behavior: 'smooth' });
        }

        function slideRight() {
            slider.scrollBy({ left: 300, behavior: 'smooth' });
        }

    </script>

@endpush

@section('content')

    <!-- HERO SECTION -->
    <section class="relative w-full min-h-[80vh] flex items-center overflow-hidden">

        <!-- Background Image -->
        <img src="{{ asset('assets/images/hero-bg.jpg') }}"
            alt="University Guidance"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#f3b59c]/90 via-[#8c7bb8]/90 to-[#3b3f9f]/90"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16 w-full">
            <div class="max-w-3xl mx-auto text-center">

                <h1 class="text-white font-bold leading-tight text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
                    How to Choose the Best University<br class="hidden sm:block">
                    for Your Career Goals
                </h1>


                <p class="mt-5 text-gray-100 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
                    Discover expert guidance to select the right university aligned with your dreams.
                    Get personalized advice, top university options, and complete support for your
                    academic and professional success.
                </p>

                <button
                    class="mt-7 inline-flex items-center justify-center
                        bg-yellow-400 text-[#0a234f]
                        font-semibold text-base sm:text-lg
                        px-8 py-2 rounded-md
                        hover:bg-yellow-300 transition">
                    Contact Us
                </button>
            </div>


            <!-- Social Icons -->
            <div class="absolute right-6 bottom-24 hidden md:flex items-center gap-3">
                <a href="#" class="w-9 h-9 rounded-full bg-yellow-400 text-[#0a234f] flex items-center justify-center hover:bg-yellow-300 transition">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-yellow-400 text-[#0a234f] flex items-center justify-center hover:bg-yellow-300 transition">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-yellow-400 text-[#0a234f] flex items-center justify-center hover:bg-yellow-300 transition">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-yellow-400 text-[#0a234f] flex items-center justify-center hover:bg-yellow-300 transition">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <!-- AUTO SCROLL TICKER -->
        <div class="absolute bottom-0 left-0 w-full bg-yellow-400 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">

                <div class="relative w-full overflow-hidden">
                    <div id="ticker"
                        class="flex items-center gap-8 py-3 text-[#0a234f] font-semibold text-sm sm:text-base whitespace-nowrap">

                        <!-- Duplicate content for seamless loop -->
                        <span>Cucata University form fill 2025–26</span>
                        <span>✱</span>
                        <span>Cucata University form fill 2025–26</span>
                        <span>✱</span>
                        <span>Cucata University form fill 2025–26</span>

                        <span class="ml-8">Cucata University form fill 2025–26</span>
                        <span>✱</span>
                        <span>Cucata University form fill 2025–26</span>
                        <span>✱</span>
                        <span>Cucata University form fill 2025–26</span>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-------- STUDENT-LOVE ---------->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- LEFT IMAGE -->
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/home/student.png') }}"
                        alt="Student"
                        class="rounded-xl w-full max-w-md object-cover">
                </div>

                <!-- RIGHT CONTENT -->
                <div>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900">
                        Shape Your Future with Expert
                    </h2>

                    <p class="mt-4 text-gray-600 max-w-xl">
                        We help students make informed decisions about their education and career,
                        scholarships, and guide you at every step to ensure a successful academic journey.
                    </p>

                    <!-- SLIDER -->
                    <div class="relative mt-10">

                        <!-- Arrow Left -->
                        <button onclick="slideLeft()"
                            class="hidden sm:flex absolute -left-10 top-1/2 -translate-y-1/2
                                w-10 h-10 rounded-full border border-gray-300
                                items-center justify-center hover:bg-gray-100">
                            ❮
                        </button>

                        <!-- Cards -->
                        <div id="slider"
                            class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory
                                pb-4 sm:overflow-hidden">

                            <!-- Card 1 -->
                            <div class="snap-center min-w-[260px] bg-white rounded-xl shadow-md p-6 text-center">
                                <div class="w-16 h-16 mx-auto rounded-full bg-yellow-400 flex items-center justify-center">
                                    <i class="fas fa-graduation-cap text-3xl text-[#0a234f]"></i>
                                </div>
                                <h4 class="mt-4 font-semibold">Expert Educational Guidance</h4>
                            </div>

                            <!-- Card 2 -->
                            <div class="snap-center min-w-[260px] bg-white rounded-xl shadow-md p-6 text-center">
                                <div class="w-16 h-16 mx-auto rounded-full bg-yellow-400 flex items-center justify-center">
                                    <i class="fas fa-file-alt text-3xl text-[#0a234f]"></i>
                                </div>
                                <h4 class="mt-4 font-semibold">Comprehensive Services</h4>
                            </div>

                            <!-- Card 3 -->
                            <div class="snap-center min-w-[260px] bg-white rounded-xl shadow-md p-6 text-center">
                                <div class="w-16 h-16 mx-auto rounded-full bg-yellow-400 flex items-center justify-center">
                                    <i class="fas fa-user-graduate text-3xl text-[#0a234f]"></i>
                                </div>
                                <h4 class="mt-4 font-semibold">Student Centered Approach</h4>
                            </div>
                        </div>

                        <!-- Arrow Right -->
                        <button onclick="slideRight()"
                            class="hidden sm:flex absolute -right-10 top-1/2 -translate-y-1/2
                                w-10 h-10 rounded-full border border-gray-300
                                items-center justify-center hover:bg-gray-100">
                            ❯
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection