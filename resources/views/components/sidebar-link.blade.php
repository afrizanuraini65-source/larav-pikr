@props(['href', 'active' => false])

<a href="{{ $href }}" class="flex items-center px-4 py-2.5 rounded-xl font-medium transition-all duration-300 group {{ $active ? 'bg-emerald-500/10 text-emerald-400 shadow-[inset_0_0_10px_rgba(16,185,129,0.1)]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
    @if(isset($icon))
    <span class="mr-3 transition-transform duration-300 {{ !$active ? 'group-hover:scale-110 group-hover:text-emerald-400' : '' }}">
        {{ $icon }}
    </span>
    @endif
    <span class="{{ !$active ? 'group-hover:translate-x-1 transition-transform duration-300' : '' }}">
        {{ $slot }}
    </span>
</a>
