@props(['messages'])

@if ($messages)
<div {{ $attributes->merge(['class' => 'mt-2 text-sm text-red-600 flex items-center gap-1']) }}>
    <i class="fas fa-exclamation-circle"></i>
    @foreach((array) $messages as $message)
    <span>{{ $message }}</span>
    @endforeach
</div>
@endif