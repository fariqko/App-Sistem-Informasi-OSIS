@props([
'value' => null,
'icon' => null,
])

<label
    {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700 mb-2']) }}>

    @if($icon)
    <i class="{{ $icon }} text-blue-600"></i>
    @endif

    {{ $value ?? $slot }}
</label>