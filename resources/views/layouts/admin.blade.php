<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') · OPEN10 Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { accent: '#e11d48' },
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html, body { height: 100%; overflow: hidden; font-family: 'Inter', system-ui, sans-serif; -webkit-font-smoothing: antialiased; }
        #shell { display: flex; height: 100vh; overflow: hidden; background: #f1f5f9; }
        #sidebar { width: 256px; flex-shrink: 0; height: 100%; display: flex; flex-direction: column; overflow: hidden; background: linear-gradient(180deg,#0c1424 0%,#101e36 60%,#0f172a 100%); border-right: 1px solid rgba(255,255,255,0.05); z-index: 50; transition: transform 0.3s cubic-bezier(0.4,0,0.2,1); }
        #main-area { flex: 1; min-width: 0; display: flex; flex-direction: column; height: 100%; overflow: hidden; }
        #page-content { flex: 1; min-height: 0; overflow-y: auto; }
        #backdrop { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.55); z-index: 40; backdrop-filter: blur(3px); }
        #backdrop.show { display: block; }
        @media (max-width: 1023px) {
            #sidebar { position: fixed; top: 0; left: 0; bottom: 0; transform: translateX(-100%); }
            #sidebar.open { transform: translateX(0); box-shadow: 4px 0 32px rgba(0,0,0,0.4); }
            #hamburger { display: flex !important; }
        }
        @media (min-width: 1024px) { #hamburger { display: none !important; } }
        ::-webkit-scrollbar { width: 5px; height: 5px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 99px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }        @keyframes heartbeat { 0%, 100% { transform: scale(1); } 25% { transform: scale(1.15); } 50% { transform: scale(1); } }        .nav-item { display: flex; align-items: center; gap: 10px; padding: 9px 12px 9px 14px; border-radius: 8px; text-decoration: none; font-size: 13px; font-weight: 500; color: #64748b; border-left: 3px solid transparent; margin-bottom: 2px; transition: background 0.15s, color 0.15s; }
        .nav-item:hover { background: rgba(255,255,255,0.07); color: #e2e8f0; }
        .nav-item.active { background: rgba(225,29,72,0.15); color: #fca5a5; border-left-color: #e11d48; font-weight: 600; }
    </style>
</head>
<body>

<div id="shell">

    <!-- ===== SIDEBAR ===== -->
    <aside id="sidebar">

        <!-- Brand -->
        <div style="padding:20px 20px 16px; border-bottom:1px solid rgba(255,255,255,0.07); flex-shrink:0;">
            <div style="display:flex; align-items:center; gap:12px;">
                <div style="
                    width:36px; height:36px; border-radius:10px; flex-shrink:0;
                    background:linear-gradient(135deg,#e11d48,#be123c);
                    display:flex; align-items:center; justify-content:center;
                    box-shadow:0 4px 12px rgba(225,29,72,0.4);
                ">
                    <svg width="18" height="18" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div>
                    <div style="color:white; font-size:15px; font-weight:700; letter-spacing:-0.3px; line-height:1.2;">OPEN10</div>
                    <div style="color:#64748b; font-size:11px; font-weight:500; letter-spacing:0.3px; margin-top:1px;">Admin Panel</div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav style="flex:1; min-height:0; overflow-y:auto; padding:14px 10px; display:flex; flex-direction:column;">

            <div style="padding:2px 12px 8px;">
                <span style="font-size:10px; font-weight:700; color:#2d4060; letter-spacing:1px; text-transform:uppercase;">Overview</span>
            </div>

@php
    $navItems = [
        ['route' => 'admin.contacts.index', 'match' => 'admin.contacts*', 'label' => 'Contact Submissions', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>'],
        ['route' => 'admin.subscribers.index', 'match' => 'admin.subscribers*', 'label' => 'Subscribers', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>'],
        ['route' => 'admin.visitors.index', 'match' => 'admin.visitors*', 'label' => 'Visitor Analytics', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>'],
    ];
@endphp

            @foreach($navItems as $item)
            @php $active = request()->routeIs($item['match']); @endphp
            <a href="{{ route($item['route']) }}" class="nav-item {{ $active ? 'active' : '' }}">
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" style="flex-shrink:0;">{!! $item['icon'] !!}</svg>
                <span style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{ $item['label'] }}</span>
            </a>
            @endforeach

            <div style="margin:14px 0 10px; border-top:1px solid rgba(255,255,255,0.05);"></div>
            <div style="padding:2px 12px 8px;">
                <span style="font-size:10px; font-weight:700; color:#2d4060; letter-spacing:1px; text-transform:uppercase;">Site</span>
            </div>
            <a href="{{ url('/') }}" target="_blank" class="nav-item">
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" style="flex-shrink:0;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                <span>View Website</span>
            </a>
        </nav>

        <!-- User / Logout -->
        <div style="padding:12px; border-top:1px solid rgba(255,255,255,0.07); flex-shrink:0;">
            <div style="display:flex; align-items:center; gap:10px; padding:8px 10px; border-radius:8px; background:rgba(255,255,255,0.04);">
                <div style="
                    width:32px; height:32px; border-radius:8px; flex-shrink:0;
                    background:linear-gradient(135deg,#334155,#1e293b);
                    display:flex; align-items:center; justify-content:center;
                    border:1px solid rgba(255,255,255,0.1);
                ">
                    <svg width="15" height="15" fill="none" stroke="#94a3b8" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <div style="flex:1; min-width:0;">
                    <div style="color:#e2e8f0; font-size:12.5px; font-weight:600; line-height:1.3;">Administrator</div>
                    <div style="color:#475569; font-size:11px; font-weight:400; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">admin@open10.dev</div>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" title="Logout" style="
                        background:none; border:none; cursor:pointer; padding:6px;
                        border-radius:6px; color:#475569; display:flex; align-items:center;
                        transition:all 0.15s;
                    " onmouseover="this.style.background='rgba(225,29,72,0.15)';this.style.color='#fda4af';"
                       onmouseout="this.style.background='none';this.style.color='#475569';">
                        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Mobile backdrop -->
    <div id="backdrop" onclick="closeSidebar()"></div>

    <!-- ===== MAIN AREA ===== -->
    <div id="main-area">

        <!-- Top Bar -->
        <header style="height:60px; flex-shrink:0; background:white; border-bottom:1px solid #e2e8f0; display:flex; align-items:center; padding:0 24px; gap:12px; box-shadow:0 1px 0 #f1f5f9;">
            <button id="hamburger" onclick="openSidebar()" style="display:none; align-items:center; justify-content:center; width:36px; height:36px; border-radius:8px; border:1px solid #e2e8f0; background:white; cursor:pointer; color:#64748b; flex-shrink:0; transition:all 0.15s;"
                onmouseover="this.style.background='#f8fafc';"
                onmouseout="this.style.background='white';">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Breadcrumb / page title -->
            <div style="flex:1; min-width:0;">
                <div style="display:flex; align-items:center; gap:8px;">
                    <span style="font-size:12px; color:#94a3b8; font-weight:500;">OPEN10</span>
                    <svg width="12" height="12" fill="none" stroke="#cbd5e1" stroke-width="2" viewBox="0 0 24 24" style="flex-shrink:0;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                    <span style="font-size:13px; color:#1e293b; font-weight:600;">@yield('page-title', 'Dashboard')</span>
                </div>
                @hasSection('breadcrumb')
                    <div style="font-size:12px; color:#94a3b8; font-weight:400; margin-top:2px;">@yield('breadcrumb')</div>
                @endif
            </div>

            <!-- Right: status badge -->
            <div style="display:flex; align-items:center; gap:8px;">
                <div style="
                    display:flex; align-items:center; gap:7px;
                    padding:6px 12px; border-radius:20px;
                    background:#f0fdf4; border:1px solid #bbf7d0;
                ">
                    <span style="width:7px; height:7px; border-radius:50%; background:#22c55e; display:inline-block; box-shadow:0 0 0 2px rgba(34,197,94,0.2);"></span>
                    <span style="font-size:12px; font-weight:600; color:#15803d;">Admin</span>
                </div>
            </div>
        </header>

        <!-- Flash Messages (only rendered when present) -->
        @if(session('success') || session('error'))
        <div style="padding:14px 24px 0; flex-shrink:0;">
            @if(session('success'))
                <div style="
                    background:#f0fdf4; border:1px solid #bbf7d0; border-radius:10px;
                    padding:11px 14px; display:flex; align-items:center; gap:10px;
                    color:#15803d; font-size:13px; font-weight:500;
                ">
                    <svg width="15" height="15" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" style="flex-shrink:0;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div style="
                    background:#fff1f2; border:1px solid #fecdd3; border-radius:10px;
                    padding:11px 14px; display:flex; align-items:center; gap:10px;
                    color:#be123c; font-size:13px; font-weight:500;
                ">
                    <svg width="15" height="15" fill="none" stroke="#e11d48" stroke-width="2.5" viewBox="0 0 24 24" style="flex-shrink:0;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ session('error') }}
                </div>
            @endif
        </div>
        @endif

        <!-- Page content: only this scrolls -->
        <div id="page-content">
            <div style="padding:24px;">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <footer style="flex-shrink:0; background:#1a1a1a; border-top:2px solid rgba(225,29,72,0.3); padding:12px 24px;">
            <div style="display:flex; flex-direction:row; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
                <div style="font-size:12px; color:#6b7280;">
                    &copy; {{ date('Y') }} OPEN10. All rights reserved.
                </div>
                <div style="font-size:13px; color:#d1d5db; font-weight:500;">
                    Developed with <span style="color:#e11d48; display:inline-block; animation:heartbeat 1.5s ease-in-out infinite;">❤</span>
                    by <a href="https://open10.dev" target="_blank" rel="noopener" style="color:#d1d5db; text-decoration:none; transition:color 0.2s;"
                          onmouseover="this.style.color='#e11d48';" onmouseout="this.style.color='#d1d5db';">OPEN10</a>
                </div>
            </div>
        </footer>

    </div>
</div>

<script>
    function openSidebar() {
        document.getElementById('sidebar').classList.add('open');
        document.getElementById('backdrop').classList.add('show');
    }
    function closeSidebar() {
        document.getElementById('sidebar').classList.remove('open');
        document.getElementById('backdrop').classList.remove('show');
    }
    document.addEventListener('keydown', function(e) { if (e.key === 'Escape') closeSidebar(); });
</script>

@yield('scripts')
</body>
</html>
