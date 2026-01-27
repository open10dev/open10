@extends('layouts.app')

@section('title', 'Resources | OPEN10')

@section('content')

<!-- Hero with animated gradient background -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-white to-purple-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-indigo-300/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-purple-300/20 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="text-5xl mb-4">📚</div>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            Resources
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            Guides, insights, and stories on building modern software.
        </p>
    </div>
</section>

<!-- Alert Messages -->
@if(session('success') || session('error') || session('info'))
<section class="py-6 px-5 bg-white">
    <div class="max-w-4xl mx-auto">
        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 rounded-lg p-6 flex items-start gap-4">
                <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="text-green-800 font-medium">{{ session('success') }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-6 flex items-start gap-4">
                <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <p class="text-red-800 font-medium">{{ session('error') }}</p>
            </div>
        @endif

        @if(session('info'))
            <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg p-6 flex items-start gap-4">
                <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="text-blue-800 font-medium">{{ session('info') }}</p>
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-6">
                <div class="flex items-start gap-4">
                    <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <p class="text-red-800 font-medium mb-2">Please fix the following errors:</p>
                        <ul class="list-disc list-inside text-red-700 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@endif

<!-- Coming Soon Notice -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-4xl mx-auto">
        <div class="bg-gradient-to-br from-yellow-50 via-yellow-100 to-orange-50 rounded-3xl p-12 text-center border-2 border-yellow-200 shadow-xl">
            <svg class="w-16 h-16 mx-auto mb-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
            </svg>
            <h3 class="text-3xl font-bold mb-4 text-gray-900">Content Coming Soon</h3>
            <p class="text-lg text-gray-700 max-w-xl mx-auto">
                We're preparing valuable insights on open source, platform engineering, and AI development.
            </p>
        </div>
    </div>
</section>

<!-- Preview Cards -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-purple-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
            <span class="inline-block bg-purple-100 text-purple-700 px-3 py-1 rounded-lg text-sm font-bold uppercase mb-4">Open Source</span>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Sustainable OSS</h3>
            <p class="text-gray-600">Building business models around open source</p>
            <p class="text-sm text-gray-500 mt-4">Coming Soon • 8 min</p>
        </div>

        <div class="group bg-gradient-to-br from-pink-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-pink-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
            </svg>
            <span class="inline-block bg-pink-100 text-pink-700 px-3 py-1 rounded-lg text-sm font-bold uppercase mb-4">AI Development</span>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Practical AI Tools</h3>
            <p class="text-gray-600">Real workflows without the hype</p>
            <p class="text-sm text-gray-500 mt-4">Coming Soon • 10 min</p>
        </div>

        <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-cyan-100">
            <svg class="w-12 h-12 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span class="inline-block bg-cyan-100 text-cyan-700 px-3 py-1 rounded-lg text-sm font-bold uppercase mb-4">Platform Engineering</span>
            <h3 class="text-xl font-bold mb-3 text-gray-900">IDP Patterns</h3>
            <p class="text-gray-600">Designs developers actually love</p>
            <p class="text-sm text-gray-500 mt-4">Coming Soon • 12 min</p>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-2xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
        <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            Stay Updated
        </h2>
        <p class="text-lg text-gray-600 mb-8">
            Monthly insights on open source, platform engineering, and AI.
        </p>
        <form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto" method="POST" action="{{ route('newsletter.subscribe') }}">
            @csrf
            <input type="email" name="email" placeholder="your@email.com" required
                class="flex-1 px-5 py-4 border-2 border-gray-200 rounded-2xl text-lg focus:border-accent focus:outline-none transition-all">
            <button type="submit" 
                class="bg-gradient-to-r from-accent to-pink-600 text-white px-10 py-4 rounded-2xl font-bold shadow-xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
                Subscribe
            </button>
        </form>
    </div>
</section>

<!-- Dark CTA section -->
<section class="relative py-32 px-5 overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <svg class="w-16 h-16 mx-auto mb-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
        </svg>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Have a Question?</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">Let's discuss your project and how we can help.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Get in Touch</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
