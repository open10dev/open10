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

<!-- Contact Card -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-2xl mx-auto">

        <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-10 md:p-14 shadow-2xl border border-gray-100 text-center">

            <!-- Icon -->
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-accent/10 to-pink-100 mb-6">
                <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>

            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Drop us an email</h2>
            <p class="text-gray-500 text-lg mb-2">We'd love to hear about your project.</p>
            <p class="text-gray-400 text-sm mb-10">We typically respond within a few hours during business days.</p>

            <!-- Primary mailto CTA -->
            <a href="mailto:support@open10.dev?subject=Project%20Enquiry&body=Hi%20OPEN10%20team%2C%0A%0AI%27d%20like%20to%20discuss%20a%20project.%0A%0AName%3A%20%0ACompany%3A%20%0AHow%20can%20you%20help%3A%20%0ATimeline%3A%20%0A%0ADetails%3A%20"
                class="inline-flex items-center justify-center gap-3 w-full bg-gradient-to-r from-accent to-pink-600 text-white px-8 py-5 rounded-2xl font-bold text-lg shadow-xl hover:shadow-accent/40 hover:-translate-y-0.5 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Open Email App
            </a>
            <p class="text-xs text-gray-400 mt-3">Opens your default email client with subject pre-filled</p>

            <!-- Divider -->
            <div class="my-8 flex items-center gap-4">
                <span class="flex-1 h-px bg-gray-100"></span>
                <span class="text-xs text-gray-300 font-medium uppercase tracking-wider">or write directly to</span>
                <span class="flex-1 h-px bg-gray-100"></span>
            </div>

            <!-- Email address copyable -->
            <div class="inline-flex items-center gap-3 bg-gray-50 border border-gray-200 rounded-xl px-5 py-3 group cursor-pointer select-all"
                 onclick="copyEmail(this)" title="Click to copy">
                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                </svg>
                <span class="text-gray-700 font-mono text-sm font-medium">support@open10.dev</span>
                <span class="copied-label hidden text-xs text-green-600 font-semibold">Copied!</span>
            </div>

            <!-- What to include hint -->
            <div class="mt-10 text-left bg-blue-50/60 border border-blue-100 rounded-2xl p-6">
                <p class="text-sm font-semibold text-gray-700 mb-3">💡 What to include in your email</p>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2 text-sm text-gray-500">
                        <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
                        Your name &amp; company
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-500">
                        <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
                        What you need help with (development, AI, DevOps…)
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-500">
                        <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
                        Rough timeline &amp; any budget context
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-500">
                        <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
                        Brief description of the project
                    </li>
                </ul>
            </div>
        </div>

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

@section('scripts')
<script>
function copyEmail(el) {
    navigator.clipboard.writeText('support@open10.dev').then(function() {
        var label = el.querySelector('.copied-label');
        label.classList.remove('hidden');
        setTimeout(function() { label.classList.add('hidden'); }, 2000);
    });
}
</script>
@endsection
