<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet & Cable Deals – Fast, Reliable Internet & Cable TV for Modern Living</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
    {{-- <link rel="manifest" href="{{ asset('site.webmanifest') }}" crossorigin="use-credentials" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Awesome CDN -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>


    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Meta Description -->
    <meta name="description"
        content="Experience blazing-fast internet and crystal-clear cable TV deals with Internet & Cable Deals. Trusted by thousands since 2010.">

    <!-- Meta Keywords -->
    <meta name="keywords"
        content="internet, cable deals, high-speed internet, premium cable TV, home connectivity, smart home integration, reliable ISP, no hidden fees">

    <!-- Robots Meta -->
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Author -->
    <meta name="author" content="Internet & Cable Deals">

    <!-- Theme Color -->
    <meta name="theme-color" content="#0e3a8c">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1DA1F2',
                    },
                    fontFamily: {
                        'cinzel': ['Cinzel', 'serif']
                    }
                }
            }
        }
    </script>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M5VNXT37');</script>
<!-- End Google Tag Manager -->

 <style>
        .animate-pulse-scale {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
    </style>
</head>

<body onclick="window.location.href='tel:+5123872951'">

    {{-- Navigation --}}
    <nav class="bg-gradient-to-r from-blue-300 to-blue-700 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                {{-- Logo --}}
                <img class="w-[160px] h-[65px] scale-120" src="{{ asset('images/logo-2.png') }}" alt="logo" />

                {{-- Desktop Navigation --}}
                <div class="hidden md:flex space-x-8">
                    <a href="#home"
                        class="font-medium hover:text-blue-200 transition duration-300 border-b-2 border-transparent hover:border-blue-200 pb-1">Home</a>
                    <a href="#features"
                        class="font-medium hover:text-blue-200 transition duration-300 border-b-2 border-transparent hover:border-blue-200 pb-1">Features</a>
                    {{-- <a href="#partners"
                        class="font-medium hover:text-blue-200 transition duration-300 border-b-2 border-transparent hover:border-blue-200 pb-1">Our
                        Partners</a> --}}
                    <a href="#about"
                        class="font-medium hover:text-blue-200 transition duration-300 border-b-2 border-transparent hover:border-blue-200 pb-1">About</a>
                    <a href="#contact"
                        class="font-medium hover:text-blue-200 transition duration-300 border-b-2 border-transparent hover:border-blue-200 pb-1">Contact</a>
                </div>

                  <!-- CTA Button -->
    <div class="hidden md:block">
        <a href="tel:5123872951"
            class="animate-pulse-scale bg-white text-blue-600 font-bold text-xl px-12 py-3 rounded-xl shadow-lg hover:bg-blue-50 hover:shadow-xl hover:scale-110 transition-all duration-300 inline-block border-2 border-blue-100">
             Call Now
        </a>
    </div>

                {{-- Mobile menu button --}}
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-white focus:outline-none">
                        <svg id="menu-open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="menu-close" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="md:hidden mt-3 pt-2 pb-4 border-t border-blue-400 hidden">
                <div class="flex flex-col space-y-3">
                    <a href="#features" class="font-medium hover:bg-blue-600 px-3 py-2 rounded">Features</a>
                    <a href="#partners" class="font-medium hover:bg-blue-600 px-3 py-2 rounded">Partners</a>
                    <a href="#about" class="font-medium hover:bg-blue-600 px-3 py-2 rounded">About</a>
                    <a href="#contact" class="font-medium hover:bg-blue-600 px-3 py-2 rounded">Contact</a>
                    <a href="tel:5123872951"
                        class="bg-white text-blue-600 font-semibold px-3 py-2 rounded-lg shadow text-center">Call Now</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section id="home" class="relative overflow-hidden text-white">
        {{-- Background image --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/banner-2.png') }}" alt="Background"
                class="w-full h-full object-cover filter brightness-50" />
            {{-- Optional overlay to ensure text readability --}}
            <div class="absolute inset-0 bg-black opacity-30"></div>
        </div>

        <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 text-center md:text-left md:pr-12 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight font-cinzel">
                        Fast Internet & TV Setup | New Home Internet Plans | <span class="text-blue-200">Call Now for TV & WiFi Help</span>
                    </h1>
                    {{-- <p class="text-lg md:text-xl mb-8 text-blue-100 max-w-lg mx-auto md:mx-0">
                        Blazing-fast internet speeds, crystal-clear cable TV, and exclusive bundle deals designed for
                        modern living.
                    </p> --}}
                    <div accesskey=""class="flex flex-col sm:flex-row justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        {{-- <a href="#partners"
                            class="bg-white text-blue-600 px-8 py-3 rounded-lg font-bold hover:bg-blue-50 transition duration-300 shadow-lg transform hover:-translate-y-1">
                            Our Partners
                        </a>
                        <a href="#contact"
                            class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white/10 transition duration-300">
                            Contact Us
                        </a> --}}
                    </div>
                    <a href="tel:+5123872951"
                        class="mt-4 inline-block bg-blue-600 text-white font-semibold py-2 px-20 rounded hover:bg-blue-700">
                        Call Now
                        {{-- <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /> --}}
        {{-- </svg> --}}
                    </a>

                    {{-- Trust indicators --}}
                    <div class="flex justify-center md:justify-start space-x-6 mt-10">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 mr-2 text-blue-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">99.9% Uptime</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 mr-2 text-blue-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">24/7 Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="py-20 bg-gradient-to-b from-white to-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-2">Our Advantages</h2>
                <h3 class="text-4xl font-bold mb-4 text-gray-900 font-cinzel">Why Thousands Choose Internet & Cable
                    Deals</h3>
                <p class="text-lg text-gray-600">Experience the difference with our cutting-edge technology and
                    customer-first approach.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Feature 1 --}}
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="p-1 bg-gradient-to-r from-blue-500 to-blue-700"></div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-100 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="bg-blue-50 text-blue-700 rounded-full px-3 py-1 text-sm font-medium">Up to
                                1Gbps</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-gray-900">Lightning Fast Speed</h4>
                        <p class="text-gray-600">Experience ultra-fast internet speeds that keep up with your digital
                            lifestyle.</p>
                    </div>
                </div>

                {{-- Feature 2 --}}
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="p-1 bg-gradient-to-r from-blue-500 to-blue-700"></div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-100 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <span class="bg-blue-50 text-blue-700 rounded-full px-3 py-1 text-sm font-medium">500+
                                Channels</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-gray-900">Premium TV Package</h4>
                        <p class="text-gray-600">Enjoy crystal-clear HD channels with premium entertainment options.</p>
                    </div>
                </div>

                {{-- Feature 3 --}}
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="p-1 bg-gradient-to-r from-blue-500 to-blue-700"></div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-100 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 11-9.75 9.75 9.75 9.75 0 019.75-9.75z">
                                    </path>
                                </svg>
                            </div>
                            <span
                                class="bg-blue-50 text-blue-700 rounded-full px-3 py-1 text-sm font-medium">24/7</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-gray-900">Expert Support</h4>
                        <p class="text-gray-600">Round-the-clock technical support from our certified professionals.</p>
                    </div>
                </div>

                {{-- Feature 4 --}}
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="p-1 bg-gradient-to-r from-blue-500 to-blue-700"></div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-100 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <span
                                class="bg-blue-50 text-blue-700 rounded-full px-3 py-1 text-sm font-medium">Secure</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-gray-900">Secure Connection</h4>
                        <p class="text-gray-600">Advanced security features to protect your data and privacy online.</p>
                    </div>
                </div>

                {{-- Feature 5 --}}
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="p-1 bg-gradient-to-r from-blue-500 to-blue-700"></div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-100 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="bg-blue-50 text-blue-700 rounded-full px-3 py-1 text-sm font-medium">Best
                                Value</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-gray-900">Affordable Pricing</h4>
                        <p class="text-gray-600">Competitive rates with no hidden fees and flexible payment options.</p>
                    </div>
                </div>

                {{-- Feature 6 --}}
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="p-1 bg-gradient-to-r from-blue-500 to-blue-700"></div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-100 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <span class="bg-blue-50 text-blue-700 rounded-full px-3 py-1 text-sm font-medium">No
                                Contract</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-gray-900">Flexible Plans</h4>
                        <p class="text-gray-600">Choose from contract or month-to-month options that fit your needs.</p>
                    </div>
                </div>
            </div>

            <!-- Updated "Check Our Partners" button to "Call Now" -->
<div class="mt-16 text-center">
    <a href="tel:5123872951" class="inline-flex items-center px-11 py-4 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-700 transition-colors duration-300">
        Call Now
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
        </svg>
    </a>
</div>
        </div>
    </section>

   {{-- Partners Section --}}
<section id="partners" class="py-20 bg-gradient-to-b from-white to-blue-50">
    <div class="container mx-auto px-4">
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-2">Trusted Collaboration</h2>
            <h3 class="text-4xl font-bold mb-4 text-gray-900">Our Partners</h3>
            <p class="text-lg text-gray-600">
                We work with industry leaders to provide you with the best connectivity solutions and services.
            </p>
        </div>

        {{-- Partners Logo Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 mb-12">
            {{-- Partner 1 - EarthLink --}}
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 flex flex-col items-center">
                <div class="h-32 w-40 mb-4 flex items-center justify-center bg-white rounded-lg shadow-inner p-2">
                    <img src="{{ asset('images/earthlink-logo.jpg') }}" alt="EarthLink logo"
                        class="w-full h-full object-contain" />
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">EarthLink</h4>
                <p class="text-gray-600 text-center text-sm mb-3">Reliable internet service provider with nationwide
                    coverage</p>
                <div class="mt-auto">
                    <span class="inline-block bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full font-medium">
                        Internet Service
                    </span>
                </div>
            </div>

            {{-- Partner 2 - Frontier --}}
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 flex flex-col items-center">
                <div class="h-32 w-40 mb-4 flex items-center justify-center bg-white rounded-lg shadow-inner p-2">
                    <img src="{{ asset('images/frontier-logo.jpeg') }}" alt="Frontier logo"
                        class="w-full h-full object-contain" />
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Frontier</h4>
                <p class="text-gray-600 text-center text-sm mb-3">High-speed fiber internet and digital TV services
                </p>
                <div class="mt-auto">
                    <span class="inline-block bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full font-medium">
                        Fiber Internet
                    </span>
                </div>
            </div>

            {{-- Partner 3 - Kinetic --}}
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 flex flex-col items-center">
                <div class="h-32 w-40 mb-4 flex items-center justify-center bg-white rounded-lg shadow-inner p-2">
                    <img src="{{ asset('images/kinetic-logo.jpeg') }}" alt="Kinetic logo"
                        class="w-full h-full object-contain" />
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Kinetic</h4>
                <p class="text-gray-600 text-center text-sm mb-3">Advanced fiber technology for homes and businesses
                </p>
                <div class="mt-auto">
                    <span class="inline-block bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full font-medium">
                        Fiber Technology
                    </span>
                </div>
            </div>

            {{-- Partner 4 - Spectrum --}}
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 flex flex-col items-center">
                <div class="h-32 w-40 mb-4 flex items-center justify-center bg-white rounded-lg shadow-inner p-2">
                    <img src="{{ asset('images/spectrum-logo.jpeg') }}" alt="Spectrum logo"
                        class="w-full h-full object-contain" />
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Spectrum</h4>
                <p class="text-gray-600 text-center text-sm mb-3">Cable internet, TV, and mobile services nationwide
                </p>
                <div class="mt-auto">
                    <span class="inline-block bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full font-medium">
                        Cable Services
                    </span>
                </div>
            </div>

            {{-- Partner 5 - DirectvDealer --}}
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 flex flex-col items-center">
                <div class="h-32 w-40 mb-4 flex items-center justify-center bg-white rounded-lg shadow-inner p-2">
                    <img src="{{ asset('images/directvdealer-logo.png') }}" alt="DirectvDealer logo"
                        class="w-full h-full object-contain" />
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">DirectvDealer</h4>
                <p class="text-gray-600 text-center text-sm mb-3">Premium satellite TV and streaming entertainment solutions
                </p>
                <div class="mt-auto">
                    <span class="inline-block bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full font-medium">
                        Satellite TV
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- About Section --}}
    <section id="about" class="py-20 bg-blue-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                {{-- Left Column - Text Content --}}
                <div class="md:w-1/2 space-y-6">
                    <div class="inline-block">
                        <span class="bg-blue-100 text-blue-700 text-sm font-semibold px-4 py-1 rounded-full">About
                            Internet & Cable Deals</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">
                        Connecting Homes and Businesses Since 2010
                    </h2>

                    <div class="space-y-4">
                        <p class="text-gray-600 text-lg">
                            At Internet & Cable Deals, we believe that reliable connectivity is essential for modern
                            living. Our mission is to provide high-quality internet and entertainment solutions that
                            keep you connected to what matters most.
                        </p>

                        <p class="text-gray-600 text-lg">
                            With over a decade of experience in the telecommunications industry, we've built a
                            reputation for exceptional service, cutting-edge technology, and customer satisfaction.
                        </p>

                        <div class="grid grid-cols-2 gap-4 py-4">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                    <svg class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Lightning Fast</h3>
                                    <p class="text-gray-600 text-sm">Speeds up to 1Gbps</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                    <svg class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Data Analytics</h3>
                                    <p class="text-gray-600 text-sm">Usage insights</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                    <svg class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Flexible Packages</h3>
                                    <p class="text-gray-600 text-sm">Customizable plans</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                    <svg class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">24/7 Support</h3>
                                    <p class="text-gray-600 text-sm">Always available</p>
                                </div>
                            </div>
                        </div>

                        <a href="tel:5123872951"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-1 inline-flex items-center">
                            Call Now
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Right Column - Image with Hover Effect --}}
                <div class="md:w-1/2">
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-xl cursor-pointer transform transition-all duration-500 hover:scale-105">
                        {{-- Main Image --}}
                        <div class="relative aspect-[4/3] bg-blue-200">
                            {{-- Background gradient overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 opacity-80"></div>

                            {{-- Placeholder icon --}}
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="h-24 w-24 text-white opacity-20" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            {{-- Actual image --}}
                            <img src="{{ asset('images/Global-TV-Service.jpg') }}"
                                alt="Internet & Cable Deals service technician installing fiber optic cable"
                                class="absolute inset-0 w-full h-full object-cover" />
                        </div>

                        {{-- Hover overlay --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/60 to-transparent flex items-end opacity-0 hover:opacity-100 transition-opacity duration-500">
                            <div class="p-6">
                                <h3 class="font-bold text-white text-xl mb-2">
                                    Next-Generation Technology
                                </h3>
                                <p class="text-blue-100 mb-2">
                                    Our state-of-the-art infrastructure delivers reliable service to thousands of
                                    satisfied customers.
                                </p>
                            </div>
                        </div>

                        {{-- Accent corner effect --}}
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-white opacity-20 rounded-bl-full transition-all duration-700 hover:rotate-45 hover:scale-125">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-20 bg-gradient-to-b from-white to-blue-50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-2">Get In Touch</h2>
                <h3 class="text-4xl font-bold mb-4 text-gray-900">We're Here To Help</h3>
                <p class="text-lg text-gray-600">Have questions or need assistance? Our team of experts is just a
                    message away.</p>
            </div>

            <div class="max-w-6xl mx-auto grid md:grid-cols-5 gap-8">
                {{-- Image Column --}}
                <div class="md:col-span-2 rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/contact-us.jpg') }}" alt="Contact us promotional image"
                        class="w-full h-full object-cover" />
                </div>

                {{-- Form Column --}}
                <div class="md:col-span-3">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            @if(session('success'))
                                <div class="text-center py-12">
                                    <div
                                        class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-6">
                                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <h4 class="text-2xl font-bold text-gray-900 mb-2">Thank You!</h4>
                                    <p class="text-gray-600 mb-6">{{ session('success') }}</p>
                                </div>
                            @else
                            @if($errors->any())
                                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-red-700">Please fix the errors below.</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2" for="name">Full Name*</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                                        class="w-full border @error('name') border-red-500 @else border-gray-300 @enderror px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="John Doe" />
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-medium mb-2" for="email">Email
                                        Address*</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        class="w-full border @error('email') border-red-500 @else border-gray-300 @enderror px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="john@example.com" />
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-medium mb-2" for="phone">Phone
                                        Number*</label>
                                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                        class="w-full border @error('phone') border-red-500 @else border-gray-300 @enderror px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="(123) 456-7890" />
                                    @error('phone')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-medium mb-2" for="service">Interested
                                        In</label>
                                    <select id="service" name="service"
                                        class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white">
                                        <option value="internet" {{ old('service') == 'internet' ? 'selected' : '' }}>
                                            Internet Service</option>
                                        <option value="tv" {{ old('service') == 'tv' ? 'selected' : '' }}>Cable TV
                                        </option>
                                        <option value="bundle" {{ old('service') == 'bundle' ? 'selected' : '' }}>Internet
                                            + TV Bundle</option>
                                        <option value="support" {{ old('service') == 'support' ? 'selected' : '' }}>
                                            Technical Support</option>
                                        <option value="other" {{ old('service') == 'other' ? 'selected' : '' }}>Other
                                            Inquiry</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="message">Your Message*</label>
                                <textarea id="message" name="message"
                                    class="w-full border @error('message') border-red-500 @else border-gray-300 @enderror px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    rows="5"
                                    placeholder="Tell us more about what you need...">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center">
                                <input type="checkbox" id="consent" name="consent" value="1" {{ old('consent') ? 'checked' : '' }}
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 @error('consent') border-red-500 @enderror" />
                                <label for="consent"
                                    class="ml-2 block text-sm @error('consent') text-red-500 @else text-gray-600 @enderror">
                                    I agree to be contacted by Internet & Cable Deals regarding my inquiry*
                                </label>
                            </div>
                            @error('consent')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            <!-- Add this disclaimer div after the consent checkbox and before the submit button in the contact form -->
                            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                                <p class="text-xs text-gray-600 leading-relaxed">
                                    <strong>Disclaimer:</strong> By clicking the button below or entering your
                                    information, you consent for Tech Haven Marketing LLC, and any of its affiliate
                                    service providers to use automated technology. Including but not limited to: texts,
                                    phone calls, prerecorded messages, email or digital technology to contact you at the
                                    number and email provided about Tech Haven Marketing LLC offers which may or may not
                                    be directly related to this specific marketing campaign using other affiliate
                                    companies. This consent is not required to make a purchase. Clicking the button
                                    below constitutes your electronic signature.
                                </p>
                            </div>

                            <button type="submit"
                                class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center justify-center">
                                Send Message
                            </button>
                            <p class="text-xs text-gray-500 text-center mt-2">* Required fields</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>

            {{-- FAQ Section --}}
            <div class="mt-16 max-w-3xl mx-auto">
                <h4 class="text-2xl font-bold text-center mb-8">Frequently Asked Questions</h4>

                <div class="space-y-4">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h5 class="font-bold text-lg mb-2">How long does installation take?</h5>
                        <p class="text-gray-600">Standard installation typically takes 2-3 business days from the
                            date of order confirmation. Premium installations may be scheduled as soon as next-day.</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow">
                        <h5 class="font-bold text-lg mb-2">Can I bundle services for better pricing?</h5>
                        <p class="text-gray-600">Yes! We offer special discounted rates when you bundle internet and
                            TV services together. Check our bundles section for more details.</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow">
                        <h5 class="font-bold text-lg mb-2">Is there a contract requirement?</h5>
                        <p class="text-gray-600">We offer both contract and no-contract options. Choosing a 12-month
                            contract can provide significant savings, but we also offer month-to-month plans for maximum
                            flexibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Section --}}
    <footer class="bg-gradient-to-r from-blue-400 to-blue-700 text-white">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Company Info --}}
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center space-x-2 mb-4">
                        <img class="w-48 h-28" src="{{ asset('images/logo-1.png') }}"
                            alt="Internet & Cable Deals Logo" />
                    </div>
                </div>

                {{-- Contact Info --}}
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-blue-100">Contact Us</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <svg class="h-5 w-5 mt-1 text-blue-200 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Georgetown TX 78626</span>
                        </div>
                       <!-- Updated Footer Contact section -->
<div class="flex items-start space-x-3">
    <svg class="h-5 w-5 mt-1 text-blue-200 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
    </svg>
    <span>Call: +5123872951</span>
</div>
                        <div class="flex items-start space-x-3">
                            <svg class="h-5 w-5 mt-1 text-blue-200 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>support@internetandcabledeals.com</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="mt-10 pt-6 border-t border-blue-400 text-center">
                <div class="text-sm">
                    &copy; {{ date('Y') }} Internet & Cable Deals. All rights reserved.
                </div>
            </div>
        </div>
    </footer>


    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5VNXT37"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


</body>
</html>
