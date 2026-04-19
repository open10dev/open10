@extends('layouts.admin')

@section('title', 'Visitor Analytics')
@section('page-title', 'Visitor Analytics')
@section('breadcrumb', 'Real-time traffic — IP, location, device and page data')

@section('content')

<!-- Stats Grid -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">Total Visits</p>
            <div class="w-9 h-9 rounded-xl bg-accent/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ number_format($stats['total']) }}</p>
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
        <p class="text-3xl font-bold text-gray-900">{{ number_format($stats['today']) }}</p>
        <p class="text-xs text-gray-400 mt-1">{{ now()->format('M j, Y') }}</p>
    </div>

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">Unique IPs</p>
            <div class="w-9 h-9 rounded-xl bg-purple-50 flex items-center justify-center">
                <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ number_format($stats['unique_ips']) }}</p>
        <p class="text-xs text-gray-400 mt-1">Distinct addresses</p>
    </div>

    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-medium text-gray-500">Human</p>
            <div class="w-9 h-9 rounded-xl bg-green-50 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-bold text-gray-900">{{ number_format($stats['human']) }}</p>
        <p class="text-xs text-gray-400 mt-1">Non-bot visits</p>
    </div>

</div>

<!-- Filters -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 mb-6">
    <form method="GET" action="{{ route('admin.visitors.index') }}"
          class="flex flex-col sm:flex-row gap-3 p-5">

        <div class="flex-1 relative">
            <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search by IP, city or country…"
                class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/10 transition-all">
        </div>

        @if($platforms->isNotEmpty())
        <select name="platform"
            class="sm:w-44 px-4 py-2.5 border border-gray-200 rounded-xl text-sm text-gray-700 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/10 transition-all bg-white">
            <option value="">All platforms</option>
            @foreach($platforms as $platform)
                <option value="{{ $platform }}" {{ request('platform') === $platform ? 'selected' : '' }}>{{ $platform }}</option>
            @endforeach
        </select>
        @endif

        <select name="bots"
            class="sm:w-40 px-4 py-2.5 border border-gray-200 rounded-xl text-sm text-gray-700 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/10 transition-all bg-white">
            <option value="0" {{ request('bots', '0') === '0' ? 'selected' : '' }}>Hide bots</option>
            <option value="1" {{ request('bots') === '1' ? 'selected' : '' }}>Include bots</option>
        </select>

        <button type="submit"
            class="px-5 py-2.5 bg-accent text-white rounded-xl text-sm font-semibold hover:bg-accent/90 transition-colors whitespace-nowrap">
            Filter
        </button>

        @if(request('search') || request('platform'))
            <a href="{{ route('admin.visitors.index') }}"
               class="px-5 py-2.5 bg-gray-100 text-gray-600 rounded-xl text-sm font-semibold hover:bg-gray-200 transition-colors whitespace-nowrap">
                Clear
            </a>
        @endif
    </form>
</div>

<!-- Table -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

    @if($visitors->isEmpty())
        <div class="py-24 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-2xl mb-5">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
            </div>
            <p class="text-gray-500 font-medium">No visitor records found</p>
            @if(request('search') || request('platform'))
                <p class="text-gray-400 text-sm mt-1">Try adjusting your search or filters</p>
            @endif
        </div>
    @else
        <!-- Desktop table -->
        <div class="hidden lg:block overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-100 bg-gray-50/50">
                        <th class="px-5 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">IP Address</th>
                        <th class="px-5 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Location</th>
                        <th class="px-5 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Browser / OS</th>
                        <th class="px-5 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Page</th>
                        <th class="px-5 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Device</th>
                        <th class="px-5 py-4 text-left font-semibold text-gray-500 text-xs uppercase tracking-wider">Time</th>
                        <th class="px-5 py-4 text-right font-semibold text-gray-500 text-xs uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach($visitors as $visitor)
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                @if($visitor->is_bot)
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-bold bg-yellow-50 text-yellow-700 ring-1 ring-yellow-100">BOT</span>
                                @endif
                                <span class="font-mono text-xs text-gray-700">{{ $visitor->ip_address }}</span>
                            </div>
                            @if($visitor->isp)
                                <p class="text-[10px] text-gray-400 mt-0.5 truncate max-w-[150px]">{{ $visitor->isp }}</p>
                            @endif
                        </td>
                        <td class="px-5 py-4">
                            @if($visitor->country)
                                <div class="flex items-center gap-1.5">
                                    @if($visitor->country_code)
                                        <span class="text-base leading-none">{{ flag($visitor->country_code) }}</span>
                                    @endif
                                    <span class="text-gray-800 text-xs font-medium">{{ $visitor->city ? $visitor->city . ', ' : '' }}{{ $visitor->country }}</span>
                                </div>
                                @if($visitor->region)
                                    <p class="text-[10px] text-gray-400 mt-0.5">{{ $visitor->region }}</p>
                                @endif
                            @else
                                <span class="text-gray-300 text-xs">Unknown</span>
                            @endif
                        </td>
                        <td class="px-5 py-4">
                            <p class="text-xs text-gray-700 font-medium">{{ $visitor->browser ?: '—' }}{{ $visitor->browser_version ? ' ' . $visitor->browser_version : '' }}</p>
                            <p class="text-[10px] text-gray-400 mt-0.5">{{ $visitor->platform ?: '—' }}</p>
                        </td>
                        <td class="px-5 py-4">
                            <p class="text-xs text-gray-700 truncate max-w-[180px]" title="{{ $visitor->url }}">
                                {{ $visitor->url ? parse_url($visitor->url, PHP_URL_PATH) ?: '/' : '—' }}
                            </p>
                            @if($visitor->referer)
                                <p class="text-[10px] text-gray-400 mt-0.5 truncate max-w-[180px]" title="{{ $visitor->referer }}">
                                    ↩ {{ parse_url($visitor->referer, PHP_URL_HOST) ?: $visitor->referer }}
                                </p>
                            @endif
                        </td>
                        <td class="px-5 py-4">
                            @if($visitor->is_mobile)
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg text-xs font-semibold bg-blue-50 text-blue-700 ring-1 ring-blue-100">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    Mobile
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg text-xs font-semibold bg-gray-50 text-gray-600 ring-1 ring-gray-100">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Desktop
                                </span>
                            @endif
                        </td>
                        <td class="px-5 py-4 text-gray-500 text-xs whitespace-nowrap">
                            <p>{{ $visitor->created_at->format('M j, Y') }}</p>
                            <p class="text-gray-400">{{ $visitor->created_at->format('g:i a') }}</p>
                        </td>
                        <td class="px-5 py-4 text-right">
                            <div class="flex items-center justify-end opacity-0 group-hover:opacity-100 transition-opacity">
                                <form method="POST" action="{{ route('admin.visitors.delete', $visitor) }}"
                                      onsubmit="return confirm('Delete this visitor record?')">
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

        <!-- Mobile / tablet cards -->
        <div class="lg:hidden divide-y divide-gray-100">
            @foreach($visitors as $visitor)
            <div class="p-4">
                <div class="flex items-start justify-between gap-3 mb-2">
                    <div class="min-w-0">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="font-mono text-xs font-semibold text-gray-800">{{ $visitor->ip_address }}</span>
                            @if($visitor->is_bot)
                                <span class="inline-flex px-1.5 py-0.5 rounded text-[10px] font-bold bg-yellow-50 text-yellow-700 ring-1 ring-yellow-100">BOT</span>
                            @endif
                            @if($visitor->is_mobile)
                                <span class="inline-flex px-1.5 py-0.5 rounded text-[10px] font-semibold bg-blue-50 text-blue-600">Mobile</span>
                            @else
                                <span class="inline-flex px-1.5 py-0.5 rounded text-[10px] font-semibold bg-gray-50 text-gray-500">Desktop</span>
                            @endif
                        </div>
                        @if($visitor->country)
                            <p class="text-xs text-gray-500 mt-1">
                                @if($visitor->country_code){{ flag($visitor->country_code) }} @endif
                                {{ $visitor->city ? $visitor->city . ', ' : '' }}{{ $visitor->country }}
                            </p>
                        @endif
                    </div>
                    <p class="text-[10px] text-gray-400 text-right whitespace-nowrap shrink-0">
                        {{ $visitor->created_at->format('M j') }}<br>{{ $visitor->created_at->format('g:i a') }}
                    </p>
                </div>
                <div class="flex items-center justify-between pt-2">
                    <div class="min-w-0 mr-3">
                        <p class="text-xs text-gray-600 truncate">{{ $visitor->url ? parse_url($visitor->url, PHP_URL_PATH) ?: '/' : '—' }}</p>
                        <p class="text-[10px] text-gray-400 mt-0.5">{{ $visitor->browser ?: '—' }} · {{ $visitor->platform ?: '—' }}</p>
                    </div>
                    <form method="POST" action="{{ route('admin.visitors.delete', $visitor) }}"
                          onsubmit="return confirm('Delete this visitor record?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="shrink-0 inline-flex items-center gap-1 px-3 py-1.5 bg-red-50 text-red-600 rounded-lg text-xs font-medium hover:bg-red-100 transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    @endif

    <!-- Pagination -->
    @if($visitors->hasPages())
        <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
            <p class="text-sm text-gray-500">
                Showing {{ $visitors->firstItem() }}–{{ $visitors->lastItem() }} of {{ $visitors->total() }}
            </p>
            {{ $visitors->links('pagination::tailwind') }}
        </div>
    @endif

</div>

@endsection
