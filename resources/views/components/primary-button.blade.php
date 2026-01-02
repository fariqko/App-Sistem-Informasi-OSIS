@props(['icon' => null])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 px-4 rounded-lg font-bold hover:from-blue-700 hover:to-blue-800 transition duration-300 shadow-lg']) }}>
    
    @if($icon)
    <i class="{{ $icon }}"></i>
    @endif

    {{ $slot }}
</button>