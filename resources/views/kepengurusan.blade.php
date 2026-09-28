@extends('layouts.public')

@section('title', 'Struktur Kepengurusan - PIK-R SKAKMATT')

@section('content')
<!-- Antigrvty Wrapper -->
<div class="relative bg-pikr-background min-h-screen overflow-hidden font-sans pb-32">
    <!-- Cosmic Nebula Background & Holographic Dust -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] bg-teal-900/30 blur-[120px] rounded-full mix-blend-screen opacity-60"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[60vw] h-[60vw] bg-emerald-900/30 blur-[150px] rounded-full mix-blend-screen opacity-50"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80vw] h-[80vw] bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-20 animate-[spin_240s_linear_infinite]"></div>
        
        <!-- Technical Blueprints / Schematics (subtle lines) -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:100px_100px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_20%,transparent_100%)] opacity-30"></div>
    </div>

    <!-- Page Hero Header -->
    <section class="relative pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center px-6 py-2 mb-8 rounded-full bg-gradient-to-r from-slate-800 to-slate-700 border border-slate-600/50 shadow-[0_0_15px_rgba(250,204,21,0.15)] backdrop-blur-md">
                <span class="text-sm font-semibold text-pikr-accent uppercase tracking-[0.2em]">Periode 2025/2026</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight drop-shadow-[0_0_25px_rgba(255,255,255,0.2)]">
                Struktur Organisasi
            </h1>
            <p class="text-lg md:text-xl text-teal-100/60 max-w-3xl mx-auto leading-relaxed font-light tracking-wide">
                Mengenal lebih dekat para penggerak PIK-R SKAKMATT SMK Negeri 1 Purwokerto yang elegan dan profesional.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-32 relative z-10">
        
        <!-- Pembina & Pelatih -->
        <div class="relative [perspective:1000px]">
            <!-- Floating Title -->
            <h2 class="text-2xl md:text-3xl font-bold text-white tracking-[0.15em] text-center mb-16 flex items-center justify-center gap-6 animate-[pulse_4s_ease-in-out_infinite]">
                <span class="h-[1px] w-24 bg-gradient-to-r from-transparent via-teal-500 to-transparent"></span>
                PEMBINA & PELATIH
                <span class="h-[1px] w-24 bg-gradient-to-r from-transparent via-teal-500 to-transparent"></span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-16 max-w-4xl mx-auto">
                <div class="transform-gpu md:[transform:perspective(1000px)_rotateY(5deg)_rotateX(2deg)] hover:[transform:perspective(1000px)_rotateY(0deg)_rotateX(0deg)] transition-transform duration-700">
                    <x-profile-card role="Pembina" level="primary" :members="[
                        ['name' => 'Ibu Hayu Almaratus', 'jabatan' => 'Pembina', 'label' => 'Foto Utama', 'photo' => '/images/pembina.jpeg']
                    ]" />
                </div>
                <div class="transform-gpu md:[transform:perspective(1000px)_rotateY(-5deg)_rotateX(2deg)_translateZ(-20px)] hover:[transform:perspective(1000px)_rotateY(0deg)_rotateX(0deg)_translateZ(0px)] transition-transform duration-700">
                    <x-profile-card role="Pelatih" level="primary" :members="[
                        ['name' => 'Nabila', 'jabatan' => 'Pelatih', 'label' => 'Foto Utama', 'photo' => '/images/pelatih.jpeg']
                    ]" />
                </div>
            </div>
        </div>

        <!-- Pengurus Inti -->
        <div>
            <!-- Floating Title with Yellow Bars -->
            <h2 class="text-2xl md:text-3xl font-bold text-white tracking-[0.15em] text-center mb-16 flex items-center justify-center gap-6 animate-[translate-y-1_3s_ease-in-out_infinite_alternate]">
                <span class="h-[2px] w-20 bg-gradient-to-r from-transparent to-pikr-accent shadow-[0_0_10px_rgba(52,211,153,0.5)]"></span>
                PENGURUS INTI
                <span class="h-[2px] w-20 bg-gradient-to-l from-transparent to-pikr-accent shadow-[0_0_10px_rgba(52,211,153,0.5)]"></span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12 max-w-6xl mx-auto">
                <x-profile-card role="Ketua" level="secondary" :members="[
                    ['name' => 'Afaf', 'jabatan' => 'Ketua', 'label' => 'Foto Utama', 'photo' => '/images/ketua.jpeg']
                ]" />
                <x-profile-card role="Wakil Ketua" level="secondary" :members="[
                    ['name' => 'Florisa', 'jabatan' => 'Wakil Ketua', 'label' => 'Foto Utama', 'photo' => '/images/wakil.jpeg']
                ]" />
                <x-profile-card role="Sekretaris 1" level="secondary" :members="[
                    ['name' => 'Shayla', 'jabatan' => 'Sekretaris 1', 'label' => 'Foto Utama', 'photo' => '/images/shayla.jpeg']
                ]" />
                <x-profile-card role="Sekretaris 2" level="secondary" :members="[
                    ['name' => 'Zalfa', 'jabatan' => 'Sekretaris 2', 'label' => 'Foto Utama', 'photo' => '/images/zalfa.jpeg']
                ]" />
                <x-profile-card role="Bendahara 1" level="secondary" :members="[
                    ['name' => 'Alya', 'jabatan' => 'Bendahara 1', 'label' => 'Foto Utama', 'photo' => '/images/alya.jpeg']
                ]" />
                <x-profile-card role="Bendahara 2" level="secondary" :members="[
                    ['name' => 'Fadila', 'jabatan' => 'Bendahara 2', 'label' => 'Foto Utama', 'photo' => '/images/fadila.jpeg']
                ]" />
            </div>
        </div>

        <!-- Divisi Organisasi -->
        <div>
            <h2 class="text-2xl md:text-3xl font-bold text-white tracking-[0.15em] text-center mb-16 flex items-center justify-center gap-6 animate-[pulse_5s_ease-in-out_infinite]">
                <span class="h-[1px] w-24 bg-gradient-to-r from-transparent via-teal-500 to-transparent"></span>
                DIVISI ORGANISASI
                <span class="h-[1px] w-24 bg-gradient-to-r from-transparent via-teal-500 to-transparent"></span>
            </h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12 max-w-7xl mx-auto">
                <x-profile-card role="Divisi Kegiatan" level="secondary" :members="[
                    ['name' => 'Salsa, Anggun, Fatwa, Queen, Desi, Alifah, Livina, Nadisa, Luthfiana, Zasqia, Hasna, Nafiza, Shamita & Naydhira', 'jabatan' => 'Semua Anggota', 'label' => 'Foto Bersama', 'photo' => '/images/Divisi Kegiatan.jpeg'],
                    ['name' => 'Koor & Sekre Kegiatan', 'jabatan' => 'Koor & Sekre', 'label' => 'Foto Koor & Sekre', 'photo' => '/images/Koor Divisi Kegiatan.jpeg']
                ]" />
                <x-profile-card role="Divisi Hubungan Masyarakat" level="secondary" :members="[
                    ['name' => 'Sekar, Fadila, Shafa, Dwiana, Nathania, Rifa, Umnia, Indah, Risma, Amel, Rizka, Adel', 'jabatan' => 'Semua Anggota', 'label' => 'Foto Bersama', 'photo' => '/images/Divisi Hubungan Masyarakat.jpeg'],
                    ['name' => 'Koor & Sekre Humas', 'jabatan' => 'Koor & Sekre', 'label' => 'Foto Koor & Sekre', 'photo' => '/images/Koor Divisi Hubungan Masyarakat.jpeg']
                ]" />
                <x-profile-card role="Divisi Publikasi Dokumentasi & Desain" level="secondary" :members="[
                    ['name' => 'Umar, \'Aqiilah, Safa, Ria, Reizelda, Adila, Afriza, Reva, Bana, Putri & Amira', 'jabatan' => 'Semua Anggota', 'label' => 'Foto Bersama', 'photo' => '/images/Divisi Publikasi Dokumentasi & Desain.jpeg'],
                    ['name' => 'Koor & Sekre PDD', 'jabatan' => 'Koor & Sekre', 'label' => 'Foto Koor & Sekre', 'photo' => '/images/Koor Divisi Publikasi Dokumentasi & Desain.jpeg']
                ]" />
                
                <div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto w-full mt-4">
                    <x-profile-card role="Divisi Prakarya dan Kewirausahaan" level="secondary" :members="[
                        ['name' => 'Rovikoh, Syarifah, Aisyah, Salsabila, Dini, Lutviana, Arghya, Farraza, Aurel & Irma', 'jabatan' => 'Semua Anggota', 'label' => 'Foto Bersama', 'photo' => '/images/Divisi Prakarya dan Kewirausahaan.jpeg'],
                        ['name' => 'Koor & Sekre PKWU', 'jabatan' => 'Koor & Sekre', 'label' => 'Foto Koor & Sekre', 'photo' => '/images/Koor Divisi Prakarya dan Kewirausahaan.jpeg']
                    ]" />
                    <x-profile-card role="Divisi Konselor Sebaya" level="secondary" :members="[
                        ['name' => 'Paaza, Benaya, Nazarli, Airin, Zainatul', 'jabatan' => 'Semua Anggota', 'label' => 'Foto Bersama', 'photo' => '/images/Divisi Konselor Sebaya.jpeg'],
                        ['name' => 'Koor & Sekre Konselor', 'jabatan' => 'Koor & Sekre', 'label' => 'Foto Koor & Sekre', 'photo' => '/images/Koor Divisi Konselor Sebaya.jpeg']
                    ]" />
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
