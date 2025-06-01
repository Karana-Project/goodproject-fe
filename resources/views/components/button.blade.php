@props([
  'href' => '#',
  'text' => 'Click Me',
  'color' => 'outline',
  'padding' => null, // override manual optional
  'size' => 'md',    // sm, md, lg
])

@php
    // Tentukan padding berdasarkan size jika padding tidak di-set manual
    $defaultPadding = match($size) {
        'sm' => 'py-1 px-3 text-xs',
        'md' => 'py-2 px-4 text-sm',
        'lg' => 'py-3 px-6 text-base',
        default => 'py-2 px-4 text-sm',
    };

    $finalPadding = $padding ?? $defaultPadding;

    $base = "inline-block font-medium uppercase {$finalPadding} transition";
    
    $colorClasses = match($color) {
        'primary' => 'bg-blackPrimary rounded-xl text-whitePrimary hover:bg-zinc-700',
        'text' => 'bg-transparent rounded-xl text-blackPrimary hover:underline',
        'outline' => 'bg-transparent text-whitePrimary border border-whitePrimary rounded-xl hover:bg-whitePrimary hover:text-black',
        default => 'bg-blackPrimary rounded-xl text-whitePrimary hover:bg-zinc-700',
    };
@endphp

<a href="{{ $href }}" class="{{ $base }} {{ $colorClasses }} inline-flex items-center gap-4">
    {{ $text }}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-12 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M44.25 8.25L48 12l-3.75 3.75" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M0 12H48" />
    </svg>
</a>
