@extends('layouts.app')

@section('title', 'About OPEN10')

@section('description', 'Senior engineering partners building tomorrow\'s production realities — today')

@section('content')

<!-- Hero Section -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white to-pink-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-purple-300/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-pink-300/20 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-5xl mx-auto text-center">
        <div class="text-5xl mb-4">🚀</div>
        <h1 class="text-5xl md:text-6xl font-bold mb-6 text-gray-900">
            About OPEN10
        </h1>
        <p class="text-2xl md:text-3xl text-gray-700 font-light max-w-4xl mx-auto leading-tight">
            Engineering Excellence. Open Standards. Production-Grade Solutions.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-4xl mx-auto">
        <div class="prose prose-lg max-w-none">
            <p class="text-xl text-gray-700 leading-relaxed mb-8">
                We are a deliberately small, senior-only team of engineers who've spent the last decade shaping how serious organizations build, ship, and operate modern software.
            </p>
            
            <p class="text-xl text-gray-700 leading-relaxed mb-8">
                We've maintained high-impact open-source projects, designed Internal Developer Platforms that power hundreds of developers across distributed teams, deployed AI copilots that cut delivery cycles by 40–60% in real codebases, and hardened infrastructure handling tens of millions of requests per day.
            </p>
            
            <p class="text-xl text-gray-700 leading-relaxed mb-8">
                In a world rapidly moving toward <strong class="text-accent">AI-native development</strong>, <strong class="text-accent">platform engineering as a competitive moat</strong>, and <strong class="text-accent">zero-trust operations at enterprise scale</strong> — we exist to give ambitious teams the production-grade engineering capacity to <strong class="text-accent">lead</strong> that future, not just survive it.
            </p>
            
            <p class="text-xl text-gray-700 leading-relaxed">
                All our work is built with <strong class="text-accent">radical transparency</strong>, <strong class="text-accent">open standards</strong>, and a <strong class="text-accent">ruthless focus on long-term ownership</strong>.
            </p>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-6xl mx-auto">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-12 h-12 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
                    Our Team
                </h2>
            </div>
            <p class="text-2xl text-gray-700 font-light">
                A compact group of battle-hardened engineers who've already shipped what most organizations are still planning.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gradient-to-br from-white to-purple-50 rounded-3xl p-8 border border-purple-100 shadow-lg">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                </svg>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Deep contributors to ecosystems that power global infrastructure (cloud-native, major language communities, observability & developer tooling standards)
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 border border-blue-100 shadow-lg">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Architects of IDPs and golden paths running 200–1,000+ daily developer workflows
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-white to-pink-50 rounded-3xl p-8 border border-pink-100 shadow-lg">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                </svg>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Builders of production-grade AI assistants and domain-tuned copilots used daily by 100–1,000+ engineers
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-white to-green-50 rounded-3xl p-8 border border-green-100 shadow-lg">
                <svg class="w-10 h-10 mb-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Operators who've made large-scale, compliance-heavy releases boringly reliable
                </p>
            </div>
        </div>
        
        <div class="mt-10 bg-gradient-to-br from-accent/5 to-purple-50 rounded-3xl p-8 border border-accent/20">
            <p class="text-xl text-gray-800 leading-relaxed flex items-start gap-3">
                <svg class="w-7 h-7 text-gray-900 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
                <span>We stay intentionally small so every project receives founder-level attention — <strong class="text-accent">no hand-offs, no juniors, no filler layers</strong>.</span>
            </p>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <div class="text-5xl mb-6">⭐</div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-accent to-pink-400 bg-clip-text text-transparent">
                Core Values
            </h2>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white/5 backdrop-blur rounded-3xl p-8 border border-white/10 hover:border-accent/50 transition-all">
                <div class="text-4xl mb-4">🔓</div>
                <h3 class="text-2xl font-bold mb-3 text-white">Open by Default</h3>
                <p class="text-gray-300 text-lg leading-relaxed">
                    Transparent workflows, open code wherever it creates value, no hidden IP traps
                </p>
            </div>
            
            <div class="bg-white/5 backdrop-blur rounded-3xl p-8 border border-white/10 hover:border-accent/50 transition-all">
                <div class="text-4xl mb-4">🎯</div>
                <h3 class="text-2xl font-bold mb-3 text-white">Pragmatic Excellence</h3>
                <p class="text-gray-300 text-lg leading-relaxed">
                    Boring technology usually wins — clean, maintainable solutions that age well
                </p>
            </div>
            
            <div class="bg-white/5 backdrop-blur rounded-3xl p-8 border border-white/10 hover:border-accent/50 transition-all">
                <div class="text-4xl mb-4">🔮</div>
                <h3 class="text-2xl font-bold mb-3 text-white">Future-Proof Obsession</h3>
                <p class="text-gray-300 text-lg leading-relaxed">
                    Every decision asks: Will this still be the right choice in 2030?
                </p>
            </div>
            
            <div class="bg-white/5 backdrop-blur rounded-3xl p-8 border border-white/10 hover:border-accent/50 transition-all">
                <div class="text-4xl mb-4">📚</div>
                <h3 class="text-2xl font-bold mb-3 text-white">Knowledge Multiplication</h3>
                <p class="text-gray-300 text-lg leading-relaxed">
                    We transfer real capability, not dependency — your team emerges stronger
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Reality Checks & Scale Signals -->
<section class="py-20 px-5 bg-gradient-to-br from-white to-gray-50">
    <div class="max-w-6xl mx-auto">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="text-5xl">📊</div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
                    Reality Checks & Scale Signals
                </h2>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 border border-blue-100 shadow-lg">
                <div class="text-4xl mb-4">🚀</div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Systems we helped build routinely handle <strong class="text-accent">10M–100M+ requests/day</strong> in production
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 border border-purple-100 shadow-lg">
                <div class="text-4xl mb-4">🤖</div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    AI tooling & copilots in daily active use by <strong class="text-accent">100–1,000+ engineers</strong> across distributed organizations
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-pink-50 to-white rounded-3xl p-8 border border-pink-100 shadow-lg">
                <div class="text-4xl mb-4">⚙️</div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    IDPs & self-service platforms empowering fast-growing engineering orgs <strong class="text-accent">(50–500+ developers)</strong>
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 border border-green-100 shadow-lg">
                <div class="text-4xl mb-4">🌐</div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Active participants in the <strong class="text-accent">open standards and major cloud-native projects</strong> that multinational platforms depend on
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative py-20 px-5 overflow-hidden bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="text-5xl mb-6">🤝</div>
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white drop-shadow-lg">
            Let's Build the Next Reality Together
        </h2>
        <p class="text-xl text-white/90 leading-relaxed mb-8 max-w-3xl mx-auto drop-shadow">
            We selectively partner with organizations serious about turning open source, AI-augmented delivery, and platform engineering into lasting competitive advantage — not short-term experiments.
        </p>
        <p class="text-lg text-white/80 leading-relaxed mb-12 max-w-3xl mx-auto">
            If you're modernizing legacy platforms at enterprise scale, scaling developer productivity globally, building the next-generation internal developer ecosystem, or hardening open-source foundations for production at planetary scale — let's talk about what production reality needs to look like in 2027 and beyond.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Start the Conversation</span>
            <span class="text-2xl">→</span>
        </a>
        <p class="text-sm text-white/70 mt-6">
            We usually respond the same day when the fit is clear.
        </p>
    </div>
</section>

@endsection
