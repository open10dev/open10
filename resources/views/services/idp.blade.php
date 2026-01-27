@extends('layouts.app')

@section('title', 'Internal Developer Platforms | OPEN10')

@section('content')

<!-- Hero -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-white to-cyan-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-green-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="mb-6">
            <svg class="w-20 h-20 mx-auto text-gray-900" fill="currentColor" viewBox="0 0 512 512">
                <!-- Top Layer -->
                <path d="M256 48L464 144C472 148 472 152 464 156L256 252C252 254 244 254 240 252L32 156C24 152 24 148 32 144L240 48C244 46 252 46 256 48Z"/>
                <!-- Middle Layer -->
                <path d="M464 240C472 244 472 248 464 252L256 348C252 350 244 350 240 348L32 252C24 248 24 244 32 240L72 220L240 300C244 302 252 302 256 300L424 220L464 240Z"/>
                <!-- Bottom Layer -->
                <path d="M464 336C472 340 472 344 464 348L256 444C252 446 244 446 240 444L32 348C24 344 24 340 32 336L72 316L240 396C244 398 252 398 256 396L424 316L464 336Z"/>
            </svg>
        </div>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            Internal Developer Platforms
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            Golden paths, self-service, and paved roads for every service.
        </p>
    </div>
</section>

<!-- What We Deliver -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-accent to-purple-600 bg-clip-text text-transparent">
            What We Deliver
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="group bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-green-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Self-Service Infrastructure</h3>
                <p class="text-gray-600 leading-relaxed">
                    Provision infrastructure without waiting. Developers ship faster.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-cyan-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Deployment Pipelines</h3>
                <p class="text-gray-600 leading-relaxed">
                    Standardized, automated, and repeatable. Deploy with confidence.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-blue-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Service Catalogs</h3>
                <p class="text-gray-600 leading-relaxed">
                    Developer portals with everything in one place. Find it fast.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-purple-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Golden Paths</h3>
                <p class="text-gray-600 leading-relaxed">
                    Best practices baked in. Do the right thing by default.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-pink-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-pink-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Ephemeral Environments</h3>
                <p class="text-gray-600 leading-relaxed">
                    Spin up test environments in seconds. Tear down just as fast.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-yellow-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-yellow-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Template Scaffolding</h3>
                <p class="text-gray-600 leading-relaxed">
                    Start new services instantly. Consistency from day one.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Ideal For -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-accent to-purple-600 bg-clip-text text-transparent">
            Ideal For
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <svg class="w-8 h-8 mb-3 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h3 class="text-lg font-bold mb-2 text-gray-900">Growing Teams</h3>
                <p class="text-gray-600">10+ developers needing structure</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <svg class="w-8 h-8 mb-3 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                </svg>
                <h3 class="text-lg font-bold mb-2 text-gray-900">Multiple Services</h3>
                <p class="text-gray-600">Complex systems requiring standardization</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <svg class="w-8 h-8 mb-3 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <h3 class="text-lg font-bold mb-2 text-gray-900">Too Much Toil</h3>
                <p class="text-gray-600">Infrastructure eating productivity</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <svg class="w-8 h-8 mb-3 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
                <h3 class="text-lg font-bold mb-2 text-gray-900">Scaling Challenges</h3>
                <p class="text-gray-600">Manual processes breaking down</p>
            </div>

        </div>
    </div>
</section>

<!-- Dark CTA -->
<section class="relative py-32 px-5 overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
        </svg>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Build Your Platform</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">Give developers superpowers with self-service infrastructure.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Let's Build It</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
