@extends('layouts.app')

@section('title', 'Newsletter Unsubscribe | OPEN10')

@section('content')

<section class="relative py-20 px-5 min-h-screen flex items-center justify-center">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-purple-50"></div>
    
    <div class="relative max-w-2xl mx-auto text-center">
        @if($type === 'success')
            <div class="w-20 h-20 mx-auto mb-6 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">Unsubscribed Successfully</h1>
        @elseif($type === 'info')
            <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">Already Unsubscribed</h1>
        @else
            <div class="w-20 h-20 mx-auto mb-6 bg-red-100 rounded-full flex items-center justify-center">
                <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">Oops!</h1>
        @endif
        
        <p class="text-xl text-gray-600 mb-8 max-w-xl mx-auto">
            {{ $message }}
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-accent to-pink-600 text-white px-8 py-4 rounded-2xl font-bold shadow-xl hover:shadow-accent/50 hover:-translate-y-1 transition-all duration-300">
                <span>Back to Home</span>
                <span>→</span>
            </a>
            @if($type === 'error')
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-white border-2 border-gray-200 text-gray-700 px-8 py-4 rounded-2xl font-bold hover:border-accent hover:text-accent transition-all duration-300">
                    <span>Contact Support</span>
                </a>
            @endif
        </div>
    </div>
</section>

@endsection
