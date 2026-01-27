@extends('layouts.app')

@section('title', 'Secured Operations | OPEN10')

@section('content')

<!-- Hero -->
<section class="relative py-16 md:py-20 px-5 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-red-50 via-white to-orange-50"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl animate-pulse delay-700"></div>
    
    <div class="relative max-w-4xl mx-auto text-center">
        <div class="text-5xl mb-4">🔒</div>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-accent via-pink-500 to-purple-600 bg-clip-text text-transparent">
            Secured Operations
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 font-light max-w-2xl mx-auto">
            Automated, observable, reversible. Make releases boring.
        </p>
    </div>
</section>

<!-- What We Deliver -->
<section class="py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-accent to-purple-600 bg-clip-text text-transparent">
            What We Deliver
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="group bg-gradient-to-br from-red-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-red-100">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">CI/CD Pipelines</h3>
                <p class="text-gray-600 leading-relaxed">
                    Automated deployments from commit to production. Ship fearlessly.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-orange-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-orange-100">
                <div class="text-4xl mb-4">📜</div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Infrastructure as Code</h3>
                <p class="text-gray-600 leading-relaxed">
                    Terraform, Pulumi, CloudFormation. Version control everything.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-yellow-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-yellow-100">
                <div class="text-4xl mb-4">👀</div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Deep Observability</h3>
                <p class="text-gray-600 leading-relaxed">
                    Monitoring, logging, alerting. Know what's happening always.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-green-100">
                <div class="text-4xl mb-4">🔐</div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Security Automation</h3>
                <p class="text-gray-600 leading-relaxed">
                    Automated scanning and compliance. Guardrails, not gates.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-blue-100">
                <div class="text-4xl mb-4">🔄</div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">GitOps</h3>
                <p class="text-gray-600 leading-relaxed">
                    ArgoCD, Flux. Git as single source of truth. Simple.
                </p>
            </div>

            <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-purple-100">
                <div class="text-4xl mb-4">💾</div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Disaster Recovery</h3>
                <p class="text-gray-600 leading-relaxed">
                    Backup strategies and recovery plans. Sleep better at night.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Ideal For -->
<section class="py-20 px-5 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-accent to-purple-600 bg-clip-text text-transparent">
            Ideal For
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="text-3xl mb-3">☁️</div>
                <h3 class="text-lg font-bold mb-2 text-gray-900">Cloud Migration</h3>
                <p class="text-gray-600">Moving to cloud-native infrastructure</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="text-lg font-bold mb-2 text-gray-900">Compliance Needs</h3>
                <p class="text-gray-600">Automated security and auditing</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="text-3xl mb-3">🤚</div>
                <h3 class="text-lg font-bold mb-2 text-gray-900">Manual Deploys</h3>
                <p class="text-gray-600">Time to automate everything</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="text-3xl mb-3">🛡️</div>
                <h3 class="text-lg font-bold mb-2 text-gray-900">Production Hardening</h3>
                <p class="text-gray-600">Make systems bulletproof</p>
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
        <div class="text-5xl mb-6">🚀</div>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Ship With Confidence</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">Build deployment pipelines that make releases boring.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
            <span>Let's Talk</span>
            <span class="text-2xl">→</span>
        </a>
    </div>
</section>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 md:py-24 px-5 text-center">
    <div class="max-w-3xl mx-auto">
        <h3 class="text-3xl md:text-4xl font-bold mb-8">Need reliable operations?</h3>
        <a href="{{ route('contact') }}" class="inline-block bg-gradient-to-r from-accent to-red-600 text-white px-10 py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-200">
            Get started →
        </a>
    </div>
</section>

@endsection
