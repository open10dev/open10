<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OPEN10 - Expert Open Source & AI Engineering Services')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'From development to deployment, we turn your open source stack, AI and IDP vision into a production reality. Expert software engineering with Python, Laravel, Go, Kubernetes, and modern DevOps.')">
    <meta name="keywords" content="@yield('keywords', 'open source development, AI development, software engineering, IDP, internal developer platform, DevOps, platform engineering, Kubernetes, Docker, Python, Django, Laravel, Go, cloud native, software consulting')">
    <meta name="author" content="OPEN10">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="OPEN10">
    <meta property="og:title" content="@yield('og_title', 'OPEN10 - Expert Open Source & AI Engineering')">
    <meta property="og:description" content="@yield('og_description', 'From development to deployment, we turn your open source stack, AI and IDP vision into a production reality.')">
    <meta property="og:image" content="@yield('og_image', url('/images/og-default.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'OPEN10 - Expert Open Source & AI Engineering')">
    <meta name="twitter:description" content="@yield('og_description', 'From development to deployment, we turn your open source stack, AI and IDP vision into a production reality.')">
    <meta name="twitter:image" content="@yield('og_image', url('/images/og-default.png'))">
    
    <!-- Additional SEO -->
    <meta name="theme-color" content="#e11d48">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Fonts -->
    <link href="https://unpkg.com/@vercel/font@1.0.0/dist/geist-sans.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'accent': '#e11d48',
                    },
                    fontFamily: {
                        sans: ['"Geist Sans"', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Dropdown menu positioning and animations */
        .nav-item {
            position: relative;
        }

        .dropdown-toggle::after {
            content: '▾';
            margin-left: 6px;
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .nav-item:hover .dropdown-toggle::after {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            pointer-events: none;
            display: block;
            visibility: hidden;
            z-index: 1000;
        }

        .nav-item:hover .dropdown-menu {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
            visibility: visible;
        }

        /* Create invisible bridge between nav-item and dropdown */
        .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 0;
            right: 0;
            height: 8px;
        }

        .dropdown-menu a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(225, 29, 72, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .dropdown-menu a:hover::before {
            left: 100%;
        }

        /* CTA Button shine effect */
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        /* Nav link underline effect - only for direct nav links */
        .nav-link:not(.dropdown-toggle)::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #e11d48, #f472b6);
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-link:not(.dropdown-toggle):hover::before {
            width: 80%;
        }

        /* Get Started button text animation */
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }

        .cta-button {
            background-size: 200% auto;
        }

        .cta-button span {
            background: linear-gradient(90deg, 
                rgba(255,255,255,0.8) 0%, 
                rgba(255,255,255,1) 50%, 
                rgba(255,255,255,0.8) 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 3s linear infinite;
        }

        /* Footer heart animation */
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            25% { transform: scale(1.1); }
            50% { transform: scale(1); }
        }

        .heart {
            animation: heartbeat 1.5s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .footer-tagline {
                font-size: 14px;
            }

            .footer-copyright {
                font-size: 12px;
            }
        }

        @yield('styles')
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 font-sans text-gray-900">

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-white/98 backdrop-blur-md border-b border-accent/10 shadow-lg">
        <div class="max-w-7xl mx-auto px-5 py-[18px] flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-[26px] font-bold tracking-wider text-gray-900 -skew-x-[8deg] hover:text-accent hover:scale-105 transition-all duration-300">OPEN10</a>

            <ul class="hidden md:flex items-center gap-2 list-none">
                <li class="nav-item">
                    <a href="#" class="nav-link dropdown-toggle relative block px-4 py-2.5 text-gray-600 text-[15px] font-medium rounded-lg hover:text-accent hover:bg-accent/5 transition-all duration-300">Services</a>
                    <div class="dropdown-menu absolute top-full left-0 bg-white rounded-xl shadow-2xl p-4 pt-4 min-w-[240px] mt-0 border border-accent/10">
                        <a href="{{ route('services.index') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">Overview</a>
                        <a href="{{ route('services.development') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">Development Foundations</a>
                        <a href="{{ route('services.ai-delivery') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">AI-Assisted Delivery</a>
                        <a href="{{ route('services.idp') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">Internal Developer Platforms</a>
                        <a href="{{ route('services.devops') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">Secured Operations</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dropdown-toggle relative block px-4 py-2.5 text-gray-600 text-[15px] font-medium rounded-lg hover:text-accent hover:bg-accent/5 transition-all duration-300">Solutions</a>
                    <div class="dropdown-menu absolute top-full left-0 bg-white rounded-xl shadow-2xl p-4 pt-4 min-w-[240px] mt-0 border border-accent/10">
                        <a href="{{ route('solutions.index') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">Overview</a>
                        <a href="{{ route('solutions.oss-maintainers') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">For OSS Maintainers</a>
                        <a href="{{ route('solutions.engineering-teams') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">For Engineering Teams</a>
                        <a href="{{ route('solutions.leadership') }}" class="block px-4 py-3 text-gray-600 text-sm rounded-lg hover:bg-gradient-to-br hover:from-accent/8 hover:to-pink-400/8 hover:text-accent hover:translate-x-1 hover:shadow-md hover:shadow-accent/15 transition-all duration-200 relative overflow-hidden no-underline">For CTOs & Leaders</a>
                    </div>
                </li>
                <li><a href="{{ route('work') }}" class="nav-link relative block px-4 py-2.5 text-gray-600 text-[15px] font-medium rounded-lg hover:text-accent hover:bg-accent/5 transition-all duration-300">Work</a></li>
                <li><a href="{{ route('about') }}" class="nav-link relative block px-4 py-2.5 text-gray-600 text-[15px] font-medium rounded-lg hover:text-accent hover:bg-accent/5 transition-all duration-300">About</a></li>
                <li class="mr-12"><a href="{{ route('resources') }}" class="nav-link relative block px-4 py-2.5 text-gray-600 text-[15px] font-medium rounded-lg hover:text-accent hover:bg-accent/5 transition-all duration-300">Resources</a></li>
                <li><a href="{{ route('contact') }}" class="cta-button inline-block relative overflow-hidden px-7 py-[11px] bg-gradient-to-br from-accent to-red-600 text-white font-semibold rounded-lg shadow-lg shadow-accent/30 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-accent/40 hover:from-red-600 hover:to-accent hover:scale-105 active:translate-y-0 active:scale-100 transition-all duration-300"><span>Get Started</span></a></li>
            </ul>

            <button id="mobile-menu-btn" class="md:hidden text-2xl text-gray-900 bg-transparent border-0 cursor-pointer">
                <span id="menu-icon">☰</span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 shadow-lg">
            <div class="px-5 py-4 space-y-3">
                <!-- Services Dropdown -->
                <div>
                    <button onclick="toggleMobileDropdown('services')" class="w-full text-left px-4 py-3 text-gray-700 font-medium rounded-lg hover:bg-accent/5 flex items-center justify-between">
                        Services
                        <span id="services-icon" class="text-xs">▾</span>
                    </button>
                    <div id="services-dropdown" class="hidden pl-4 mt-2 space-y-2">
                        <a href="{{ route('services.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">Overview</a>
                        <a href="{{ route('services.development') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">Development Foundations</a>
                        <a href="{{ route('services.ai-delivery') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">AI-Assisted Delivery</a>
                        <a href="{{ route('services.idp') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">Internal Developer Platforms</a>
                        <a href="{{ route('services.devops') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">Secured Operations</a>
                    </div>
                </div>

                <!-- Solutions Dropdown -->
                <div>
                    <button onclick="toggleMobileDropdown('solutions')" class="w-full text-left px-4 py-3 text-gray-700 font-medium rounded-lg hover:bg-accent/5 flex items-center justify-between">
                        Solutions
                        <span id="solutions-icon" class="text-xs">▾</span>
                    </button>
                    <div id="solutions-dropdown" class="hidden pl-4 mt-2 space-y-2">
                        <a href="{{ route('solutions.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">Overview</a>
                        <a href="{{ route('solutions.oss-maintainers') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">For OSS Maintainers</a>
                        <a href="{{ route('solutions.engineering-teams') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">For Engineering Teams</a>
                        <a href="{{ route('solutions.leadership') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-accent hover:bg-accent/5 rounded-lg">For CTOs & Leaders</a>
                    </div>
                </div>

                <!-- Other Links -->
                <a href="{{ route('work') }}" class="block px-4 py-3 text-gray-700 font-medium rounded-lg hover:bg-accent/5">Work</a>
                <a href="{{ route('about') }}" class="block px-4 py-3 text-gray-700 font-medium rounded-lg hover:bg-accent/5">About</a>
                <a href="{{ route('resources') }}" class="block px-4 py-3 text-gray-700 font-medium rounded-lg hover:bg-accent/5">Resources</a>
                <a href="{{ route('contact') }}" class="block px-4 py-3 text-center bg-gradient-to-r from-accent to-red-600 text-white font-semibold rounded-lg shadow-lg">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#1a1a1a] text-white py-4 px-5 border-t-2 border-accent/30 mt-auto">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="text-xs md:text-sm text-gray-500 text-center md:text-left order-2 md:order-1">
                    &copy; {{ date('Y') }} OPEN10. All rights reserved.
                </div>
                <div class="text-sm md:text-sm text-gray-300 font-medium text-center order-1 md:order-2">
                    Developed with <span class="heart inline-block text-accent">❤</span> by <a href="https://open10.dev" target="_blank" rel="noopener" class="hover:text-accent transition-colors duration-300">OPEN10</a>
                </div>
                {{-- <a href="https://github.com/open10" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-9 h-9 bg-white/10 rounded-full text-white hover:bg-accent hover:-translate-y-0.5 hover:scale-110 hover:shadow-lg hover:shadow-accent/40 transition-all duration-300 order-3" aria-label="GitHub">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.167 22 16.418 22 12c0-5.523-4.477-10-10-10z"/>
                    </svg>
                </a> --}}
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.textContent = mobileMenu.classList.contains('hidden') ? '☰' : '✕';
        });

        // Mobile dropdown toggle
        function toggleMobileDropdown(name) {
            const dropdown = document.getElementById(name + '-dropdown');
            const icon = document.getElementById(name + '-icon');
            dropdown.classList.toggle('hidden');
            icon.style.transform = dropdown.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('nav')) {
                mobileMenu.classList.add('hidden');
                menuIcon.textContent = '☰';
            }
        });

        // Close mobile menu when window is resized to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                mobileMenu.classList.add('hidden');
                menuIcon.textContent = '☰';
            }
        });
    </script>

</body>
</html>
