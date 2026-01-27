@extends('layouts.app')

@section('title', 'Our Work | OPEN10')

@section('content')

<!-- Hero -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-pink-50 via-white to-purple-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-accent/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            Our Work
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            Real projects, real results.
        </p>
    </div>
</section>

<!-- Featured Case Studies -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Case Study 1 -->
            <div class="group relative bg-gradient-to-br from-purple-500 to-purple-700 rounded-3xl overflow-hidden hover:-translate-y-2 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="relative p-8 h-full flex flex-col justify-between min-h-[400px]">
                    <div>
                        <svg class="w-16 h-16 mb-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <h3 class="text-3xl font-bold text-white mb-4">OSS Platform Scaling</h3>
                        <p class="text-purple-100 text-lg mb-6">100K → 1M+ users</p>
                    </div>
                    <div class="space-y-3 text-white/90">
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>Improved architecture</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>Full automation</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>10x scale achieved</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="group relative bg-gradient-to-br from-pink-500 to-red-600 rounded-3xl overflow-hidden hover:-translate-y-2 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="relative p-8 h-full flex flex-col justify-between min-h-[400px]">
                    <div>
                        <svg class="w-16 h-16 mb-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <h3 class="text-3xl font-bold text-white mb-4">Developer Platform</h3>
                        <p class="text-pink-100 text-lg mb-6">Hours → Minutes</p>
                    </div>
                    <div class="space-y-3 text-white/90">
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>Self-service IDP</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>50+ engineers</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>95% faster deploys</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 3 -->
            <div class="group relative bg-gradient-to-br from-cyan-500 to-blue-600 rounded-3xl overflow-hidden hover:-translate-y-2 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="relative p-8 h-full flex flex-col justify-between min-h-[400px]">
                    <div>
                        <svg class="w-16 h-16 mb-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                        <h3 class="text-3xl font-bold text-white mb-4">AI Code Review</h3>
                        <p class="text-cyan-100 text-lg mb-6">40% More Issues Caught</p>
                    </div>
                    <div class="space-y-3 text-white/90">
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>Intelligent automation</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>Pre-production checks</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl">✓</span>
                            <span>Zero downtime</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative py-32 px-5 overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
        </svg>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Want similar results?
        </h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
            Let's build something extraordinary together.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Let's Build Together</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
