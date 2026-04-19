@extends('layouts.admin')

@section('title', $contact->name . ' — Contact')
@section('page-title', $contact->name)
@section('breadcrumb', 'Contact submission #' . $contact->id)

@section('content')

<div class="max-w-3xl">

    <!-- Back -->
    <div class="mb-6">
        <a href="{{ route('admin.contacts.index') }}"
           class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-gray-800 font-medium transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to all contacts
        </a>
    </div>

    <!-- Header Card -->
    <div class="bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl p-7 mb-5 shadow-lg">
        <div class="flex items-start justify-between gap-4 flex-wrap">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent to-pink-600 flex items-center justify-center flex-shrink-0 shadow-lg">
                    <span class="text-2xl font-bold text-white">{{ strtoupper(substr($contact->name, 0, 1)) }}</span>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white">{{ $contact->name }}</h2>
                    <a href="mailto:{{ $contact->email }}" class="text-accent hover:text-pink-400 text-sm transition-colors">
                        {{ $contact->email }}
                    </a>
                    @if($contact->company)
                        <p class="text-gray-400 text-xs mt-0.5">{{ $contact->company }}</p>
                    @endif
                </div>
            </div>
            <div class="text-right">
                <p class="text-gray-400 text-xs">Submitted</p>
                <p class="text-white font-semibold text-sm">{{ $contact->created_at->format('M j, Y') }}</p>
                <p class="text-gray-400 text-xs">{{ $contact->created_at->format('g:i a') }}</p>
            </div>
        </div>
    </div>

    <!-- Detail Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-5">

        <!-- Type & Timeline badges -->
        <div class="flex flex-wrap gap-3 px-7 py-5 border-b border-gray-100 bg-gray-50/50">
            @php
                $typeLabels = [
                    'development'  => ['label' => 'Development & Engineering', 'class' => 'bg-blue-50 text-blue-700 ring-blue-100'],
                    'ai'           => ['label' => 'AI Implementation', 'class' => 'bg-purple-50 text-purple-700 ring-purple-100'],
                    'idp'          => ['label' => 'Internal Developer Platform', 'class' => 'bg-indigo-50 text-indigo-700 ring-indigo-100'],
                    'devops'       => ['label' => 'DevOps & Infrastructure', 'class' => 'bg-orange-50 text-orange-700 ring-orange-100'],
                    'oss'          => ['label' => 'Open Source Contribution', 'class' => 'bg-green-50 text-green-700 ring-green-100'],
                    'consultation' => ['label' => 'Consultation', 'class' => 'bg-gray-50 text-gray-700 ring-gray-200'],
                ];
                $type = $typeLabels[$contact->help_type] ?? ['label' => $contact->help_type, 'class' => 'bg-gray-50 text-gray-700 ring-gray-200'];
            @endphp

            <div>
                <p class="text-xs font-medium text-gray-400 mb-1.5">Help Type</p>
                <span class="inline-flex items-center px-3 py-1.5 rounded-xl text-sm font-semibold ring-1 {{ $type['class'] }}">
                    {{ $type['label'] }}
                </span>
            </div>

            @if($contact->timeline)
            <div>
                <p class="text-xs font-medium text-gray-400 mb-1.5">Timeline</p>
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-sm font-semibold ring-1 bg-amber-50 text-amber-700 ring-amber-100">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ $contact->timeline }}
                </span>
            </div>
            @endif
        </div>

        <!-- Message -->
        <div class="px-7 py-6">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Message</p>
            <div class="bg-gray-50 rounded-xl p-5">
                <p class="text-gray-700 leading-relaxed whitespace-pre-wrap text-sm">{{ $contact->message }}</p>
            </div>
        </div>

    </div>

    <!-- Actions -->
    <div class="flex flex-wrap items-center gap-3">

        <!-- Reply via email -->
        <a href="mailto:{{ $contact->email }}?subject=Re: Your enquiry to OPEN10&body=Hi {{ rawurlencode($contact->name) }},%0A%0AThank you for reaching out to OPEN10.%0A%0A"
           class="inline-flex items-center gap-2 px-5 py-2.5 bg-gray-900 text-white rounded-xl text-sm font-semibold hover:bg-gray-700 hover:-translate-y-0.5 transition-all shadow">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            Reply via Email
        </a>

        <!-- Delete -->
        <form method="POST" action="{{ route('admin.contacts.delete', $contact) }}"
              onsubmit="return confirm('Permanently delete this contact? This action cannot be undone.')">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="inline-flex items-center gap-2 px-5 py-2.5 bg-red-50 text-red-600 rounded-xl text-sm font-semibold hover:bg-red-100 hover:-translate-y-0.5 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
                Delete
            </button>
        </form>

    </div>

</div>

@endsection
