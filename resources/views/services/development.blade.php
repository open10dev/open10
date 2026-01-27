@extends('layouts.app')

@section('title', 'Development Foundations - Custom Software & Open Source Engineering | OPEN10')

@section('description', 'Expert software development services using Python, Go, PHP, Laravel, Django, and modern open-source technologies. Custom API development, microservices architecture, and legacy system modernization for scalable applications.')

@section('keywords', 'software development, open source development, custom software development, Python development, Django development, Laravel development, Go development, API development, microservices architecture, PostgreSQL, MongoDB, Redis, Kubernetes, Docker, cloud native development, legacy modernization')

@section('og_title', 'Development Foundations - Expert Software Engineering | OPEN10')

@section('og_description', 'Build production-grade applications with our expert team. Specializing in Python, Go, PHP, Laravel, Django, FastAPI, and modern cloud-native architectures. Custom development, API design, and scalable solutions.')

@section('og_image', '/images/og-development.png')

@section('content')

<!-- Hero with Decorative Elements -->
<section class="relative py-20 md:py-32 px-5 text-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 via-pink-50 to-purple-50"></div>
    <div class="absolute top-10 left-10 w-72 h-72 bg-accent/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-pink-300/20 rounded-full blur-3xl"></div>
    
    <div class="relative max-w-5xl mx-auto">
        <div class="inline-flex items-center gap-2 bg-accent/10 text-accent px-6 py-2 rounded-full text-sm font-semibold mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"></path>
            </svg>
            <span>Core Engineering Services</span>
        </div>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-600 to-purple-600 bg-clip-text text-transparent leading-tight">
            Development Foundations
        </h1>
        <p class="text-xl md:text-2xl text-gray-700 leading-relaxed max-w-3xl mx-auto font-medium">
            Design and build modern products on an open-source stack with clean architecture and future-proof patterns.
        </p>
    </div>
</section>

<!-- Overview with Icon -->
<section class="py-20 px-5">
    <div class="max-w-6xl mx-auto">
        <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl shadow-2xl p-10 md:p-16 border border-gray-100">
            <div class="flex items-center gap-4 mb-8">
                <svg class="w-12 h-12 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                </svg>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-accent to-pink-600 bg-clip-text text-transparent">
                    Overview
                </h2>
            </div>
            <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-light">
                We help teams build <span class="font-semibold text-accent">solid foundations</span> for their products using battle-tested open-source technologies. Whether you're starting from scratch or modernizing legacy systems, we deliver <span class="font-semibold text-accent">clean, maintainable code</span> that scales.
            </p>
        </div>
    </div>
</section>

<!-- What We Deliver - Enhanced Cards -->
<section class="py-20 px-5 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-accent to-pink-600 bg-clip-text text-transparent">
                What We Deliver
            </h2>
            <p class="text-xl text-gray-600">Comprehensive engineering solutions for your tech stack</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-accent/20 hover:-translate-y-2">
                <svg class="w-10 h-10 mb-4 text-gray-900 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Custom Plugin Development</h3>
                <p class="text-gray-600 leading-relaxed">For popular open-source frameworks</p>
            </div>

            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-accent/20 hover:-translate-y-2">
                <svg class="w-10 h-10 mb-4 text-gray-900 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">API Design</h3>
                <p class="text-gray-600 leading-relaxed">Integration architecture that works</p>
            </div>

            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-accent/20 hover:-translate-y-2">
                <svg class="w-10 h-10 mb-4 text-gray-900 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Database Design</h3>
                <p class="text-gray-600 leading-relaxed">Schema design and migration strategies</p>
            </div>

            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-accent/20 hover:-translate-y-2">
                <svg class="w-10 h-10 mb-4 text-gray-900 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Microservices Architecture</h3>
                <p class="text-gray-600 leading-relaxed">Domain modeling and scalable systems</p>
            </div>

            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-accent/20 hover:-translate-y-2">
                <svg class="w-10 h-10 mb-4 text-gray-900 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Legacy Modernization</h3>
                <p class="text-gray-600 leading-relaxed">System refactoring and updates</p>
            </div>

            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-accent/20 hover:-translate-y-2">
                <svg class="w-10 h-10 mb-4 text-gray-900 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Code Review & Consultation</h3>
                <p class="text-gray-600 leading-relaxed">Expert architectural guidance</p>
            </div>
        </div>
    </div>
</section>

<!-- Technologies - Modern Grid -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-accent to-pink-400 bg-clip-text text-transparent">
                Technologies We Master
            </h2>
            <p class="text-xl text-gray-300">Battle-tested tools for modern development</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 shadow-2xl border border-gray-700 hover:border-accent/50 transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-accent">Languages</h3>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-blue-500/20 text-blue-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-blue-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300">Python</span>
                    <span class="px-4 py-2 bg-cyan-500/20 text-cyan-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-cyan-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-cyan-500/50 transition-all duration-300">Go</span>
                    <span class="px-4 py-2 bg-yellow-500/20 text-yellow-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-yellow-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-yellow-500/50 transition-all duration-300">TypeScript</span>
                    <span class="px-4 py-2 bg-purple-500/20 text-purple-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-purple-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300">PHP</span>
                    <span class="px-4 py-2 bg-orange-500/20 text-orange-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-orange-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-orange-500/50 transition-all duration-300">Rust</span>
                    <span class="px-4 py-2 bg-red-500/20 text-red-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-red-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-red-500/50 transition-all duration-300">Java</span>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 shadow-2xl border border-gray-700 hover:border-accent/50 transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-accent">Frameworks</h3>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-green-500/20 text-green-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-green-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-green-500/50 transition-all duration-300">Django</span>
                    <span class="px-4 py-2 bg-red-600/20 text-red-400 rounded-lg text-sm font-medium cursor-pointer hover:bg-red-600/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-red-600/50 transition-all duration-300">Laravel</span>
                    <span class="px-4 py-2 bg-teal-500/20 text-teal-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-teal-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-teal-500/50 transition-all duration-300">FastAPI</span>
                    <span class="px-4 py-2 bg-gray-500/20 text-gray-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-gray-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-gray-500/50 transition-all duration-300">Express</span>
                    <span class="px-4 py-2 bg-green-600/20 text-green-400 rounded-lg text-sm font-medium cursor-pointer hover:bg-green-600/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-green-600/50 transition-all duration-300">Spring Boot</span>
                    <span class="px-4 py-2 bg-white/10 text-white rounded-lg text-sm font-medium cursor-pointer hover:bg-white/20 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-white/50 transition-all duration-300">Next.js</span>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 shadow-2xl border border-gray-700 hover:border-accent/50 transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-accent">Databases</h3>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-blue-600/20 text-blue-400 rounded-lg text-sm font-medium cursor-pointer hover:bg-blue-600/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-600/50 transition-all duration-300">PostgreSQL</span>
                    <span class="px-4 py-2 bg-orange-600/20 text-orange-400 rounded-lg text-sm font-medium cursor-pointer hover:bg-orange-600/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-orange-600/50 transition-all duration-300">MySQL</span>
                    <span class="px-4 py-2 bg-green-600/20 text-green-400 rounded-lg text-sm font-medium cursor-pointer hover:bg-green-600/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-green-600/50 transition-all duration-300">MongoDB</span>
                    <span class="px-4 py-2 bg-red-600/20 text-red-400 rounded-lg text-sm font-medium cursor-pointer hover:bg-red-600/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-red-600/50 transition-all duration-300">Redis</span>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 shadow-2xl border border-gray-700 hover:border-accent/50 transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-10 5 5 0 00-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-accent">Platforms</h3>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-blue-500/20 text-blue-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-blue-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300">Kubernetes</span>
                    <span class="px-4 py-2 bg-cyan-500/20 text-cyan-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-cyan-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-cyan-500/50 transition-all duration-300">Docker</span>
                    <span class="px-4 py-2 bg-orange-500/20 text-orange-300 rounded-lg text-sm font-medium cursor-pointer hover:bg-orange-500/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-orange-500/50 transition-all duration-300">AWS</span>
                    <span class="px-4 py-2 bg-blue-600/20 text-blue-400 rounded-lg text-sm font-medium cursor-pointer hover:bg-blue-600/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-600/50 transition-all duration-300">GCP</span>
                    <span class="px-4 py-2 bg-cyan-600/20 text-cyan-400 rounded-lg text-sm font-medium cursor-pointer hover:bg-cyan-600/40 hover:scale-110 hover:-translate-y-1 hover:shadow-lg hover:shadow-cyan-600/50 transition-all duration-300">Azure</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ideal For -->
<section class="py-20 px-5">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-accent to-pink-600 bg-clip-text text-transparent">
            Perfect For
        </h2>
        <div class="space-y-4">
            <div class="group bg-gradient-to-r from-purple-50 to-pink-50 hover:from-purple-100 hover:to-pink-100 rounded-2xl p-6 shadow-md hover:shadow-xl transition-all border-l-4 border-accent">
                <div class="flex items-start gap-4">
                    <svg class="w-8 h-8 text-gray-900 group-hover:scale-110 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Startups & New Products</h3>
                        <p class="text-gray-700">Teams building new products on open-source frameworks from the ground up</p>
                    </div>
                </div>
            </div>

            <div class="group bg-gradient-to-r from-blue-50 to-cyan-50 hover:from-blue-100 hover:to-cyan-100 rounded-2xl p-6 shadow-md hover:shadow-xl transition-all border-l-4 border-accent">
                <div class="flex items-start gap-4">
                    <span class="text-3xl group-hover:scale-110 transition-transform">🔧</span>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Custom OSS Extensions</h3>
                        <p class="text-gray-700">Projects needing custom functionality in existing open-source tools</p>
                    </div>
                </div>
            </div>

            <div class="group bg-gradient-to-r from-orange-50 to-red-50 hover:from-orange-100 hover:to-red-100 rounded-2xl p-6 shadow-md hover:shadow-xl transition-all border-l-4 border-accent">
                <div class="flex items-start gap-4">
                    <span class="text-3xl group-hover:scale-110 transition-transform">🏢</span>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Legacy Modernization</h3>
                        <p class="text-gray-700">Companies modernizing legacy monoliths to modern architectures</p>
                    </div>
                </div>
            </div>

            <div class="group bg-gradient-to-r from-green-50 to-teal-50 hover:from-green-100 hover:to-teal-100 rounded-2xl p-6 shadow-md hover:shadow-xl transition-all border-l-4 border-accent">
                <div class="flex items-start gap-4">
                    <span class="text-3xl group-hover:scale-110 transition-transform">📐</span>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Architecture Guidance</h3>
                        <p class="text-gray-700">Organizations requiring expert architectural consultation and code review</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA with Visual Appeal -->
<section class="relative py-24 px-5 text-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-accent via-pink-600 to-purple-600"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjEiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-20"></div>
    
    <div class="relative max-w-4xl mx-auto">
        <div class="inline-block bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded-full text-sm font-semibold mb-6">
            ⚡ Ready to Build Something Amazing?
        </div>
        <h3 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-8 text-white drop-shadow-lg">
            Let's Build Your Foundation
        </h3>
        <p class="text-xl md:text-2xl text-white/90 mb-10 font-light">
            Start your project with solid engineering principles
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-accent px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-3xl hover:-translate-y-2 hover:scale-105 transition-all duration-300">
            Contact Us Now →
        </a>
    </div>
</section>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Software Development',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'OPEN10',
        'url' => url('/')
    ],
    'name' => 'Development Foundations',
    'description' => 'Expert software development services using Python, Go, PHP, Laravel, Django, and modern open-source technologies. Custom API development, microservices architecture, and legacy system modernization.',
    'areaServed' => 'Worldwide',
    'offers' => [
        '@type' => 'Offer',
        'category' => 'Software Development Services'
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Development Services',
        'itemListElement' => [
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Custom Plugin Development',
                    'description' => 'Custom plugin development for popular open-source frameworks'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'API Design & Integration',
                    'description' => 'API design and integration architecture'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Database Architecture',
                    'description' => 'Database schema design and migration strategies'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Microservices Architecture',
                    'description' => 'Microservices architecture and domain modeling'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Legacy Modernization',
                    'description' => 'Legacy system modernization and refactoring'
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

@endsection
