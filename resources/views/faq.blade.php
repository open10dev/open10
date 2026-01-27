@extends('layouts.app')

@section('title', 'FAQ | OPEN10')

@section('content')

<!-- Hero -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-purple-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="text-5xl mb-4">💬</div>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            FAQ
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            Everything you need to know.
        </p>
    </div>
</section>

<!-- FAQ Grid -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Question 1 -->
        <div class="group bg-gradient-to-br from-pink-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-pink-100">
            <div class="text-4xl mb-4">📦</div>
            <h3 class="text-xl font-bold mb-3 text-gray-900">What size projects?</h3>
            <p class="text-gray-600 leading-relaxed">
                2-week sprints to 6-month builds. We handle everything from single features to complete platforms.
            </p>
        </div>

        <!-- Question 2 -->
        <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-purple-100">
            <div class="text-4xl mb-4">💰</div>
            <h3 class="text-xl font-bold mb-3 text-gray-900">How do you price?</h3>
            <p class="text-gray-600 leading-relaxed">
                Fixed-price or flexible T&M. We recommend what makes sense after understanding your needs.
            </p>
        </div>

        <!-- Question 3 -->
        <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-blue-100">
            <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Typical process?</h3>
            <p class="text-gray-600 leading-relaxed">
                Discovery call → Proposal → Sprint execution → Delivery with docs. Simple, transparent.
            </p>
        </div>

        <!-- Question 4 -->
        <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-cyan-100">
            <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Sign NDAs?</h3>
            <p class="text-gray-600 leading-relaxed">
                Yes, absolutely. We're happy to sign reasonable NDAs for proprietary work.
            </p>
        </div>

        <!-- Question 5 -->
        <div class="group bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-green-100">
            <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Tech stack?</h3>
            <p class="text-gray-600 leading-relaxed">
                Python, Go, TypeScript, Rust. Kubernetes, Terraform, cloud-native. If it's modern, we know it.
            </p>
        </div>

        <!-- Question 6 -->
        <div class="group bg-gradient-to-br from-yellow-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-yellow-100">
            <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
            </svg>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Ongoing support?</h3>
            <p class="text-gray-600 leading-relaxed">
                Yes. Many clients start with a project and continue with monthly retainers for support.
            </p>
        </div>

        <!-- Question 7 -->
        <div class="group bg-gradient-to-br from-red-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-red-100">
            <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Code ownership?</h3>
            <p class="text-gray-600 leading-relaxed">
                All code is yours. Complete IP rights. Unless contributing to existing OSS projects.
            </p>
        </div>

        <!-- Question 8 -->
        <div class="group bg-gradient-to-br from-indigo-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-indigo-100">
            <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="text-xl font-bold mb-3 text-gray-900">How quickly can you start?</h3>
            <p class="text-gray-600 leading-relaxed">
                We respond in 24 hours. Discovery call within a week. Start depends on capacity and timeline.
            </p>
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
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
        </svg>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Still have questions?
        </h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
            Let's talk directly.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Contact Us</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
