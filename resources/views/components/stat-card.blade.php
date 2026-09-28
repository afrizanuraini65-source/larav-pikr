@props(['title', 'value', 'color' => 'emerald'])

<div {{ $attributes->merge(['class' => 'bg-white rounded-3xl p-6 shadow-xl shadow-gray-200/50 border border-gray-100/50 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 group relative overflow-hidden']) }}>
    <div class="absolute top-0 right-0 w-32 h-32 bg-{{ $color }}-500/5 rounded-bl-full -mr-16 -mt-16 transition-transform duration-500 group-hover:scale-110"></div>
    <div class="flex justify-between items-start relative z-10">
        <div>
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">{{ $title }}</p>
            <h3 class="text-4xl font-extrabold text-slate-800 tracking-tight group-hover:text-emerald-600 transition-colors">{{ $value }}</h3>
        </div>
        <div class="w-12 h-12 bg-{{ $color }}-50 text-{{ $color }}-600 rounded-2xl flex items-center justify-center shadow-inner group-hover:bg-{{ $color }}-500 group-hover:text-white transition-colors duration-300">
            {{ $icon ?? '' }}
        </div>
    </div>
</div>
