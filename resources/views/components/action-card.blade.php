@props(['href', 'title', 'description'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'group bg-white rounded-3xl p-6 shadow-xl shadow-gray-200/50 border border-gray-100/50 hover:shadow-2xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 flex flex-col items-center text-center']) }}>
    <div class="w-16 h-16 bg-gray-50 group-hover:bg-emerald-50 text-gray-400 group-hover:text-emerald-500 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
        {{ $icon ?? '' }}
    </div>
    <h4 class="font-bold text-slate-800 mb-2 group-hover:text-emerald-600 transition-colors">{{ $title }}</h4>
    <p class="text-sm text-gray-500">{{ $description }}</p>
</a>
