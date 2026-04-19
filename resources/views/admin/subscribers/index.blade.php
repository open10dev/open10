@extends('layouts.admin')

@section('title', 'Subscribers')
@section('page-title', 'Newsletter Subscribers')
@section('breadcrumb', 'People who subscribed to OPEN10 updates')

@section('content')

<!-- Stats Grid -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">Total</p>
            <div class="w-9 h-9 rounded-xl bg-accent/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ $stats['total'] }}</p>
        <p class="text-xs text-gray-400 mt-1">All time</p>
    </div>

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">Active</p>
            <div class="w-9 h-9 rounded-xl bg-green-50 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ $stats['active'] }}</p>
        <p class="text-xs text-gray-400 mt-1">Currently subscribed</p>
    </div>

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">Unsubscribed</p>
            <div class="w-9 h-9 rounded-xl bg-red-50 flex items-center justify-center">
                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ $stats['unsubscribed'] }}</p>
        <p class="text-xs text-gray-400 mt-1">Opted out</p>
    </div>

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">New Today</p>
            <div class="w-9 h-9 rounded-xl bg-blue-50 flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ $stats['today'] }}</p>
        <p class="text-xs text-gray-400 mt-1">{{ now()->format('M j, Y') }}</p>
    </div>

</div>

<!-- Search & Filter -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 mb-6">
    <form method="GET" action="{{ route('admin.subscribers.index') }}"
          class="flex flex-col sm:flex-row gap-3 p-5">

        <div class="flex-1 relative">
            <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search by email address…"
                class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/10 transition-all">
        </div>

        <select name="status"
            class="sm:w-44 px-4 py-2.5 border border-gray-200 rounded-xl text-sm text-gray-700 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/10 transition-all bg-white">
            <option value="">All statuses</option>
            <option value="active"   {{ request('status') === 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Unsubscribed</option>
        </select>

        <button type="submit"
            class="px-5 py-2.5 bg-accent text-white rounded-xl text-sm font-semibold hover:bg-accent/90 transition-colors whitespace-nowrap">
            Filter
        </button>

        @if(request('search') || request('status'))
            <a href="{{ route('admin.subscribers.index') }}"
               class="px-5 py-2.5 bg-gray-100 text-gray-600 rounded-xl text-sm font-semibold hover:bg-gray-200 transition-colors whitespace-nowrap">
                Clear
            </a>
        @endif
    </form>
</div>

<!-- Table -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

    @if($subscribers->isEmpty())
        <div class="py-24 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-2xl mb-5">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <p class="text-gray-500 font-medium">No subscribers found</p>
            @if(request('search') || request('status'))
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
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Email</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Subscribed</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Unsubscribed</th>
                        <th class="px-6 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">IP</th>
                        <th class="px-6 py-4 text-right font-semibold text-gray-500 text-xs uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach($subscribers as $subscriber)
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="px-6 py-4 text-gray-400 font-medium text-xs">{{ $subscriber->id }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-accent/10 to-pink-100 flex items-center justify-center flex-shrink-0">
                                    <span class="text-sm font-bold text-accent">{{ strtoupper(substr($subscriber->email, 0, 1)) }}</span>
                                </div>
                                <span class="font-medium text-gray-800">{{ $subscriber->email }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            @if($subscriber->is_subscribed)
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-semibold bg-green-50 text-green-700 ring-1 ring-green-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    Active
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-semibold bg-gray-50 text-gray-500 ring-1 ring-gray-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span>
                                    Unsubscribed
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-gray-500 text-xs whitespace-nowrap">
                            @if($subscriber->subscribed_at)
                                <p>{{ \Carbon\Carbon::parse($subscriber->subscribed_at)->format('M j, Y') }}</p>
                                <p class="text-gray-400">{{ \Carbon\Carbon::parse($subscriber->subscribed_at)->format('g:i a') }}</p>
                            @else
                                <span class="text-gray-300">—</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-gray-500 text-xs whitespace-nowrap">
                            @if($subscriber->unsubscribed_at)
                                <p>{{ \Carbon\Carbon::parse($subscriber->unsubscribed_at)->format('M j, Y') }}</p>
                                <p class="text-gray-400">{{ \Carbon\Carbon::parse($subscriber->unsubscribed_at)->format('g:i a') }}</p>
                            @else
                                <span class="text-gray-300">—</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-gray-400 text-xs font-mono">
                            {{ $subscriber->ip_address ?: '—' }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end opacity-0 group-hover:opacity-100 transition-opacity">
                                <form method="POST" action="{{ route('admin.subscribers.delete', $subscriber) }}"
                                      onsubmit="return confirm('Remove this subscriber? This cannot be undone.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 text-red-600 rounded-lg text-xs font-medium hover:bg-red-100 transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Remove
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
            @foreach($subscribers as $subscriber)
            <div class="p-5">
                <div class="flex items-start justify-between gap-3 mb-3">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-accent/10 to-pink-100 flex items-center justify-center flex-shrink-0">
                            <span class="text-sm font-bold text-accent">{{ strtoupper(substr($subscriber->email, 0, 1)) }}</span>
                        </div>
                        <div class="min-w-0">
                            <p class="font-semibold text-gray-900 text-sm truncate">{{ $subscriber->email }}</p>
                            <p class="text-gray-400 text-xs mt-0.5">
                                {{ $subscriber->subscribed_at ? \Carbon\Carbon::parse($subscriber->subscribed_at)->format('M j, Y') : '—' }}
                            </p>
                        </div>
                    </div>
                    @if($subscriber->is_subscribed)
                        <span class="shrink-0 inline-flex items-center gap-1.5 px-2 py-1 rounded-lg text-xs font-semibold bg-green-50 text-green-700 ring-1 ring-green-100">
                            Active
                        </span>
                    @else
                        <span class="shrink-0 inline-flex items-center gap-1.5 px-2 py-1 rounded-lg text-xs font-semibold bg-gray-50 text-gray-500 ring-1 ring-gray-100">
                            Unsubscribed
                        </span>
                    @endif
                </div>
                <div class="flex items-center justify-between pt-2">
                    <span class="text-xs text-gray-400 font-mono">{{ $subscriber->ip_address ?: '—' }}</span>
                    <form method="POST" action="{{ route('admin.subscribers.delete', $subscriber) }}"
                          onsubmit="return confirm('Remove this subscriber?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center gap-1 px-3 py-1.5 bg-red-50 text-red-600 rounded-lg text-xs font-medium hover:bg-red-100 transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Remove
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    @endif

    <!-- Pagination -->
    @if($subscribers->hasPages())
        <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
            <p class="text-sm text-gray-500">
                Showing {{ $subscribers->firstItem() }}–{{ $subscribers->lastItem() }} of {{ $subscribers->total() }}
            </p>
            {{ $subscribers->links('pagination::tailwind') }}
        </div>
    @endif

</div>

@endsection
