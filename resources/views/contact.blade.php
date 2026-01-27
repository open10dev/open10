@extends('layouts.app')

@section('title', 'Contact | OPEN10')

@section('content')

<!-- Hero with animated gradient background -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white to-pink-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-purple-300/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-pink-300/20 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="text-5xl mb-4">💬</div>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            Let's Build Together
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            Tell us about your project. We respond within 24 hours.
        </p>
    </div>
</section>

<!-- Contact Form -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-2xl mx-auto">
        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-8 bg-green-50 border-l-4 border-green-500 rounded-lg p-6 flex items-start gap-4">
                <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="text-green-800 font-medium">{{ session('success') }}</p>
            </div>
        @endif

        <!-- Error Message -->
        @if(session('error'))
            <div class="mb-8 bg-red-50 border-l-4 border-red-500 rounded-lg p-6 flex items-start gap-4">
                <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <p class="text-red-800 font-medium">{{ session('error') }}</p>
            </div>
        @endif

        <!-- Validation Errors -->
        @if($errors->any())
            <div class="mb-8 bg-red-50 border-l-4 border-red-500 rounded-lg p-6">
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

        <form class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-10 md:p-12 shadow-2xl border border-gray-100" method="POST" action="{{ route('contact.store') }}">
            @csrf
            
            <div class="mb-6">
                <label for="name" class="block font-bold mb-2 text-gray-900 text-lg">Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl text-lg focus:border-accent focus:outline-none transition-all @error('name') border-red-300 @enderror">
                @error('name')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block font-bold mb-2 text-gray-900 text-lg">Email *</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl text-lg focus:border-accent focus:outline-none transition-all @error('email') border-red-300 @enderror">
                @error('email')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="company" class="block font-bold mb-2 text-gray-900 text-lg">Company/Project</label>
                <input type="text" id="company" name="company" value="{{ old('company') }}"
                    class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl text-lg focus:border-accent focus:outline-none transition-all @error('company') border-red-300 @enderror">
                @error('company')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="help_type" class="block font-bold mb-2 text-gray-900 text-lg">How can we help? *</label>
                <select id="help_type" name="help_type" required
                    class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl text-lg focus:border-accent focus:outline-none transition-all @error('help_type') border-red-300 @enderror">
                    <option value="">Select an option</option>
                    <option value="development" {{ old('help_type') == 'development' ? 'selected' : '' }}>Development & Engineering</option>
                    <option value="ai" {{ old('help_type') == 'ai' ? 'selected' : '' }}>AI Implementation</option>
                    <option value="idp" {{ old('help_type') == 'idp' ? 'selected' : '' }}>Internal Developer Platform</option>
                    <option value="devops" {{ old('help_type') == 'devops' ? 'selected' : '' }}>DevOps & Infrastructure</option>
                    <option value="oss" {{ old('help_type') == 'oss' ? 'selected' : '' }}>Open Source Contribution</option>
                    <option value="consultation" {{ old('help_type') == 'consultation' ? 'selected' : '' }}>Not Sure / Consultation</option>
                </select>
                @error('help_type')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-8">
                <label for="message" class="block font-bold mb-2 text-gray-900 text-lg">Tell us about your project *</label>
                <textarea id="message" name="message" required rows="5"
                    class="w-full px-5 py-4 border-2 border-gray-200 rounded-2xl text-lg focus:border-accent focus:outline-none transition-all resize-y @error('message') border-red-300 @enderror">{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" 
                class="w-full bg-gradient-to-r from-accent to-pink-600 text-white px-8 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
                Send Message →
            </button>
        </form>
    </div>
</section>

<!-- What Happens Next -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-16 text-center bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            What Happens Next
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-purple-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">1. We Review</h3>
                <p class="text-gray-600">Schedule discovery call</p>
            </div>
            <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-blue-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">2. We Discuss</h3>
                <p class="text-gray-600">30-45 min call</p>
            </div>
            <div class="group bg-gradient-to-br from-pink-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-pink-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">3. We Propose</h3>
                <p class="text-gray-600">Clear scope & pricing</p>
            </div>
            <div class="group bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-green-100">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-3 text-gray-900">4. We Execute</h3>
                <p class="text-gray-600">Start building</p>
            </div>
        </div>
    </div>
</section>

<!-- Dark CTA section -->
<section class="relative py-32 px-5 overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="text-5xl mb-6">⚡</div>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Ready to Ship Faster?</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">Partner with engineers who understand both the code and the craft.</p>
        <a href="{{ route('work') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>View Our Work</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>

@endsection
