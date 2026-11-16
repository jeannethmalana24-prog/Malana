@props(['type' => 'info', 'message'])

<div {{ $attributes->merge(['class' => "alert theme-$type"]) }} role="alert">
    {{ $slot }}
</div>