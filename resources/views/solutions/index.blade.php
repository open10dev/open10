@extends('layouts.app')

@section('title', 'Who We Help | OPEN10')

@section('content')

<!-- Hero -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-pink-50 via-white to-purple-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-pink-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            Who We Help
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            From OSS maintainers to CTOs. Quality, transparency, results.
        </p>
    </div>
</section>

<!-- Solutions Cards -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <a href="{{ route('solutions.oss-maintainers') }}" class="group bg-gradient-to-br from-indigo-50 to-white rounded-3xl p-10 hover:shadow-2xl transition-all duration-300 border border-indigo-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
            <h3 class="text-2xl font-bold mb-3 text-gray-900">OSS Maintainers</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                Scale projects with expert contributions and sustainable models.
            </p>
            <span class="text-accent font-semibold group-hover:underline">Learn More →</span>
        </a>

        <a href="{{ route('solutions.engineering-teams') }}" class="group bg-gradient-to-br from-cyan-50 to-white rounded-3xl p-10 hover:shadow-2xl transition-all duration-300 border border-cyan-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <h3 class="text-2xl font-bold mb-3 text-gray-900">Engineering Teams</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                Navigate complexity and ship faster with open-source expertise.
            </p>
            <span class="text-accent font-semibold group-hover:underline">Learn More →</span>
        </a>

        <a href="{{ route('solutions.leadership') }}" class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-10 hover:shadow-2xl transition-all duration-300 border border-purple-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
            </svg>
            <h3 class="text-2xl font-bold mb-3 text-gray-900">CTOs & Leaders</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                Modernize platforms and boost productivity strategically.
            </p>
            <span class="text-accent font-semibold group-hover:underline">Learn More →</span>
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
        <svg class="w-16 h-16 mx-auto mb-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
        </svg>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Ready to Partner?</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">Let's discuss how we can help your team succeed.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Get in Touch</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
