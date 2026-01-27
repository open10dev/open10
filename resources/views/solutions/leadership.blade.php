@extends('layouts.app')

@section('title', 'For CTOs & Engineering Leaders | OPEN10')

@section('content')

<!-- Hero -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white to-pink-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
        </svg>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            For CTOs & Leaders
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            Modernize platforms and boost productivity with strategic technical partnership.
        </p>
    </div>
</section>

<!-- Strategic Value -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-accent to-purple-600 bg-clip-text text-transparent">
            Strategic Value
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-purple-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Technical Due Diligence</h3>
                <p class="text-gray-600 leading-relaxed">
                    Assess tech decisions before committing resources.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-pink-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-pink-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Platform Modernization</h3>
                <p class="text-gray-600 leading-relaxed">
                    Upgrade infrastructure without disrupting operations.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-red-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-red-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Productivity Gains</h3>
                <p class="text-gray-600 leading-relaxed">
                    Identify bottlenecks and accelerate delivery.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-blue-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Risk Mitigation</h3>
                <p class="text-gray-600 leading-relaxed">
                    Build resilient, maintainable systems.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-green-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Architecture Planning</h3>
                <p class="text-gray-600 leading-relaxed">
                    Design systems that scale with business.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-yellow-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-yellow-100">
                <div class="text-4xl mb-4">🤝</div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Strategic Partnership</h3>
                <p class="text-gray-600 leading-relaxed">
                    Ongoing technical guidance and support.
                </p>
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
        <div class="text-5xl mb-6">💡</div>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Let's Discuss Strategy</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">Book a consultation to explore your technical roadmap.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Book Consultation</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
