<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-slate-50">
    <div class="min-h-screen flex" x-data="{ userMenuOpen: false }">
        <!-- Sidebar -->
        <aside class="w-72 bg-pikr-dark border-r border-white/5 hidden md:flex flex-col sticky top-0 h-screen shadow-2xl z-50">
            <div class="h-20 flex items-center px-6 border-b border-white/10 gap-3 bg-black/20">
                <div class="flex gap-1 items-center">
                    <img src="/images/gnre lrvel.png" alt="GenRe Logo" class="h-6 w-auto object-contain drop-shadow-md" onerror="this.src='/images/placeholder.png'" />
                    <img src="/images/smc lrvel.png" alt="SMC Logo" class="h-6 w-auto object-contain drop-shadow-md" onerror="this.src='/images/placeholder.png'" />
                    <img src="/images/pik r, lrvel.png" alt="PIK-R Logo" class="h-6 w-auto object-contain drop-shadow-md" onerror="this.src='/images/placeholder.png'" />
                </div>
                <span class="font-extrabold text-white text-lg tracking-tight drop-shadow-md">SKAKMATT</span>
            </div>
            
            <div class="flex-1 overflow-y-auto py-8 px-4 space-y-8 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none]">
                <div>
                    <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        </x-slot>
                        Dashboard
                    </x-sidebar-link>
                </div>

                @hasanyrole('ADMIN|KETUA|WAKIL_KETUA')
                <div>
                    <h3 class="px-4 text-xs font-bold text-gray-500 uppercase tracking-widest mb-3">Organisasi</h3>
                    <div class="space-y-1">
                        <x-sidebar-link :href="route('feature.pending', 'Anggota')" :active="request()->is('feature/Anggota*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg></x-slot>
                            Anggota
                        </x-sidebar-link>
                        <x-sidebar-link :href="route('feature.pending', 'Kepengurusan')" :active="request()->is('feature/Kepengurusan*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg></x-slot>
                            Kepengurusan
                        </x-sidebar-link>
                        <x-sidebar-link :href="route('feature.pending', 'Divisi')" :active="request()->is('feature/Divisi*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z"></path></svg></x-slot>
                            Divisi
                        </x-sidebar-link>
                    </div>
                </div>
                @endhasanyrole

                @hasanyrole('ADMIN|KETUA|KEGIATAN|PEMBINA')
                <div>
                    <h3 class="px-4 text-xs font-bold text-gray-500 uppercase tracking-widest mb-3">Kegiatan</h3>
                    <div class="space-y-1">
                        <x-sidebar-link :href="route('feature.pending', 'Kegiatan & Forum')" :active="request()->is('feature/Kegiatan*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg></x-slot>
                            Kegiatan & Forum
                        </x-sidebar-link>
                        <x-sidebar-link :href="route('feature.pending', 'Kalender')" :active="request()->is('feature/Kalender*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></x-slot>
                            Kalender
                        </x-sidebar-link>
                    </div>
                </div>
                @endhasanyrole

                @hasanyrole('ADMIN|KETUA|KEGIATAN')
                <div>
                    <h3 class="px-4 text-xs font-bold text-gray-500 uppercase tracking-widest mb-3">Event Management</h3>
                    <div class="space-y-1">
                        <x-sidebar-link :href="route('feature.pending', 'Manajemen Event')" :active="request()->is('feature/Manajemen Event*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg></x-slot>
                            Event
                        </x-sidebar-link>
                        <x-sidebar-link :href="route('feature.pending', 'Peserta & Presensi')" :active="request()->is('feature/Peserta*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg></x-slot>
                            Peserta & Presensi
                        </x-sidebar-link>
                        <x-sidebar-link :href="route('feature.pending', 'Daftar Ulang')" :active="request()->is('feature/Daftar Ulang*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg></x-slot>
                            Daftar Ulang
                        </x-sidebar-link>
                    </div>
                </div>
                @endhasanyrole

                @hasanyrole('ADMIN|KETUA|BENDAHARA')
                <div>
                    <h3 class="px-4 text-xs font-bold text-gray-500 uppercase tracking-widest mb-3">Keuangan & Kas</h3>
                    <div class="space-y-1">
                        <x-sidebar-link :href="route('kas.index')" :active="request()->routeIs('kas.index')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></x-slot>
                            Tagihan / Iuran
                        </x-sidebar-link>
                        <x-sidebar-link :href="route('payments.index')" :active="request()->routeIs('payments.index')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></x-slot>
                            Verifikasi Pembayaran
                        </x-sidebar-link>
                    </div>
                </div>
                @endhasanyrole

                <div>
                    <h3 class="px-4 text-xs font-bold text-gray-500 uppercase tracking-widest mb-3">Personal</h3>
                    <div class="space-y-1">
                        <x-sidebar-link :href="route('feature.pending', 'Task Board')" :active="request()->is('feature/Task Board*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg></x-slot>
                            Task Board
                        </x-sidebar-link>
                        
                        @hasrole('USER')
                        <x-sidebar-link :href="route('feature.pending', 'Tagihan Saya')" :active="request()->is('feature/Tagihan Saya*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></x-slot>
                            Tagihan Saya
                        </x-sidebar-link>
                        <x-sidebar-link :href="route('feature.pending', 'Pendaftaran Saya')" :active="request()->is('feature/Pendaftaran Saya*')">
                            <x-slot name="icon"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg></x-slot>
                            Pendaftaran Saya
                        </x-sidebar-link>
                        @endhasrole
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen w-full overflow-hidden">
            <!-- Topbar -->
            <header class="h-20 bg-white/70 backdrop-blur-xl border-b border-gray-200/50 flex items-center justify-between px-8 sticky top-0 z-40 shadow-sm">
                <div class="flex items-center">
                    <h2 class="font-extrabold text-2xl text-slate-800 tracking-tight">@yield('header')</h2>
                    @if(Auth::user()->roles->count() > 0)
                        <span class="ml-4 px-3.5 py-1.5 bg-gradient-to-r from-emerald-500 to-teal-500 text-white text-xs font-bold rounded-full shadow-md">
                            {{ Auth::user()->roles->first()->name }}
                        </span>
                    @endif
                </div>
                
                <div class="flex items-center gap-5">
                    <!-- Notifications -->
                    <button class="text-gray-400 hover:text-emerald-500 transition-colors relative group p-2 rounded-full hover:bg-gray-100">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-2 right-2 w-2.5 h-2.5 bg-red-500 border-2 border-white rounded-full"></span>
                    </button>
                    
                    <div class="relative" @click.away="userMenuOpen = false">
                        <button @click="userMenuOpen = !userMenuOpen" class="flex items-center gap-3 text-sm font-semibold text-slate-600 hover:text-slate-900 transition-colors bg-white px-4 py-2 rounded-2xl border border-gray-200 shadow-sm hover:shadow-md hover:border-emerald-300 group">
                            <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-teal-600 text-white rounded-xl flex items-center justify-center text-sm font-bold shadow-inner">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="fill-current h-4 w-4 text-gray-400 group-hover:text-emerald-500 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="userMenuOpen" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-100" style="display: none;">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile Settings</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-8 md:p-10 flex-1">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
