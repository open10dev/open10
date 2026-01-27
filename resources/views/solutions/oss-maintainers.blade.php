@extends('layouts.app')

@section('title', 'For Open Source Maintainers | OPEN10')

@section('content')

<!-- Hero -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-white to-blue-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-indigo-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
        </svg>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            For OSS Maintainers
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            Scale your project with expert contributions and sustainable business models.
        </p>
    </div>
</section>

<!-- How We Help -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-accent to-purple-600 bg-clip-text text-transparent">
            How We Help
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="group bg-gradient-to-br from-indigo-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-indigo-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Feature Development</h3>
                <p class="text-gray-600 leading-relaxed">
                    Ship major features while your core team focuses on direction.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-blue-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Maintenance Support</h3>
                <p class="text-gray-600 leading-relaxed">
                    Triage, fix, close issues. Keep the backlog manageable.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-cyan-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Enterprise Edition</h3>
                <p class="text-gray-600 leading-relaxed">
                    Build premium features while keeping core OSS healthy.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-purple-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Documentation</h3>
                <p class="text-gray-600 leading-relaxed">
                    Clear docs and examples that help users succeed.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-pink-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-pink-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Release Management</h3>
                <p class="text-gray-600 leading-relaxed">
                    CI/CD and automated releases. Ship with confidence.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-green-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Business Strategy</h3>
                <p class="text-gray-600 leading-relaxed">
                    Commercialization strategies that work.
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
        <svg class="w-16 h-16 mx-auto mb-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
        </svg>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Scale Your Project</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">Get expert help to grow your open source project.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Let's Talk</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
