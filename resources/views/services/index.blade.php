@extends('layouts.app')

@section('title', 'Our Services | OPEN10')

@section('content')

<!-- Hero -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-purple-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            Our Services
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            From development to deployment. We build it all.
        </p>
    </div>
</section>

<!-- Service Cards -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <a href="{{ route('services.development') }}" class="group bg-gradient-to-br from-yellow-50 to-white rounded-3xl p-10 hover:shadow-2xl transition-all duration-300 border border-yellow-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
            <h3 class="text-2xl font-bold mb-3 text-gray-900">Development Foundations</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                Modern products on open-source stacks with clean architecture.
            </p>
            <span class="text-accent font-semibold group-hover:underline">Explore →</span>
        </a>

        <a href="{{ route('services.ai-delivery') }}" class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-10 hover:shadow-2xl transition-all duration-300 border border-purple-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
            </svg>
            <h3 class="text-2xl font-bold mb-3 text-gray-900">AI-Assisted Delivery</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                AI in your pipelines. Code generation, reviews, domain copilots.
            </p>
            <span class="text-accent font-semibold group-hover:underline">Explore →</span>
        </a>

        <a href="{{ route('services.idp') }}" class="group bg-gradient-to-br from-green-50 to-white rounded-3xl p-10 hover:shadow-2xl transition-all duration-300 border border-green-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"></path>
            </svg>
            <h3 class="text-2xl font-bold mb-3 text-gray-900">Internal Developer Platforms</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                Build IDPs with golden paths, self-service environments, and paved roads for every service.
            </p>
            <span class="text-accent font-semibold group-hover:underline">Explore →</span>
        </a>

        <a href="{{ route('services.devops') }}" class="group bg-gradient-to-br from-red-50 to-white rounded-3xl p-10 hover:shadow-2xl transition-all duration-300 border border-red-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
            <h3 class="text-2xl font-bold mb-3 text-gray-900">Secured Operations</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                Automated, observable, reversible. Make releases boring.
            </p>
            <span class="text-accent font-semibold group-hover:underline">Explore →</span>
        </a>

    </div>
</section>

<!-- Dark CTA -->
<section class="relative py-32 px-5 overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="text-5xl mb-6">💬</div>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Need Help Choosing?</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">Let's discuss your needs and find the right service.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Schedule a Call</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
