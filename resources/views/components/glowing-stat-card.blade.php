@props(['title', 'value', 'subtitle' => null, 'gradient' => 'from-emerald-600 to-teal-500'])

<div {{ $attributes->merge(['class' => 'rounded-3xl p-6 relative overflow-hidden group hover:-translate-y-1 transition-all duration-300 shadow-2xl shadow-emerald-900/20']) }}>
    <div class="absolute inset-0 bg-gradient-to-br {{ $gradient }} opacity-100"></div>
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10 mix-blend-overlay"></div>
    <div class="absolute -top-24 -right-24 w-48 h-48 bg-white/10 blur-2xl rounded-full group-hover:scale-150 transition-transform duration-700"></div>
    
    <div class="relative z-10 flex flex-col h-full justify-between">
        <div class="flex justify-between items-start mb-4">
            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white shadow-inner">
                {{ $icon ?? '' }}
            </div>
            @if($subtitle)
                <span class="text-xs font-semibold text-emerald-100 bg-white/10 px-3 py-1 rounded-full backdrop-blur-sm border border-white/10">{{ $subtitle }}</span>
            @endif
        </div>
        <div>
            <p class="text-sm font-medium text-emerald-50 mb-1">{{ $title }}</p>
            <h3 class="text-3xl font-extrabold text-white tracking-tight">{{ $value }}</h3>
        </div>
    </div>
</div>
