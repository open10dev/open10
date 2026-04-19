@extends('layouts.admin')

@section('title', 'Contact Submissions')
@section('page-title', 'Contact Submissions')
@section('breadcrumb', 'All messages from the contact form')

@section('content')

<!-- Stats Grid -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">Total</p>
            <div class="w-9 h-9 rounded-xl bg-accent/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ $stats['total'] }}</p>
        <p class="text-xs text-gray-400 mt-1">All time</p>
    </div>

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">Today</p>
            <div class="w-9 h-9 rounded-xl bg-blue-50 flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ $stats['today'] }}</p>
        <p class="text-xs text-gray-400 mt-1">{{ now()->format('M j, Y') }}</p>
    </div>

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">This Week</p>
            <div class="w-9 h-9 rounded-xl bg-purple-50 flex items-center justify-center">
                <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ $stats['week'] }}</p>
        <p class="text-xs text-gray-400 mt-1">{{ now()->startOfWeek()->format('M j') }} – {{ now()->endOfWeek()->format('M j') }}</p>
    </div>

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">This Month</p>
            <div class="w-9 h-9 rounded-xl bg-green-50 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ $stats['month'] }}</p>
        <p class="text-xs text-gray-400 mt-1">{{ now()->format('F Y') }}</p>
    </div>

</div>

<!-- Search & Filter -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 mb-6">
    <form method="GET" action="{{ route('admin.contacts.index') }}"
          class="flex flex-col sm:flex-row gap-3 p-5">

        <div class="flex-1 relative">
            <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search by name, email or company…"
                class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/10 transition-all">
        </div>

        <select name="help_type"
            class="sm:w-52 px-4 py-2.5 border border-gray-200 rounded-xl text-sm text-gray-700 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/10 transition-all bg-white">
            <option value="">All types</option>
            <option value="development" {{ request('help_type') === 'development' ? 'selected' : '' }}>Development &amp; Engineering</option>
            <option value="ai"          {{ request('help_type') === 'ai' ? 'selected' : '' }}>AI Implementation</option>
            <option value="idp"         {{ request('help_type') === 'idp' ? 'selected' : '' }}>Internal Developer Platform</option>
            <option value="devops"      {{ request('help_type') === 'devops' ? 'selected' : '' }}>DevOps &amp; Infrastructure</option>
            <option value="oss"         {{ request('help_type') === 'oss' ? 'selected' : '' }}>Open Source</option>
            <option value="consultation"{{ request('help_type') === 'consultation' ? 'selected' : '' }}>Consultation</option>
        </select>

        <button type="submit"
            class="px-5 py-2.5 bg-accent text-white rounded-xl text-sm font-semibold hover:bg-accent/90 transition-colors whitespace-nowrap">
            Filter
        </button>

        @if(request('search') || request('help_type'))
            <a href="{{ route('admin.contacts.index') }}"
               class="px-5 py-2.5 bg-gray-100 text-gray-600 rounded-xl text-sm font-semibold hover:bg-gray-200 transition-colors whitespace-nowrap">
                Clear
            </a>
        @endif
    </form>
</div>

<!-- Table -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

    @if($contacts->isEmpty())
        <div class="py-24 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-2xl mb-5">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
            </div>
            <p class="text-gray-500 font-medium">No contact submissions found</p>
            @if(request('search') || request('help_type'))
                <p class="text-gray-400 text-sm mt-1">Try adjusting your search or filter</p>
            @endif
        </div>
    @else
        <!-- Desktop table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-100 bg-gray-50/50">
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">#</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Contact</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Company</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Type</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Timeline</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Received</th>
                        <th class="px-6 py-4 text-right font-semibold text-gray-500 text-xs uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach($contacts as $contact)
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="px-6 py-4 text-gray-400 font-medium text-xs">{{ $contact->id }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-accent/10 to-pink-100 flex items-center justify-center flex-shrink-0">
                                    <span class="text-sm font-bold text-accent">{{ strtoupper(substr($contact->name, 0, 1)) }}</span>
                                </div>
                                <div class="min-w-0">
                                    <p class="font-semibold text-gray-900 truncate">{{ $contact->name }}</p>
                                    <p class="text-gray-400 text-xs truncate">{{ $contact->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600 text-sm">
                            {{ $contact->company ?: '—' }}
                        </td>
                        <td class="px-6 py-4">
                            @php
                                $typeLabels = [
                                    'development'  => ['label' => 'Development', 'class' => 'bg-blue-50 text-blue-700 ring-blue-100'],
                                    'ai'           => ['label' => 'AI', 'class' => 'bg-purple-50 text-purple-700 ring-purple-100'],
                                    'idp'          => ['label' => 'IDP', 'class' => 'bg-indigo-50 text-indigo-700 ring-indigo-100'],
                                    'devops'       => ['label' => 'DevOps', 'class' => 'bg-orange-50 text-orange-700 ring-orange-100'],
                                    'oss'          => ['label' => 'OSS', 'class' => 'bg-green-50 text-green-700 ring-green-100'],
                                    'consultation' => ['label' => 'Consultation', 'class' => 'bg-gray-50 text-gray-700 ring-gray-100'],
                                ];
                                $type = $typeLabels[$contact->help_type] ?? ['label' => $contact->help_type, 'class' => 'bg-gray-50 text-gray-700 ring-gray-100'];
                            @endphp
                            <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold ring-1 {{ $type['class'] }}">
                                {{ $type['label'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-500 text-xs">
                            {{ $contact->timeline ?: '—' }}
                        </td>
                        <td class="px-6 py-4 text-gray-500 text-xs whitespace-nowrap">
                            <p>{{ $contact->created_at->format('M j, Y') }}</p>
                            <p class="text-gray-400">{{ $contact->created_at->format('g:i a') }}</p>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('admin.contacts.show', $contact) }}"
                                   class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-gray-100 text-gray-700 rounded-lg text-xs font-medium hover:bg-gray-200 transition-colors">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    View
                                </a>
                                <form method="POST" action="{{ route('admin.contacts.delete', $contact) }}"
                                      onsubmit="return confirm('Delete this contact submission? This cannot be undone.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 text-red-600 rounded-lg text-xs font-medium hover:bg-red-100 transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Mobile cards -->
        <div class="md:hidden divide-y divide-gray-100">
            @foreach($contacts as $contact)
            <div class="p-5">
                <div class="flex items-start justify-between gap-3 mb-3">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-accent/10 to-pink-100 flex items-center justify-center flex-shrink-0">
                            <span class="text-sm font-bold text-accent">{{ strtoupper(substr($contact->name, 0, 1)) }}</span>
                        </div>
                        <div class="min-w-0">
                            <p class="font-semibold text-gray-900 text-sm truncate">{{ $contact->name }}</p>
                            <p class="text-gray-400 text-xs truncate">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs whitespace-nowrap">{{ $contact->created_at->diffForHumans() }}</p>
                </div>
                @if($contact->company)
                    <p class="text-gray-500 text-xs mb-2">{{ $contact->company }}</p>
                @endif
                <p class="text-gray-600 text-xs line-clamp-2 mb-3">{{ $contact->message }}</p>
                <div class="flex items-center justify-between">
                    @php
                        $typeLabels = [
                            'development'  => ['label' => 'Development', 'class' => 'bg-blue-50 text-blue-700 ring-blue-100'],
                            'ai'           => ['label' => 'AI', 'class' => 'bg-purple-50 text-purple-700 ring-purple-100'],
                            'idp'          => ['label' => 'IDP', 'class' => 'bg-indigo-50 text-indigo-700 ring-indigo-100'],
                            'devops'       => ['label' => 'DevOps', 'class' => 'bg-orange-50 text-orange-700 ring-orange-100'],
                            'oss'          => ['label' => 'OSS', 'class' => 'bg-green-50 text-green-700 ring-green-100'],
                            'consultation' => ['label' => 'Consultation', 'class' => 'bg-gray-50 text-gray-700 ring-gray-100'],
                        ];
                        $type = $typeLabels[$contact->help_type] ?? ['label' => $contact->help_type, 'class' => 'bg-gray-50 text-gray-700 ring-gray-100'];
                    @endphp
                    <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold ring-1 {{ $type['class'] }}">
                        {{ $type['label'] }}
                    </span>
                    <a href="{{ route('admin.contacts.show', $contact) }}"
                       class="text-accent text-xs font-semibold hover:underline">
                        View details →
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($contacts->hasPages())
            <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between gap-4">
                <p class="text-sm text-gray-500">
                    Showing {{ $contacts->firstItem() }}–{{ $contacts->lastItem() }} of {{ $contacts->total() }}
                </p>
                <div class="flex gap-2">
                    @if($contacts->onFirstPage())
                        <span class="px-4 py-2 rounded-xl text-sm text-gray-300 bg-gray-50 cursor-not-allowed">← Prev</span>
                    @else
                        <a href="{{ $contacts->previousPageUrl() }}" class="px-4 py-2 rounded-xl text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">← Prev</a>
                    @endif

                    @if($contacts->hasMorePages())
                        <a href="{{ $contacts->nextPageUrl() }}" class="px-4 py-2 rounded-xl text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">Next →</a>
                    @else
                        <span class="px-4 py-2 rounded-xl text-sm text-gray-300 bg-gray-50 cursor-not-allowed">Next →</span>
                    @endif
                </div>
            </div>
        @endif
    @endif

</div>

@endsection
