@extends('layouts.app')

@section('title', 'OPEN10 - From Development to Deployment')
@section('description', 'From development to deployment, we turn your open source stack, AI and IDP vision into a production reality.')

@section('content')

<!-- Hero Section -->
<section class="relative py-20 md:py-32 px-5 overflow-hidden bg-gradient-to-br from-purple-50 via-white to-pink-50">
    <div class="absolute top-20 right-20 w-72 h-72 bg-purple-300/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-pink-300/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    
    <div class="relative max-w-5xl mx-auto text-center">
        <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold mb-8 text-gray-900" style="letter-spacing: 0.08em; transform: skew(-8deg);">
            OPEN10
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 italic max-w-3xl mx-auto leading-relaxed mb-12">
            From development to deployment, we turn your open source stack, AI and IDP vision into a production reality.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-10 py-4 rounded-2xl font-bold text-lg shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                <span>Get Started</span>
                <span class="text-xl">→</span>
            </a>
            <a href="{{ route('work') }}" class="inline-flex items-center gap-3 bg-white border-2 border-gray-200 text-gray-900 px-10 py-4 rounded-2xl font-bold text-lg hover:border-accent hover:text-accent hover:-translate-y-1 transition-all duration-300">
                <span>View Our Work</span>
            </a>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <a href="{{ route('services.development') }}" class="group bg-gradient-to-br from-yellow-100 to-yellow-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-white/60 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="7" height="6" rx="2"/>
                        <rect x="14" y="4" width="7" height="5" rx="2"/>
                        <rect x="8" y="14" width="8" height="6" rx="2"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Development Foundations</h3>
                <p class="text-gray-700 leading-relaxed">
                    Design and build modern products on an open-source stack with clean architecture and future-proof patterns.
                </p>
            </a>

            <a href="{{ route('services.ai-delivery') }}" class="group bg-gradient-to-br from-blue-100 to-blue-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-white/60 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="7"/>
                        <path d="M12 5v-2M12 21v-2M5 12H3M21 12h-2"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">AI-Assisted Delivery</h3>
                <p class="text-gray-700 leading-relaxed">
                    Embed AI into your pipelines with code generation, review, and copilots tuned to your domain.
                </p>
            </a>

            <a href="{{ route('services.idp') }}" class="group bg-gradient-to-br from-green-100 to-green-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-white/60 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="6" height="5" rx="1.5"/>
                        <rect x="15" y="4" width="6" height="5" rx="1.5"/>
                        <rect x="9" y="14" width="6" height="5" rx="1.5"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Internal Developer Platforms</h3>
                <p class="text-gray-700 leading-relaxed">
                    Build IDPs with golden paths, self-service environments, and paved roads for every service.
                </p>
            </a>

            <a href="{{ route('services.devops') }}" class="group bg-gradient-to-br from-pink-100 to-pink-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-white/60 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 3l7 3v6c0 4.4-2.7 8-7 9-4.3-1-7-4.6-7-9V6l7-3z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Secured Operations</h3>
                <p class="text-gray-700 leading-relaxed">
                    Automated deployments, observability, and guardrails for reliable, reversible releases.
                </p>
            </a>

        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
                What We Do
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Partner with engineers who understand both the code and the craft
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="group bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 mb-6 group-hover:scale-110 transition-transform bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Building Production-Grade Open Source Solutions</h3>
                <p class="text-gray-600 leading-relaxed">
                    We develop plugins, custom functionality, and core features for open-source projects. Whether you're maintaining a popular OSS project or building your product on one, we provide the engineering capacity to ship faster.
                </p>
            </div>
            
            <div class="group bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 mb-6 group-hover:scale-110 transition-transform bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Implementing AI-Powered Development Workflows</h3>
                <p class="text-gray-600 leading-relaxed">
                    We integrate AI into your development lifecycle—code generation, intelligent reviews, domain-specific copilots—so your team can focus on solving problems, not repetitive tasks.
                </p>
            </div>
            
            <div class="group bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 mb-6 group-hover:scale-110 transition-transform bg-gradient-to-br from-green-100 to-green-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Creating Internal Developer Platforms That Scale</h3>
                <p class="text-gray-600 leading-relaxed">
                    We design and build IDPs that give your developers self-service superpowers: golden paths, automated environments, and guardrails that keep production stable.
                </p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 text-accent font-semibold text-lg hover:gap-4 transition-all">
                Learn more about our services
                <span>→</span>
            </a>
        </div>
    </div>
</section>

<!-- Who We Help Section -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
                Who We Help
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                From open-source maintainers to enterprise CTOs, we partner with teams who value quality
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <a href="{{ route('solutions.oss-maintainers') }}" class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 border border-purple-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 mb-6 group-hover:scale-110 transition-transform bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Open Source Maintainers</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Scale your project with expert contributions and sustainable business models.
                </p>
                <span class="text-accent font-semibold inline-flex items-center gap-2 group-hover:gap-4 transition-all">
                    Learn More <span>→</span>
                </span>
            </a>
            
            <a href="{{ route('solutions.engineering-teams') }}" class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 border border-blue-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 mb-6 group-hover:scale-110 transition-transform bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Engineering Teams</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Navigate complexity and accelerate delivery with open-source best practices.
                </p>
                <span class="text-accent font-semibold inline-flex items-center gap-2 group-hover:gap-4 transition-all">
                    Learn More <span>→</span>
                </span>
            </a>
            
            <a href="{{ route('solutions.leadership') }}" class="group bg-gradient-to-br from-pink-50 to-white rounded-3xl p-8 border border-pink-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 mb-6 group-hover:scale-110 transition-transform bg-gradient-to-br from-pink-100 to-pink-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">CTOs & Engineering Leaders</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Modernize platforms and improve productivity with strategic technical partnership.
                </p>
                <span class="text-accent font-semibold inline-flex items-center gap-2 group-hover:gap-4 transition-all">
                    Learn More <span>→</span>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose OPEN10 Section -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
                Why Choose OPEN10
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Built on open standards. No vendor lock-in. Production-ready from day one.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-white to-purple-50 rounded-3xl p-8 border border-purple-100 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-100 to-purple-50 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Deep Open Source Expertise</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We're active contributors and maintainers. We understand OSS licensing, governance, and community dynamics.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 border border-blue-100 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">AI-Native Development</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We're using AI in production and can help you do the same with practical implementations that deliver ROI.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-white to-green-50 rounded-3xl p-8 border border-green-100 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-100 to-green-50 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Production-Hardened Experience</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We've built systems handling millions of requests and know what works at scale. Your production is in good hands.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-white to-pink-50 rounded-3xl p-8 border border-pink-100 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-100 to-pink-50 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">No Vendor Lock-In</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Our solutions are built on open standards. You own the code, control the platform, and can take it anywhere.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Social Proof Section - Hidden --}}
{{-- 
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-accent/10 to-pink-100 rounded-2xl mb-6">
                <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
                Trusted by Teams Worldwide
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                From startups to enterprises, open-source maintainers to Fortune 500 teams
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 border border-gray-200 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-accent to-pink-500 flex items-center justify-center text-white text-2xl font-bold">
                        S
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Sarah Chen</div>
                        <div class="text-sm text-gray-600">CTO, TechScale</div>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed italic">
                    "OPEN10 helped us modernize our legacy platform without disrupting operations. Their expertise in open-source technologies and IDP implementation was exactly what we needed."
                </p>
                <div class="flex gap-1 mt-4 text-yellow-500">
                    <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 border border-gray-200 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-blue-500 flex items-center justify-center text-white text-2xl font-bold">
                        M
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Marcus Rodriguez</div>
                        <div class="text-sm text-gray-600">Lead Maintainer, OpenFlow</div>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed italic">
                    "As an OSS maintainer, finding engineers who truly understand open-source is rare. OPEN10 delivered features faster than our core team while maintaining code quality."
                </p>
                <div class="flex gap-1 mt-4 text-yellow-500">
                    <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-white rounded-2xl">
                <div class="text-4xl font-bold text-accent mb-2">50+</div>
                <div class="text-gray-600">Projects Delivered</div>
            </div>
            <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-white rounded-2xl">
                <div class="text-4xl font-bold text-accent mb-2">100%</div>
                <div class="text-gray-600">Client Satisfaction</div>
            </div>
            <div class="text-center p-6 bg-gradient-to-br from-pink-50 to-white rounded-2xl">
                <div class="text-4xl font-bold text-accent mb-2">24h</div>
                <div class="text-gray-600">Response Time</div>
            </div>
            <div class="text-center p-6 bg-gradient-to-br from-green-50 to-white rounded-2xl">
                <div class="text-4xl font-bold text-accent mb-2">5+</div>
                <div class="text-gray-600">Years Experience</div>
            </div>
        </div>
    </div>
</section>
--}}

<!-- Newsletter Subscribe Section -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-3xl mx-auto">
        <div class="bg-gradient-to-br from-gray-900 via-gray-800 to-black rounded-3xl px-10 py-14 text-center relative overflow-hidden shadow-2xl">
            <!-- Blobs -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-accent/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-purple-500/20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

            <div class="relative">
                <div class="inline-flex items-center justify-center w-14 h-14 bg-white/10 rounded-2xl mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-3">Stay in the Loop</h2>
                <p class="text-gray-300 text-lg mb-8 max-w-xl mx-auto">
                    Monthly insights on open source, AI, and platform engineering — straight to your inbox. No spam, ever.
                </p>

                @if(session('success') && str_contains(session('success'), 'subscri'))
                    <div class="bg-green-500/20 border border-green-500/40 rounded-2xl px-6 py-4 flex items-center justify-center gap-3 max-w-md mx-auto">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="text-green-300 font-medium text-sm">{{ session('success') }}</p>
                    </div>
                @else
                    <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" method="POST" action="{{ route('newsletter.subscribe') }}">
                        @csrf
                        <input type="email" name="email" placeholder="your@email.com" required
                            class="flex-1 px-5 py-3.5 bg-white/10 border border-white/20 text-white placeholder-gray-400 rounded-xl text-base focus:bg-white/15 focus:border-accent focus:outline-none transition-all">
                        <button type="submit"
                            class="px-7 py-3.5 bg-gradient-to-r from-accent to-pink-600 text-white rounded-xl font-bold text-base shadow-lg hover:shadow-accent/40 hover:-translate-y-0.5 transition-all duration-200 whitespace-nowrap">
                            Subscribe →
                        </button>
                    </form>
                    @if($errors->has('email'))
                        <p class="text-red-400 text-sm mt-3">{{ $errors->first('email') }}</p>
                    @endif
                    <p class="text-gray-500 text-xs mt-4">Unsubscribe any time. We respect your inbox.</p>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="relative py-20 px-5 overflow-hidden bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur rounded-2xl mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white drop-shadow-lg">
            Ready to Accelerate Your Project?
        </h2>
        <p class="text-xl text-white/90 leading-relaxed mb-8 max-w-3xl mx-auto drop-shadow">
            Whether you're an open-source maintainer needing extra hands or a company building on open source, we deliver production-grade solutions while keeping everything fully open and transparent.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
                <span>Get Started</span>
                <span class="text-2xl">→</span>
            </a>
            <a href="{{ route('work') }}" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur border-2 border-white/30 text-white px-12 py-5 rounded-2xl font-bold text-xl hover:bg-white/20 hover:-translate-y-1 transition-all duration-300">
                <span>View Our Work</span>
            </a>
        </div>
        <p class="text-sm text-white/70 mt-6">
            Response time: Within 24 hours
        </p>
    </div>
</section>

@endsection